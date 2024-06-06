let pass = document.getElementById('password');

function passShow(){
    if(pass.type === 'text'){
        pass.type = 'password';
    }else{
        pass.type = 'text';
    }
}