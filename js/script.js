let password = document.getElementById('password');
let confirm_password = document.getElementById('confirm-password')
let errorMsg = document.querySelector('.error');

let passCheck = function(){
    if(password.value != confirm_password.value){
        confirm_password.style.color = 'red';
        errorMsg.classList.remove("invisible");
        errorMsg.classList.add("visible");
    }
    else{
        confirm_password.style.color = 'black';
        errorMsg.classList.add("invisible");
        errorMsg.classList.remove("visible");
    }
}