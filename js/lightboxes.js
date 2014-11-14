/*(function($){
	$(document).ready(function(){
		fancyVideo();
	});

	function fancyVideo(){
		console.log('fancy');
		$(".fancybox-video").fancybox();
	}
})(jQuery);
*/
////////
(function($){
	$(document).ready(function(){
		$('.fancybox-video').fancybox({
			openEffect  : 'none',
			closeEffect : 'none',
			helpers : {
				media : {},
				overlay : {
            		css : {
                		'background' : 'rgba(81,82,84,0.6)'
            		}
        		}
			}
		});
	});

	
})(jQuery);