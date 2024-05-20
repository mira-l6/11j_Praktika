let popupBtn = document.getElementById('popupShow');
let popupArea = document.getElementById('popup');
let pageDarken = document.getElementById('pageMask');

function popupShow() {
    // alert('DOES IT WORK');
    popupArea.classList.toggle("show");
    pageDarken.classList.toggle("show");
}
function popupClose() {
    popupArea.classList.remove("show");
    pageDarken.classList.remove("show");
}