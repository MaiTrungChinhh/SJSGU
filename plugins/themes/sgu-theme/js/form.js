/**
 * @file plugins/themes/sgu-theme/js/forms.js
 *
 * Copyright (c) 2014-2023 Simon Fraser University
 * Copyright (c) 2003-2023 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Optimized JavaScript for form enhancements
 */

; (() => {
    // Form enhancement module
    const FormEnhancer = {
        // Initialize all form enhancements
        init: function () {
            this.setupPasswordToggles()
            this.setupFormValidation()
            this.setupPasswordStrength()
            this.setupFocusEffects()
        },

        // Add password toggle functionality
        setupPasswordToggles: () => {
            const passwordFields = document.querySelectorAll('input[type="password"]')

            passwordFields.forEach((field) => {
                // Skip if already enhanced
                if (field.dataset.enhanced) return

                // Create container if needed
                if (!field.parentElement.classList.contains("password-input-container")) {
                    const wrapper = document.createElement("div")
                    wrapper.className = "password-input-container"
                    field.parentNode.insertBefore(wrapper, field)
                    wrapper.appendChild(field)
                }

                // Create toggle button
                const toggleButton = document.createElement("button")
                toggleButton.type = "button"
                toggleButton.className = "toggle-password"
                toggleButton.setAttribute("aria-label", "Show password")
                toggleButton.innerHTML = '<i class="fas fa-eye"></i>'
                field.parentElement.appendChild(toggleButton)

                // Add click event
                toggleButton.addEventListener("click", function () {
                    const passwordInput = this.previousElementSibling
                    const icon = this.querySelector("i")

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

                    passwordInput.focus()
                })

                // Mark as enhanced
                field.dataset.enhanced = "true"
            })
        },

        // Add form validation
        setupFormValidation: () => {
            const forms = document.querySelectorAll(".page_login form, .page_register form")

            forms.forEach((form) => {
                // Skip if already enhanced
                if (form.dataset.enhanced) return

                // Add submit handler
                form.addEventListener("submit", function (e) {
                    let isValid = true
                    const requiredFields = this.querySelectorAll("[required]")

                    // Clear previous errors
                    const errorMessages = this.querySelectorAll(".form-validation-message")
                    errorMessages.forEach((msg) => {
                        msg.remove()
                    })

                    // Check all required fields
                    requiredFields.forEach((field) => {
                        field.classList.remove("error")

                        if (!field.value.trim()) {
                            isValid = false
                            field.classList.add("error")

                            // Add error message
                            const errorMessage = document.createElement("div")
                            errorMessage.className = "form-validation-message error"
                            errorMessage.textContent = "This field is required"
                            field.parentElement.appendChild(errorMessage)
                        }
                    })

                    // Check password match
                    const password = form.querySelector('input[name="password"]')
                    const repeatPassword = form.querySelector('input[name="repeatPassword"]')

                    if (
                        password &&
                        repeatPassword &&
                        password.value &&
                        repeatPassword.value &&
                        password.value !== repeatPassword.value
                    ) {
                        isValid = false
                        repeatPassword.classList.add("error")

                        // Add error message
                        const errorMessage = document.createElement("div")
                        errorMessage.className = "form-validation-message error"
                        errorMessage.textContent = "Passwords do not match"
                        repeatPassword.parentElement.appendChild(errorMessage)
                    }

                    // If form is not valid, prevent submission
                    if (!isValid) {
                        e.preventDefault()

                        // Scroll to first error
                        const firstError = form.querySelector(".error")
                        if (firstError) {
                            firstError.scrollIntoView({ behavior: "smooth", block: "center" })
                            setTimeout(() => {
                                firstError.focus()
                            }, 500)
                        }

                        return false
                    }

                    // If form is valid, show loading state
                    const submitButton = form.querySelector('button[type="submit"], input[type="submit"]')
                    if (submitButton) {
                        const originalText = submitButton.innerHTML
                        submitButton.innerHTML = '<i class="fas fa-circle-notch fa-spin"></i><span>Processing...</span>'
                        submitButton.disabled = true

                        // Store original text for potential reset
                        submitButton.dataset.originalText = originalText

                        // Add loading class to form
                        form.classList.add("is-loading")
                    }
                })

                // Add input validation on blur
                const inputs = form.querySelectorAll("input, select, textarea")
                inputs.forEach((input) => {
                    if (input.hasAttribute("required")) {
                        input.addEventListener("blur", function () {
                            // Remove existing error message
                            const existingError = this.parentElement.querySelector(".form-validation-message")
                            if (existingError) {
                                existingError.remove()
                            }

                            if (!this.value.trim()) {
                                this.classList.add("error")

                                // Add error message
                                const errorMessage = document.createElement("div")
                                errorMessage.className = "form-validation-message error"
                                errorMessage.textContent = "This field is required"
                                this.parentElement.appendChild(errorMessage)
                            } else {
                                this.classList.remove("error")
                            }
                        })

                        // Clear error on input
                        input.addEventListener("input", function () {
                            if (this.value.trim()) {
                                this.classList.remove("error")

                                // Remove error message
                                const errorMessage = this.parentElement.querySelector(".form-validation-message")
                                if (errorMessage) {
                                    errorMessage.remove()
                                }
                            }
                        })
                    }
                })

                // Mark as enhanced
                form.dataset.enhanced = "true"
            })
        },

        // Add password strength indicator
        setupPasswordStrength: () => {
            const passwordFields = document.querySelectorAll('input[name="password"]')

            passwordFields.forEach((field) => {
                // Skip if already enhanced
                if (field.dataset.strengthIndicator) return

                // Create strength indicator
                const strengthIndicator = document.createElement("div")
                strengthIndicator.className = "password-strength"
                strengthIndicator.id = "password-strength-" + Math.random().toString(36).substr(2, 9)
                field.parentElement.appendChild(strengthIndicator)

                // Add input event
                field.addEventListener("input", function () {
                    const password = this.value
                    let strength = 0

                    // Calculate strength
                    if (password.length >= 8) strength += 1
                    if (password.match(/[a-z]/) && password.match(/[A-Z]/)) strength += 1
                    if (password.match(/\d/)) strength += 1
                    if (password.match(/[^a-zA-Z\d]/)) strength += 1

                    // Update UI
                    if (password.length === 0) {
                        strengthIndicator.className = "password-strength"
                        strengthIndicator.textContent = ""
                    } else if (strength <= 2) {
                        strengthIndicator.className = "password-strength weak"
                        strengthIndicator.textContent = "Weak"
                    } else if (strength === 3) {
                        strengthIndicator.className = "password-strength medium"
                        strengthIndicator.textContent = "Medium"
                    } else {
                        strengthIndicator.className = "password-strength strong"
                        strengthIndicator.textContent = "Strong"
                    }
                })

                // Mark as enhanced
                field.dataset.strengthIndicator = strengthIndicator.id
            })
        },

        // Add focus effects
        setupFocusEffects: () => {
            const inputs = document.querySelectorAll(
                ".page_login input, .page_login select, .page_login textarea, .page_register input, .page_register select, .page_register textarea",
            )

            inputs.forEach((input) => {
                // Skip if already enhanced
                if (input.dataset.focusEnhanced) return

                // Add focus class to parent
                input.addEventListener("focus", function () {
                    this.parentElement.classList.add("is-focused")
                })

                // Remove focus class from parent
                input.addEventListener("blur", function () {
                    this.parentElement.classList.remove("is-focused")
                })

                // Mark as enhanced
                input.dataset.focusEnhanced = "true"
            })
        },
    }

    // Initialize on DOM ready
    document.addEventListener("DOMContentLoaded", () => {
        FormEnhancer.init()

        // Re-initialize on AJAX content load (if applicable)
        document.addEventListener("ajaxComplete", () => {
            setTimeout(() => {
                FormEnhancer.init()
            }, 100)
        })
    })
})()
