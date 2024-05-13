let pass = document.getElementById('agent-password');

function passShow(){
    if(pass.type == 'text'){
        pass.type == 'password';
    }else{
        pass.type = 'text';
    }
}