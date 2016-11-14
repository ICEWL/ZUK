
var awardsloaded = false;
jQuery(function($) {

		$(".s_links").myScroll({
			speed:40, //数值越大，速度越慢
			rowHeight:50 //li的高度
		});

	

	$("#awardsgo").bind("click",function(e) {
	 	if (!awardsloaded) {
	 		awardsloaded = true;
	     	$.getJSON(SITEURL+'commonajax.php?action=awards&inajax=1', function(response){
	     		if (response.scode == 1 || response.scode == 0) {
	     			$('.recordnum_todayre').html($('.recordnum_todayre').text()-1);
	     			if (response.scode == 0) {
						var angle = 360;
						var dialog = false;
						var title = '今日印堂发黑，忌抽奖！';
					}else{
						$('.recordnum').html($('.recordnum').text()+1);
						var angle = response.awid*36;
						var dialog = true;
						var title = '人品爆发，再接再厉！！';
					}

					awardsgo(angle,title,response.message);
	     		}else if (response.scode == -1) {
	     			awardsloaded = false;
	     			if (typeof MOBILE == 'undefined') {
						showWindow('login', SITEURL+'member.php?mod=logging&action=login&prompt=%E6%82%A8%E9%9C%80%E8%A6%81%E7%99%BB%E5%BD%95%E6%89%8D%E8%83%BD%E5%8F%82%E4%B8%8E%E5%B9%B8%E8%BF%90%E5%A4%A7%E8%BD%AC%E7%9B%98');
					}else{
						alert(response.message);
					}
	     			
				}else{
					awardsloaded = false;
					if (typeof MOBILE == 'undefined') {
						var message = response.message;
						if (response.scode == -4 ) {
							message += ' >> <a href="'+response.url+'" target="_blank">马上去完善</a>';
						}

						seajs.use(['/static/artDialog/src/dialog'], function (dialog) {
							dialog({ 
								title: '提示信息',
								content: message,
								width: 400,
								height: 100
							}).showModal();

						});
					}else{
						alert(response.message);
						if (response.scode == -4 ) {
							document.location.href=SITEURL+response.url;
						}

					}
				}
				
			}, "json");
	 	};
	});





	var awardsgo = function(angle,title,text){ 
	    $('#awardsgo').stopRotate();
	    var angleinit = $('#awardsgo').getRotateAngle()%360;
	    $("#awardsgo").rotate({
	        angle:angleinit, 
	        duration: 5000, 
	        animateTo: angle+1440,
	        callback:function(){
	            awardsloaded = false;

            	seajs.use(['/static/artDialog/src/dialog'], function (dialog) {
					dialog({ 
						title: title,
						content: text,
						width: 400,
						height: 100
					}).showModal();
				});
	            
	            
	        }
	    }); 
	};


});



// JavaScript Document
(function($){
	$.fn.myScroll = function(options){
	//默认配置
	var defaults = {
		speed:40,  //滚动速度,值越大速度越慢
		rowHeight:24 //每行的高度
	};
	
	var opts = $.extend({}, defaults, options),intId = [];
	
	function marquee(obj, step){
	
		obj.find("ul").animate({
			marginTop: '-=1'
		},0,function(){
				var s = Math.abs(parseInt($(this).css("margin-top")));
				if(s >= step){
					$(this).find("li").slice(0, 1).appendTo($(this));
					$(this).css("margin-top", 0);
				}
			});
		}
		
		this.each(function(i){
			var sh = opts["rowHeight"],speed = opts["speed"],_this = $(this);
			intId[i] = setInterval(function(){
				if(_this.find("ul").height()<=_this.height()){
					clearInterval(intId[i]);
				}else{
					marquee(_this, sh);
				}
			}, speed);

			_this.hover(function(){
				clearInterval(intId[i]);
			},function(){
				intId[i] = setInterval(function(){
					if(_this.find("ul").height()<=_this.height()){
						clearInterval(intId[i]);
					}else{
						marquee(_this, sh);
					}
				}, speed);
			});
		
		});

	}

})(jQuery);