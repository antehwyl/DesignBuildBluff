(function($){
	$(document).ready(function(){
		//dropdown();
		scroll();
	});

	function dropdown(){
		$('.main-menu-about').hover(function(){
			console.log('in');
			var bufferHeight = $('#masthead').height();
			//console.log(bufferHeight);
			//$('.nav-buffer').height(bufferHeight+200);
			$('#masthead').animate({
				height:bufferHeight+20,
			},200);
		},function(){
			console.log('out');
			var bufferHeight = $('#masthead').height();
			//console.log(bufferHeight);
			//$('.nav-buffer').height(bufferHeight-200);
			$('#masthead').animate({
				height:bufferHeight-20,
			},200);
		});
	}

	function scroll(){
		$(document).scroll(function(){
			var top = $(document).scrollTop();
			console.log(top);
			var trigger = 200
			if(top > trigger){
				if( !$('#masthead').hasClass('bg-color') ){
					$('#masthead').addClass("bg-color");
				}
			}
			if(top < trigger){
				if( $('#masthead').hasClass('bg-color') ){
					$('#masthead').removeClass("bg-color");
				}
			}
			
		});
		
		
	}
})(jQuery);