/**
 * @file plugins/themes/sgu-theme/js/passwordToggle.js
 *
 * Copyright (c) 2014-2023 Simon Fraser University
 * Copyright (c) 2003-2023 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Password visibility toggle functionality
 */

; (() => {
    document.addEventListener("DOMContentLoaded", () => {
        // Find all password toggle buttons
        const toggleButtons = document.querySelectorAll(".toggle-password")

        toggleButtons.forEach((button) => {
            button.addEventListener("click", function () {
                // Find the password input field
                const passwordInput = this.closest(".password-input-container").querySelector("input")
                const icon = this.querySelector("i")

                // Toggle password visibility
                if (passwordInput.type === "password") {
                    passwordInput.type = "text"
                    icon.classList.remove("fa-eye")
                    icon.classList.add("fa-eye-slash")
                    this.setAttribute("aria-label", "Hide password")
                } else {
                    passwordInput.type = "password"
                    icon.classList.remove("fa-eye-slash")
                    icon.classList.add("fa-eye")
                    this.setAttribute("aria-label", "Show password")
                }

                // Add focus back to password field
                passwordInput.focus()
            })
        })

        // Add floating label effect
        const inputFields = document.querySelectorAll(".login-form input")

        inputFields.forEach((input) => {
            // Check if input has value on load
            if (input.value.trim() !== "") {
                input.classList.add("has-value")
            }

            // Add event listeners
            input.addEventListener("focus", function () {
                this.parentElement.classList.add("focused")
            })

            input.addEventListener("blur", function () {
                this.parentElement.classList.remove("focused")
                if (this.value.trim() !== "") {
                    this.classList.add("has-value")
                } else {
                    this.classList.remove("has-value")
                }
            })
        })

        // Add form submission animation
        const loginForm = document.getElementById("login")

        if (loginForm) {
            loginForm.addEventListener("submit", (e) => {
                const submitButton = document.getElementById("login-button")

                if (submitButton) {
                    const processingText = document.getElementById("js-processing-text")?.innerText || "Processing...";

                    submitButton.innerHTML = `<i class="fas fa-circle-notch fa-spin"></i>
                                                <span>${processingText}</span>`;

                    submitButton.disabled = true
                }
            })
        }
    })
})()
