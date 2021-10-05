function setPageTitleTypography() {
    const pageTitle = document.querySelector('h1.page-title.fancy-type')
    if (!pageTitle) { return }

    const words = pageTitle.innerText.split(' ')
    const parent = pageTitle.parentElement;
    pageTitle.remove();


    const sansSerif = document.createElement('span');
    sansSerif.classList.add('sans-serif');
    sansSerif.innerText = ` ${words[0]}`;

    const serif = document.createElement('span');
    serif.classList.add('serif');
    serif.innerText = words[1]

    const newH1 = document.createElement('h1');
    newH1.classList.add('page-title')
    newH1.appendChild(sansSerif);
    newH1.appendChild(serif);

    parent.appendChild(newH1);

}
document.addEventListener("DOMContentLoaded", function(event) { 
    //do work
    // find title and add to classes 
    setPageTitleTypography();
});