function goToNextSlide(slider) {
    const slideItems = slider.querySelector('.slider-items');
    if (!slideItems) { return };
    const slides = Array.from(slideItems.children);
    const count = slides.length;
    // console.log(count)
    const first = slideItems.children[0];
    slideItems.children[0].remove();
    slideItems.appendChild(first);
}

document.addEventListener("DOMContentLoaded", function(event) { 
    //do work
    const sliders = document.querySelectorAll('.slider');
    if (!sliders) { return };
    // console.log(sliders);

    sliders.forEach(slider => {
        // console.log(slider)
        const next = slider.querySelector('.slider-nav button');
        if (next) {
            next.addEventListener('click', function() {
                goToNextSlide(slider);
            })
        }
    })
});

