let country = document.getElementById('country');
let populatedArea = document.getElementById('populated-area');

country.addEventListener('change', filterByCountry);
function filterByCountry(){
    switch(country.value){
        case 'Bulgaria':
            populatedArea.innerHTML = `
            <option value="">Област</option>
            <option value="pburgas">област Бургас</option>
            <option value="pvarna">област Варна</option>
            <option value="pvt">област Велико Търново</option>
            <option value="pvidin">област Видин</option>
            <option value="pvraca">област Враца</option>
            <option value="pgabrovo">област Габрово</option>
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
