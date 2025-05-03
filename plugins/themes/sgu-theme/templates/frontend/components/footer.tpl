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
    <div class="row large-columns-4 mb-0">
        <div id="text-5" class="col pb-0 widget widget_text">
            <h3 class="widget-title">Liên kết</h3>
            <div class="is-divider small"></div>
            <div class="textwidget">
                <p>
                    <a href="https://www.sgu.edu.vn/" rel="noopener" target="_blank">Trường Đại học Sài Gòn</a><br>
                    <a href="https://daotao.sgu.edu.vn/web/" rel="noopener" target="_blank">Phòng Đào tạo</a><br>
                    <a href="https://dtsdh.sgu.edu.vn/" rel="noopener" target="_blank">Phòng Đào tạo Sau Đại học</a><br>
                    <a href="https://dttx.sgu.edu.vn/#/home" rel="noopener" target="_blank">Phòng Giáo dục Thường
                        xuyên</a>
                </p>
            </div>
        </div>
        <div id="custom_html-6" class="widget_text col pb-0 widget widget_custom_html">
            <h3 class="widget-title">Trường Đại học Sài Gòn</h3>
            <div class="is-divider small"></div>
            <div class="textwidget custom-html-widget">
                <iframe width="400" height="100" src="https://www.youtube.com/embed/f0bHewhesgE?si=9iCfPBA8620apBsB"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
            </div>
        </div>
        <div id="custom_html-7" class="widget_text col pb-0 widget widget_custom_html">
            <h3 class="widget-title">Ban Biên tập Tạp chí</h3>
            <div class="is-divider small"></div>
            <div class="textwidget custom-html-widget">
                Địa chỉ: 273 An Dương Vương, Phường 3, Quận 5, TP.HCM<br>
                Email: tcdhsg@sgu.edu.vn<br>
                Điện thoại: 028.38321360
            </div>
        </div>
        <div id="archives-5" class="col pb-0 widget widget_archive">
            <h3 class="widget-title">Tìm bài viết</h3>
            <div class="is-divider small"></div>
            <label class="screen-reader-text" for="archives-dropdown-5">Tìm bài viết</label>
            <select id="archives-dropdown-5" name="archive-dropdown"
                onchange="document.location.href=this.options[this.selectedIndex].value;">
                <option value="">Select Month</option>
                <option value="https://sj.sgu.edu.vn/2023/07/"> July 2023 </option>
                <option value="https://sj.sgu.edu.vn/2023/01/"> January 2023 </option>
                <option value="https://sj.sgu.edu.vn/2022/07/"> July 2022 </option>
                <option value="https://sj.sgu.edu.vn/2022/03/"> March 2022 </option>
                <option value="https://sj.sgu.edu.vn/2022/01/"> January 2022 </option>
                <option value="https://sj.sgu.edu.vn/2021/09/"> September 2021 </option>
                <option value="https://sj.sgu.edu.vn/2021/07/"> July 2021 </option>
                <option value="https://sj.sgu.edu.vn/2021/06/"> June 2021 </option>
                <option value="https://sj.sgu.edu.vn/2021/05/"> May 2021 </option>
                <option value="https://sj.sgu.edu.vn/2021/04/"> April 2021 </option>
                <option value="https://sj.sgu.edu.vn/2021/01/"> January 2021 </option>
                <option value="https://sj.sgu.edu.vn/2020/12/"> December 2020 </option>
                <option value="https://sj.sgu.edu.vn/2020/09/"> September 2020 </option>
                <option value="https://sj.sgu.edu.vn/2020/05/"> May 2020 </option>
                <option value="https://sj.sgu.edu.vn/2020/03/"> March 2020 </option>
                <option value="https://sj.sgu.edu.vn/2020/01/"> January 2020 </option>
                <option value="https://sj.sgu.edu.vn/2019/12/"> December 2019 </option>
                <option value="https://sj.sgu.edu.vn/2019/11/"> November 2019 </option>
            </select>
        </div>
    </div>
    <a id="pkp_content_footer"></a>

    <div class="pkp_structure_footer">

        {if $pageFooter}
            <div class="pkp_footer_content">
                {$pageFooter}
            </div>
        {/if}

        <div class="pkp_brand_footer" role="complementary">
            <a href="{url page="about" op="aboutThisPublishingSystem"}">
                <img alt="{translate key="about.aboutThisPublishingSystem"}" src="{$baseUrl}/{$brandImage}">
            </a>
        </div>
    </div>
</div><!-- pkp_structure_footer_wrapper -->

</div><!-- pkp_structure_page -->

{load_script context="frontend"}

{call_hook name="Templates::Common::Footer::PageFooter"}
</body>

</html>