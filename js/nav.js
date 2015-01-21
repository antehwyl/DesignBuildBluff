(function($){
	$(document).ready(function(){
		
		
		//scroll();
		mobile();
		scale.init();
		scale.watch();
		addClass();
	});


	function scroll(){//toggles locked position
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

	function mobile(){//open and close mobile nav
		$('#mobile-toggle').click(function(){
			if( !$('#mobile-toggle').hasClass('open') ){//if closed
				$('#mobile-toggle').addClass('open');
				$('#main-menu-wrap').fadeToggle(100);
			}else if( $('#mobile-toggle').hasClass('open') ){//if opened
				$('#mobile-toggle').removeClass('open');
				$('#main-menu-wrap').fadeToggle(100);
			}
			
		});
	}

	var where;
	var scale={
		where:'screen',
		init:function(){
			if( $('#mobile-toggle').css('display') == 'block' ){//if mobile size
				where = 'mobile';
				$('#main-menu-wrap').addClass('mobile');
			}
			if( $('#mobile-toggle').css('display') == 'none' ){//if desktop size
				where = 'screen';
				$('#main-menu-wrap').addClass('desktop');
			}
		},
		watch:function(){
			$(window).resize(function(){
				if( where=='screen' ){
					if( $('#mobile-toggle').css('display') == 'block' ){//moved from desktop to mobile size
						where = 'mobile';
						$('#main-menu-wrap').css('display','none');
						$('#main-menu-wrap').addClass('mobile');
						$('#main-menu-wrap').removeClass('desktop');
					}
				}
				if( where=='mobile' ){
					if( $('#mobile-toggle').css('display') == 'none' ){//moved from mobile to desktop size
						where = 'screen';
						$('#main-menu-wrap').css('display','block');
						$('#main-menu-wrap').addClass('desktop');
						$('#main-menu-wrap').removeClass('mobile');
					}
				}
			});
		}
	}

	function addClass(){//label single template pages to differentiate blog post and project page 
		if( $('body').hasClass('single') ){
			if( $('#content-wrap').hasClass('project-content') ){
				$('body').addClass('project-page');//project single
			}else{
				$('body').addClass('blog-page');//blog single
			}
		}
	}
})(jQuery);