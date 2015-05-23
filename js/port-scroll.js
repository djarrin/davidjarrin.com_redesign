
var link = window.location.href;
$("a").click(function() {
$('html, body').animate({
    scrollTop: $(link).offset().top-50
}, 1000);
});

