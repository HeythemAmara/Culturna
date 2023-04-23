//! input in and out Animation =========================================

const toggleedit = document.querySelector(".toggle-edit");
const toggleadd = document.querySelector(".toggle-add");
const InputlistAdd = document.querySelector(".InputlistAdd");
const InputlistEdit = document.querySelector(".InputlistEdit");

const toggleedit2 = document.querySelector(".toggle-edit2");
const toggleadd2 = document.querySelector(".toggle-add2");
const InputlistAdd2 = document.querySelector(".InputlistAdd2");
const InputlistEdit2 = document.querySelector(".InputlistEdit2");

toggleedit.addEventListener("click", () => {
  InputlistEdit.classList.remove("slide-out-right");
  InputlistEdit.classList.add("slide-in-right");
  InputlistAdd.classList.add("slide-out-right");
});

toggleadd.addEventListener("click", () => {
  InputlistAdd.classList.remove("slide-out-right");
  InputlistAdd.classList.add("slide-in-right");
  InputlistEdit.classList.add("slide-out-right");
});

toggleedit2.addEventListener("click", () => {
  InputlistEdit2.classList.remove("slide-out-right");
  InputlistEdit2.classList.add("slide-in-right");
  InputlistAdd2.classList.add("slide-out-right");
});

toggleadd2.addEventListener("click", () => {
  InputlistAdd2.classList.remove("slide-out-right");
  InputlistAdd2.classList.add("slide-in-right");
  InputlistEdit2.classList.add("slide-out-right");
});
