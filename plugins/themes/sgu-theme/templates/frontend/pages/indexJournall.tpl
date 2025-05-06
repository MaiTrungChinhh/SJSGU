{**
 * templates/frontend/pages/indexJournal.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Display the index page for a journal
 *
 * @uses $currentJournal Journal This journal
 * @uses $journalDescription string Journal description from HTML text editor
 * @uses $homepageImage object Image to be displayed on the homepage
 * @uses $additionalHomeContent string Arbitrary input from HTML text editor
 * @uses $announcements array List of announcements
 * @uses $numAnnouncementsHomepage int Number of announcements to display on the
 *       homepage
 * @uses $issue Issue Current issue
 *}
{include file="frontend/components/header.tpl" pageTitleTranslated=$currentJournal->getLocalizedName()}

<div class="page_index_journal">
    {call_hook name="Templates::Index::journal"}

    {* Hero Section with Journal Image *}
    <section class="journal-hero">
        {if !$activeTheme->getOption('useHomepageImageAsHeader') && $homepageImage}
            <div class="hero-image-container">
                <img src="{$publicFilesDir}/{$homepageImage.uploadName|escape:"url"}" {if $homepageImage.altText}
                    alt="{$homepageImage.altText|escape}" {/if}>
                <div class="hero-overlay">
                    <div class="hero-content">
                        <h1>{$currentJournal->getLocalizedName()}</h1>
                        {if $currentJournal->getData('acronym')}
                            <div class="journal-acronym">{$currentJournal->getData('acronym')}</div>
                        {/if}
                        {if $currentJournal->getData('publisherInstitution')}
                            <div class="journal-publisher">{$currentJournal->getData('publisherInstitution')}</div>
                        {/if}
                    </div>
                </div>
            </div>
        {else}
            <div class="hero-content-only">
                <h1>{$currentJournal->getLocalizedName()}</h1>
                {if $currentJournal->getData('acronym')}
                    <div class="journal-acronym">{$currentJournal->getData('acronym')}</div>
                {/if}
                {if $currentJournal->getData('publisherInstitution')}
                    <div class="journal-publisher">{$currentJournal->getData('publisherInstitution')}</div>
                {/if}
            </div>
        {/if}
    </section>

    {* Quick Links *}
    <section class="journal-quick-links">
        <div class="container">
            <div class="quick-links-grid">
                <a href="{url router=$smarty.const.ROUTE_PAGE page="about"}" class="quick-link-card">
                    <div class="quick-link-icon">
                        <i class="fas fa-info-circle"></i>
                    </div>
                    <h3>{translate key="about.aboutContext"}</h3>
                    <p>{translate key="about.description"}</p>
                </a>
                <a href="{url router=$smarty.const.ROUTE_PAGE page="issue" op="current"}" class="quick-link-card">
                    <div class="quick-link-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3>{translate key="journal.currentIssue"}</h3>
                    <p>{translate key="current.current"}</p>
                </a>
                <a href="{url router=$smarty.const.ROUTE_PAGE page="issue" op="archive"}" class="quick-link-card">
                    <div class="quick-link-icon">
                        <i class="fas fa-archive"></i>
                    </div>
                    <h3>{translate key="navigation.archives"}</h3>
                    <p>{translate key="journal.viewAllIssues"}</p>
                </a>
                <a href="{url router=$smarty.const.ROUTE_PAGE page="about" op="submissions"}" class="quick-link-card">
                    <div class="quick-link-icon">
                        <i class="fas fa-paper-plane"></i>
                    </div>
                    <h3>{translate key="about.submissions"}</h3>
                    <p>{translate key="about.submissions.description"}</p>
                </a>
            </div>
        </div>
    </section>

    {* Journal Description *}
    {if $activeTheme->getOption('showDescriptionInJournalIndex')}
        <section class="journal-about">
            <div class="container">
                <div class="journal-about-card">
                    <div class="card-icon">
                        <i class="fas fa-university"></i>
                    </div>
                    <div class="card-content">
                        <h2>{translate key="about.aboutContext"}</h2>
                        <div class="journal-description">
                            {$journalDescription}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    {/if}

    {* Latest issue *}
    {if $issue}
        <section class="journal-current-issue">
            <div class="container">
                <div class="current-issue-card">
                    <div class="card-header">
                        <h2>{translate key="journal.currentIssue"}</h2>
                        <div class="current-issue-title">
                            {$issue->getIssueIdentification()|strip_unsafe_html}
                        </div>
                        {if $issue->getDatePublished()}
                            <div class="current-issue-date">
                                <i class="fas fa-calendar-alt"></i> {$issue->getDatePublished()|date_format:$dateFormatLong}
                            </div>
                        {/if}
                    </div>
                    <div class="card-content">
                        {include file="frontend/objects/issue_toc.tpl" heading="h3"}
                    </div>
                    <div class="card-footer">
                        <a href="{url router=$smarty.const.ROUTE_PAGE page="issue" op="archive"}" class="view-all-issues">
                            <i class="fas fa-archive"></i> {translate key="journal.viewAllIssues"}
                        </a>
                    </div>
                </div>
            </div>
        </section>
    {/if}

    {* Announcements *}
    {if $numAnnouncementsHomepage && $announcements|@count}
        <section class="journal-announcements">
            <div class="container">
                <div class="announcements-card">
                    <div class="card-header">
                        <h2>{translate key="announcement.announcements"}</h2>
                    </div>
                    <div class="card-content">
                        <div class="announcements-grid">
                            {foreach name=announcements from=$announcements item=announcement}
                                {if $smarty.foreach.announcements.iteration > $numAnnouncementsHomepage}
                                    {break}
                                {/if}
                                <div class="announcement-item">
                                    <h3>
                                        <a
                                            href="{url router=$smarty.const.ROUTE_PAGE page="announcement" op="view" path=$announcement->getId()}">
                                            {$announcement->getLocalizedTitle()|escape}
                                        </a>
                                    </h3>
                                    <div class="announcement-date">
                                        <i class="fas fa-calendar-day"></i>
                                        {$announcement->getDatePosted()|date_format:$dateFormatShort}
                                    </div>
                                    <div class="announcement-summary">
                                        {$announcement->getLocalizedDescriptionShort()|strip_unsafe_html}
                                    </div>
                                    <a href="{url router=$smarty.const.ROUTE_PAGE page="announcement" op="view" path=$announcement->getId()}"
                                        class="read-more">
                                        {translate key="common.readMore"} <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            {/foreach}
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{url router=$smarty.const.ROUTE_PAGE page="announcement"}" class="view-all-announcements">
                            <i class="fas fa-bullhorn"></i> {translate key="announcement.viewAll"}
                        </a>
                    </div>
                </div>
            </div>
        </section>
    {/if}

    {* Additional Homepage Content *}
    {if $additionalHomeContent}
        <section class="journal-additional-content">
            <div class="container">
                <div class="additional-content-card">
                    <div class="card-content">
                        {$additionalHomeContent}
                    </div>
                </div>
            </div>
        </section>
    {/if}
</div>

{include file="frontend/components/footer.tpl"}