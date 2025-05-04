; (() => {
    // Wait for DOM to be fully loaded
    document.addEventListener("DOMContentLoaded", () => {
        // Get the menu toggle button and navigation
        const menuToggle = document.querySelector(".sgu-menu-toggle")
        const navigation = document.querySelector(".sgu-navigation")

        // Add click event to toggle menu
        if (menuToggle && navigation) {
            menuToggle.addEventListener("click", () => {
                navigation.classList.toggle("is-active")
            })
        }

        // Close menu when clicking outside
        document.addEventListener("click", (event) => {
            if (
                !navigation.contains(event.target) &&
                !menuToggle.contains(event.target) &&
                navigation.classList.contains("is-active")
            ) {
                navigation.classList.remove("is-active")
            }
        })

        // Handle window resize
        window.addEventListener("resize", () => {
            if (window.innerWidth > 992 && navigation.classList.contains("is-active")) {
                navigation.classList.remove("is-active")
            }
        })

        // Add dropdown functionality for submenus if needed
        const hasChildrenItems = document.querySelectorAll(".has_submenu")

        hasChildrenItems.forEach((item) => {
            const link = item.querySelector("a")
            const submenu = item.querySelector("ul")

            if (link && submenu) {
                // For mobile: make the parent link toggleable
                if (window.innerWidth <= 992) {
                    link.addEventListener("click", (e) => {
                        e.preventDefault()
                        submenu.classList.toggle("is-visible")
                    })
                }
            }
        })
    })
})()
