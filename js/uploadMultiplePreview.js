let images = [];

function imageSelect() {
    let image = document.getElementById('image-upload-multiple').files;
    for (let i = 0; i < image.length; i++) {
        images.push({
            "name": image[i].name,
            "url": URL.createObjectURL(image[i]),
            "file": image[i]
        })
    }
    // document.getElementById('form').reset();
    document.getElementById('container').innerHTML = imageShow();
}
function imageShow() {
    var image = "";
    images.forEach((i) => {
        image += `<div class="image-box d-flex justify-content-center position-relative">
                        <img src="` + i.url + `" alt="offer image">
                        <span class="position-absolute material-icons" onclick="deleteImage(` + images.indexOf(i) + `)">cancel</span>
                    </div>`;
    })
    return image;
}
function deleteImage(e) {
    images.splice(e, 1);
    document.getElementById('container').innerHTML = imageShow();
}
