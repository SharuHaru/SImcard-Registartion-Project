// =================== NAVIGATION JAVASCRIPT ===================

//Hover Effect

const navli = document.querySelector('.link-div ul');
console.log(navli);

navli.addEventListener('mouseover', function(e) {
    const target = e.target;

    if(target.matches('li') && !target.classList.contains('active-li')){
        target.style.color = 'rgba(5, 0, 255, 0.5)';
        target.style.cursor = 'pointer';
        
    }
});

navli.addEventListener('mouseout', function (e) {
    const target = e.target;

    if (target.matches('li') && !target.classList.contains('active-li')) {
        target.style.color = 'inherit';
        target.style.cursor = 'pointer';
    }
 });

 //Footer Hover Effect
 const footerli = document.querySelector('.footer2')
 
 footerli.addEventListener('mouseover', function(e) {
    const target = e.target;
    if(target.matches('li')){
        target.style.color = 'rgba(5, 0, 255, 0.5)';
        target.style.cursor = 'pointer';
    }
    
 });

 footerli.addEventListener('mouseout', function (e) {
    const target = e.target;

    if (target.matches('li')) {
        target.style.color = 'inherit';
        target.style.cursor = 'pointer';
    }
 });
    


// Click Effect 

const faq = document.querySelector('#faqs');
const home = document.querySelector('#home');
const about = document.querySelector('#about');
const contact = document.querySelector('#contact');
const account = document.querySelector('#account');
const contacts = document.querySelector('#contacts');
const abouts = document.querySelector('#abouts');
const term = document.querySelector('#term');
const privacy = document.querySelector('#privacy');



faq.addEventListener('click', function(e) {
    const faqContainer = document.querySelector('.faq-container');
    faqContainer.scrollIntoView({ behavior: 'smooth' });
    
    faq.classList.add('active-li');
    home.classList.remove('active-li');
    faq.style.color = 'rgba(9, 156, 242, 1)';
});

home.addEventListener('click', function() {
    window.location.replace("/Sim Registartion Project/index.html");
});

about.addEventListener('click', function() {
    window.location.replace("/Sim Registartion Project/html/about-us.html");
});

contact.addEventListener('click', function() {
    window.location.replace("/Sim Registartion Project/html/contact-us.html");
});

account.addEventListener('click', function() {
    window.location.replace("/Sim Registartion Project/html/account.html");
});

abouts.addEventListener('click', function() {
    window.location.replace("/Sim Registartion Project/html/about-us.html");
});

contacts.addEventListener('click', function() {
    window.location.replace("/Sim Registartion Project/html/contact-us.html");
});

term.addEventListener('click', function() {
    window.location.replace("/Sim Registartion Project/html/term.html");
});

privacy.addEventListener('click', function() {
    window.location.replace("/Sim Registartion Project/html/privacy.html");
});