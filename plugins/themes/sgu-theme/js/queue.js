/**
 * Simple script to enhance the dashboard UI
 */
document.addEventListener("DOMContentLoaded", () => {
    // Add status classes based on text content
    function addStatusClasses() {
        const statusElements = document.querySelectorAll(".listPanel__itemStatus")

        statusElements.forEach((element) => {
            // Skip if already processed
            if (element.classList.contains("status-processed")) return

            const text = element.textContent.toLowerCase()

            if (text.includes("complete") || text.includes("published")) {
                element.classList.add("status-completed")
            } else if (text.includes("new") || text.includes("submitted")) {
                element.classList.add("status-new")
            } else if (text.includes("overdue") || text.includes("late")) {
                element.classList.add("status-overdue")
            } else if (text.includes("revision") || text.includes("resubmit")) {
                element.classList.add("status-warning")
            }

            // Mark as processed
            element.classList.add("status-processed")
        })
    }

    // Add icons to tab badges
    function addIconsToBadges() {
        const tabButtons = document.querySelectorAll(".pkpTabs__button")

        tabButtons.forEach((button) => {
            const tabId = button.getAttribute("aria-controls")
            if (!tabId) return

            const badge = button.querySelector(".pkpTabs__button__badge")
            if (!badge || badge.querySelector(".fa")) return // Skip if no badge or already has icon

            // Add appropriate icon based on tab ID
            let iconClass = ""
            switch (tabId) {
                case "myQueue":
                    iconClass = "fa-tasks"
                    break
                case "unassigned":
                    iconClass = "fa-inbox"
                    break
                case "active":
                    iconClass = "fa-spinner"
                    break
                case "archive":
                    iconClass = "fa-archive"
                    break
                default:
                    return
            }

            // Create and add icon
            const icon = document.createElement("i")
            icon.className = "fa " + iconClass
            icon.style.marginRight = "4px"
            badge.prepend(icon)
        })
    }

    // Run enhancements
    addStatusClasses()
    addIconsToBadges()

    // Watch for DOM changes to apply enhancements to dynamically loaded content
    const observer = new MutationObserver((mutations) => {
        mutations.forEach((mutation) => {
            if (mutation.type === "childList" || mutation.type === "attributes") {
                addStatusClasses()
                addIconsToBadges()
            }
        })
    })

    // Start observing the document
    observer.observe(document.body, {
        childList: true,
        subtree: true,
        attributes: true,
        attributeFilter: ["class", "style"],
    })
})
