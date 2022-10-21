// redirect to another page
function GoTo(DocumentName) {
  window.location.href =
    "http://localhost:8080/tom-and-journey/" + DocumentName;
}

// hightlight the selected page in navbar
function SelectedNavItem(id_value) {
  nav_item = document.getElementById(id_value);
  nav_item.classList.add("active");
}

// --------------- trip.php ---------------
// carousel controller
let slideIndex = 0;
carousel();

function carousel() {
  var x = document.getElementsByClassName("img-display");

  for (let i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }

  slideIndex++;
  if (slideIndex > x.length) {
    slideIndex = 1;
  }
  x[slideIndex - 1].style.display = "block";

  setTimeout(carousel, 3000); // Change image every 3 seconds
}
