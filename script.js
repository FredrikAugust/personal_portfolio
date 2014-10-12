// JavaScript Document

// Hide the arrow that takes you to the top of the page
$("#arrow").css("visibility", "hidden");

// If the users browser is Opera
if (navigator.userAgent.indexOf("Opera")) {
	$(".about-text p").css("font-weight", "initial"); // Set the font-weight to the initial value
}

// When you click one of the navigation buttons
$(".nav-button").click(function() {
	var item1 = $(this).data("ref"); // Set the var item1 to the data-ref value of the clicked item
    $('html, body').animate({ // Animate html and body
        scrollTop: $(item1).offset().top // Scroll the length from item1 to the top
    }, 1000); // Animation duration is one second
});

// When you scroll the window do the following
$(window).scroll(function(e) {
	var scrollpos = $(window).scrollTop(); // The var scrollpos is the distance from window to the top
	var about_scroll = $("#about").offset().top; // The length from the about page to the top of the page

	if (scrollpos >= about_scroll) { // If the scrollpos is more or equal to about_scroll
		$("#arrow").fadeIn(300).css("visibility", "visible"); // Fade in the arrow
	} else {
		$("#arrow").fadeOut(300); // If not, fade it out
	}
});

// When you click the arrow
$("#arrow").on("click", function() {
    $('html, body').animate({ // Animate html and body
        scrollTop: -($("#arrow").offset().top) // Scroll the remainder to the top upwards
    }, 2000, "swing"); // Animation duration is two seconds with the animation "version" swing
});
