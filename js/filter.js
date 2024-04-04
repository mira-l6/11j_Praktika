const townArea = document.getElementById('town-area');
const town = document.getElementById('populated-place');

town.addEventListener('change', AddProperRegion)

function AddProperRegion(){
    let townOption = townArea.getElementsByTagName('option').length;

    console.log(townOption);
    
    // switch(townOption){
    //     case 'град Благоевград':
    //         town.innerHTML = `
    //         <option value="">Ален мак</option>
    //         <option value="">Балабарши</option>
    //         <option value="">Бялата висота</option>
    //         <option value="">Варошак</option>
    //         <option value="">Втора промишлена зона</option>
    //         <option value="">Грамада</option>`
    //         break;

    //     case 'град Бургас':
    //         town.innerHTML = `
    //         <option value="">Акациите</option>
    //         <option value="">Банево</option>
    //         <option value="">Брята Миладинови</option>
    //         <option value="">Ветрен</option>
    //         <option value="">Възраждане</option>
    //         <option value="">Горно езерово</option>`
    //         break;
    // }


}