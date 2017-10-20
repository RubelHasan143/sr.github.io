(function($) {
    "use strict";

    jQuery(document).ready(function($) {
		$('.jhone_singel_item').owlCarousel({
			items: 1,
			loop:true,
			autoplay:true,
		
			
		});
		
		$('.masonry-item').masonry({
			itemSelector: '.single_item'
		});
		
		$('.main_area').parallax({
			spee: 0.5
		});
		
		
//		$('.team_slider').owlCarousel({
//			items: 3,
//			
//			
//		});
//		
		
		
		$(".masonry-item").isotope({
        	itemSelector: '.single_item'
    	});
        
        
    
        $('ul.protfolio_filter li').on('click', function(){ 

          $("ul.protfolio_filter li").removeClass("active");
          $(this).addClass("active");        

            var selector = $(this).attr('data-filter'); 
            $(".masonry-item").isotope({ 
                filter: selector, 
                animationOptions: { 
                    duration: 750, 
                    easing: 'linear', 
                    queue: false,
					
                } 
            }); 
          return false; 
        }); 
		
		$('.item_slider').owlCarousel({
			items: 3,
			autoplay:true,
			loop:true,
			nav:true,
			navText:['<i class="fa fa-angle-right">', '<i class="fa fa-angle-left">']
			
        	
			
		});
        
		
        
    
        
    });

}(jQuery));