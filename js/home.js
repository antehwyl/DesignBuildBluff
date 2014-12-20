(function($){
	$(document).ready(function(){
		postHeight();
		//postHover();
		stretch();
		scaleIt();

	});

	//recent posts height
	function postHeight(){
		var posts = $('.recent-post'),
		maxHeight = 0;
		
		$.each(posts,function(i){
			$(posts[i]).css('height','auto');
			var itemHeight = $(posts[i]).height();
			if( itemHeight > maxHeight ){
				maxHeight = itemHeight;
			}
		});

		$.each(posts,function(j){
			$(posts[j]).height(maxHeight);
		});
		//console.log(maxHeight);
	}

	function postHover(){//adjust the post's div height on hover to account for the borders going away
		var posts = $('.recent-post');
		var orig = $('.recent-post').height();
		//var tall = 0;
		$.each(posts,function(i){
			$(posts[i]).hover(function(){
				var tall = orig+6;
				//console.log(tall);
				$(this).height(tall);
				$(this).find('.backstretch').height(tall)
			},function(){
				//tall -= 6;
				$(this).height(orig);
				$(this).find('.backstretch').height(orig);
				//tall = 0;
			});
		});
	}

	function scaleIt(){
		$(window).resize(function(){
			postHeight();
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

		//stretch recent posts images
		var recent = $('.recent-post');
		$.each( recent,function(j){
			var img = $(recent[j]).find('img').attr('src');
			$(recent[j]).find('img').css('display','none');
			$(recent[j]).backstretch(img);
		});
	}

})(jQuery);