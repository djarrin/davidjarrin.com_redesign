    if(window.location.href.indexOf("#") > -1) {
        var link = window.location.href;
        alert(link);
        $('html, body').animate({
            scrollTop: $(link).offset().top-50
        }, 1000);
    }