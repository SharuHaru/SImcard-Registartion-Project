//  =============== VARIABLES ===============
const clickButton = document.querySelector('.button');
const listNav = document.querySelector(".link-div ul");
console.log(listNav);



function navHover(){

        const liNav = document.querySelectorAll(".link-div li");

        for (let i = 0; i < 5; i++) {
            liNav[i].style.color = 'blue';
        }
        

   
}

// function showForm(){
//     const numberOtp = document.querySelector('.number-otp');
//     numberOtp.style.display = 'flex';
    

// }

// clickButton.addEventListener('click', showForm);

