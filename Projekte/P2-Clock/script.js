setInterval(setClock, 1000);

const hourArrow = document.querySelector('[data-hour-arrow]');
const minArrow = document.querySelector('[data-min-arrow]');
const secArrow = document.querySelector('[data-sec-arrow]');

function setClock() {
    const currentDate = new Date();
    const secRatio = currentDate.getSeconds() / 60;
    const minRatio = currentDate.getMinutes() / 60;
    const hourRatio = currentDate.getHours() / 12;

    setRotation(hourArrow, hourRatio);
    setRotation(minArrow, minRatio);
    setRotation(secArrow, secRatio);
}

function setRotation(element, rotationRatio) {
    element.style.setProperty('--rotation', rotationRatio * 360);
}

setClock()