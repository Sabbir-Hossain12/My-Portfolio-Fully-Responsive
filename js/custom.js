'use strict'

window.addEventListener("scroll", function() {
  var navbar = document.getElementById("navbar");
  
  // Calculate the scroll threshold based on 1vh
  var scrollThreshold = window.innerHeight * 0.01; // 1vh in pixels
  
  if (window.scrollY > scrollThreshold) {
    navbar.style.backgroundColor = "#495057"; // Change to your desired color
  } else {
    navbar.style.backgroundColor = "transparent";
  }
});



$(document).ready (function()
{




 $(".background").fadeIn(2000);

});




$(document).ready(function() {
  // Add click event handlers to navigation links
  $('nav a').on('click', function(event) {
    event.preventDefault(); // Prevent the default link behavior
    const targetSectionId = $(this).attr('href'); // Get the target section's ID
    const targetSection = $(targetSectionId); // Find the target section element
    if (targetSection.length) {
      $('html, body').animate({
        scrollTop: targetSection.offset().top
      }, 1000); // Scroll to the target section smoothly over 1000 milliseconds
    }
  });
});


