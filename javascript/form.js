const cancel = document.querySelector('.cancel');

cancel.addEventListener('click', function() {
    window.close();
});

const verify = document.querySelector('.verify');
verify.addEventListener('click', function() {
    const numberdiv = document.querySelector('.number');
    numberdiv.style.display = 'none';

    const body = document.body;
    body.style.backgroundColor = '#E9F1FA';
});