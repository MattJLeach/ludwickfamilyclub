// Script for automatically resizing #canvass div to window height
$(document).ready(function(){

	// Create variable for viewport height
	var windowHeight = ($(window).height());

	// Change #canvass min-height to windowHeight variable
  document.getElementById("canvass").style.minHeight = windowHeight + "px";

  	// Run fuction on resize
    $(window).resize(function(){

    	// Change windowHeight variable to equal new viewport height
    	var windowHeight = ($(window).height());

    	// Change #canvass min-height to the new viewport height
      document.getElementById("canvass").style.minHeight = windowHeight + "px";

    });
});

// Script for assigning random angle classes
$(document).ready(function(){
  
  // Create array of all angle classes
  var angleElements = [
    "angle-sm-right",
    "angle-sm-left",
    "angle-md-right",
    "angle-md-left",
    "angle-lg-right",
    "angle-lg-left"
  ]
  
  // Assign new class to each div with an angle class
  $('.angle').each(function() {

    // Create random number between 0 and 5
    var num = Math.floor(Math.random() * 5);

    // Add class from Array using random number
    $(this).addClass(angleElements[num]);
  });

  // Assign new class to each div with an angle-header class
  $('.angle-header').each(function() {

    // Create random number between 0 and 3 (only small angles for header divs)
    var num = Math.floor(Math.random() * 3);

    // Add class from Array using random number
    $(this).addClass(angleElements[num]);
  });

});