// JavaScript Document

$("#arrow").css("visibility", "hidden");

$(".nav-button").click(function() {
	var item1 = $(this).data("ref");
    $('html, body').animate({
        scrollTop: $(item1).offset().top
    }, 1000);
});

$(window).scroll(function(e) {
	var scrollpos = $(window).scrollTop();
	var about_scroll = $("#about").offset().top;
	
	if (scrollpos >= about_scroll) {
		$("#arrow").fadeIn(300).css("visibility", "visible");
	} else {
		$("#arrow").fadeOut(300);
	}
});

$("#arrow").on("click", function() {
    $('html, body').animate({
        scrollTop: -($("#arrow").offset().top)
    }, 2000, "swing");
});