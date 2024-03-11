let password = document.querySelector('#password');
let confirm_password = document.querySelector('#confirm-password')
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

// let password = document.querySelector('#password'); // ziskame input s nasim heslom
// let confirm_password = document.querySelector('#confirm-password');
// let errorMsg = document.querySelector('.error');

// let passCheck = function () {
//     if(password.value != confirm_password.value){
//         confirm_password.style.color = 'red';
//         errorMsg.classList.remove("invisible");
//         errorMsg.classList.add("visible");
//     }
//     else{
//         confirm_password.style.color = 'black';
//         errorMsg.classList.add("invisible");
//         errorMsg.classList.remove("visible");
//     }
// }