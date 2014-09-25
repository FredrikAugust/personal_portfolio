// JavaScript Document
$(".nav-button").click(function() {
	var item1 = $(this).data("ref");
    $('html, body').animate({
        scrollTop: $(item1).offset().top
    }, 1000);
});