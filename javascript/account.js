const forgot = document.querySelector('.forgot');
const forgotdiv = document.querySelector('.forgotdiv');
const thanks = document.querySelector('.thanks');
const notregister = document.querySelector('.dontaccount');

forgot.addEventListener('click', function(){
    forgotdiv.style.display = 'flex';
});

thanks.addEventListener('click', function(){
    forgotdiv.style.display = 'none';
});

notregister.addEventListener('click', function(){
    window.location.replace("/Sim Registartion Project/index.html");
});




