function checkName() {
  var nameInput = document.getElementById("namea");
  var nameValue = nameInput.value;
  const longueur = nameValue.length;
  const premiereLettre = nameValue.charAt(0);
  if (longueur < 4) {
    document.getElementById("nameError").innerHTML = "Le nom doit contenir au moins 4 lettres";
    document.getElementById("nameError").style.display = "block";
    nameInput.classList.add("error");
    nameInput.value = '';
    nameInput.focus();
  } else if (longueur > 12) {
    document.getElementById("nameError").innerHTML = "Le nom ne peut pas contenir plus de 12 lettres";
    document.getElementById("nameError").style.display = "block";
    nameInput.classList.add("error");
    nameInput.value = '';
    nameInput.focus();
  } else if (premiereLettre !== premiereLettre.toUpperCase()) {
    document.getElementById("nameError").innerHTML = "La première lettre doit être en majuscule";
    document.getElementById("nameError").style.display = "block";
    nameInput.classList.add("error");
    nameInput.value = '';
    nameInput.focus();
  } else {
    document.getElementById("nameError").style.display = "none";
    nameInput.classList.remove("error");
  }
}



function checkNameUpdate() {
  var nameInput = document.getElementById("nameu");
  var nameValue = nameInput.value;
  const longueur = nameValue.length;
  const premiereLettre = nameValue.charAt(0);
  if (longueur < 4) {
    document.getElementById("updateError").innerHTML = "Le nom doit contenir au moins 4 lettres";
    document.getElementById("updateError").style.display = "block";
    nameInput.classList.add("error");
    nameInput.value = '';
    nameInput.focus();
  } else if (longueur > 12) {
    document.getElementById("updateError").innerHTML = "Le nom ne peut pas contenir plus de 12 lettres";
    document.getElementById("updateError").style.display = "block";
    nameInput.classList.add("error");
    nameInput.value = '';
    nameInput.focus();
  } else if (premiereLettre !== premiereLettre.toUpperCase()) {
    document.getElementById("updateError").innerHTML = "La première lettre doit être en majuscule";
    document.getElementById("updateError").style.display = "block";
    nameInput.classList.add("error");
    nameInput.value = '';
    nameInput.focus();
  } else {
    document.getElementById("updateError").style.display = "none";
    nameInput.classList.remove("error");
  }
}

function checkNameMat() {
  var nameInput = document.getElementById("nameam");
  var nameValue = nameInput.value;
  const longueur = nameValue.length;
  const premiereLettre = nameValue.charAt(0);
  if (longueur < 4) {
    document.getElementById("nameErrorm").innerHTML = "Le nom doit contenir au moins 4 lettres";
    document.getElementById("nameErrorm").style.display = "block";
    nameInput.classList.add("error");
    nameInput.value = '';
    nameInput.focus();
  } else if (longueur > 12) {
    document.getElementById("nameErrorm").innerHTML = "Le nom ne peut pas contenir plus de 12 lettres";
    document.getElementById("nameErrorm").style.display = "block";
    nameInput.classList.add("error");
    nameInput.value = '';
    nameInput.focus();
  } else if (premiereLettre !== premiereLettre.toUpperCase()) {
    document.getElementById("nameErrorm").innerHTML = "La première lettre doit être en majuscule";
    document.getElementById("nameErrorm").style.display = "block";
    nameInput.classList.add("error");
    nameInput.value = '';
    nameInput.focus();
  } else {
    document.getElementById("nameErrorm").style.display = "none";
    nameInput.classList.remove("error");
  }
}
function checkNameUpdateMat() {
  var nameInput = document.getElementById("nameum");
  var nameValue = nameInput.value;
  const longueur = nameValue.length;
  const premiereLettre = nameValue.charAt(0);
  if (longueur < 4) {
    document.getElementById("updateErrorm").innerHTML = "Le nom doit contenir au moins 4 lettres";
    document.getElementById("updateErrorm").style.display = "block";
    nameInput.classList.add("error");
    nameInput.value = '';
    nameInput.focus();
  } else if (longueur > 12) {
    document.getElementById("updateErrorm").innerHTML = "Le nom ne peut pas contenir plus de 12 lettres";
    document.getElementById("updateErrorm").style.display = "block";
    nameInput.classList.add("error");
    nameInput.value = '';
    nameInput.focus();
  } else if (premiereLettre !== premiereLettre.toUpperCase()) {
    document.getElementById("updateErrorm").innerHTML = "La première lettre doit être en majuscule";
    document.getElementById("updateErrorm").style.display = "block";
    nameInput.classList.add("error");
    nameInput.value = '';
    nameInput.focus();
  } else {
    document.getElementById("updateErrorm").style.display = "none";
    nameInput.classList.remove("error");
  }
}
