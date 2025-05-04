/**
 * @file plugins/themes/sgu-theme/js/editorial-board.js
 *
 * Copyright (c) 2014-2023 Simon Fraser University
 * Copyright (c) 2003-2023 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief JavaScript for the editorial board page
 */

;(() => {
    document.addEventListener("DOMContentLoaded", () => {
      // Parallax effect for the background
      const editorialSection = document.querySelector(".section-editorial-board.has-parallax")
  
      if (editorialSection) {
        // Add a subtle parallax effect on scroll
        window.addEventListener("scroll", () => {
          const scrollPosition = window.pageYOffset
          const sectionOffset = editorialSection.offsetTop
          const distance = scrollPosition - sectionOffset
  
          if (distance > -window.innerHeight && distance < editorialSection.offsetHeight) {
            // Apply parallax effect
            editorialSection.style.backgroundPositionY = `${distance * 0.1}px`
          }
        })
      }
  
      // Lazy load images
      const lazyLoadImages = () => {
        const editorImages = document.querySelectorAll(".editor-avatar")
  
        editorImages.forEach((img) => {
          // Create an observer for each image
          const observer = new IntersectionObserver(
            (entries) => {
              entries.forEach((entry) => {
                if (entry.isIntersecting) {
                  const image = entry.target
  
                  // If the image has a data-src attribute, use it
                  if (image.dataset.src) {
                    image.src = image.dataset.src
                    image.removeAttribute("data-src")
                  }
  
                  // Stop observing once loaded
                  observer.unobserve(image)
                }
              })
            },
            {
              rootMargin: "50px 0px",
              threshold: 0.1,
            },
          )
  
          observer.observe(img)
        })
      }
  
      // Initialize lazy loading if supported
      if ("IntersectionObserver" in window) {
        lazyLoadImages()
      }
  
      // Add animation to cards on scroll
      const animateOnScroll = () => {
        const cards = document.querySelectorAll(".col-editorial-board")
  
        const observer = new IntersectionObserver(
          (entries) => {
            entries.forEach((entry) => {
              if (entry.isIntersecting) {
                entry.target.classList.add("animate")
                observer.unobserve(entry.target)
              }
            })
          },
          {
            rootMargin: "0px",
            threshold: 0.1,
          },
        )
  
        cards.forEach((card) => {
          observer.observe(card)
        })
      }
  
      // Initialize animations if supported
      if ("IntersectionObserver" in window) {
        animateOnScroll()
      }
    })
  })()
  