{**
 * templates/frontend/components/about-content.tpl
 *
 * Copyright (c) 2014-2023 Simon Fraser University
 * Copyright (c) 2003-2023 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Custom about content for the journal
 *}

<div class="about-journal-main">
    <div class="about-journal-flex">
        <div class="about-journal-img">
            {* <img src="{$baseUrl}/public/site/images/admin/gioi-thiu-1-225x300.png"
                alt="Tạp chí Khoa học Đại học Sài Gòn"> *}
            {* http://sj.sgu.edu.vn/wp-content/uploads/2019/03/gioi-thiu-1-225x300.png *}
            <img src="http://sj.sgu.edu.vn/wp-content/uploads/2019/03/gioi-thiu-1-225x300.png"
                alt="{translate key="plugins.themes.sgu-theme.about.journal.alt"}">
        </div>
        <div class="about-journal-header">
            <div class="about-journal-title">{translate key="plugins.themes.sgu-theme.about.journal.title"}</div>
            <div class="about-journal-subtitle">{translate key="plugins.themes.sgu-theme.about.journal.subtitle"}</div>
            <table class="about-journal-table">
                <tr>
                    <td class="left">{translate key="plugins.themes.sgu-theme.about.journal.issn"}</td>
                    <td class="right">{translate key="plugins.themes.sgu-theme.about.journal.license"}</td>
                </tr>
            </table>
            <div class="about-journal-admin">
                {translate key="plugins.themes.sgu-theme.about.journal.admin"}
            </div>
        </div>
    </div>
    <div class="about-journal-content">
        <h3>{translate key="plugins.themes.sgu-theme.about.section.1.title"}</h3>
        <p>{translate key="plugins.themes.sgu-theme.about.section.1.paragraph.1"}</p>
        <p>{translate key="plugins.themes.sgu-theme.about.section.1.paragraph.2"}</p>

        <h3>{translate key="plugins.themes.sgu-theme.about.section.2.title"}</h3>
        <ul>
            <li>{translate key="plugins.themes.sgu-theme.about.section.2.vietnamese"}</li>
            <li>{translate key="plugins.themes.sgu-theme.about.section.2.english"}</li>
            <li>{translate key="plugins.themes.sgu-theme.about.section.2.abbreviation"}</li>
            <li>{translate key="plugins.themes.sgu-theme.about.section.2.address"}</li>
            <li>{translate key="plugins.themes.sgu-theme.about.section.2.contact"}</li>
            <li>{translate key="plugins.themes.sgu-theme.about.section.2.seal"}</li>
        </ul>

        <h3>{translate key="plugins.themes.sgu-theme.about.section.3.title"}</h3>
        <p>{translate key="plugins.themes.sgu-theme.about.section.3.paragraph.1"}</p>
        <p>{translate key="plugins.themes.sgu-theme.about.section.3.paragraph.2"}</p>
        <p>{translate key="plugins.themes.sgu-theme.about.section.3.paragraph.3"}</p>

        <h3>{translate key="plugins.themes.sgu-theme.about.section.4.title"}</h3>
        <ul>
            <li>{translate key="plugins.themes.sgu-theme.about.section.4.topics.title"}
                <ul>
                    <li>{translate key="plugins.themes.sgu-theme.about.section.4.topics.natural"}</li>
                    <li>{translate key="plugins.themes.sgu-theme.about.section.4.topics.social"}</li>
                    <li>{translate key="plugins.themes.sgu-theme.about.section.4.topics.education"}</li>
                    <li>{translate key="plugins.themes.sgu-theme.about.section.4.topics.others"}</li>
                </ul>
            </li>
            <li>{translate key="plugins.themes.sgu-theme.about.section.4.structure.title"}
                <ul>
                    <li>{translate key="plugins.themes.sgu-theme.about.section.4.structure.cover1"}</li>
                    <li>{translate key="plugins.themes.sgu-theme.about.section.4.structure.cover2"}</li>
                    <li>{translate key="plugins.themes.sgu-theme.about.section.4.structure.cover3"}</li>
                    <li>{translate key="plugins.themes.sgu-theme.about.section.4.structure.cover4"}</li>
                    <li>{translate key="plugins.themes.sgu-theme.about.section.4.structure.contents"}</li>
                    <li>{translate key="plugins.themes.sgu-theme.about.section.4.structure.articles"}</li>
                    <li>{translate key="plugins.themes.sgu-theme.about.section.4.structure.news"}</li>
                </ul>
            </li>
            <li>{translate key="plugins.themes.sgu-theme.about.section.4.article.title"}
                <ul>
                    <li>{translate key="plugins.themes.sgu-theme.about.section.4.article.requirement"}</li>
                    <li>{translate key="plugins.themes.sgu-theme.about.section.4.article.abstract"}</li>
                    <li>{translate key="plugins.themes.sgu-theme.about.section.4.article.structure"}</li>
                    <li>{translate key="plugins.themes.sgu-theme.about.section.4.article.references"}</li>
                </ul>
            </li>
        </ul>

        <h3>{translate key="plugins.themes.sgu-theme.about.section.5.title"}</h3>
        <ul>
            <li>{translate key="plugins.themes.sgu-theme.about.section.5.publishing"}</li>
            <li>{translate key="plugins.themes.sgu-theme.about.section.5.format"}</li>
            <li>{translate key="plugins.themes.sgu-theme.about.section.5.pages"}</li>
            <li>{translate key="plugins.themes.sgu-theme.about.section.5.copies"}</li>
            <li>{translate key="plugins.themes.sgu-theme.about.section.5.printing"}</li>
            <li>{translate key="plugins.themes.sgu-theme.about.section.5.distribution"}</li>
            <li>{translate key="plugins.themes.sgu-theme.about.section.5.method"}</li>
            <li>{translate key="plugins.themes.sgu-theme.about.section.5.price"}</li>
        </ul>

        <h3>{translate key="plugins.themes.sgu-theme.about.section.6.title"}</h3>
        <ul>
            <li>{translate key="plugins.themes.sgu-theme.about.section.6.readers.1"}</li>
            <li>{translate key="plugins.themes.sgu-theme.about.section.6.readers.2"}</li>
            <li>{translate key="plugins.themes.sgu-theme.about.section.6.readers.3"}</li>
            <li>{translate key="plugins.themes.sgu-theme.about.section.6.readers.4"}</li>
            <li>{translate key="plugins.themes.sgu-theme.about.section.6.readers.5"}</li>
        </ul>
    </div>
</div>