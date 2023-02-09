document.addEventListener("DOMContentLoaded", function (event) {
    const featuredPages = document.getElementById('featured-pages-section');
    if (featuredPages) {
        // get second card & third card
        const wrapper = featuredPages.querySelector('.grid-fixed');
        const card2ImgWidth = wrapper.querySelector('.card-2').querySelector('img').offsetWidth;
        const card3ImgWrapper = wrapper.querySelector('.card-3').querySelector('.image-wrapper');
        if (card2ImgWidth > 0 && card3ImgWrapper) {
            card3ImgWrapper.style.width = `${card2ImgWidth}px`;
        }
    }

    // center dropdown navs
    const mainMenu = document.getElementById("primary-menu");
    const dropdowns = mainMenu.querySelectorAll('.menu-item-has-children');
    if (dropdowns) {
        dropdowns.forEach(dropdown => {
            const subMenu = dropdown.querySelector('.sub-menu')
            const menuShadow = 4;
            const menuPadding = 13;
            const subMenuW = subMenu.getBoundingClientRect().width;
            const triggerW = dropdown.getBoundingClientRect().width;
            let offset = 0;

            // offset = (subMenuW - triggerW - menuShadow * 2 + menuPadding * 2) / 2;

            console.log(triggerW, subMenuW, offset, menuPadding)
            subMenu.style.left = `-${offset}px`
        })
    }
});
