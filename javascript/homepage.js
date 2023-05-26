//  =============== VARIABLES ===============
const clickButton = document.querySelector('.button');


function showForm(){
    const numberOtp = document.querySelector('.number-otp');
    numberOtp.style.display = 'block';
    

}

clickButton.addEventListener('click', showForm);

