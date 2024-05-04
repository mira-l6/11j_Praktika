let offerChoice = document.getElementById('offer-choice');
// let pageTitle = document.getElementById('page-title').innerText;

function redirect() {
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
            window.location = "../add-offer-universal.html";
            break;
        case "roomn":
            window.location = "../add-offer-roomn.html";
            break;
        case "hotel":
            window.location = "../add-offer-hotel.html";
            break;
        case "business":
            window.location = "../add-offer-business.html";
            break;
        case "house":
        case "villa":
            window.location = "../add-offer-villa-house.html";
            break;
        case "plot":
            window.location = "../add-offer-plot.html";
            break;
        case "land":
            window.location = "../add-offer-land.html";
            break;
        // garage, industrial
    }
}