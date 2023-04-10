window.onload = function () {  

    idconnection = document.getElementById("idclienta").value;
    console.log(idconnection);
    const displaylogin = document.querySelectorAll('.displaylogin');
    const connecter=document.querySelector('.connecter');
    const deconnecter=document.querySelector('.deconnecter');

    if((idconnection==null) || (idconnection==0))
    {
        deconnecter.classList.remove('hide');
        displaylogin.forEach(displaylogin => {
                displaylogin.classList.add('hide');
        });
        connecter.classList.add('hide');
    }
}