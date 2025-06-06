{**
 * templates/frontend/pages/userLostPassword.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2000-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Password reset form.
 *
 *}
{include file="frontend/components/header.tpl" pageTitle="user.login.resetPassword"}

<div class="page page_lost_password">
    {include file="frontend/components/breadcrumbs.tpl" currentTitleKey="user.login.resetPassword"}

    <div class="reset-container">
        <div class="reset-card">
            <div class="reset-image-container">
                <img class="reset-image" src="{$baseUrl}/plugins/themes/sgu-theme/images/sgu_background.jpg"
                    alt="Reset Password Illustration">
                <div class="reset-overlay">
                    <div class="reset-overlay-content">
                        <h2>{translate key="user.login.resetPassword"}</h2>
                        <p>{translate key="user.login.resetPasswordInstructions"}</p>
                    </div>
                </div>
            </div>

            <div class="reset-form-container">
                <div class="reset-form-header">
                    <div class="reset-icon">
                        <i class="fas fa-lock"></i>
                    </div>
                    <h1>{translate key="user.login.resetPassword"}</h1>
                    <p class="reset-subtitle">{translate key="user.login.resetPasswordInstructions"}</p>
                </div>

                {if $error}
                    <div class="reset-error">
                        <i class="fas fa-exclamation-circle"></i>
                        {translate key=$error reason=$reason}
                    </div>
                {/if}

                <form class="reset-form" id="lostPasswordForm" action="{url page="login" op="requestResetPassword"}"
                    method="post">
                    {csrf}

                    <div class="form-group">
                        <label for="email">
                            <i class="fas fa-envelope"></i>
                            <span>{translate key="user.login.registeredEmail"}</span>
                            <span class="required">*</span>
                        </label>
                        <input type="email" name="email" id="email" value="{$email|escape}" required
                            aria-required="true" placeholder="{translate key="user.login.registeredEmail"}"
                            autocomplete="email">
                    </div>

                    <div class="form-actions">
                        <button id="reset-button" class="submit-button" type="submit">
                            <i class="fas fa-key"></i>
                            <span>{translate key="user.login.resetPassword"}</span>
                        </button>

                        <div class="login-link-container">
                            <a href="{url page="login"}" class="login-link">
                                <i class="fas fa-arrow-left"></i>
                                {translate key="user.login.rememberUsernameAndPassword"}
                            </a>
                        </div>
                    </div>
                </form>

                <div class="reset-help">
                    <p>{translate key="user.login.resetPasswordHelp"}</p>
                </div>
            </div>
        </div>
    </div>
</div>

{include file="frontend/components/footer.tpl"}