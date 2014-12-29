(function($){
	$(document).ready(function(){
		stretch();
		scale.init();
		scale.doit();
	});

	function stretch(){
		var landscapeleft = $('.landscape-half-left');
		$.each(landscapeleft,function(i){
			var img = $(landscapeleft[i]).find('img').attr('src');
			$(landscapeleft[i]).find('img').css('display','none');
			$(landscapeleft[i]).backstretch(img);
		})

		var landscaperight = $('.landscape-half-right');
		$.each(landscaperight,function(j){
			var img = $(landscaperight[j]).find('img').attr('src');
			$(landscaperight[j]).find('img').css('display','none');
			$(landscaperight[j]).backstretch(img);
		});

		var portraithalfleft = $('.portrait-half-left');
		$.each(portraithalfleft,function(k){
			var img = $(portraithalfleft[k]).find('img').attr('src');
			$(portraithalfleft[k]).find('img').css('display','none');
			$(portraithalfleft[k]).backstretch(img);
		});

		var portraithalfright = $('.portrait-half-right');
		$.each(portraithalfright,function(l){
			var img = $(portraithalfright[l]).find('img').attr('src');
			$(portraithalfright[l]).find('img').css('display','none');
			$(portraithalfright[l]).backstretch(img);
		});

		var portraitthirdleft = $('.portrait-third-left');
		$.each(portraitthirdleft,function(m){
			var img = $(portraitthirdleft[m]).find('img').attr('src');
			$(portraitthirdleft[m]).find('img').css('display','none');
			$(portraitthirdleft[m]).backstretch(img);
		});

		var portraitthridmiddle = $('.portrait-third-middle');
		$.each(portraitthridmiddle,function(n){
			var img = $(portraitthridmiddle[n]).find('img').attr('src');
			$(portraitthridmiddle[n]).find('img').css('display','none');
			$(portraitthridmiddle[n]).backstretch(img);
		});

		var portraitthridright = $('.portrait-third-right');
		$.each(portraitthridright,function(o){
			var img = $(portraitthridright[o]).find('img').attr('src');
			$(portraitthridright[o]).find('img').css('display','none');
			$(portraitthridright[o]).backstretch(img);
		});
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

						$('.landscape-half-left').backstretch('destroy');//replace these with every instance of a backstretch
						$('.landscape-half-right').backstretch('destroy');
						$('.portrait-half-left').backstretch('destroy');
						$('.portrait-half-right').backstretch('destroy');
						$('.portrait-third-left').backstretch('destroy');
						$('.portrait-third-middle').backstretch('destroy');
						$('.portrait-third-righ').backstretch('destroy');
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