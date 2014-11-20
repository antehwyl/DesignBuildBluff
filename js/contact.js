(function($){
	
	$(document).ready(function(){
		contact();
	});

	function contact(){
		//contact pop-up
		$('.main-menu-contact').click(function(){
			$('#contact-wrap').fadeToggle();
		})

		$('#close-button').click(function(){
			$('#contact-wrap').fadeToggle();
		});
	}

})(jQuery);