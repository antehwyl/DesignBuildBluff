(function($){
	$(document).ready(function(){
		//stretch();
	});

	function stretch(){
		var vidImg = $('.video-screencap'),
		vidsrc = vidImg.find('img').attr('src');

		vidImg.find('img').css('display','none');
		vidImg.backstretch(vidsrc);
	}

})(jQuery);