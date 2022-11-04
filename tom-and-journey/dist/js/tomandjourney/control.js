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

// --------------- tripmap.php ---------------
