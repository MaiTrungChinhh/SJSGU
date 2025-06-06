/**
 * @file plugins/themes/sgu-theme/js/journal-home.js
 *
 * Copyright (c) 2014-2023 Simon Fraser University
 * Copyright (c) 2003-2023 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief JavaScript for the journal homepage
 */

; (() => {
    document.addEventListener("DOMContentLoaded", () => {
        // Parallax effect for hero image
        const heroImage = document.querySelector(".hero-image-container img")
        if (heroImage) {
            window.addEventListener("scroll", () => {
                const scrollPosition = window.pageYOffset
                heroImage.style.transform = `translateY(${scrollPosition * 0.4}px)`
            })
        }

        // Smooth scroll for anchor links
        const anchorLinks = document.querySelectorAll('a[href^="#"]')
        anchorLinks.forEach((link) => {
            link.addEventListener("click", (e) => {
                const targetId = link.getAttribute("href")
                if (targetId === "#") return

                const targetElement = document.querySelector(targetId)
                if (targetElement) {
                    e.preventDefault()
                    window.scrollTo({
                        top: targetElement.offsetTop - 100, // Offset for fixed headers
                        behavior: "smooth",
                    })
                }
            })
        })

        // Add icons to article galleys
        const galleyLinks = document.querySelectorAll(".obj_galley_link")
        galleyLinks.forEach((link) => {
            const text = link.textContent.trim().toLowerCase()
            let iconClass = "fa-file-alt"

            if (text.includes("pdf")) {
                iconClass = "fa-file-pdf"
                link.classList.add("pdf")
            } else if (text.includes("html")) {
                iconClass = "fa-file-code"
                link.classList.add("html")
            } else if (text.includes("xml")) {
                iconClass = "fa-file-code"
            } else if (text.includes("epub")) {
                iconClass = "fa-book"
            }

            // Add icon if not already present
            if (!link.querySelector(".fa")) {
                const icon = document.createElement("i")
                icon.className = `fas ${iconClass}`
                link.prepend(icon)
            }
        })

        // Enhance issue TOC
        const issueToc = document.querySelector(".obj_issue_toc")
        if (issueToc) {
            const sectionsElements = issueToc.querySelectorAll(".section")

            sectionsElements.forEach((section) => {
                const sectionTitle = section.querySelector(".section_title")
                const articles = section.querySelector(".articles")

                if (sectionTitle && articles) {
                    // Add toggle icon
                    const toggleIcon = document.createElement("i")
                    toggleIcon.className = "fas fa-chevron-down section-toggle"
                    toggleIcon.style.marginLeft = "0.5rem"
                    toggleIcon.style.cursor = "pointer"
                    toggleIcon.style.transition = "transform 0.3s ease"
                    sectionTitle.appendChild(toggleIcon)

                    // Add click event
                    sectionTitle.style.cursor = "pointer"
                    sectionTitle.addEventListener("click", () => {
                        const isHidden = articles.style.display === "none"

                        articles.style.display = isHidden ? "grid" : "none"
                        toggleIcon.style.transform = isHidden ? "rotate(0)" : "rotate(-90deg)"
                    })
                }
            })

            // Add article hover effects
            const articles = issueToc.querySelectorAll(".obj_article_summary")
            articles.forEach((article) => {
                article.addEventListener("mouseenter", () => {
                    article.style.backgroundColor = "#f1f3f5"
                })

                article.addEventListener("mouseleave", () => {
                    article.style.backgroundColor = "#f8f9fa"
                })
            })
        }

        // Add animation on scroll
        const animateOnScroll = () => {
            const elements = document.querySelectorAll(
                ".journal-about, .journal-current-issue, .journal-announcements, .journal-additional-content",
            )

            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.style.opacity = "1"
                            entry.target.style.transform = "translateY(0)"
                            observer.unobserve(entry.target)
                        }
                    })
                },
                {
                    threshold: 0.1,
                },
            )

            elements.forEach((element) => {
                element.style.opacity = "0"
                element.style.transform = "translateY(20px)"
                element.style.transition = "opacity 0.5s ease, transform 0.5s ease"
                observer.observe(element)
            })
        }

        // Initialize animation if IntersectionObserver is supported
        if ("IntersectionObserver" in window) {
            animateOnScroll()
        }
    })
})()
