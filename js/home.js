(function($){
	$(document).ready(function(){
		postHeight();
		stretch();
	});

	//recent posts height
	function postHeight(){
		var posts = $('.recent-post'),
		maxHeight = 0;
		
		$.each(posts,function(i){
			var itemHeight = $(posts[i]).height();
			if( itemHeight > maxHeight ){
				maxHeight = itemHeight;
			}
		});

		$.each(posts,function(j){
			$(posts[j]).height(maxHeight);
		});
	}

	function stretch(){
		//stretch splash image
		var splash = $('#home-splash'),
		splashImg = splash.find('img').attr('src');
		splash.find('img').css('display','none');
		splash.backstretch(splashImg);

		//stretch featured project images
		var featured = $('.featured-item');
		$.each(featured,function(i){
			var img = $(featured[i]).find('img').attr('src');
			$(featured[i]).find('img').css('display','none');
			$(featured[i]).backstretch(img);
		});
	}

})(jQuery);