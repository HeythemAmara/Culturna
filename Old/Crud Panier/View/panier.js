addToCartBtn.addEventListener("click", function(event) {
    event.preventDefault();
    const form = event.target.closest("form"); // get the parent form of the button
    const formData = new FormData(form); // create a FormData object from the form data
    const xhr = new XMLHttpRequest(); // create a new XMLHttpRequest object
    xhr.open("POST", form.action); // set the request method and URL
    xhr.send(formData); // send the form data
    cartCount++;
    cartIcon.textContent = cartCount.toString();
  });
  