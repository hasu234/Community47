const mobileNav = document.querySelector('.navbar_mobile');
const toggler = document.querySelector('.navbar-toggler');
const widescreenNav = document.querySelector('.navbar-collapse');

toggler.addEventListener('click', displayNav);

function displayNav() {
    mobileNav.classList.toggle('hide');
}

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
} 
