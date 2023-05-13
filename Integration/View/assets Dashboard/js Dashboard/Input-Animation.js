//! input in and out Animation =========================================
const toggleedit = document.querySelectorAll('.toggle-edit');
const toggleadd = document.querySelector('.toggle-add');
const InputlistAdd = document.querySelector('.InputlistAdd');
const InputlistEdit = document.querySelector('.InputlistEdit');


const toggleedit2 = document.querySelectorAll('.toggle-edit2');
const toggleadd2 = document.querySelector('.toggle-add2');
const InputlistAdd2 = document.querySelector('.InputlistAdd2');
const InputlistEdit2 = document.querySelector('.InputlistEdit2');



toggleedit.forEach(function(item) {
  item.addEventListener('click', () => {
    InputlistEdit.classList.remove('slide-out-right');
    InputlistEdit.classList.add('slide-in-right');
    InputlistAdd.classList.add('slide-out-right');
  });
});

toggleedit2.forEach(function(item) {
  item.addEventListener('click', () => {
    InputlistEdit2.classList.remove('slide-out-right');
    InputlistEdit2.classList.add('slide-in-right');
    InputlistAdd2.classList.add('slide-out-right');
  });
});

toggleadd.addEventListener('click', () => {
    InputlistAdd.classList.remove('slide-out-right');
    InputlistAdd.classList.add('slide-in-right');
    InputlistEdit.classList.add('slide-out-right');
});

toggleadd2.addEventListener('click', () => {
    InputlistAdd2.classList.remove('slide-out-right');
    InputlistAdd2.classList.add('slide-in-right');
    InputlistEdit2.classList.add('slide-out-right');
});


const toggleCalendar = document.querySelector('.toggleCalendar');
const DivCalendar = document.querySelector('.DivCalendar');
const ToBeBlured = document.querySelectorAll('.ToBeBlured');


toggleCalendar.addEventListener('click', () => {
    DivCalendar.classList.toggle('hide');
    DivCalendar.classList.toggle('slide-out-right');
    DivCalendar.classList.toggle('slide-in-right');
    ToBeBlured.forEach((element) => {
      element.classList.toggle('blur');
    });
});

const toggleChat = document.querySelector('.toggleChat');
const DivChat = document.querySelector('.DivChat');
const BtnCloseChat = document.querySelector('.BtnCloseChat');


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






chatopen= document.querySelector('.chatopen');
window.onload
{
  if(chatopen.value==1)
  {
    DivChat.classList.remove('hide');
    DivChat.classList.remove('slide-out-right');
    DivChat.classList.add('slide-in-right');
    ToBeBlured.forEach((element) => {
      element.classList.add('blur');
    });
  }
  else
  {
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
  }
}
