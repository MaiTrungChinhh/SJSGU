/**
 * @file plugins/themes/sgu-theme/js/theme.js
 *
 * Copyright (c) 2014-2023 Simon Fraser University
 * Copyright (c) 2003-2023 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Main theme JavaScript file
 */

; (() => {
    // Initialize all theme components
    document.addEventListener("DOMContentLoaded", () => {
        // Mobile menu functionality
        const menuToggle = document.querySelector(".sgu-menu-toggle")
        const navigation = document.querySelector(".sgu-navigation")

        if (menuToggle && navigation) {
            menuToggle.addEventListener("click", () => {
                const isExpanded = navigation.classList.contains("is-active")
                navigation.classList.toggle("is-active")
                menuToggle.setAttribute("aria-expanded", !isExpanded)
            })

            // Close menu when clicking outside
            document.addEventListener("click", (event) => {
                if (
                    navigation &&
                    menuToggle &&
                    !navigation.contains(event.target) &&
                    !menuToggle.contains(event.target) &&
                    navigation.classList.contains("is-active")
                ) {
                    navigation.classList.remove("is-active")
                    menuToggle.setAttribute("aria-expanded", "false")
                }
            })
        }

        // Handle window resize
        window.addEventListener("resize", () => {
            if (window.innerWidth > 992 && navigation && navigation.classList.contains("is-active")) {
                navigation.classList.remove("is-active")
                if (menuToggle) {
                    menuToggle.setAttribute("aria-expanded", "false")
                }
            }
        })

        // Initialize form enhancements
        let FormEnhancer // Declare FormEnhancer
        if (typeof FormEnhancer !== "undefined") {
            FormEnhancer.init()
        }
    })
})()
