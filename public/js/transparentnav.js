$(document).ready(function() {
    //setScrollbarTransparent();
    $(window).scroll(function() {
        //setScrollbarTransparent();




        const target = document.querySelectorAll('.foxparallax');

        for(let i = 0; i < target.length; i++) {
            var pos = window.pageYOffset * target[i].dataset.parallaxrate;

            target[i].style.transform = 'translate3d(0px, ' + pos +'px, 0px)'
        }

    });
});

/*
function setScrollbarTransparent() {
        var height = $('#landingcarousel').height();
        console.log(height);
        var scrollTop = $(window).scrollTop();
    
        if (scrollTop >= height - 30) {
            $('.navbar').addClass('solid-nav');
        } else {
            //$('.navbar').removeClass('solid-nav');
            $('.navbar').addClass('solid-nav');
        }
    else {
        $('.navbar').addClass('solid-nav');
    }
    

}*/