

let fileInput = document.getElementById('image-upload-multiple');
let imageContainer = document.getElementById('container');

function preview(){
    imageContainer.innerHTML='';
    for(i of fileInput.files){
        let reader = new FileReader();
        let figure = document.createElement("figure");
        let figCap = document.createElement('figcaption');
        figCap.innerText = i.name;
        figure.appendChild(figCap);
        reader.onload = ()=>{
            let img = document.createElement('img');
            img.setAttribute('src', reader.result);
            figure.insertBefore(img, figCap);
        }
        figure.classList.add('image-box', 'd-flex', 'flex-column', 'align-items-center');
        
        imageContainer.appendChild(figure);
        reader.readAsDataURL(i);
    }
}
