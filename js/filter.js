const townArea = document.getElementById('town-area');
const town = document.getElementById('populated-place');


town.addEventListener('change', AddProperRegion)

function AddProperRegion(){
    // const townOption = townArea.getElementsByTagName('option');
    
    

    switch(town.value){
        case 'tblagoevgrad':
            townArea.innerHTML = `
            <option value="">Ален мак</option>
            <option value="">Балабарши</option>
            <option value="">Бялата висота</option>
            <option value="">Варошак</option>
            <option value="">Втора промишлена зона</option>
            <option value="">Грамада</option>`
        break;

        case 'град Бургас':
            townArea.innerHTML = `
             <option value="">Акациите</option>
             <option value="">Банево</option>
             <option value="">Брята Миладинови</option>
             <option value="">Ветрен</option>
             <option value="">Възраждане</option>
             <option value="">Горно езерово</option>`
        break;
    }


}