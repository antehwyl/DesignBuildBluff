(function($){
	
	$(document).ready(function(){
		stretch();
	});

	function stretch(){
		//stretch splash image
		var splash = $('#featured-project'),
		splashImg = splash.find('img').attr('src');
		splash.find('img').css('display','none');
		splash.backstretch(splashImg);

		//stretch sub projects images
		var project = $('.sub-project'),
		maxHeight = 0;
		$.each(project,function(i){
			var src = $(project[i]).find('img').attr('src');
			$(project[i]).find('img').css('display','none');
			$(project[i]).backstretch(src);
		})
	}

})(jQuery);