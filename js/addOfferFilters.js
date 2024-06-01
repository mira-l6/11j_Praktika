let country = document.getElementById('country');
let populatedArea = document.getElementById('populated-area');

country.addEventListener('change', filterByCountry);
function filterByCountry(){
    switch(country.value){
        case 'Bulgaria':
            populatedArea.innerHTML = `
            <option value="">Област</option>
            <option value="област Бургас">област Бургас</option>
            <option value="област Варна">област Варна</option>
            <option value="област Велико Търново">област Велико Търново</option>
            <option value="област Видин">област Видин</option>
            <option value="област Враца">област Враца</option>
            <option value="област Габрово">област Габрово</option>
            <option value="pdobrich">област Добрич</option>
            <option value="pkardjali">област Кърджали</option>
            <option value="pkustendil">област Кюстендил</option>
            <option value="plovech">област Ловеч</option>
            <option value="pmontana">област Монтана</option>
            <option value="ppazardjik">област Пазарджик</option>
            <option value="ppernik">област Перник</option>
            <option value="ppleven">област Плевен</option>
            <option value="pplovdiv">област Пловдив</option>
            <option value="prazgrad">област Разград</option>
            <option value="pruse">област Русе</option>
            <option value="psilistra">област Силистра</option>
            <option value="psliven">област Сливен</option>
            <option value="psmolyan">област Смолян</option>
            <option value="psofia">област София</option>
            <option value="psz">област Стара Загора</option>
            <option value="ptargovishte">област Търговище</option>
            <option value="phaskovo">област Хасково</option>
            <option value="pshumen">област Шумен</option>
            <option value="pyambol">област Ямбол</option>`;
            break;
        case 'Greece':
            
    }
}
