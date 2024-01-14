const scriptTag = document.querySelector('script[src$="global.js"]');
const colorMode = scriptTag.getAttribute('data-color-mode');


const linkSelector = document.querySelector('.link-container');
const allLinkSelector = document.querySelectorAll('.link-container');
const buttonColor = linkSelector.getAttribute("data-button-color");
const buttonColorHover = linkSelector.getAttribute("data-button-color-hover");
const textColor = linkSelector.getAttribute("data-text-color");
const textColorHover = linkSelector.getAttribute("data-text-color-hover");

function loadColor() {
    allLinkSelector.forEach(function (element) {
        updateColor(element, buttonColor, textColor);
    });
}

function updateColor(element, button, text) {
    element.style.backgroundColor = button;
    element.style.color = text;
}

function updateDarkMode() {
    const faviconLink = document.querySelector("link[rel*='icon']");
    const body = document.body;


    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        body.classList.add('dark-mode');
        body.classList.remove('light-mode');
        faviconLink.href = '/assets/images/logo/designkarussell-logo-small-white.svg';
    } else {
        body.classList.add('light-mode');
        body.classList.remove('dark-mode');
        faviconLink.href = '/assets/images/logo/designkarussell-logo-small.svg';
    }

    console.log(linkSelector)


    if (colorMode === "dark") {
        console.log('TEST')

        body.classList.add('dark-mode');
        body.classList.remove('light-mode');
    }
    if (colorMode === "light") {
        body.classList.add('light-mode');
        body.classList.remove('dark-mode');
    }
}

window.matchMedia('(prefers-color-scheme: dark)').addListener(updateDarkMode);

updateDarkMode();
loadColor();