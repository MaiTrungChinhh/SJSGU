{**
 * templates/frontend/pages/userRegister.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * User registration form.
 *
 * @uses $primaryLocale string The primary locale for this journal/press
 *}
{include file="frontend/components/header.tpl" pageTitle="user.register"}

<div class="page page_register">
    {include file="frontend/components/breadcrumbs.tpl" currentTitleKey="user.register"}

    <div class="register-container">
        <div class="register-card">
            <div class="register-image-container">
                <img class="register-image" src="{$baseUrl}/plugins/themes/sgu-theme/images/sgu_background.jpg"
                    alt="Registration Illustration">
                <div class="register-overlay">
                    <div class="register-overlay-content">
                        <h2>{translate key="user.register"}</h2>
                        <p>{translate key="user.register.welcomeMessage"}</p>
                    </div>
                </div>
            </div>

            <div class="register-form-container">
                <div class="register-form-header">
                    <h1>{translate key="user.register"}</h1>
                    <p class="register-subtitle">{translate key="user.register.createAccount"}</p>
                    <p class="required-note"><span class="required">*</span> {translate key="common.requiredField"}</p>
                </div>

                <form class="register-form" id="register" method="post" action="{url op="register"}">
                    {csrf}

                    {if $source}
                        <input type="hidden" name="source" value="{$source|escape}" />
                    {/if}

                    {include file="common/formErrors.tpl"}

                    <div class="form-content">
                        {* Registration form fields *}
                        <div class="form-section">
                            {* <h3 class="form-section-title">{translate key="user.profile"}</h3> *}
                            {include file="frontend/components/registrationForm.tpl"}
                        </div>

                        {* When a user is registering with a specific journal *}
                        {if $currentContext}
                            <div class="form-section">
                                <h3 class="form-section-title">{translate key="user.register.privacyConsent"}</h3>

                                {if $currentContext->getData('privacyStatement')}
                                    <div class="form-group checkbox-group">
                                        <label for="privacyConsent" class="checkbox-label">
                                            <input type="checkbox" name="privacyConsent" id="privacyConsent" value="1"
                                                {if $privacyConsent} checked="checked" {/if}>
                                            <span class="checkbox-text">
                                                {capture assign="privacyUrl"}{url router=$smarty.const.ROUTE_PAGE page="about" op="privacy"}{/capture}
                                                {translate key="user.register.form.privacyConsent" privacyUrl=$privacyUrl}
                                            </span>
                                        </label>
                                    </div>
                                {/if}

                                <div class="form-group checkbox-group">
                                    <label for="emailConsent" class="checkbox-label">
                                        <input type="checkbox" name="emailConsent" id="emailConsent" value="1"
                                            {if $emailConsent} checked="checked" {/if}>
                                        <span class="checkbox-text">
                                            {translate key="user.register.form.emailConsent"}
                                        </span>
                                    </label>
                                </div>
                            </div>

                            {* Allow the user to sign up as a reviewer *}
                            {assign var=contextId value=$currentContext->getId()}
                            {assign var=userCanRegisterReviewer value=0}
                            {foreach from=$reviewerUserGroups[$contextId] item=userGroup}
                                {if $userGroup->getPermitSelfRegistration()}
                                    {assign var=userCanRegisterReviewer value=$userCanRegisterReviewer+1}
                                {/if}
                            {/foreach}

                            {if $userCanRegisterReviewer}
                                <div class="form-section">
                                    <h3 class="form-section-title">{translate key="user.reviewerPrompt"}</h3>

                                    {if $userCanRegisterReviewer > 1}
                                        {capture assign="checkboxLocaleKey"}user.reviewerPrompt.userGroup{/capture}
                                    {else}
                                        {capture assign="checkboxLocaleKey"}user.reviewerPrompt.optin{/capture}
                                    {/if}

                                    <div id="reviewerOptinGroup" class="reviewer-options">
                                        {foreach from=$reviewerUserGroups[$contextId] item=userGroup}
                                            {if $userGroup->getPermitSelfRegistration()}
                                                <div class="form-group checkbox-group">
                                                    <label class="checkbox-label">
                                                        {assign var="userGroupId" value=$userGroup->getId()}
                                                        <input type="checkbox" name="reviewerGroup[{$userGroupId}]" value="1"
                                                            {if in_array($userGroupId, $userGroupIds)} checked="checked" {/if}>
                                                        <span class="checkbox-text">
                                                            {translate key=$checkboxLocaleKey userGroup=$userGroup->getLocalizedName()}
                                                        </span>
                                                    </label>
                                                </div>
                                            {/if}
                                        {/foreach}
                                    </div>

                                    <div class="form-group">
                                        <label for="interests">
                                            <span>{translate key="user.interests"}</span>
                                        </label>
                                        <input type="text" name="interests" id="interests"
                                            value="{$interests|default:""|escape}" class="form-control">
                                        <small
                                            class="form-text text-muted">{translate key="user.register.form.interests"}</small>
                                    </div>
                                </div>
                            {/if}
                        {/if}

                        {include file="frontend/components/registrationFormContexts.tpl"}

                        {* When a user is registering for no specific journal, allow them to enter their reviewer interests *}
                        {if !$currentContext}
                            <div class="form-section">
                                <h3 class="form-section-title">{translate key="user.register.noContextReviewerInterests"}
                                </h3>

                                <div class="form-group">
                                    <label for="interests">
                                        <span>{translate key="user.interests"}</span>
                                    </label>
                                    <input type="text" name="interests" id="interests"
                                        value="{$interests|default:""|escape}" class="form-control">
                                </div>

                                {* Require the user to agree to the terms of the privacy policy *}
                                {if $siteWidePrivacyStatement}
                                    <div class="form-group checkbox-group">
                                        <label for="privacyConsent[{$smarty.const.CONTEXT_ID_NONE}]" class="checkbox-label">
                                            <input type="checkbox" name="privacyConsent[{$smarty.const.CONTEXT_ID_NONE}]"
                                                id="privacyConsent[{$smarty.const.CONTEXT_ID_NONE}]" value="1"
                                                {if $privacyConsent[$smarty.const.CONTEXT_ID_NONE]} checked="checked" {/if}>
                                            <span class="checkbox-text">
                                                {capture assign="privacyUrl"}{url router=$smarty.const.ROUTE_PAGE page="about" op="privacy"}{/capture}
                                                {translate key="user.register.form.privacyConsent" privacyUrl=$privacyUrl}
                                            </span>
                                        </label>
                                    </div>
                                {/if}

                                <div class="form-group checkbox-group">
                                    <label for="emailConsent" class="checkbox-label">
                                        <input type="checkbox" name="emailConsent" id="emailConsent" value="1"
                                            {if $emailConsent} checked="checked" {/if}>
                                        <span class="checkbox-text">
                                            {translate key="user.register.form.emailConsent"}
                                        </span>
                                    </label>
                                </div>
                            </div>
                        {/if}

                        {* recaptcha spam blocker *}
                        {if $reCaptchaHtml}
                            <div class="form-section recaptcha-section">
                                <div class="recaptcha-wrapper">
                                    {$reCaptchaHtml}
                                </div>
                            </div>
                        {/if}
                    </div>

                    <div class="form-actions">
                        <button id="register-button" class="submit-button" type="submit">
                            <i class="fas fa-user-plus"></i>
                            <span>{translate key="user.register"}</span>
                        </button>

                        <div class="login-link-container">
                            <span>{translate key="user.register.alreadyHaveAccount"}</span>
                            {capture assign="loginUrl"}{url page="login" source=$rolesProfileUrl}{/capture}
                            <a href="{$loginUrl}" class="login-link">
                                {translate key="user.login"}
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{include file="frontend/components/footer.tpl"}