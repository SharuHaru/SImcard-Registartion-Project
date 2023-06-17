// Frequently ask question function

const accordion = document.getElementsByClassName('content-container');

for (i = 0; i < accordion.length; i++) {
    
    accordion[i].addEventListener('click', function() {
        this.classList.toggle('active');
    })
}


// Button to registration form
const register = document.querySelector('button');
console.log(register);

register.addEventListener('click', function() {
    window.open("/Sim Registartion Project/html/form.html", "_blank");
});

