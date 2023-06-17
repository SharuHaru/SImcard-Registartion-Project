const cancel = document.querySelector('.cancel');

cancel.addEventListener('click', function() {
    window.close();
});

const ok = document.querySelector('.success button');
ok.addEventListener('click', function() {
    const numberdiv = document.querySelector('.number');
    numberdiv.style.display = 'none';

    const body = document.body;
    body.style.backgroundColor = '#E9F1FA';
});

const verify = document.querySelector('.verify');
verify.addEventListener('click', function() {
    const mob = document.querySelector('.mobilenum');
    mob.style.display = 'none';

    const otp = document.querySelector('.otp');
    otp.style.display = 'none';

    const suc = document.querySelector('.success');
    suc.style.display = 'flex';

    
});


const tn = document.querySelector('.tos');
tn.addEventListener('click', function() {
    window.open("/Sim Registartion Project/html/term.html");
});

const pn = document.querySelector('.prin');
pn.addEventListener('click', function() {
    window.open("/Sim Registartion Project/html/privacy.html");
});