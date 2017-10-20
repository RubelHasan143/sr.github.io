$(document).ready(function(){
    
    $('.testimonial_slider').owlCarousel({
        items: 1,
        autoplay: true,
        nav: true,
        navText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">']
    });
    
    $('.count').counterUp({
        time: 2000
    });
    
    
    $('.tour_slider').owlCarousel({
        items: 1,
        autoplay: true,
    });
    
    $('.count').counterUp({
        time: 2000
    });
    
    $('.testimonial-slider-2').owlCarousel({
        items: 1,
        autoplay: true,
    });
    
    
    
    
});