{**
 * templates/admin/index.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Site administration index.
 *
 *}
{extends file="layouts/backend.tpl"}

{block name="page"}
	<h1 class="app__pageHeading">
		{translate key="navigation.admin"}
	</h1>

	{if $newVersionAvailable}
		<notification>
			{translate key="site.upgradeAvailable.admin" currentVersion=$currentVersion->getVersionString(false) latestVersion=$latestVersion}
		</notification>
	{/if}

	<div class="app__contentPanel">
		<h2>{translate key="admin.siteManagement"}</h2>
		<ul>
			<li><a href="{url op="contexts"}">{translate key="admin.hostedContexts"}</a></li>
			{call_hook name="Templates::Admin::Index::SiteManagement"}
			<li><a href="{url op="settings"}">{translate key="admin.siteSettings"}</a></li>
		</ul>
		<h2>{translate key="admin.adminFunctions"}</h2>
		<ul>
			<li><a href="{url op="systemInfo"}">{translate key="admin.systemInformation"}</a></li>
			<li>
				<form type="post" action="{url op="expireSessions"}">
					{csrf}
					<button type="button"
						class="-linkButton expireSessionsBtn">{translate key="admin.expireSessions"}</button>
				</form>
			</li>
			<li>
				<form type="post" action="{url op="clearDataCache"}">
					{csrf}
					<button class="-linkButton">{translate key="admin.clearDataCache"}</button>
				</form>
			</li>
			<li>
				<form type="post" action="{url op="clearTemplateCache"}">
					{csrf}
					<button class="-linkButton"
						onclick="return confirm({translate|json_encode|escape key="admin.confirmClearTemplateCache"})">{translate key="admin.clearTemplateCache"}</button>
				</form>
			</li>
			<li>
				<form type="post" action="{url op="clearScheduledTaskLogFiles"}">
					{csrf}
					<button class="-linkButton"
						onclick="return confirm({translate|json_encode|escape key="admin.scheduledTask.confirmClearLogs"})">{translate key="admin.scheduledTask.clearLogs"}</button>
				</form>
			</li>
			{call_hook name="Templates::Admin::Index::AdminFunctions"}
		</ul>
	</div>
{/block}

{* Thêm SweetAlert2 và script xác nhận đẹp *}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
	document.addEventListener('DOMContentLoaded', function() {
		const btn = document.querySelector('.expireSessionsBtn');
		if (btn) {
			btn.addEventListener('click', function(e) {
				e.preventDefault();
				Swal.fire({
					title: {translate|json_encode|escape key="admin.confirmExpireSessionsTitle"},
					text: {translate|json_encode|escape key="admin.confirmExpireSessions"},
					icon: 'warning',
					showCancelButton: true,
					confirmButtonText: {translate|json_encode|escape key="common.ok"},
					cancelButtonText: {translate|json_encode|escape key="common.cancel"}
				}).then((result) => {
					if (result.isConfirmed) {
						btn.closest('form').submit();
					}
				});
			});
		}
	});
</script>