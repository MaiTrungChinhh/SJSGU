{**
 * lib/pkp/templates/frontend/components/header.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Common frontend site header.
 *
 * @uses $isFullWidth bool Should this page be displayed without sidebars? This
 *       represents a page-level override, and doesn't indicate whether or not
 *       sidebars have been configured for thesite.
 *}
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<script src="{$baseUrl}/plugins/themes/sgu-theme/js/passwordToggle.js"></script>
<body class="pkp_page_{$requestedPage|escape|default:"index"} pkp_op_{$requestedOp|escape|default:"index"}{if $showingLogo} has_site_logo{/if}" dir="{$currentLocaleLangDir|escape|default:"ltr"}">

	<div class="pkp_structure_page">

		{* Header *}
		<header class="pkp_structure_head" id="headerNavigationContainer" role="banner">
		<div class="pkp_site_name_wrapper sgu-header-custom" style="background: #fff; border-bottom: 4px solid #009fe3; position: relative;">
					<div style="display: flex; justify-content: space-between; align-items: flex-start; padding: 10px 0 0 0;">
						<div style="padding-left: 20px;">
							<div style="font-size: 22px; font-family: serif;">Tạp chí Khoa học</div>
							<div style="font-size: 40px; font-weight: bold; color: #153a8a; line-height: 1;">Đại học Sài Gòn</div>
							<div style="font-size: 18px; font-style: italic; color: #222;">Scientific Journal of Saigon University</div>
							<div style="font-size: 20px; font-weight: bold; color: #153a8a;">Trường Đại học Sài Gòn - <span style="color:#3b3b99">Saigon University</span></div>
							<div style="margin-top: 5px; font-size: 16px; color: #222;">
								<i class="fa fa-link"></i> <a href="https://sj.sgu.edu.vn" style="color: #222; text-decoration: underline;">sj.sgu.edu.vn</a>
							</div>
						</div>
						<div class="sgu-header-logo" style="text-align: right; padding-right: 30px; min-width: 220px;">
							<div style="font-size: 16px; font-weight: bold; color: #153a8a;">ISSN 1859 - 3208</div>
								<img src="{$publicFilesDir}/{$displayPageHeaderLogo.uploadName|escape:"url"}" style="width: 120px; height: auto;" {if $displayPageHeaderLogo.altText != ''}alt="{$displayPageHeaderLogo.altText|escape}"{/if} />
							</div>
					</div>
				</div>
			{* Skip to content nav links *}
			{include file="frontend/components/skipLinks.tpl"}

			<div class="pkp_head_wrapper">

				<div class="pkp_site_name_wrapper">
					<button class="pkp_site_nav_toggle">
						<span>Open Menu</span>
					</button>
					{if !$requestedPage || $requestedPage === 'index'}
						<h1 class="pkp_screen_reader">
							{if $currentContext}
								{$displayPageHeaderTitle|escape}
							{else}
								{$siteTitle|escape}
							{/if}
						</h1>
					{/if}
					<div class="pkp_site_name">
						{capture assign="homeUrl"}
							{url page="index" router=$smarty.const.ROUTE_PAGE}
						{/capture}
						<div class="display-logo-mini">
							{if $displayPageHeaderLogo}
								<a href="{$homeUrl}" class="is_img">
									<img src="{$publicFilesDir}/{$displayPageHeaderLogo.uploadName|escape:"url"}" width="{$displayPageHeaderLogo.width|escape}" height="{$displayPageHeaderLogo.height|escape}" {if $displayPageHeaderLogo.altText != ''}alt="{$displayPageHeaderLogo.altText|escape}"{/if} />
								</a>
							{elseif $displayPageHeaderTitle}
								<a href="{$homeUrl}" class="is_text">{$displayPageHeaderTitle|escape}</a>
							{else}
								<a href="{$homeUrl}" class="is_img">
									<img src="{$baseUrl}/templates/images/structure/logo.png" alt="{$applicationName|escape}" title="{$applicationName|escape}" width="180" height="90" />
								</a>
							{/if}
						</div>
					</div>
				</div>

				{capture assign="primaryMenu"}
					{load_menu name="primary" id="navigationPrimary" ulClass="pkp_navigation_primary"}
				{/capture}

				<nav class="pkp_site_nav_menu" aria-label="{translate|escape key="common.navigation.site"}">
					<a id="siteNav"></a>
					<div class="pkp_navigation_primary_row">
						<div class="pkp_navigation_primary_wrapper">
							{* Primary navigation menu for current application *}
							{$primaryMenu}

							{* Search form *}
							{if $currentContext && $requestedPage !== 'search'}
								<div class="pkp_navigation_search_wrapper">
									<a href="{url page="search"}" class="pkp_search pkp_search_desktop">
										<span class="fa fa-search" aria-hidden="true"></span>
										{translate key="common.search"}
									</a>
								</div>
							{/if}
						</div>
						<div class="pkp_navigation_user_wrapper" id="navigationUserWrapper">
							{load_menu name="user" id="navigationUser" ulClass="pkp_navigation_user" liClass="profile"}
						</div>
					</div>
				</nav>
			</div><!-- .pkp_head_wrapper -->
		</header><!-- .pkp_structure_head -->

		{* Wrapper for page content and sidebars *}
		{if $isFullWidth}
			{assign var=hasSidebar value=0}
		{/if}
		<div class="pkp_structure_content{if $hasSidebar} has_sidebar{/if}">
			<div class="pkp_structure_main" role="main">
				<a id="pkp_content_main"></a>
