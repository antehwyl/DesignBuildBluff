(function($){
	$(document).ready(function(){
		stretch();
		scale.init();
		scale.doit();
	});

	function stretch(){
		/*var vidImg = $('.video-screencap'),
		vidsrc = vidImg.find('img').attr('src');

		vidImg.find('img').css('display','none');
		vidImg.backstretch(vidsrc);*/

		var picTwo = $('.picture-2');
		var picTwoSrc = picTwo.find('img').attr('src');
		picTwo.find('img').css('display','none');
		picTwo.backstretch(picTwoSrc);

		var picThree = $('.picture-3');
		var picThreeSrc = picThree.find('img').attr('src');
		picThree.find('img').css('display','none');
		picThree.backstretch(picTwoSrc);
	}

	var scale = {
		where:'',
		
		init:function(){
			var that=this;
			if($('#mobile-toggle').css('display')!='block'){
				//console.log('screen');
				that.where = 'screen';
			}else{
				//console.log('mobile');
				that.where = 'mobile';
			}
		},

		doit:function(){
			var that=this;
			$(window).resize(function(){
				if( that.where == 'mobile'){
					if( $('#mobile-toggle').css('display')!='block' ){
						//console.log('mobile to screen');
						that.where ='screen';

						$('.picture-2').backstretch('destroy');//replace these with every instance of a backstretch
						$('.picture-3').backstretch('destroy');
						stretch();
					}
				}
				if( that.where == 'screen'){
					if( $('#mobile-toggle').css('display')=='block' ){
						//console.log('screen to mobile');
						that.where ='mobile';
					}
				}
			});
		},
	}

})(jQuery);