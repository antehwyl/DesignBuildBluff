(function($){
	
	$(document).ready(function(){
		stretch();
		iso();
	});

	function stretch(){
		//stretch team member images
		var team = $('.member-img-wrap');
		$.each(team,function(i){
			var src = $(team[i]).find('img').attr('src');
			$(team[i]).find('img').css('display','none');
			$(team[i]).backstretch(src,{centeredY:false});
		});

		//stretch supporters images
		var supporters = $('.supporter-img-wrap');
		$.each(supporters,function(j){
			var src = $(supporters[j]).find('img').attr('src');
			$(supporters[j]).find('img').css('display','none');
			$(supporters[j]).backstretch(src);
		});
	}

	function iso(){
		//isotop layout for team members
		var $container = $('#team-members').isotope({
			itemSelector: '.single-team-member',
			layoutMode: 'fitRows',			
		});

		//isotope layout for supporters
		var $container = $('#supporters').isotope({
			itemSelector: '.single-supporter',
			layoutMode: 'fitRows',			
		});
	}

})(jQuery);