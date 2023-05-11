
const toggleChat = document.querySelector('.toggleChat');
const DivChat = document.querySelector('.DivChat');
const BtnCloseChat = document.querySelector('.BtnCloseChat');
const ToBeBlured = document.querySelectorAll('.ToBeBlured');


toggleChat.addEventListener('click', () => {
    DivChat.classList.remove('hide');
    DivChat.classList.remove('slide-out-right');
    DivChat.classList.add('slide-in-right');
    ToBeBlured.forEach((element) => {
      element.classList.add('blur');
    });
});

BtnCloseChat.addEventListener('click', () => {
  DivChat.classList.remove('slide-in-right');
  DivChat.classList.add('slide-out-right');
  
  setTimeout(() => {
    DivChat.classList.add('hide');
  }, 600);
  setTimeout(() => {
    ToBeBlured.forEach((element) => {
      element.classList.remove('blur');
    });
  }, 700);
});






const A_quoi_sert_event =document.getElementById("A-quoi-sert-event");
const Quand_evenement_lieu=document.getElementById("Quand-evenement-lieu");
const Changer_mes_Reservation =document.getElementById("Changer-mes-Reservation");
const chatContainer = document.querySelector('.direct-chat-messages');

  A_quoi_sert_event.addEventListener('click', () => {
    const chatMessage = `
      <div class="direct-chat-msg right">
        <div class="direct-chat-info clearfix">
          <span class="direct-chat-name pull-left">Client</span>
          <span class="direct-chat-timestamp pull-right"><?=$currentTime?></span>
        </div>
        <img class="direct-chat-img" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="message user image">
        <div class="direct-chat-text">
          À quoi sert cette page ?
        </div>
      </div>


      <div class="direct-chat-msg">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left">Culturna</span>
                        <span class="direct-chat-timestamp pull-right"><?=$currentTime?></span>
                      </div>
                      <img class="direct-chat-img" src="https://cdn3.iconfinder.com/data/icons/avatars-9/145/Avatar_Robot-512.png" alt="message user image">
                      <div class="direct-chat-text">
                            C'est l'historique de vos Reservation .
                      </div>
        
                    </div>

    `;
    chatContainer.insertAdjacentHTML('beforeend', chatMessage);
  });

Quand_evenement_lieu.addEventListener('click', () => {
    const chatMessage = `
      <div class="direct-chat-msg right">
        <div class="direct-chat-info clearfix">
          <span class="direct-chat-name pull-left">Client</span>
          <span class="direct-chat-timestamp pull-right"><?=$currentTime?></span>
        </div>
        <img class="direct-chat-img" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="message user image">
        <div class="direct-chat-text">
          Quand le conducteur arrive-t-il ?
        </div>
      </div>


      <div class="direct-chat-msg">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left">Culturna</span>
                        <span class="direct-chat-timestamp pull-right"><?=$currentTime?></span>
                      </div>
                      <img class="direct-chat-img" src="https://cdn3.iconfinder.com/data/icons/avatars-9/145/Avatar_Robot-512.png" alt="message user image">
                      <div class="direct-chat-text">
                          Un Mail Rappel vous sera envoyer avant 2 jour .
                      </div>
        
                    </div>


    `;
    chatContainer.insertAdjacentHTML('beforeend', chatMessage);
  });


Changer_mes_Reservation.addEventListener('click', () => {
    const chatMessage = `
      <div class="direct-chat-msg right">
        <div class="direct-chat-info clearfix">
          <span class="direct-chat-name pull-left">Client</span>
          <span class="direct-chat-timestamp pull-right"><?=$currentTime?></span>
        </div>
        <img class="direct-chat-img" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="message user image">
        <div class="direct-chat-text">
          Puis-je changer mes transports ?
        </div>
      </div>



      <div class="direct-chat-msg">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left">Culturna</span>
                        <span class="direct-chat-timestamp pull-right"><?=$currentTime?></span>
                      </div>
                      <img class="direct-chat-img" src="https://cdn3.iconfinder.com/data/icons/avatars-9/145/Avatar_Robot-512.png" alt="message user image">
                      <div class="direct-chat-text">
                          Oui, Cliquez sur Action , puis l'icone de modification .
                      </div>
        
                    </div>

    `;
    chatContainer.insertAdjacentHTML('beforeend', chatMessage);
  });