
const hourArrow = document.querySelector('#data-hour-arrow');
const minArrow = document.querySelector('#data-min-arrow');
const secArrow = document.querySelector('#data-sec-arrow');
const btns = document.querySelectorAll('input[type="button"]');

let timeOffset = 0;


function init() {
    const currentLocalDate = new Date();
    currentDate = new Date(
        2020,
        11,
        13,
        (currentLocalDate.getHours() + timeOffset) % 24,
        currentLocalDate.getMinutes(),
        currentLocalDate.getSeconds()
    );
}

function setClock() {
    const sec = (currentDate.getSeconds() + 1) % 60;
    currentDate.setSeconds(sec);
    if (currentDate.getSeconds() == 0) {
        const mins = (currentDate.getMinutes() + 1) % 60;
        currentDate.setMinutes(mins);
    } 
    if (currentDate.getMinutes() == 0){
        const hours = (currentDate.getHours() + 1) % 24;
        currentDate.setHours(hours);
    }

    const secRatio = currentDate.getSeconds() / 60;
    const minRatio = (secRatio + currentDate.getMinutes()) / 60;
    const hourRatio = (minRatio + currentDate.getHours()) / 12;
    
    setRotation(hourArrow, hourRatio);
    setRotation(minArrow, minRatio);
    setRotation(secArrow, secRatio);
}

function setRotation(element, rotationRatio) {
    element.style.setProperty('--rotation', (rotationRatio * 360) % 360);
}

function setTimeOffset(offset, city) {
    let cityName = document.querySelector('.city');
    cityName.innerHTML = city;
    btns.forEach(element => element.disabled = true);
    btns.forEach(element => element.style = "display: none");
    hourArrow.classList.add('hack');
    timeOffset = offset;
    init();
    setTimeout(
        () => {
            hourArrow.classList.remove('hack');
            btns.forEach(element => element.disabled = false);
            btns.forEach(element => element.style = "display: visible");
        }, 2000);
}

/* function hide() {
    let addDetails = document.querySelector('.addDetails');
    addDetails.classList.add('hidden');
}

function visible() {
    let addDetails = document.querySelector('.addDetails');
    addDetails.classList.remove('hidden');
}

function addCity() {
    let parent_element = document.querySelector('.btns')
    let cityName = document.querySelector('.cityName');
    let timeZone = document.querySelector('.timeZone').value;
    let new_input = document.createElement('input');
    new_input.setAttribute('type', 'button');
    new_input.setAttribute('value', cityName.value);
    
    
    parent_element.appendChild(new_input);

    init();
    setClock();
    
} */

init();
setClock();
setInterval(setClock, 1000);

