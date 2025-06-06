/**
 * @file plugins/themes/sgu-theme/js/search.js
 *
 * Copyright (c) 2014-2023 Simon Fraser University
 * Copyright (c) 2003-2023 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief JavaScript for the search page
 */

document.addEventListener("DOMContentLoaded", () => {
    // Advanced search toggle
    const advancedToggle = document.getElementById("advancedToggle")
    const advancedFilters = document.getElementById("advancedFilters")

    if (advancedToggle && advancedFilters) {
        advancedToggle.addEventListener("click", () => {
            const isActive = advancedFilters.classList.contains("active")

            if (isActive) {
                advancedFilters.classList.remove("active")
                advancedToggle.classList.remove("active")
            } else {
                advancedFilters.classList.add("active")
                advancedToggle.classList.add("active")
            }
        })
    }

    // Clear filters functionality
    const clearFiltersBtn = document.querySelector(".clear-filters-btn")
    if (clearFiltersBtn) {
        clearFiltersBtn.addEventListener("click", () => {
            // Clear all form inputs
            const form = document.querySelector(".search-form")
            if (form) {
                // Clear text inputs
                const textInputs = form.querySelectorAll('input[type="text"]')
                textInputs.forEach((input) => {
                    if (input.name !== "query") {
                        // Don't clear the main search query
                        input.value = ""
                    }
                })

                // Reset date selects
                const dateSelects = form.querySelectorAll('select[name*="date"]')
                dateSelects.forEach((select) => {
                    select.selectedIndex = 0
                })
            }
        })
    }

    // Search form enhancements
    const searchForm = document.querySelector(".search-form")
    if (searchForm) {
        // Add loading state on form submission
        searchForm.addEventListener("submit", (e) => {
            const submitBtn = searchForm.querySelector(".search-submit-btn")
            const applyBtn = searchForm.querySelector(".apply-filters-btn")

            if (submitBtn) {
                submitBtn.innerHTML = '<i class="fas fa-circle-notch fa-spin"></i><span>Searching...</span>'
                submitBtn.disabled = true
            }

            if (applyBtn) {
                applyBtn.innerHTML = '<i class="fas fa-circle-notch fa-spin"></i>Applying...'
                applyBtn.disabled = true
            }
        })

        // Auto-expand advanced filters if any advanced filter has a value
        const hasAdvancedValues = () => {
            const authorsInput = document.getElementById("authors")
            const dateSelects = searchForm.querySelectorAll('select[name*="date"]')

            if (authorsInput && authorsInput.value.trim()) {
                return true
            }

            for (const select of dateSelects) {
                if (select.value && select.value !== "0") {
                    return true
                }
            }

            return false
        }

        if (hasAdvancedValues() && advancedToggle && advancedFilters) {
            advancedFilters.classList.add("active")
            advancedToggle.classList.add("active")
        }
    }

    // Smooth scroll to results
    const resultsSection = document.querySelector(".search-results-section")
    if (resultsSection && window.location.hash === "#results") {
        setTimeout(() => {
            resultsSection.scrollIntoView({ behavior: "smooth" })
        }, 100)
    }

    // Search suggestions interaction
    const suggestionItems = document.querySelectorAll(".search-suggestions li")
    suggestionItems.forEach((item) => {
        item.addEventListener("click", () => {
            const queryInput = document.getElementById("query")
            if (queryInput) {
                queryInput.value = item.textContent.trim()
                queryInput.focus()
            }
        })
    })

    // Keyboard shortcuts
    document.addEventListener("keydown", (e) => {
        // Focus search input with Ctrl+K or Cmd+K
        if ((e.ctrlKey || e.metaKey) && e.key === "k") {
            e.preventDefault()
            const queryInput = document.getElementById("query")
            if (queryInput) {
                queryInput.focus()
                queryInput.select()
            }
        }

        // Toggle advanced filters with Ctrl+Shift+F
        if (e.ctrlKey && e.shiftKey && e.key === "F") {
            e.preventDefault()
            if (advancedToggle) {
                advancedToggle.click()
            }
        }
    })
})
