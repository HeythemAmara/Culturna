//! input in and out Animation =========================================

const toggleedit = document.querySelector('.toggle-edit');
const toggleadd = document.querySelector('.toggle-add');
const InputlistAdd = document.querySelector('.InputlistAdd');
const InputlistEdit = document.querySelector('.InputlistEdit');



toggleedit.addEventListener('click', () => {
    InputlistEdit.classList.remove('slide-out-right');
    InputlistEdit.classList.add('slide-in-right');
    InputlistAdd.classList.add('slide-out-right');
});

toggleadd.addEventListener('click', () => {
    InputlistAdd.classList.remove('slide-out-right');
    InputlistAdd.classList.add('slide-in-right');
    InputlistEdit.classList.add('slide-out-right');
});