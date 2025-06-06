/**
 * Article Summary JavaScript
 * Handles interactions for article summary display
 */
; (($) => {
    $(document).ready(() => {
        $(".obj_article_summary").hover(
            function () {
                $(this).addClass("hovered")
            },
            function () {
                $(this).removeClass("hovered")
            },
        )

        $(".obj_article_summary .title a").on("click", function () {
            var articleTitle = $(this).text().trim()
            console.log("Article clicked:", articleTitle)

            if (typeof gtag !== "undefined") {
                gtag("event", "article_click", {
                    article_title: articleTitle,
                })
            }
        })

        $(".galleys_links a").on("click", function () {
            var galleyType = $(this).text().trim()
            console.log("Galley downloaded:", galleyType)

            // Add download tracking
            if (typeof gtag !== "undefined") {
                gtag("event", "file_download", {
                    file_type: galleyType,
                })
            }
        })

        $(".galleys_links a").on("click", function () {
            var $link = $(this)
            var originalText = $link.text()

            $link.text("Đang tải...")

            setTimeout(() => {
                $link.text(originalText)
            }, 2000)
        })

        if ("IntersectionObserver" in window) {
            var imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        var img = entry.target
                        img.src = img.dataset.src
                        img.classList.remove("lazy")
                        imageObserver.unobserve(img)
                    }
                })
            })

            $(".cover img[data-src]").each(function () {
                imageObserver.observe(this)
            })
        }
    })
})(jQuery)
