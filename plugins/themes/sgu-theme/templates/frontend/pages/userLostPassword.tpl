{**
 * templates/frontend/pages/userLostPassword.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2000-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Final SGU-styled password reset form, exactly matching the screenshot.
 *
 *}
{include file="frontend/components/header.tpl" pageTitle="user.login.resetPassword"}

<div class="page page_lost_password">
    <div class="breadcrumbs">
        <a href="{url page="index"}">Trang chủ</a> / <span>Đặt lại mật khẩu</span>
    </div>

    <div class="reset_card">
        <div class="reset_header">
            <div class="lock_icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M12 1a5 5 0 0 1 5 5v2.5h-2V6a3 3 0 0 0-6 0v2.5H7V6a5 5 0 0 1 5-5zM5 10h14a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2zm7 5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                </svg>
            </div>
            <h2>Đặt lại mật khẩu</h2>
        </div>

        <div class="reset_content">
            <p>Nhập vào địa chỉ email của tài khoản mà bạn đã quên mật khẩu. Chúng tôi sẽ gửi cho bạn một email với các
                hướng dẫn để đặt lại mật khẩu của bạn.</p>

            <form class="cmp_form lost_password" id="lostPasswordForm"
                action="{url page="login" op="requestResetPassword"}" method="post">
                {csrf}
                {if $error}
                    <div class="pkp_form_error">
                        {translate key=$error reason=$reason}
                    </div>
                {/if}

                <div class="fields">
                    <div class="email">
                        <label>
                            <span class="label">
                                Email của người dùng đã đăng ký
                                <span class="required" aria-hidden="true">*</span>
                                <span class="pkp_screen_reader">
                                    {translate key="common.required"}
                                </span>
                            </span>
                            <input type="email" name="email" id="email" value="{$email|escape}" required
                                aria-required="true" placeholder="Email của người dùng đã đăng ký" autocomplete="email">
                        </label>
                    </div>
                    <div class="buttons">
                        <button class="submit" type="submit">
                            Đặt lại mật khẩu
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="login_link">
        <a href="{url page="login"}">Quay lại đăng nhập</a>
    </div>
</div><!-- .page -->

{include file="frontend/components/footer.tpl"}