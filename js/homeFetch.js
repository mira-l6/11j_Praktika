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
    },
    fourth = {
        img: "./img/logo.png",
        title: "TheLogo4",
        paragraph: "Vier" 
    },
    fifth = {
        img: "./img/JohnDoe.jpg",
        title: "TheLogo5",
        paragraph: "Fünf" 
    },
    sixth = {
        img: "./img/office.png",
        title: "TheLogo6",
        paragraph: "Sechs" 
    },
]


function DummyFill(){
    let newRow;
    let currentRow;

    dummyOffer.forEach(({img, title, paragraph}, index) =>{
        if(index % 4 === 0 || index === 0){
            newRow = document.createElement('div');
            newRow.classList.add("row");
            newRow.id = `row-${index}`;
            newRow.classList.add("gap-3");
            newRow.classList.add("mb-5");
            offerBox.appendChild(newRow);
            currentRow = document.getElementById(`row-${index}`);

            currentRow.innerHTML += `
            <div class="offer-box d-flex-column col-md">
                <img class="offer-img" src="${img}">
                <h5 class="text-center">${title}</h5>
                <p class="text-center">${paragraph}</p>                        
            </div>
            
            `;
        }
        else{
            currentRow.innerHTML += `
            <div class="offer-box d-flex-column col-md">
                <img class="offer-img" src="${img}">
                <h5 class="text-center">${title}</h5>
                <p class="text-center">${paragraph}</p>                        
            </div>
            `
        }
        index++;
        
    });
}


    

buttonAdd.addEventListener('click', DummyFill)