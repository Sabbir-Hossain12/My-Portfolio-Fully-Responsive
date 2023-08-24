'use strict'

window.addEventListener("scroll", function() {
  var navbar = document.getElementById("navbar");
  
  // Calculate the scroll threshold based on 1vh
  var scrollThreshold = window.innerHeight * 0.01; // 1vh in pixels
  
  if (window.scrollY > scrollThreshold) {
    navbar.style.backgroundColor = "#0F161C"; // Change to your desired color
  } else {
    navbar.style.backgroundColor = "transparent";
  }
});




