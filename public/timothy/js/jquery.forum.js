/* 
   ------------------------

	   JS GLOBAL FUNCTON ADDED BY QQ179667784

   ------------------------
*/

function hideimg(v) {
	$('qinghideimg').className = 'y qinghideimg_' + v;
	if(v<0){
		q_jq('.threadlist_imglist').addClass('qnone_-1');
		q_jq('.threadlist_imglist').removeClass('qnone_1');
	}else{
		q_jq('.threadlist_imglist').addClass('qnone_1');
		q_jq('.threadlist_imglist').removeClass('qnone_-1');
	}
	$('qinghideimg').onclick = function() {hideimg(v == 1 ? -1 : 1);};
	setcookie('qinghideimg', v, 2592000);
}

jQuery(function($) {
	/*返回到顶部*/
	var $ = q_jq;
	if($('.js_scrolltop').length>0){
		$(window).scroll(function(){
			showTopLink();
			flytop($('.js_scrolltop'));
		});

		showTopLink();
		flytop($('.js_scrolltop'));
		var t;
		$('.js_scrolltop').bind('mouseover',function(){
			timedCount();
		}).bind('mouseout',function(){
			stopCount();
			$(this).children().children('.scrolltopb').children('img').stop().animate({'height':'14px'},0);
		}).bind('click',function(){
			$('html, body').animate({scrollTop:0},'500');
			$(this).animate({'bottom':$(this).innerHeight()+$(window).innerHeight()+20,'opacity':'0'},500,function(){
				$(this).css('bottom','-100px');
			});
		});

	}
});

//返回顶部显示或出现
function flytop(operationObj){
	var $ = q_jq;
	if($(window).scrollTop()>100){
		if( operationObj.css('bottom')==="-100px"){
			operationObj.animate({'bottom':'100px','opacity':'1'},100);	
		}
	}else{
		operationObj.animate({'bottom':'-100px','opacity':'0'},100);
	}
}
//返回顶部鼠标放上火箭动画效果
var t;
function timedCount(){
	var $=q_jq;
	var thisobj=$('.js_scrolltop');
	thisobj.children().children('.scrolltopb').children('img').animate({'height':'21px'},200,function(){
			$(this).animate({'height':'14px'},300,function(){
				$(this).animate({'height':'21px'},200,function(){
					$(this).animate({'height':'28px'},100,function(){
						$(this).animate({'height':'21px'},200,function(){
							$(this).animate({'height':'14px'},300);
						});
					});
				});
			});
		});
	t=setTimeout("timedCount()",1500);
}
function stopCount(){
	clearTimeout(t);
}