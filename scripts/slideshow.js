const DIRECTION_LEFT = 1
const DIRECTION_RIGHT = -1

document.addEventListener("DOMContentLoaded", function() {

    let slideshowContainers = document.getElementsByClassName("slideshow")
    if (slideshowContainers.length == 0) return

    for (let container of slideshowContainers) {

        let slides = container.getElementsByClassName("slideshow-slide")
        if (slides.length == 0) continue
        slides[0].classList.add("active-slide")

        let preBtn = container.getElementsByClassName("slide-pre")[0]
        let nextBtn = container.getElementsByClassName("slide-next")[0]
        let slideSelector = container.getElementsByClassName("slide-selector")[0]

        preBtn.addEventListener("click", function() {
            changeSlide(container, slides, DIRECTION_RIGHT)
        })
        nextBtn.addEventListener("click", function() {
            changeSlide(container, slides, DIRECTION_LEFT)
        })

        for (let i = 0; i < slides.length; i++) {
            let circle = document.createElement("button")
            circle.classList.add("slide-indicator")
            // temporary
            circle.innerText = i + 1
            if (i == 0) circle.classList.add("current-slide-indicator")

            circle.addEventListener("click", function() {
                changeSlideTo(container, slides, i)
            })

            slideSelector.appendChild(circle)
        }

        displaySlideIndicators(document.getElementsByClassName("slide-indicator"), 0)

    }

})

function getCurrentSlideIndex(slides) {
    for (let i = 0; i < slides.length; i++) {
        if (slides[i].classList.contains("active-slide")) return i
    }
}

function changeSlide(slidesContainer, slides, direction) {
    let currentSlide = getCurrentSlideIndex(slides)
    let newSlide = currentSlide + direction
    if (newSlide >= slides.length) newSlide = 0
    else if (newSlide < 0) newSlide = slides.length - 1
    changeSlideTo(slidesContainer, slides, newSlide)
}

function changeSlideTo(slidesContainer, slides, index) {
    let currentSlide = getCurrentSlideIndex(slides)
    let slideSelectors = slidesContainer.getElementsByClassName("slide-indicator")
    slides[currentSlide].classList.remove("active-slide")
    slideSelectors[currentSlide].classList.remove("current-slide-indicator")
    slides[index].classList.add("active-slide")
    slideSelectors[index].classList.add("current-slide-indicator")
    displaySlideIndicators(slideSelectors, index)

}

function displaySlideIndicators(slideIndicators, current) {
    let totalSlides = slideIndicators.length
    let count = 1
    let i = 0
    for (let indicator of slideIndicators) {
        indicator.style.display = "none"
    }
    slideIndicators[current].style.display = "inline"
    let indicatorCount = totalSlides < 5 ? totalSlides : 5
    while (count < indicatorCount) {
        i++
        if (current + i < totalSlides) {
            slideIndicators[current + i].style.display = "inline"
            count++
        }
        if (current - i >= 0) {
            slideIndicators[current - i].style.display = "inline"
            count++
        }
    }
}
