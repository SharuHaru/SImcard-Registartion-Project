const number = document.getElementById('MobileNumber');

console.log(MobileNumber);


const sub = document.querySelector('.submission');

sub.addEventListener('click', function(){
    if(number.length > 11){
        return number.style.backgroundColor = 'red';
    }
})