(function($){
	$(document).ready(function(){
		stretch();
	});

	function stretch(){
		var left = $('.half-width-left');
		$.each(left,function(i){
			var img = $(left[i]).find('img').attr('src');
			$(left[i]).find('img').css('display','none');
			$(left[i]).backstretch(img);
		})

		var right = $('.half-width-right');
		$.each(right,function(j){
			var img = $(right[j]).find('img').attr('src');
			$(right[j]).find('img').css('display','none');
			$(right[j]).backstretch(img);
		});
	}

})(jQuery);