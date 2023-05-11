const allStars = document.querySelectorAll(".fa-star");
console.log("allStars", allStars);
const highlightedStars = [];
const rating = document.querySelector(".rating");

init();

function init() {
  allStars.forEach((star) => {
    star.addEventListener("click", saveRating);
    star.addEventListener("mouseover", addCSS);
    star.addEventListener("mouseleave", removeCSS);
  });
}

function saveRating(e) {
 // console.log(e, e.target, e.target.nodeName, e.target.nodeType);
 // console.dir(e.target);
  //console.log(e.target.dataset);
  
  removeEventListenersToAllStars();
  rating.innerText = e.target.dataset.star;
 var note = e.target.dataset.star;
 var Input = document.getElementById("noteE");
 Input.value= e.target.dataset.star;
 console.log("boooh"+Input.value);
 

  fetch("Qr.php",{
          "method":"POST",
          "headers":{
            "Content-Type":"applicattion/json;charset=utf-8"
          },
          "body":JSON.stringify(note)
  }).then(function(response){

        return response.text();

  }).then(function(data){

    console.log(data);
  })

  
  
  
  
  
  /*
  const xhr = new XMLHttpRequest();
  const url = "Qr.php";
  xhr.open("POST", url, true);
  
  // Ajouter un en-tête HTTP pour spécifier que le contenu est au format JSON
  xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
  
  // Envoyer la valeur de la note au format JSON dans le corps de la requête
  const data = JSON.stringify({ note: note });
  
  // Ajouter des messages de débogage pour vérifier que les données sont correctes
  console.log("sending data: ", data);
  
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4) {
      console.log("response: ", xhr.responseText);
    }
  };
  
  xhr.send(data);*/



 
}/*
function sendRatingToServer(ratingValue) {
  const xhr = new XMLHttpRequest();
  xhr.open("POST","Qr.php");
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() {
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
      console.log(this.responseText);
    }
  };
  xhr.send("rating" + ratingValue);
}
*/
function removeEventListenersToAllStars() {
  allStars.forEach((star) => {
    star.removeEventListener("click", saveRating);
    star.removeEventListener("mouseover", addCSS);
    star.removeEventListener("mouseleave", removeCSS);
  });
}

function addCSS(e, css = "checked") {
  const overedStar = e.target;
  overedStar.classList.add(css);
  const previousSiblings = getPreviousSiblings(overedStar);
  console.log("previousSiblings", previousSiblings);
  previousSiblings.forEach((elem) => elem.classList.add(css));
}

function removeCSS(e, css = "checked") {
  const overedStar = e.target;
  overedStar.classList.remove(css);
  const previousSiblings = getPreviousSiblings(overedStar);
  previousSiblings.forEach((elem) => elem.classList.remove(css));
}

function getPreviousSiblings(elem) {
  console.log("elem.previousSibling", elem.previousSibling);
  let sibs = [];
  const spanNodeType = 1;
  while ((elem = elem.previousSibling)) {
    if (elem.nodeType === spanNodeType) {
      sibs = [elem, ...sibs];
    }
  }
  return sibs;
}