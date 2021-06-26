// LANGUAGE BUTTONS (im header)+ cookies for language

document.querySelector('#changeToEn').addEventListener('click', changeToEn);
document.querySelector('#changeToDe').addEventListener('click', changeToDe);
document.querySelector('#changeToRu').addEventListener('click', changeToRu);
document.querySelector('#checkCookie').addEventListener('click', checkCookie);

function reload() {
    location.reload();
}

function changeToEn() {
    document.cookie = "lang=EN;"
    console.log("LKJLKJ");
    reload()
}
function changeToDe() {
    document.cookie = "lang=DE;"
    reload()
}
function changeToRu() {
    document.cookie = "lang=RU;"
    reload()
    
}

function checkCookie() {
    console.log(document.cookie)
    
}