{strip}
	{* Determine whether a logo or title string is being displayed *}
	{assign var="showingLogo" value=true}
	{if !$displayPageHeaderLogo}
		{assign var="showingLogo" value=false}
	{/if}
{/strip}
<!DOCTYPE html>
<html lang="{$currentLocale|replace:"_":"-"}" xml:lang="{$currentLocale|replace:"_":"-"}">
{if !$pageTitleTranslated}{capture assign="pageTitleTranslated"}{translate key=$pageTitle}{/capture}{/if}
{include file="frontend/components/headerHead.tpl"}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<script src="{$baseUrl}/plugins/themes/sgu-theme/js/passwordToggle.js"></script>
<script src="{$baseUrl}/plugins/themes/sgu-theme/js/menu.js"></script>
{* <script src="{$baseUrl}/plugins/themes/sgu-theme/js/registerForm.js"></script>
<script src="{$baseUrl}/plugins/themes/sgu-theme/js/form.js"></script> *}
{* <script src="{$baseUrl}/plugins/themes/sgu-theme/js/themeCustom.js"></script> *}
<body class="pkp_page_{$requestedPage|escape|default:"index"} pkp_op_{$requestedOp|escape|default:"index"}{if $showingLogo} has_site_logo{/if}" dir="{$currentLocaleLangDir|escape|default:"ltr"}">

	<div class="pkp_structure_page">

		{* Header *}
		<header class="pkp_structure_head" id="headerNavigationContainer" role="banner">
			{* Skip to content nav links *}
			{include file="frontend/components/skipLinks.tpl"}

			<div class="sgu-header-wrapper">
				{* Top header with journal info *}
				<div class="sgu-header-top">
					<div class="sgu-header-container">
						<div class="sgu-header-content">
							<div class="sgu-header-info">
								<div class="sgu-journal-name">Tạp chí Khoa học</div>
								<h1 class="sgu-university-name">Đại học Sài Gòn</h1>
								<div class="sgu-journal-english">Scientific Journal of Saigon University</div>
								<div class="sgu-university-full">
									Trường Đại học Sài Gòn - <span class="sgu-university-english">Saigon University</span>
								</div>
								<div class="sgu-website-link">
									<i class="fa fa-link"></i> <a href="https://sj.sgu.edu.vn">sj.sgu.edu.vn</a>
								</div>
							</div>
							<div class="sgu-header-logo">
								<div class="sgu-issn">ISSN 1859 - 3208</div>
								{if $displayPageHeaderLogo}
									<img src="{$publicFilesDir}/{$displayPageHeaderLogo.uploadName|escape:"url"}" 
										{if $displayPageHeaderLogo.altText != ''}alt="{$displayPageHeaderLogo.altText|escape}"{else}alt="Saigon University Logo"{/if} />
								{/if}
							</div>
						</div>
					</div>
				</div>

				{* Navigation bar *}
				<div class="sgu-nav-wrapper">
					<div class="sgu-nav-container">
						<div class="sgu-site-name">
							{capture assign="homeUrl"}
								{url page="index" router=$smarty.const.ROUTE_PAGE}
							{/capture}
							<a href="{$homeUrl}" class="sgu-home-link">
								{if $displayPageHeaderLogo}
									<img src="{$publicFilesDir}/{$displayPageHeaderLogo.uploadName|escape:"url"}" 
										{if $displayPageHeaderLogo.altText != ''}alt="{$displayPageHeaderLogo.altText|escape}"{else}alt="Saigon University Logo"{/if} />
								{elseif $displayPageHeaderTitle}
									<span>{$displayPageHeaderTitle|escape}</span>
								{else}
									<img src="{$baseUrl}/templates/images/structure/logo.png" alt="{$applicationName|escape}" title="{$applicationName|escape}" />
								{/if}
							</a>
							<button class="sgu-menu-toggle">
								<i class="fa fa-bars"></i>
								<span class="sgu-sr-only">Toggle Menu</span>
							</button>
						</div>

						<nav class="sgu-navigation" aria-label="{translate|escape key="common.navigation.site"}">
							<div class="sgu-nav-primary">
								{* Primary navigation menu *}
								{capture assign="primaryMenu"}
									{load_menu name="primary" id="navigationPrimary" ulClass="sgu-nav-menu"}
								{/capture}
								{$primaryMenu}

								{* Search form *}
								{if $currentContext && $requestedPage !== 'search'}
									<div class="sgu-search-wrapper">
										<a href="{url page="search"}" class="sgu-search-link">
											<i class="fa fa-search" aria-hidden="true"></i>
											<span>{translate key="common.search"}</span>
										</a>
									</div>
								{/if}
							</div>

							{* User navigation *}
							<div class="sgu-nav-user" id="navigationUserWrapper">
								{load_menu name="user" id="navigationUser" ulClass="sgu-user-menu" liClass="profile"}
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>

		{* Wrapper for page content and sidebars *}
		{if $isFullWidth}
			{assign var=hasSidebar value=0}
		{/if}
		<div class="pkp_structure_content{if $hasSidebar} has_sidebar{/if}">
			<div class="pkp_structure_main" role="main">
				<a id="pkp_content_main"></a>
