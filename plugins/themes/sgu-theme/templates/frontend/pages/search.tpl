{**
 * templates/frontend/pages/search.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Display the page to search and view search results.
 *
 * @uses $query Value of the primary search query
 * @uses $authors Value of the authors search filter
 * @uses $dateFrom Value of the date from search filter (published after).
 *  Value is a single string: YYYY-MM-DD HH:MM:SS
 * @uses $dateTo Value of the date to search filter (published before).
 *  Value is a single string: YYYY-MM-DD HH:MM:SS
 * @uses $yearStart Earliest year that can be used in from/to filters
 * @uses $yearEnd Latest year that can be used in from/to filters
 *}
{include file="frontend/components/header.tpl" pageTitle="common.search"}

{if !$heading}
    {assign var="heading" value="h2"}
{/if}

<div class="page page_search">
    {include file="frontend/components/breadcrumbs.tpl" currentTitleKey="common.search"}

    <div class="search-container">
        <div class="search-header">
            <h1 class="search-title">
                <i class="fas fa-search"></i>
                {translate key="common.search"}
            </h1>
            <p class="search-description">{translate key="search.searchDescription"}</p>
        </div>

        {capture name="searchFormUrl"}{url escape=false}{/capture}
        {assign var=formUrlParameters value=[]}{* Prevent Smarty warning *}
        {$smarty.capture.searchFormUrl|parse_url:$smarty.const.PHP_URL_QUERY|parse_str:$formUrlParameters}

        <div class="search-form-wrapper">
            <form class="search-form" method="get" action="{$smarty.capture.searchFormUrl|strtok:"?"|escape}">
                {foreach from=$formUrlParameters key=paramKey item=paramValue}
                    <input type="hidden" name="{$paramKey|escape}" value="{$paramValue|escape}" />
                {/foreach}

                {* Main search input *}
                <div class="search-main">
                    <div class="search-input-group">
                        <label class="pkp_screen_reader" for="query">
                            {translate key="search.searchFor"}
                        </label>
                        {block name=searchQuery}
                            <input type="text" id="query" name="query" value="{$query|escape}" class="search-query-input"
                                placeholder="{translate|escape key="search.searchPlaceholder"}">
                        {/block}
                        <button class="search-submit-btn" type="submit">
                            <i class="fas fa-search"></i>
                            <span>{translate key="common.search"}</span>
                        </button>
                    </div>
                </div>

                {* Advanced filters *}
                <div class="search-advanced-wrapper">
                    <button type="button" class="search-advanced-toggle" id="advancedToggle">
                        <i class="fas fa-filter"></i>
                        <span>{translate key="search.advancedFilters"}</span>
                        <i class="fas fa-chevron-down toggle-icon"></i>
                    </button>

                    <div class="search-advanced" id="advancedFilters">
                        <div class="search-filters-grid">
                            {* Date range filter *}
                            <div class="filter-group date-filter">
                                <h3 class="filter-title">
                                    <i class="fas fa-calendar-alt"></i>
                                    {translate key="search.dateRange"}
                                </h3>
                                <div class="date-range-inputs">
                                    <div class="date-input-group">
                                        <label for="dateFromYear">{translate key="search.dateFrom"}</label>
                                        <div class="date-selects">
                                            {capture assign="dateFromLegend"}{translate key="search.dateFrom"}{/capture}
                                            {html_select_date_a11y legend=$dateFromLegend prefix="dateFrom" time=$dateFrom start_year=$yearStart end_year=$yearEnd}
                                        </div>
                                    </div>
                                    <div class="date-separator">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                    <div class="date-input-group">
                                        <label for="dateToYear">{translate key="search.dateTo"}</label>
                                        <div class="date-selects">
                                            {capture assign="dateFromTo"}{translate key="search.dateTo"}{/capture}
                                            {html_select_date_a11y legend=$dateFromTo prefix="dateTo" time=$dateTo start_year=$yearStart end_year=$yearEnd}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {* Author filter *}
                            <div class="filter-group author-filter">
                                <h3 class="filter-title">
                                    <i class="fas fa-user-edit"></i>
                                    {translate key="search.author"}
                                </h3>
                                {block name=searchAuthors}
                                    <input type="text" id="authors" name="authors" value="{$authors|escape}"
                                        class="author-input"
                                        placeholder="{translate|escape key="search.authorPlaceholder"}">
                                {/block}
                            </div>
                        </div>

                        {call_hook name="Templates::Search::SearchResults::AdditionalFilters"}

                        <div class="filter-actions">
                            <button type="button" class="clear-filters-btn">
                                <i class="fas fa-times"></i>
                                {translate key="search.clearFilters"}
                            </button>
                            <button type="submit" class="apply-filters-btn">
                                <i class="fas fa-check"></i>
                                {translate key="search.applyFilters"}
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        {call_hook name="Templates::Search::SearchResults::PreResults"}

        {* Search Results Section *}
        <div class="search-results-section">
            {if !$results->wasEmpty()}
                <div class="search-results-header">
                    <h2 class="results-title">
                        <i class="fas fa-list-ul"></i>
                        {translate key="search.searchResults"}
                    </h2>
                    <div class="results-count">
                        {if $results->count > 1}
                            {translate key="search.searchResults.foundPlural" count=$results->count}
                        {else}
                            {translate key="search.searchResults.foundSingle"}
                        {/if}
                    </div>
                </div>

                {* Search results list *}
                <div class="search-results-list">
                    {iterate from=results item=result}
                    <div class="search-result-item">
                        {include file="frontend/objects/article_summary.tpl" article=$result.publishedSubmission journal=$result.journal showDatePublished=true hideGalleys=true heading="h3"}
                    </div>
                    {/iterate}
                </div>

                {* Pagination *}
                <div class="search-pagination">
                    {page_info iterator=$results}
                    {page_links anchor="results" iterator=$results name="search" query=$query searchJournal=$searchJournal authors=$authors dateFromMonth=$dateFromMonth dateFromDay=$dateFromDay dateFromYear=$dateFromYear dateToMonth=$dateToMonth dateToDay=$dateToDay dateToYear=$dateToYear}
                </div>
            {else}
                {* No results *}
                <div class="search-no-results">
                    <div class="no-results-icon">
                        <i class="fas fa-search-minus"></i>
                    </div>
                    <div class="no-results-content">
                        {if $error}
                            <h2>{translate key="search.error"}</h2>
                            <p class="error-message">{$error|escape}</p>
                        {else}
                            <h2>{translate key="search.noResults"}</h2>
                            <p>{translate key="search.noResultsAdvice"}</p>
                            <div class="search-suggestions">
                                <h3>{translate key="search.suggestions"}</h3>
                                <ul>
                                    <li>{translate key="search.suggestion1"}</li>
                                    <li>{translate key="search.suggestion2"}</li>
                                    <li>{translate key="search.suggestion3"}</li>
                                </ul>
                            </div>
                        {/if}
                    </div>
                </div>
            {/if}
        </div>

        {* Search tips *}
        <div class="search-tips">
            <h3 class="tips-title">
                <i class="fas fa-lightbulb"></i>
                {translate key="search.tips"}
            </h3>
            <div class="tips-content">
                <div class="tip-item">
                    <strong>{translate key="search.tip1.title"}</strong>
                    <p>{translate key="search.tip1.description"}</p>
                </div>
                <div class="tip-item">
                    <strong>{translate key="search.tip2.title"}</strong>
                    <p>{translate key="search.tip2.description"}</p>
                </div>
                <div class="tip-item">
                    <strong>{translate key="search.tip3.title"}</strong>
                    <p>{translate key="search.tip3.description"}</p>
                </div>
            </div>
        </div>
    </div>
</div><!-- .page -->

{include file="frontend/components/footer.tpl"}