$(window).on("load", function () {
     urlHash = window.location.href.split("#")[1];  /*will scoll to external links*/
    $('html,body').animate({
        scrollTop: $('.' + urlHash).offset().top-60
    }, 1000);

    document.getElementsByClassName("skills").setAttribute('name', 'skills');
    document.getElementsByClassName("experience").setAttribute('name', 'experience');
    document.getElementsByClassName("works").setAttribute('name', 'works');    
});

