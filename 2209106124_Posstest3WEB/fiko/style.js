
// Toogle class active
const navbarNav = document.querySelector(".navbar-nav");
// ketika menu di klik
document.querySelector("#menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

document.addEventListener("DOMContentLoaded", function() {
  var popup = document.getElementById("popup");
  popup.style.display = "block";
});

function closePopup() {
  var popup = document.getElementById("popup");
  popup.style.display = "none";
}

