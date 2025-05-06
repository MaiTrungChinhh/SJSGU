{**
 * templates/frontend/pages/submissions.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Display the page to view the editorial team.
 *
 * @uses $currentContext Journal|Press The current journal or press
 * @uses $submissionChecklist array List of requirements for submissions
 *}
{include file="frontend/components/header.tpl" pageTitle="about.submissions"}

<div class="page page_submissions">
    {include file="frontend/components/breadcrumbs.tpl" currentTitleKey="about.submissions"}

    <div class="submissions-container">
        <div class="submissions-header">
            <h1>{translate key="about.submissions"}</h1>
            <div class="submissions-description">
                <p>{translate key="about.submissions.description"}</p>
            </div>
        </div>

        <div class="submissions-card submission-status">
            <div class="card-icon">
                <i class="fas fa-paper-plane"></i>
            </div>
            <div class="card-content">
                <h2>{translate key="about.onlineSubmissions"}</h2>

                {if $sections|@count == 0 || $currentContext->getData('disableSubmissions')}
                    <div class="submission-alert submission-alert-warning">
                        <i class="fas fa-exclamation-triangle"></i>
                        <span>{translate key="author.submit.notAccepting"}</span>
                    </div>
                {else}
                    {if $isUserLoggedIn}
                        <div class="submission-actions">
                            <a href="{url page="submission" op="wizard"}" class="action-button primary-action">
                                <i class="fas fa-plus-circle"></i>
                                {translate key="about.onlineSubmissions.newSubmission"}
                            </a>
                            <a href="{url page="submissions"}" class="action-button secondary-action">
                                <i class="fas fa-list"></i>
                                {translate key="about.onlineSubmissions.viewSubmissions"}
                            </a>
                        </div>
                        <p class="submission-info">{translate key="about.onlineSubmissions.submissionActions.description"}</p>
                    {else}
                        <div class="submission-alert submission-alert-info">
                            <i class="fas fa-info-circle"></i>
                            <span>
                                {capture assign="login"}<a href="{url page="login"}"
                                    class="login-link">{translate key="about.onlineSubmissions.login"}</a>{/capture}
                                {capture assign="register"}<a href="{url page="user" op="register"}"
                                    class="register-link">{translate key="about.onlineSubmissions.register"}</a>{/capture}
                                {translate key="about.onlineSubmissions.registrationRequired" login=$login register=$register}
                            </span>
                        </div>
                    {/if}
                {/if}
            </div>
        </div>

        {if $submissionChecklist}
            <div class="submissions-card submission-checklist">
                <div class="card-icon">
                    <i class="fas fa-tasks"></i>
                </div>
                <div class="card-content">
                    <h2>
                        {translate key="about.submissionPreparationChecklist"}
                        {include file="frontend/components/editLink.tpl" page="management" op="settings" path="workflow" anchor="submission/submissionChecklist" sectionTitleKey="about.submissionPreparationChecklist"}
                    </h2>
                    <p class="checklist-description">{translate key="about.submissionPreparationChecklist.description"}</p>

                    <ul class="checklist-items">
                        {foreach from=$submissionChecklist item=checklistItem}
                            <li>
                                <div class="checklist-icon">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div class="checklist-text">
                                    {$checklistItem.content|nl2br}
                                </div>
                            </li>
                        {/foreach}
                    </ul>
                </div>
            </div>
        {/if}

        {if $currentContext->getLocalizedData('authorGuidelines')}
            <div class="submissions-card author-guidelines" id="authorGuidelines">
                <div class="card-icon">
                    <i class="fas fa-book"></i>
                </div>
                <div class="card-content">
                    <h2>
                        {translate key="about.authorGuidelines"}
                        {include file="frontend/components/editLink.tpl" page="management" op="settings" path="workflow" anchor="submission/authorGuidelines" sectionTitleKey="about.authorGuidelines"}
                    </h2>
                    <div class="guidelines-content">
                        {$currentContext->getLocalizedData('authorGuidelines')}
                    </div>
                </div>
            </div>
        {/if}

        {if $sections && count($sections) > 0}
            <div class="submissions-card section-policies">
                <div class="card-icon">
                    <i class="fas fa-bookmark"></i>
                </div>
                <div class="card-content">
                    <h2>{translate key="section.sections"}</h2>

                    <div class="section-list">
                        {foreach from=$sections item="section"}
                            {if $section->getLocalizedPolicy()}
                                <div class="section-item">
                                    <h3>{$section->getLocalizedTitle()|escape}</h3>
                                    <div class="section-policy">
                                        {$section->getLocalizedPolicy()}
                                    </div>
                                    {if $isUserLoggedIn}
                                        <div class="section-submit">
                                            <a href="{url page="submission" op="wizard" sectionId=$section->getId()}"
                                                class="section-submit-link">
                                                <i class="fas fa-arrow-right"></i>
                                                {translate key="about.onlineSubmissions.submitToSection" name=$section->getLocalizedTitle()|escape}
                                            </a>
                                        </div>
                                    {/if}
                                </div>
                            {/if}
                        {/foreach}
                    </div>
                </div>
            </div>
        {/if}

        {if $currentContext->getLocalizedData('copyrightNotice')}
            <div class="submissions-card copyright-notice">
                <div class="card-icon">
                    <i class="fas fa-copyright"></i>
                </div>
                <div class="card-content">
                    <h2>
                        {translate key="about.copyrightNotice"}
                        {include file="frontend/components/editLink.tpl" page="management" op="settings" path="workflow" anchor="submission/authorGuidelines" sectionTitleKey="about.copyrightNotice"}
                    </h2>
                    <div class="copyright-content">
                        {$currentContext->getLocalizedData('copyrightNotice')}
                    </div>
                </div>
            </div>
        {/if}

        {if $currentContext->getLocalizedData('privacyStatement')}
            <div class="submissions-card privacy-statement" id="privacyStatement">
                <div class="card-icon">
                    <i class="fas fa-user-shield"></i>
                </div>
                <div class="card-content">
                    <h2>
                        {translate key="about.privacyStatement"}
                        {include file="frontend/components/editLink.tpl" page="management" op="settings" path="website" anchor="setup/privacy" sectionTitleKey="about.privacyStatement"}
                    </h2>
                    <div class="privacy-content">
                        {$currentContext->getLocalizedData('privacyStatement')}
                    </div>
                </div>
            </div>
        {/if}
    </div>
</div>

{include file="frontend/components/footer.tpl"}