{**
 * templates/frontend/pages/userLogin.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2000-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * User login form.
 *
 *}
{include file="frontend/components/header.tpl" pageTitle="user.login"}

<div class="page page_login">
	{include file="frontend/components/breadcrumbs.tpl" currentTitleKey="user.login"}

	<div class="login-container">
		<div class="login-card">
			<div class="login-image-container">
				<img class="login-image" src="{$baseUrl}/plugins/themes/sgu-theme/images/sgu_background.jpg"
					alt="Login Illustration">
				<div class="login-overlay">
					<div class="login-overlay-content">
						<h2>{translate key="user.login"}</h2>
						<p>{translate key="user.login.welcomeMessage"}</p>
					</div>
				</div>
			</div>

			<div class="login-form-container">
				<div class="login-form-header">
					<h1>{translate key="user.login"}</h1>
					<p class="login-subtitle">{translate key="user.login.loginToYourAccount"}</p>
				</div>

				{* Login message may be displayed if user was redirected *}
				{if $loginMessage}
					<div class="login-message">
						{translate key=$loginMessage}
					</div>
				{/if}

				{if $error}
					<div class="login-error">
						<i class="fas fa-exclamation-circle"></i>
						{translate key=$error reason=$reason}
					</div>
				{/if}

				<form class="login-form" id="login" method="post" action="{$loginUrl}">
					{csrf}
					<input type="hidden" name="source" value="{$source|default:""|escape}" />

					<div class="form-group">
						<label for="username">
							<i class="fas fa-user"></i>
							<span>{translate key="user.username"}</span>
							<span class="required">*</span>
						</label>
						<input type="text" name="username" id="username" value="{$username|default:""|escape}"
							maxlength="32" required aria-required="true"
							placeholder="{translate key="user.login.usernameOrEmail"}">
					</div>

					<div class="form-group">
						<label for="password">
							<i class="fas fa-lock"></i>
							<span>{translate key="user.password"}</span>
							<span class="required">*</span>
						</label>
						<div class="password-input-container">
							<input type="password" name="password" id="password" value="{$password|default:""|escape}"
								password="true" maxlength="32" required aria-required="true"
								placeholder="{translate key="user.login.password"}">
							<button type="button" class="toggle-password"
								aria-label="{translate key="user.login.togglePasswordVisibility"}">
								<i class="fas fa-eye"></i>
							</button>
						</div>
					</div>

					<div class="form-options">
						<div class="remember-checkbox">
							<input type="checkbox" name="remember" id="remember" value="1" checked="$remember">
							<label for="remember">
								{translate key="user.login.rememberUsernameAndPassword"}
							</label>
						</div>
						<a class="forgot-password" href="{url page="login" op="lostPassword"}">
							{translate key="user.login.forgotPassword"}
						</a>
					</div>

					<div class="form-actions">
						<button id="login-button" class="submit-button" type="submit">
							<i class="fas fa-sign-in-alt"></i>
							<span>{translate key="user.login"}</span>
						</button>

						{if !$disableUserReg}
							<div class="register-link-container">
								<span>{translate key="user.login.needAnAccount"}</span>
								{capture assign=registerUrl}{url page="user" op="register" source=$source}{/capture}
								<a href="{$registerUrl}" class="register-link">
									{translate key="user.login.registerNewAccount"}
								</a>
							</div>
						{/if}
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

{include file="frontend/components/footer.tpl"}