$(window).on("load", function () {
     var urlHash = window.location.href.split("#")[1];  /*will scoll to external links*/
    $('html,body').animate({
        scrollTop: $('.' + urlHash).offset().top-60
    }, 800);
   
    $(".dropdown-menu li a").click(function() {   //scrolls to the correct spot when link is clicked on page
        setTimeout(function(){   //need setTimeout because DOM hasnt had time to load to read the new URL
            var newHash = window.location.href.split("#")[1];
            console.log(newHash);
            $('html,body').animate({
                scrollTop: $('.' + newHash).offset().top-60
            }, 800);        
        });
    });

});

