(function($){
	$(document).ready(function(){
		//dropdown();
		scroll();
		mobile();
		scale.init();
		scale.watch();
	});

	/*
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
	*/

	function scroll(){
		$(document).scroll(function(){
			var top = $(document).scrollTop();
			//console.log(top);
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

	function mobile(){
		$('#mobile-toggle').click(function(){
			if( !$('#mobile-toggle').hasClass('open') ){//if closed
				$('#mobile-toggle').addClass('open');
				$('#main-menu-wrap').slideToggle(100);
			}else if( $('#mobile-toggle').hasClass('open') ){//if opened
				$('#mobile-toggle').removeClass('open');
				$('#main-menu-wrap').slideToggle(100);
			}
			
		});
	}

	var where;
	var scale={
		where:'screen',
		init:function(){
			if( $('#mobile-toggle').css('display') == 'block' ){//if mobile size
				where = 'mobile';
			}
			if( $('#mobile-toggle').css('display') == 'none' ){//if desktop size
				where = 'screen';
			}
		},
		watch:function(){
			$(window).resize(function(){
				if( where=='screen' ){
					if( $('#mobile-toggle').css('display') == 'block' ){//moved from desktop to mobile size
						where = 'mobile';
						$('#main-menu-wrap').css('display','none');
					}
				}
				if( where=='mobile' ){
					if( $('#mobile-toggle').css('display') == 'none' ){//moved from mobile to desktop size
						where = 'screen';
						$('#main-menu-wrap').css('display','block');
					}
				}
			});
		}
	}
})(jQuery);