let password = document.getElementById('password');
let confirm_password = document.getElementById('confirm-password');
let passCheck = function(){
  if(password.value != confirm_password.value){
    confirm_password.style.color = 'red';
  }
  else{
    confirm_password.style.color = 'black';
  }
}