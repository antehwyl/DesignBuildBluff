(function($){
	$(document).ready(function(){
		home();
	});

	function home(){
		if( $('#home-splash-section').length>0 ){
			var img = $('#home-splash-section').find('img').attr('src');
			$('#home-splash-section').find('img').css('display','none');
			$('#home-splash-section').backstretch(img);
		}
	}

})(jQuery);