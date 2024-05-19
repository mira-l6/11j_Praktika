const images = [...documen.querySelectorAll('.small-image')];

//popup
const popup = document.querySelector('.popup');
const closeBtn = document.querySelector('close-btn');
const largeImage = document.querySelector('.large-image');
const leftArrow = document.querySelector('.left-arrow');
const rightArrow = documnet.querySelector('.right-arrow');
let index = 0;

images.forEach((item, i) => {
    item.addEventListener('click', () => {
        updateImage(i);
        popup.classList.toggle('active');
    })
})

const updateImage = (i) => {
    for(let i = 0; i < images.length; i++){
        let path = images[i].src;
        largeImage[i].src = path;
    }
}

closeBtn.addEventListener('click', () => {
    popup.classList.toggle('active');
})

