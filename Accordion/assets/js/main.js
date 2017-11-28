$(document).ready(function(){
    $('.panel-heading').click(function(){
        $('.panel-heading').removeClass('active');
        $(this).addClass('active');
    });
	
	$('.masonry-item').masonry({
		itemSelector:'.single-post'
	});
	
	$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false
	});
	
});


