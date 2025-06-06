/**
 * @file plugins/themes/sgu-theme/js/registerForm.js
 *
 * Copyright (c) 2014-2023 Simon Fraser University
 * Copyright (c) 2003-2023 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief JavaScript for the registration form
 */

; (() => {
    document.addEventListener("DOMContentLoaded", () => {
        // Form validation
        const registerForm = document.getElementById("register")

        if (registerForm) {
            // Add form submission animation
            registerForm.addEventListener("submit", (e) => {
                // Basic client-side validation
                const requiredFields = registerForm.querySelectorAll("[required]")
                let isValid = true

                requiredFields.forEach((field) => {
                    if (!field.value.trim()) {
                        isValid = false
                        field.classList.add("error")
                    } else {
                        field.classList.remove("error")
                    }
                })

                // Check password match if both password fields exist
                const password = registerForm.querySelector("#password")
                const repeatPassword = registerForm.querySelector("#repeatPassword")

                if (password && repeatPassword && password.value !== repeatPassword.value) {
                    isValid = false
                    repeatPassword.classList.add("error")
                    // You could add a custom error message here
                }

                if (!isValid) {
                    e.preventDefault()
                    // Scroll to the first error
                    const firstError = registerForm.querySelector(".error")
                    if (firstError) {
                        firstError.focus()
                    }
                    return
                }

                // If form is valid, show loading state
                const submitButton = document.getElementById("register-button")
                if (submitButton) {
                    submitButton.innerHTML = '<i class="fas fa-circle-notch fa-spin"></i><span>Processing...</span>'
                    submitButton.disabled = true
                }
            })

            // Add input validation on blur
            const inputs = registerForm.querySelectorAll("input, select")
            inputs.forEach((input) => {
                if (input.hasAttribute("required")) {
                    input.addEventListener("blur", function () {
                        if (!this.value.trim()) {
                            this.classList.add("error")
                        } else {
                            this.classList.remove("error")
                        }
                    })
                }
            })

            // Password strength indicator
            const passwordField = registerForm.querySelector("#password")
            if (passwordField) {
                passwordField.addEventListener("input", function () {
                    // Simple password strength check
                    const password = this.value
                    let strength = 0

                    if (password.length >= 8) strength += 1
                    if (password.match(/[a-z]/) && password.match(/[A-Z]/)) strength += 1
                    if (password.match(/\d/)) strength += 1
                    if (password.match(/[^a-zA-Z\d]/)) strength += 1

                    // Update UI based on strength
                    const strengthIndicator = document.getElementById("password-strength")
                    if (strengthIndicator) {
                        strengthIndicator.className = "password-strength"

                        if (strength === 0) {
                            strengthIndicator.classList.add("empty")
                            strengthIndicator.textContent = ""
                        } else if (strength <= 2) {
                            strengthIndicator.classList.add("weak")
                            strengthIndicator.textContent = "Weak"
                        } else if (strength === 3) {
                            strengthIndicator.classList.add("medium")
                            strengthIndicator.textContent = "Medium"
                        } else {
                            strengthIndicator.classList.add("strong")
                            strengthIndicator.textContent = "Strong"
                        }
                    }
                })
            }

            // Toggle reviewer interests field visibility based on reviewer checkbox
            const reviewerCheckboxes = document.querySelectorAll('input[name^="reviewerGroup"]')
            const interestsField = document.getElementById("reviewerInterests")

            if (reviewerCheckboxes.length > 0 && interestsField) {
                const updateInterestsVisibility = () => {
                    let showInterests = false
                    reviewerCheckboxes.forEach((checkbox) => {
                        if (checkbox.checked) {
                            showInterests = true
                        }
                    })

                    if (showInterests) {
                        interestsField.style.display = "block"
                    } else {
                        interestsField.style.display = "none"
                    }
                }

                // Initial check
                updateInterestsVisibility()

                // Add event listeners
                reviewerCheckboxes.forEach((checkbox) => {
                    checkbox.addEventListener("change", updateInterestsVisibility)
                })
            }
        }
    })
})()
