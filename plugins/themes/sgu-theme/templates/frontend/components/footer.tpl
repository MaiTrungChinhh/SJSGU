{**
 * templates/frontend/components/footer.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Common site frontend footer.
 *
 * @uses $isFullWidth bool Should this page be displayed without sidebars? This
 *       represents a page-level override, and doesn't indicate whether or not
 *       sidebars have been configured for thesite.
 *}

</div><!-- pkp_structure_main -->

{* Sidebars *}
{if empty($isFullWidth)}
    {capture assign="sidebarCode"}{call_hook name="Templates::Common::Sidebar"}{/capture}
    {if $sidebarCode}
        <div class="pkp_structure_sidebar left" role="complementary"
            aria-label="{translate|escape key="common.navigation.sidebar"}">
            {$sidebarCode}
        </div><!-- pkp_sidebar.left -->
    {/if}
{/if}
</div><!-- pkp_structure_content -->

<div class="pkp_structure_footer_wrapper" role="contentinfo">
    <div class="pkp_structure_footer">
        <div class="sgu-footer">
            <div class="sgu-footer-info">
                <div class="sgu-footer-left">
                    <div class="sgu-footer-item">
                        <strong>{translate key="plugins.themes.sgu-theme.footer.managingAgency"}</strong>
                        {translate key="plugins.themes.sgu-theme.footer.saigonUniversity"}
                    </div>
                    <div class="sgu-footer-item">
                        <strong>{translate key="plugins.themes.sgu-theme.footer.journalName"}</strong>
                        {translate key="plugins.themes.sgu-theme.footer.scientificJournal"}
                    </div>
                    <div class="sgu-footer-item">
                        <strong>{translate key="plugins.themes.sgu-theme.footer.addressTitle"}</strong>
                        {translate key="plugins.themes.sgu-theme.footer.address"}
                    </div>
                    <div class="sgu-footer-item">
                        <strong>{translate key="plugins.themes.sgu-theme.footer.workingHoursTitle"}</strong>
                        {translate key="plugins.themes.sgu-theme.footer.workingHours"}
                    </div>
                    <div class="sgu-footer-item">
                        <strong>{translate key="plugins.themes.sgu-theme.footer.licenseTitle"}</strong>
                        {translate key="plugins.themes.sgu-theme.footer.license"}
                    </div>
                    <div class="sgu-footer-item">
                        <strong>{translate key="plugins.themes.sgu-theme.footer.issuedByTitle"}</strong>
                        {translate key="plugins.themes.sgu-theme.footer.issuedBy"}
                    </div>
                </div>
                <div class="sgu-footer-right">
                    <div class="sgu-footer-item sgu-editorial-board">
                        {translate key="plugins.themes.sgu-theme.footer.editorialBoard"}
                    </div>
                    <div class="sgu-footer-item">
                        <strong>{translate key="plugins.themes.sgu-theme.footer.editorInChief"}</strong> ...
                    </div>
                    <div class="sgu-footer-item">
                        <strong>{translate key="common.website"}</strong> <a
                            href="https://sj.sgu.edu.vn">sj.sgu.edu.vn</a>
                    </div>
                    <div class="sgu-footer-item">
                        <strong>{translate key="common.email"}</strong> <a
                            href="mailto:tcdhsg@sgu.edu.vn">tcdhsg@sgu.edu.vn</a>
                    </div>
                    <div class="sgu-footer-item">
                        <strong>{translate key="plugins.themes.sgu-theme.footer.phone"}</strong>
                        <a href="tel:02838321360">(028) 38321360</a>
                    </div>
                </div>
                <div class="sgu-footer-platform">
                    {* <div class="sgu-platform-text">
                        Platform &<br>
                        workflow by
                    </div> *}
                    <div class="sgu-platform-logo">
                        <a href="https://pkp.sfu.ca/ojs">
                            {* <img src="{$baseUrl}/plugins/themes/sgu-theme/images/ojs_pkp_logo.png" alt="OJS/PKP Logo"> *}
                            <img alt="{translate key="about.aboutThisPublishingSystem"}" src="{$baseUrl}/{$brandImage}">

                        </a>
                    </div>
                </div>
            </div>
        </div>

        {if $pageFooter}
            <div class="pkp_footer_content">
                {$pageFooter}
            </div>
        {/if}
    </div>
</div><!-- pkp_structure_footer_wrapper -->
<div class="sgu-footer-copyright">
    {translate key="plugins.themes.sgu-theme.footer.copyright"} {$smarty.now|date_format:"%Y"} ©
    {translate key="plugins.themes.sgu-theme.footer.saigonUniversity"}
</div>
</div><!-- pkp_structure_page -->

{load_script context="frontend"}

{call_hook name="Templates::Common::Footer::PageFooter"}
</body>

</html>