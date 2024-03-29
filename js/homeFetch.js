//getting the document elements
const offerBox = document.getElementById("offer-flexbox");
const buttonAdd = document.getElementById("add-button");


//variables for pagination control
let startingIndex = 0;
let endingIndex = 8;
let offerInfo = [];


//await function for fetching offers from php
// await function GetData(){ 
//     fetch(smth)
//     .then((res) => res.json())
//     .then(
//         (data) => {

//         }
//     )
//     .catch( (err) => console.error(`Fetch promise rejected, very sadge; errot ype ${err}`))
// }

// function for filling the page 
const FillPage = (offer) =>{
    offer.array.forEach(({a,b,c}, index) => {
        offerBox.innerHTML += `
        
        
        
        `;
    });
}
const dummyOffer = [
    first ={
        img: "./img/logo.png",
        title: "TheLogo1",
        paragraph: "Eins" 
    },
    second = {
        img: "./img/JohnDoe.jpg",
        title: "TheLogo2",
        paragraph: "Zwei" 
    },
    third = {
        img: "./img/office.png",
        title: "TheLogo3",
        paragraph: "Drei" 
    }
]


function DummyFill(){
    

    dummyOffer.forEach(({img, title, paragraph}, index) =>{
        offerBox.innerHTML += `
        <div class="offer-box d-flex-column">
            <img class="offer-img" src="${img}">
            <h5 class="text-center">${title}</h5>
            <p class="text-center">${paragraph}</p> 
        </div>
        `
    });
}


    

buttonAdd.addEventListener('click', DummyFill)