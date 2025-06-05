let offerChoice = document.getElementById('offer-choice');
// let pageTitle = document.getElementById('page-title').innerText;

function redirect() {
    var selectElement = document.getElementById('offer-choice');
    var selectedValue = selectElement.value;
    if (selectedValue !== 'initial' && selectedValue !== 'all') {
        window.location.href = 'add-offer.php?offer_type=' + encodeURIComponent(selectedValue);
    }
    /*
    switch (offerChoice.value) {
        case "room1":
        case "room2":
        case "room3":
        case "room4":
        case "maisonette":
        case "studio":
        case "office":
        case "store":
        case "restaurant":
        case "storage":
        case "housefloor":
            window.location = "../add-offer.php";
            break;
        case "roomn":
            window.location = "../add-offer.php";
            break;
        case "hotel":
            window.location = "../add-offer.php";
            break;
        case "business":
            window.location = "../add-offer.php";
            break;
        case "house":
        case "villa":
            window.location = "../add-offer.php";
            break;
        case "plot":
            window.location = "../add-offer.php";
            break;
        case "land":
            window.location = "../add-offer.php";
            break;
        // garage, industrial
    }*/
}