// =================== NAVIGATION JAVASCRIPT ===================

//Hover Effect

const navli = document.querySelector('.link-div ul');
console.log(navli);

navli.addEventListener('mouseover', function(e) {
    console.log(e);
    const target = e.target;

    if(target.matches('li') && !target.classList.contains('active-li')){
        target.style.color = 'rgba(5, 0, 255, 0.5)';
        
    }
});

navli.addEventListener('mouseout', function (e) {
        console.log(e);
        const target = e.target;

        if (target.matches('li') && !target.classList.contains('active-li')) {
            target.style.color = 'inherit';
        }
    });



// Click Effect 

const faq = document.querySelector('#faqs');
const home = document.querySelector('#home');

faq.addEventListener('click', function(e) {
    const faqContainer = document.querySelector('.faq-container');
    faqContainer.scrollIntoView({ behavior: 'smooth' });
    
    faq.classList.add('active-li');
    home.classList.remove('active-li');
    faq.style.color = 'rgba(9, 156, 242, 1)';
});

home.addEventListener('click', function() {
    window.location.replace("./index.html");
});

