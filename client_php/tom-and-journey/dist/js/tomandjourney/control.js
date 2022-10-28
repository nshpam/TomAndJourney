// redirect to another page
function GoTo(document_name) {
  window.location.href =
    "http://localhost:8080/tom-and-journey/" + document_name;
}

// hightlight the selected page in navbar
function SelectedNavItem(id_value) {
  nav_item = document.getElementById(id_value);
  nav_item.classList.add("active");
}

// --------------- trip.php ---------------
// carousel controller
let slide_index = 0;
carousel();

function carousel() {
  var x = document.getElementsByClassName("img-display");

  for (let i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }

  slide_index++;
  if (slide_index > x.length) {
    slide_index = 1;
  }
  x[slide_index - 1].style.display = "block";

  setTimeout(carousel, 3000); // Change image every 3 seconds
}
