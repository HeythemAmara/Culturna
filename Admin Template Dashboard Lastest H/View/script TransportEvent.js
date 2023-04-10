var resevtest = document.getElementById("resevtest").value;
const btnrequesttransport = document.querySelector('.btnrequesttransport');

window.onload = function () {  
    if(resevtest==1)
    {
        document.querySelector(".affiche").innerHTML = `<h1 class="message-text">Your Reservation is successfully created </h1>`;
        btnrequesttransport.classList.remove('hide');
    }
    else
    {
        document.querySelector(".affiche").innerHTML = `<h1 class="message-text">Your Reservation's creation has failed </h1>`;
        btnrequesttransport.classList.add('hide');
    }
}

const toggle = document.querySelector("button.toggle");
const InputVisib = document.querySelector('.input-visibility');

//! input in and out Animation =========================================

toggle.addEventListener('click', () => {
    InputVisib.classList.remove('out-of-screen');
    InputVisib.classList.remove('flip-out-hor-top');
    InputVisib.classList.add('flip-in-hor-bottom');
});

closebtn1.addEventListener('click', () => {
    InputVisib.classList.add('flip-out-hor-top');
    InputVisib.classList.remove('flip-in-hor-bottom');
});
closebtn2.addEventListener('click', () => {
    InputVisib.classList.add('flip-out-hor-top');
    InputVisib.classList.remove('flip-in-hor-bottom');
});
