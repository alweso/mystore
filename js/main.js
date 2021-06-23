jQuery(document).ready(function(){
	jQuery('.storezz-search-trigger').on('click', function(){
	 jQuery('.storezz-search-form-wrap').fadeIn();
	});

	jQuery('.storezz-search-close').on('click', function(){
	 jQuery('.storezz-search-form-wrap').fadeOut();
	});

});
