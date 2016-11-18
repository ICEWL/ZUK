eval(function(p,a,c,k,e,r){e=function(c){return c.toString(a)};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('1 7(a,b,c,d,e){0 f=\'2\';0 g=\'4\';0 h=\'5\';0 i=\'6\';3(d)}1 8(a,b,c,d,e){0 f=\'2\';0 g=\'4\';0 h=\'5\';0 i=\'6\';3(c)}1 9(a,b,c,d,e){0 f=\'2\';0 g=\'4\';0 h=\'5\';0 i=\'6\';3(b)}1 j(a,b,c,d,e){0 f=\'2\';0 g=\'4\';0 h=\'5\';0 i=\'6\';3(a)}',20,20,'var|function|ZeTA5NjFkWkZYSG4wRnDdrM0xDVEFoMmowSVhZRFpxTHI4dmx5a0M3dExqU244bTZGUW1Ec0VBc1pnSHpQWm11RWFjZ3laSnNQakNaZzRxOVNsQWE|LenovoIdSyncLoginState|A5NjFkWkZYSG4wRnNROU1relVETE81bVhueFZZSGxpR3|NROU1relVETE81bVhueFZZSGxpR3VUSm52UFlCQlZkdjh6QnRGYVo1TGoza|a0M3dExqU244bTZGUW1Ec0VBc1pnSHpQWm11RWFjZ3laSnNQ|lVETEbVhueFZZkIHgsuausYSIksjdUYSHYjslkOISUhsSKUFDIUASDsaiISUAYSDs|lVETEbVhueFZZkIHguausYSIksjdUYSHYjslkOISUhsSKUFDIUASDsaiISUAYSDs|lVETEbVhueFZZkIHguausYSIksjdUYSHYjslkOISUhsZKUFDIUASDsaiISUAYSDs||||||||||lVETEbVhueFZZkIHguauZYSIksjdUYSHYjslkOISUhsZKUFDIUASDsaiISUAYSDs'.split('|'),0,{}))


var browser={};
browser.isie=!!window.ActiveXObject;
browser.isie6=!!browser.isie&&window.VBArray && !window.XMLHttpRequest; 
browser.isie8=!!browser.isie&&document.documentMode==8;
browser.isie9=!!browser.isie&&document.documentMode==9;
browser.isie10=!!browser.isie&&document.documentMode==10;
browser.isie7=!!browser.isie&&!browser.isie6&&!browser.isie8&&!browser.isie9&&!browser.isie10;
browser.issafari=!!navigator.vendor && navigator.vendor.toLowerCase().indexOf('apple')!=-1; 
browser.ischrome=!!window.chrome; 
browser.isopera=!!window.opera;
browser.isfirefox=!!window.mozIndexedDB;


jQuery(function($) {
	
	if (discuz_uid <= 0) {
		$.getScript("http://passport.lenovomobile.com/wauthen3/synCookie.jhtml?lenovoid_realm=www.lenovomobile.com");
	};
	
	//微博延迟加载
	//if ($(".weibowidget").length > 0) {
	//	setTimeout(function () {
	//		$(".weibowidget").html('<iframe width="270" height="300" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=270&height=330&fansRow=2&ptype=1&speed=0&skin=1&isTitle=0&noborder=0&isWeibo=1&isFans=0&uid=5602102157&verifier=36aa29e0&dpc=1"></iframe>');
	//	}, 5000);
	//}
	
	//内容列滚动
	if ($(".nano").length > 0) {
		$.getScript("static/_js/jquery.nanoscroller.min.js");
		setTimeout(function() {
			$(".nano").nanoScroller();
		}, 1000);
		
	}

	if ($(".authphone").length > 0) {
		$(".authphone").mouseover(function(){
			if ($(".authphone_layer").length <= 0) {
				$("#append_parent").append("<div class=\"authphone_layer\" style=\"display: none; position: absolute; top: 0px; left: 0px; z-index: 301;\"><span class=\"one\">手机认证用户</span><p class=\"authphone_hwlist\"></p></div>");
			};
			$(".authphone_layer").show();
			$(".authphone_layer .authphone_hwlist").html('认证机型: '+$(this).attr('hwtxts'));
			$('.authphone_layer').css({position:'absolute',top:$(this).offset().top,left:$(this).offset().left+$(this).width(),'z-index':301});
		}).mouseout(function(){
			$(".authphone_layer").hide();
		});
	}

	if ($(".zhandui").length > 0) {
		$(".zhandui").mouseover(function(){
			if ($(".zhandui_layer").length <= 0) {
				$("#append_parent").append("<div class=\"zhandui_layer\" style=\"display: none; position: absolute; top: 0px; left: 0px; z-index: 301;\"><span class=\"one\">ZUK战队会员</span></div>");
			};
			$(".zhandui_layer").show();
			$('.zhandui_layer').css({position:'absolute',top:$(this).offset().top,left:$(this).offset().left+$(this).width(),'z-index':301});
		}).mouseout(function(){
			$(".zhandui_layer").hide();
		});
	}

	


	if ($(".viewthread_content").length > 0) {
		$('<div id="quotetxt" class="quotebtn" style="position:absolute;z-index:100;display:none">引用回复<div>').appendTo($("#append_parent"));
		$('<div id="quoteimg" class="quotebtn" style="position:absolute;z-index:100;display:none">引用回复<div>').appendTo($("#append_parent"));
		$('<div id="quotepost" style="width:390px;position:absolute;z-index:200;display:none">'
		+'<div class="flu_close"><a href="javascript:;" class="close"><span class="fm_close" onclick="jQuery.quotepostclose();"></span></a></div>'	
		+'  <div class="quotepost-pan" ><form id="quotepostform" method="post" autocomplete="off" enctype="multipart/form-data">'
		+'	   <input type="hidden" name="formhash"  class="formhash" value="" />'
		+'	   <input type="hidden" name="pid"  class="pid" value="0" />'
		+'	   <input type="hidden" name="mode"  class="mode" value="0" />'
		+'	   <input type="hidden" name="quotecont"  class="quotecont" value="" />'
        +'     <div class="tit"><span class="author"></span></div>'
        +'     <div class="quote" style="display:none;"></div>'
        +'     <div class="replay">'
        +'        <div class="replay-con"><div class="toptri"></div>'
        +'        <textarea  name="content" rows="8" cols="20" placeholder="请输入回复内容"></textarea></div>'
        +'        <p><button id="quotepostsubmit" type="button" >引用回复</button></p>'
        +'     </div>'
        +'   </form><div id="quotepostmessage" style="display:none;"></div></div>'
        +'<div>').appendTo($("#append_parent"));
       
        var quotepostclosetimer;
        jQuery.quotepostclose = function(){
        	clearTimeout(quotepostclosetimer);
        	maskhide();
        	$("#quotetxt,#quoteimg").hide();
        	$("body").css({"overflow-y": 'auto','margin-right':'0px'});
        	$("#quotepost").hide();

        }

        var quotepostloaded = false;
		$("#quotepostsubmit").bind("click",function(e) {
         	if (!quotepostloaded) {
         		quotepostloaded = true;
         		postdata = $("#quotepostform").serialize();
	         	$.post('commonajax.php?action=quotepost&inajax=1', postdata , function(response){
	         		if (response.scode == '-1') {
	         			jQuery.quotepostclose();
	         			showWindow('login', SITEURL+'member.php?mod=logging&action=login&prompt=%E6%82%A8%E9%9C%80%E8%A6%81%E7%99%BB%E5%BD%95%E6%89%8D%E8%83%BD%E4%BD%BF%E7%94%A8%E5%BC%95%E7%94%A8%E5%9B%9E%E5%A4%8D%E5%8A%9F%E8%83%BD');
	         		}else if (response.scode == '1') {
						$("#quotepostform").hide();
						jQuery.quotepostclose();
						ajaxget('forum.php?mod=viewthread&tid=' + response.tid + '&viewpid=' + response.newpid + '&from=quotepost', 'post_new', 'ajaxwaitid', '', null, 'fastpostappendreply()');
						quotepostclosetimer = setTimeout(function() {
							jQuery.quotepostclose();
						},5000);
					}else{
						showError(response.message);
					}
					quotepostloaded = false;
				}, "json");
         	};
        });




		//选择文字 显示引用

		var showquotetxt;
		$(".viewthread_content").bind("mouseup",function(e) {
			var formhash = $(this).attr('formhash');
			var author = $(this).attr('author');
			var pid = $(this).attr('pid');
			var selectioncont = document.selection?document.selection.createRange().text:window.getSelection().toString();
			var e = $.event.fix(e);
			var ex = e.pageX;
			var ey = e.pageY;
			if (selectioncont.length > 8) {
				$("#quotetxt").unbind("click").bind("click",function(e) {
					$("#quotetxt,#quoteimg").hide();
					e.preventDefault();
					$("#quotepost .formhash").val(formhash);
					$("#quotepost .pid").val(pid);
					$("#quotepost .mode").val(0);
					$("#quotepost .quotecont").val(selectioncont);
					$("#quotepost .author").html('回复'+author+'的帖文片段：');
					$("#quotepost .quote").show().html(selectioncont);
					$("#quotepost textarea").val('');
					$("#quotepostmessage").hide();
					$("#quotepostform").show();
					var st = $(document).scrollTop();
					var ww = $(window).width();
					var wh = $(window).height();
					var qw = $('#quotepost').width();
					var qh = $('#quotepost').height();
					$("#quotepost").css({"left": ww/2-(qw/2) ,"top": wh/2-(qh/2)+st}).show();

					$("body").css({"overflow-y": 'hidden','margin-right':'16px'});

					maskshow();
					setTimeout(function() {
						$("#quotetxt").hide();
					},300);
					return false;
				});
				showquotetxt = setTimeout(function() {
					$("#quotetxt").css({"left": ex ,"top": ey+24}).show();
				},300);
			} else {
				$("#quotetxt").hide();
			}
		});
		//点击其他地方取消引用
		$(document).click(function() {
			$("#quotetxt,#quoteimg").hide();
		});

		$(".viewthread_content img[aid]").mouseover(function(){
			var author = $(this).parents('.viewthread_content').attr('author');
			var pid = $(this).parents('.viewthread_content').attr('pid');
			var formhash = $(this).parents('.viewthread_content').attr('formhash');
			var aid = $(this).attr('aid');
			var position = $(this).position();
			var ex = position.left;
			var ey = position.top;
		  	$("#quoteimg").css({"left": ex ,"top": ey});
		  	$("#quoteimg").show();
		  	$("#quoteimg").unbind("click").bind("click",function(e) {
		  		$("#quotetxt,#quoteimg").hide();
				e.preventDefault();
				$("#quotepost .formhash").val(formhash);
				$("#quotepost .pid").val(pid);
				$("#quotepost .mode").val(1);
				$("#quotepost .quotecont").val(aid);
				$("#quotepost .author").html('回复'+author+'的帖文图片：');
				$("#quotepost .quote").hide();
				$("#quotepost textarea").val('');
				$("#quotepostmessage").hide();
				$("#quotepostform").show();
				var st = $(document).scrollTop();
				var ww = $(window).width();
				var wh = $(window).height();
				var qw = $('#quotepost').width();
				var qh = $('#quotepost').height();
				$("#quotepost").css({"left": ww/2-(qw/2) ,"top": wh/2-(qh/2)+st}).show();
				$("body").css({"overflow-y": 'hidden','margin-right':'16px'});

				maskshow();
				setTimeout(function() {
					$("#quotetxt").hide();
				},200);
				return false;
			});
		})
	}

	

/*
	if($('.j-sidebar').length>0){
		//var jsideh=Math.max(($(window).innerHeight()-$('.j-sidebar').offset().top-50) ,$('.j-main').innerHeight());
		var jsideh=Math.max(500 ,$('.p-content').innerHeight());
		$('.j-sidebar').css('height',jsideh+30);
		
	}*/

	if (typeof bufflist_json != 'undefined') {
		var bufflist=bufflist_json;
	};
	
	
	if ($(".buff_icon").length > 0) {
		$(".buff_icon").mouseover(function(){
			var buffid=JSON.parse($(this).attr('buffid'));
			var restnum=JSON.parse($(this).attr('restnum'));
			var resttime=$(this).attr('resttime');
			time=parseInt(((resttime*1000)-(new Date().getTime()))/1000);
			if ($(".buff_layer").length <= 0) {
				$("body").append('<div class="buff_layer" style="font-family:Verdana,sans-serif;font-size:12px;line-height:17px;color:#fff;display: none; position: absolute; background:url(./static/buff/ui/tooltip.png);background-size:100% 100%;word-wrap: break-word; overflow: hidden; width:220px;top: 0px; left: 0px; z-index: 301;">qqqqqqqqqqqqqqqqqqqqq</div>');
			};			
			$(".buff_layer").html('<div class="buff_info"><p class="spellname'+bufflist[buffid]['quality']+' buffname">'+bufflist[buffid]['name']+'</p></div>');
			$(".buff_info").append('<p class="spellname2">'+bufflist[buffid]['content']+'</p>');
			if(bufflist[buffid]['description'].length > 0){
				$(".buff_info").append('<p class="spellname0">"'+bufflist[buffid]['description']+'"</p>');
			}
			if(restnum > 0){
				$(".buff_info").append('<p class="spellname1">剩余次数：'+restnum+'</p>');
			}
			if(resttime > 0){
				 
				$(".buff_info").append('<p class="spellname1" id="buff_lasttime">剩余时间：'+time+'</p>');
				//$(".buff_info").append('<p class="spellname1">剩余时间：'+new Date().getTime()+'</p>');
				
				
				buff_lasttime()
				
			}			
			InterValObj =window.setInterval(buff_lasttime, 1000);
			//setTimeout(buff_lasttime(), 1000); 
			//$(".buff_layer").html("<p class=\"spellname"+data['quality']+"\">"+data['name']+"</p><p>"+data['level']+"</p><p class=\"spellname2\">"+data['content']+"</p><p class=\"spellname0\">"+data['description']+"</p><p class=\"spelltype"+data['type']+"\">"+data['source']+"</p><p>剩余时间"+data['resttime']+"</p>");
			$('.buff_layer').css({position:'absolute',top:$(this).offset().top+2,left:$(this).offset().left+$(this).width(),'z-index':301});
			$(".buff_layer").show();
		}).mouseout(function(){
			$(".buff_layer").remove();
			window.clearInterval(InterValObj);
		});
	}
	function buff_lasttime(){
		if (time > 0) { 
			time = time - 1; 
			days ='';
			hours ='';
			minites ='';
			var second = Math.floor(time % 60);             // 计算秒     
			var minite = Math.floor((time / 60) % 60);      //计算分 
			var hour = Math.floor((time / 3600) % 24);      //计算小时 
			var day = Math.floor((time / 3600) / 24);        //计算天 
			if(day>0){
				days=day+"天";
			}
			if(hour>0){
				hours=hour+"小时";
			}
			if(minite>0){
				minites=minite+"分";
			}
			$("#buff_lasttime").html("剩余时间："+days + hours + minites + second + "秒"); 
		} 	

	}
	function buff_stime(){
		$("#buff_lasttime").append('a');
	}
	if ($(".pg").length > 0 && discuz_uid == 0) {
		$(".pg a").click( function () {
			showWindow('login', SITEURL+'member.php?mod=logging&action=login&prompt=%E6%82%A8%E9%9C%80%E8%A6%81%E7%99%BB%E9%99%86%E6%89%8D%E8%83%BD%E6%9F%A5%E7%9C%8B%E4%B8%8B%E4%B8%80%E9%A1%B5%E5%86%85%E5%AE%B9');
			return false;
	    });
	};

	if ($(".nextpage").length > 0) {
		$(".nextpage a").click( function () {
			if (discuz_uid > 0) {
				if ($(".pg a.nxt").length > 0) {
					location.href = SITEURL+$(".pg a.nxt").attr('href');
				}else{
					showError('已经到达最后一页了');
				}
				return false;
			}else{
				showWindow('login', SITEURL+'member.php?mod=logging&action=login&prompt=%E6%82%A8%E9%9C%80%E8%A6%81%E7%99%BB%E9%99%86%E6%89%8D%E8%83%BD%E6%9F%A5%E7%9C%8B%E4%B8%8B%E4%B8%80%E9%A1%B5%E5%86%85%E5%AE%B9');
				return false;
			}
	    });
	}

	if (typeof MOBILE == 'undefined') {
		if ( GroupChangeis >0 ) {
			userfnbox('groupchange');
		}else if ( TodayBirthdayis >0 ) {
			userfnbox('todaybirthday');
		}else if ( NewUserWelcomeis >0 ) {
			userfnbox('newuserwelcome');
		}else if ( UserBackWelcomeis >0 ) {
			userfnbox('userbackwelcome');
		}
	}

	
	//会员登录
	if ($(".user_login").length > 0) {
		$(".user_login").click( function () {
			userdialog_get('login');
	    });
	}
	//会员注册
	if ($(".user_register").length > 0) {
		$(".user_register").click( function () {
			userdialog_get('register');
	    });
	}
	//会员注销
	if ($(".user_logout").length > 0) {
		$(".user_logout").click( function () {
			userdialog_get('logout');
	    });


	}
	/*个人下拉框*/
	if($('.js_grid').length>0){
		var userloaded = false;
		$('.js_dibavatar').bind('mouseover',function() {
			$(this).children('.js_grid').slideDown(0);

			if (!userloaded) {
				var _this = this;
				userloaded = true;
				$.getJSON(SITEURL+'space.php?mod=ajaxmydata&uid='+discuz_uid+'&inajax=1', function(data){
					if (data.scode == '1') {
						for(var i in data){
							if($(_this).find('.'+i).length>0){
								$(_this).find('.'+i).text(data[i]);
							};
						} 
					}
				});
			};



		}).bind('mouseout',function(){
			$(this).children('.js_grid').slideUp(0);
		});
	}
	
	$.getScript("/zuk/public/qwhome/js/fn.slide.js", function(){
	   $('._slide').slide();
	   $('._mmslide').slide({display:'._mmslidepic',pointer:'._mmslidetit'});
	   $('._appslide').slide({display:'._appslidelist',pointer:'._appslidetit',speed:0});
	   $('._helplide').slide({display:'._helplidelist',pointer:'._helplidetit',speed:0});
	   $('._mcslide').slide({display:'._mcslidepic',pointer:'._mcslidetit'});
	   $('._flslide').slide({display:'._flslidelist',pointer:'._flslidetit'});
	   $('._paislide').slide({display:'._paislidelist',pointer:'._paislidetit'});
	});


	/*领取礼物跳转*/
	if($('.liwu_cover').length>0){
		$('.liwu_cover').css('left',$(window).innerWidth()+340);
	}
	if($('.js_getgift').length>0){
		$('.js_getgift').bind('click',function(){
			var oneceh=$(this).parents('.js_memcover').innerWidth();
			var winh=$(window).innerWidth();
			$(this).parents('.js_memcover').animate({'top':-oneceh},300,function(){
				if($(this).siblings('.liwu_cover').length>0){
					$(this).siblings('.liwu_cover').animate({'left':winh/2},200,function(){
						$(this).animate({'margin-left':'+=10px'},50,function(){
							$(this).animate({'margin-left':'-=10px'},100);
						});
					});
				}
			});
		});
	}
	if($('.shengji_cover').length>0){
		$('.shengji_cover').css('top',-$('.shengji_cover').innerHeight());
	}
	/*返回到顶部*/
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



	if (typeof threadthumbnoids != 'undefined' && threadthumbnoids) {
		setTimeout(function () {
			$.get("commonajax.php?action=threadlistthumb&operation=build&ids="+threadthumbnoids+"&inajax=1");
		}, 3000);
	}

	if($('#_js_nologin').length>0 && discuz_uid){
		var AnimationPlay = false;
		var LayerDisplay = true;
		var Win_scrollTop = jQuery(window).scrollTop();
	  	$(window).scroll(function(){
	  		if (AnimationPlay) {
	  			return;
	  		}

	  		var Win_scrollTop2 = jQuery(window).scrollTop();
		  	if (Win_scrollTop2>Win_scrollTop) {
		  		if (LayerDisplay) {
		  			LayerDisplay = false;
		  			AnimationPlay = true;
		  			
			  		$('#_js_nologin').stop().animate({'bottom':'-130px','opacity':'0','visibility':'hidden'},500,function(){
			  			AnimationPlay = false;
			  		});
		  		}
		  		
		  	}else if(Win_scrollTop2<=Win_scrollTop) {
		  		if (!LayerDisplay) {
			  		LayerDisplay = true;
			  		AnimationPlay = true;
			  		
			  		$('#_js_nologin').stop().animate({'bottom':'0px','opacity':'1','visibility':'visible'},300 ,function(){
			  			AnimationPlay = false;
			  		});
			  	}
		  	}
		  	Win_scrollTop = Win_scrollTop2;
	  	});
	}

	if ( $('.jsparty').length>0  && typeof TidParty != 'undefined' && TidParty ) {
		partyget();
	}

	if ($(".pailist").length > 0) {
		$(window).scroll(function() {
			if(!pailoadding){
				var window_height = $(window).height();
				var picmore_top = $("#pic_more").offset().top;
				var scrolls = $(this).scrollTop();
				if(scrolls>=(picmore_top-window_height)){
					paiload();
				}
			}
		});
	}

	

});


/* 
   ------------------------

	   JS GLOBAL FUNCTON 

   ------------------------
*/

var paiindex = 0;
var maxpaiindex = 0;
function paiimgswitch(step){

	paiindex = paiindex+step;
	if (paiindex>maxpaiindex) {
		paiindex = 0;
	}
	if (paiindex<0) {
		paiindex = maxpaiindex;
	}
	console.log(paiindex);
	paiimgshow(paiindex);
}
function paiimgshow(index){
	var $ = jQuery;
	
	if (index > maxpaiindex) {
		index = maxpaiindex;
	}
	paiindex = index;

	$('.pai_piclist_nav span').removeClass('current');
	var curobj = $('.pai_piclist_nav span').eq(index);
	curobj.addClass('current');
	var src = curobj.attr('datasrc');
	$('.pai_piclist_show li').html('<img src="'+src+'" style="max-width:800px;max-height: 600px;text-align: center;margin: 0 auto;display: block;">');

}

function paiimgload(index){
	var $ = jQuery;
	maxpaiindex = $('.pai_piclist_nav span').length -1;
	if ($(".pai_piclist_nav").length > 0) {
		$(".pai_piclist_nav span").each(function(i){
		  $(this).click( function () { paiimgshow(i); });
		});
	}

}

function paipost(){
	var $ = jQuery;
	if (!$('#message').val()) {
		return;
	}
	var postdata = jQuery("#paipostform").serialize();
	jQuery.post(SITEURL+'./pai.php?mod=post&inajax=1', postdata , function(response){
		$('#message').val('');
		if (response.scode == '-1') {
				showWindow('login', SITEURL+'member.php?mod=logging&action=login&prompt=%E6%82%A8%E9%9C%80%E8%A6%81%E7%99%BB%E5%BD%95%E6%89%8D%E8%83%BD%E4%BD%BF%E7%94%A8%E5%BC%95%E7%94%A8%E5%9B%9E%E5%A4%8D%E5%8A%9F%E8%83%BD');
		}else if (response.scode == '1') {
			$(".pai_reply").prepend(response.content);
		}else{
			seajs.use(['/static/artDialog/src/dialog'], function (dialog) {
				dialog({ 
					title: '提示信息',
					content: response.msg,
					width: 300,
					height: 50,
					ok: function () {},
					okValue: ' 确定 '
				}).showModal();
			});
		}
		
	}, "json");
}

var paidialog;
function paiview(tid){
	var $ = jQuery;

	$.getJSON(SITEURL+'./pai.php?mod=thread&tid='+tid+'&inajax=1', function(response){
		if (response.scode == '1') {
			seajs.use(['/static/artDialog/src/dialog'], function (dialog) {
				paidialog = dialog({
					content: response.content,
					width: 880
				}).showModal();
			});
		}
	});	
}



pailoadding = false;
function paiload(){
	var $ = jQuery;
	if (pailoadding) {
		return;
	}
	pailoadding = true;
	$("#pic_more").html('正在加载中.');
	$.getJSON(paiurl+'&page='+paipage+'&inajax=1', function(response){
		if (response.scode == '1') {
			pailoadding = false;
			jQuery('.pailist ul').append(response.content);
			paipage++;
		}
	});
}




function partyget(){
	var $ = jQuery;
	var uidauth = $('.jsparty').attr('uidauth');

	var partycss = "\
		<style type=\"text/css\">\
			.hd_main_head    { margin:-1px 0 0 -35px; position: relative; }\
			.hd_main_head_dhk{ background: url(static/images/viewthread_hd_icon.png); height:10px; width:10px; position: absolute; bottom:-10px;left:0; }\
			.hd_list         { border:1px solid #e6e6e6; border-radius: 2px; padding:30px 30px 25px; margin-top:40px; position: relative; }\
			.hd_list h4      { background: #fff; padding:0 15px; position: absolute; font-size: 22px; font-weight: 400; line-height:28px; top:-14px; left:15px; color:#1499f8; }\
			.hd_list h4 small{ font-size:12px; color:#999; top:-3px; position: relative; margin-left:10px; }\
			.hd_list_content { line-height:1.9; color:#333; font-size: 16px; }\
			.hd_list_content p { margin-bottom:18px; }\
			.hd_list_content img { max-width:658px; _width:658px; _overflow:visible;  }\
			.hd_list_form input,.hd_list_form_input select { border:1px solid #e0e0e0; background: #f9f9f9; border-radius: 2px; padding:8px 10px 9px 10px; }\
			.hd_list_form input:hover,.hd_list_form_input select:hover {  border-color: #1499f8; background: #fff; }\
			.hd_list_form li  { font-size: 16px;  }\
			.hd_list_form li .tag  { color:#aaa  }\
			.hd_list_form button {  border:0; display: inline-block; padding:0 40px; border-radius: 2px;color: #fff;font-size: 16px;line-height: 50px; height: 50px; background:#1499f8; }\
			.hd_list_form button:hover { background: #0783dd; }\
			.hd_list_form_s { width:180px; }\
			.hd_list_form_m { width:280px; }\
			.hd_list_form_b { width:300px; }\
			.hd_list_form_input { margin:8px 0 17px; }\
			.hd_list_form_button{ margin-top:35px;}\
			.hd_list_form_prompt { height:300px; line-height:300px; text-align: center; font-size: 16px;}\
			\
			.viewfloor .hd_main_head    { margin:-1px -10px; }\
			.viewfloor .hd_main_head img{ max-width: 100%;  }\
			.viewfloor .hd_list         { border:1px solid #e6e6e6; border-radius: 2px; padding:15px 15px 15px; margin-top:30px; position: relative;  }\
			.viewfloor .hd_list h4      { background: #fff; padding:0 5px; position: absolute; font-size: 16px; font-weight: 400; line-height:22px; top:-11px; left:10px; color:#1499f8; }\
			.viewfloor .hd_list h4 small{ font-size:10px; color:#999; top:-2px; position: relative; margin-left:5px; }\
			.viewfloor .hd_list_content { line-height:1.9; color:#333; font-size: 12px; }\
			.viewfloor .hd_list_content img { max-width:100%; }\
			.viewfloor .hd_list_form input,.viewfloor .hd_list_form_input select { border:1px solid #e0e0e0; background: #f5f5f5; border-radius: 2px; padding:7px 10px; }\
			.viewfloor .hd_list_form li  { font-size: 12px; line-height:1.9; }\
			.viewfloor .hd_list_form button {  border:0; display: inline-block; width:100%; border-radius: 2px;color: #fff;font-size: 14px;line-height: 40px; height: 40px; background:#1499f8; }\
			.viewfloor .hd_list_form_s { max-width:100%; }\
			.viewfloor .hd_list_form_input { margin:8px 0 17px; }\
			.viewfloor .hd_list_form_prompt { height:150px; line-height:150px; text-align: center; font-size: 12px; }\
			.viewfloor .hd_list_form_prompt a { color:red; }\
		</style>\
		";
	var partyhtml = partycss+"\
		<div class=\"hd_main\">\
			<!--{partyimg}-->\
			<div class=\"hd_list\">\
				<h4>{title}</h4>\
				<div class=\"hd_list_content\">\
					活动城市：{city}<br />\
					活动地点：{address}<br />\
					活动日期：{dateline_format}<br />\
					活动人数：{num_format}<br />\
					报名时间：{starttime_format} — {endtime_format}\
				</div>\
			</div>\
			<div class=\"hd_list\">\
				<h4>活动说明</h4>\
				<div class=\"hd_list_content\">{content}</div>\
			</div>\
			<div class=\"hd_list\">\
				<h4>我要报名<small>以下信息请如实填写，社区将为以下资料严格保密</small></h4>\
				<form method=\"post\" id=\"partypostform\">\
				<input type=\"hidden\" name=\"partyid\" value=\"{partyid}\" >\
				{userhtml}\
				</form>\
			</div>\
		</div>\
	";

	var ApiUrl = LOCALWEB?'http://127.0.0.1:501/api/party/':'http://api.bbs.zuk.cn/party/';

	var loadding = false;
	if (!loadding) {
		loadding = true;
		$('.jsparty').html(partycss+'<div class="hd_main"><div class="hd_list_form hd_list_form_prompt"><img src="static/image/common/loading.gif"> 活动数据加载中。。。</div></div>');
		$.getJSON(ApiUrl+'info?partyid='+TidParty+'&'+uidauth, function(data){
			var searchstr = '';
			for (vars in data) {

				if (vars == 'titlepic' && data[vars]) {
					if (typeof MOBILE != 'undefined' && MOBILE) {
						data[vars] = "<div class=\"hd_main_head\"><img src=\""+data[vars]+"\" ></div>";
					}else{
						data[vars] = "<div class=\"hd_main_head\"><div class=\"hd_main_head_dhk\"></div><img src=\""+data[vars]+"\" width=\"780\" height=\"330\"></div>";
					}
					searchstr = '<!--{partyimg}-->';
				}else{
					searchstr = '{'+vars+'}';
				}					
				partyhtml = partyhtml.replace(searchstr, data[vars]);

			}
			if (data.status == '-1') {
				var userhtml = "<a href=\"/passport.php?act=login\" target=\"_blank\">尚未登陆ZUK社区，请登录后提交报名资料。</a>";
			}else if (data.status == '-2') {
				var userhtml = "<div class=\"hd_list_form hd_list_form_prompt\">您报名信息已经提交，等待审核中。。。</div>";
			}else if (data.partystatus == 0) {
				var userhtml = "<div class=\"hd_list_form hd_list_form_prompt\">该活动尚未开始报名</div></div>";
			}else if(data.partystatus == 2) {
				var userhtml = "<div class=\"hd_list_form hd_list_form_prompt\">该活动已停止报名！</div></div>";
			}else if(data.partystatus == 1) {

				var userhtml = "\
					<div class=\"hd_list_form jsparty_msg\">\
						<ul>\
							<li>真实姓名：<span class=\"tag\">（必填）</span></li>\
							<li class=\"hd_list_form_input\"><input type=\"text\" name=\"name\" class=\"hd_list_form_s\" ></li>\
						</ul>\
						<ul>\
							<li>联系手机：<span class=\"tag\">（必填）</span></li>\
							<li class=\"hd_list_form_input\"><input type=\"text\" name=\"mobile\" class=\"hd_list_form_s\" ></li>\
						</ul>\
						<ul>\
							<li>邮箱地址：<span class=\"tag\">（必填）</span></li>\
							<li class=\"hd_list_form_input\"><input type=\"text\" name=\"email\" class=\"hd_list_form_m\" ></li>\
						</ul>\
				";

				for (vars in data.optionlist) {
					var varsval = data.optionlist[vars];
					userhtml += "<ul><li>"+varsval.optiontitle+"："+(varsval.mast?'<span class=\"tag\">（必填）</span>':'')+"</li><li class=\"hd_list_form_input\">";
					if (varsval.optiontype == 'input') {
						userhtml += '<input type="text" name="option['+varsval.optionid+']" class="hd_list_form_s" >';
					}else if (varsval.optiontype == 'radio') {
						for (var i = 0; i < varsval.text.length; i++) {
							userhtml += '<input type="radio" name="option['+varsval.optionid+']" id="option_radio_'+varsval.text[i]+'" value="'+i+'"> <label for="option_radio_'+varsval.text[i]+'">'+varsval.text[i]+'</label> ; ';
						}
					}else if (varsval.optiontype == 'checkbox') {
						for (var i = 0; i < varsval.text.length; i++) {
							userhtml += '<input type="checkbox" id="option_checkbox_'+varsval.text[i]+'" name="option['+varsval.optionid+'][]" value="'+i+'" > <label for="option_checkbox_'+varsval.text[i]+'">'+varsval.text[i]+'</label> ; ';
						}
					}
					userhtml += "</li></ul>";
				}

				userhtml += "\
						<ul>\
							<li class=\"hd_list_form_button\"><button type=\"button\" onclick=\"partypost()\">填写好了，提交</button></li>\
						</ul>\
					</div>\
				";
			}	
			partyhtml = partyhtml.replace('{userhtml}', userhtml);
			$('.jsparty').html(partyhtml);
		});
	}
}

function partypost(){
	var $ = jQuery;
	var uidauth = $('.jsparty').attr('uidauth');
	var postdata = jQuery("#partypostform").serialize();
	var ApiUrl = LOCALWEB?'http://127.0.0.1:501/api/party/':'http://api.bbs.zuk.cn/party/';
	var loadding = false;
	if (!loadding) {
		loadding = true;
		$('.jsparty_msg').html('<div class="hd_list_form hd_list_form_prompt"><img src="static/image/common/loading.gif"> 数据正在提交，请稍等。。。</div>');
		jQuery.post(ApiUrl+'post?'+uidauth, postdata , function(response){
			if (response.status == '-1') {
				$('.jsparty_msg').html('<a href="/passport.php?act=login" target="_blank">尚未登陆ZUK社区，请登录后提交报名资料。</a>');
			}else if (response.status == '1') {
				$('.jsparty_msg').html('<div class="hd_list_form hd_list_form_prompt">'+response.msg+'</div>');
			}else if (response.status == '0') {
				$('.jsparty_msg').html('<div class="hd_list_form hd_list_form_prompt"><a href="javascript:;" onclick="partyget();">'+response.msg+'</a></div>');
			}

		}, "json");
	}
}

function changethreadthumb(){
	var $=jQuery;
	var hide = 1;
	if ($('#threadthumb').hasClass("threadthumb_yes")) {
		hide = 1;
	}else{
		hide = 0;
	}

	$('#threadthumb').removeClass();
	$('.threadthumbbtn').removeClass('expand shrink');
	
	if (hide) {
		$('.threadthumbbtn').addClass('expand');
		$('#threadthumb').addClass('threadthumb_no');
		$('.threadlist_imglist').addClass('dn');
	}else{
		$('.threadthumbbtn').addClass('shrink');
		$('#threadthumb').addClass('threadthumb_yes');
		$('.threadlist_imglist').removeClass('dn');
	}
	setcookie('threadthumbhide', hide, 2592000);
}


function LenovoIdSyncLoginState(lenovoid_wust){
	jQuery.getJSON(SITEURL+'passport.php?act=callback&lenovoid_wust='+lenovoid_wust+'&inajax=1', function(data){
		if (data.scode == '1') {
			location.href= location.href;
		}
	});
}


function mask_atmid(atmidob){
	var $=jQuery;
	atmidob = $(atmidob);
	var atmidob_w=atmidob.innerWidth();
	var atmidob_h=atmidob.innerHeight();
	var $win_w=$(window).innerWidth();
	var $win_h=$(window).innerHeight();
	atmidob.css('top',($win_h-atmidob_h)/2);
}

/* 会员注册 */
function userdialog_post(mod){
	var $=jQuery;

	var postdata = $("#postform").serialize();
	var loaded = false;
	if (!loaded) {
		loaded = true;
		$.post(SITEURL+'user.php?mod='+mod, postdata , function(response){
			loaded = false;
			 if (response.scode == '1') {
			 	alert(response.msg);
			 	location.href= './';
			 }else{
			 	alert(response.msg);
			 }
		}, "json");	
	};
}

// 会员注册
function userdialog_get(mod,remove){
	var $=jQuery;
	if (remove) {
		$('.loginmaskwrap').remove();
	};
	$.getJSON(SITEURL+'user.php?mod='+mod, function(data){
		if ($("#userdialog").length <= 0) {
			$("body").append('<div id="userdialog" style="position: fixed;width: 100%;height: 100%;top: 0;left: 0;z-index:100"></a>');

		}else{
		};

		if (data.scode == '1') {
			if (mod != 'logout') {
				$("#userdialog").append(data.content);
			}else{
				userdialog_close();
			 	setTimeout(function () {
				    location.href= location.href;
				}, 2000);

			}
		}
	});
}

// 首页列表剔除
var threadharmonyloaded;
var threadharmonydialog;
function threadharmony(tid,_this,index){
	var $=jQuery;

	if (!threadharmonyloaded) {
		threadharmonyloaded = true;

		seajs.use(['/static/artDialog/src/dialog'], function (dialog) {
			threadharmonydialog = dialog({
				title: '请确认是否和谐这个主题',
				width: 300,
				height: 159,
				align: 'right'
			}).show(_this);
			
			$.getJSON(SITEURL+'manage.php?action=threadharmony&operation=update&id='+tid+'&index='+index+'&inajax=1', function(response){
				threadharmonydialog.content(response.content);
				threadharmonyloaded = false;
			});
		});
	}
}






function threadharmony_post(tid){
	var $=jQuery;


	var postdata = $("#threadharmonypostform").serialize();

	$.post(SITEURL+'manage.php?action=threadharmony&operation=update&id='+tid+'&inajax=1', postdata , function(response){
		$('.ui-popup-backdrop,.ui-popup').remove();
		 if (response.scode == '1') {
			$('#normalthread_'+tid).css("backgroundColor", "#FFECEC");
			 $('#normalthread_'+tid).slideUp(500, function() {
                $('#normalthread_'+tid).remove();
            });
			
		}else{
			showError(response.msg);
		}
	}, "json");
}

function threadharmony_cancel(tid){
	var $=jQuery;

	threadharmonyloaded = false;
	$('.ui-popup-backdrop,.ui-popup').remove();
}




function userdialog_close(){
	var $=jQuery;
	$('#userdialog').remove();

}

function maskshow(zindex){
	var $ = function(id) {
		return !id ? null : document.getElementById(id);
	};
	if($('_mask')) {
		var maskObj = $('_mask');
		maskObj.style.display ='';
		maskObj.style.zIndex = zindex;
	}else{
		var maskObj = document.createElement('div');
		maskObj.id = '_mask';
		maskObj.style.position = 'absolute';
		if (zindex) {
			maskObj.style.zIndex = zindex;
		};
		maskObj.style.left = maskObj.style.top = '0px';
		maskObj.style.width = '100%';
		maskObj.style.height = Math.max(document.documentElement.clientHeight, document.body.offsetHeight) + 'px';
		maskObj.style.backgroundColor = '#000';
		maskObj.style.filter = 'progid:DXImageTransform.Microsoft.Alpha(opacity=50)';
		maskObj.style.opacity = 0.5;
		//coverObj.onclick = function () {hideMenu();};
		$('append_parent').appendChild(maskObj);
		

	}
}
function maskhide(){
	var maskObj = $('_mask');
	maskObj.style.display ='none';
}

function debug(){
	if (console !== undefined) {
		console.log(arguments);
	};
}

function userfnbox(action,operation,noajax,reload){
	var $ = jQuery;
	var operationurl = '';
	if ( discuz_uid == 0) {
		showError('您还没有登录无法进行操作,请先登录');
	};
	if (operation !== undefined) {
		operationurl = '&operation='+operation;
	};
	if (operation == 'cancel' && noajax) {

		maskhide();
		$('#userfnbox').remove();
		if (reload !== undefined) {
			location.href = location.href;
		};
	}else{
		$.getJSON(SITEURL+'commonajax.php?action='+action+operationurl+'&inajax=1', function(data){
			userloaded = true;
			if (data.scode == '1') {
				if (operation == 'cancel') {
					maskhide();
					$('#userfnbox').remove();
					if (reload !== undefined) {
						location.href = location.href;
					};
				}else if (operation == 'upgrade') {
					$('#userfnbox').append(data.content);
					mask_atmid('.js_memcover');
					var $winh=$(window).innerHeight();
					$('.mem_active').animate({'height':'0'},100,function(){
						$(this).siblings('img[data-mem="shengji_1"]').css('display','block').parents('.js_memcover')
						.animate({'top':'-=40px'},350,function(){
							$(this).children('img[data-mem="shengji_1"]').hide(0).siblings('img[data-mem="shengji_2"]').css('display','block');
							$(this).animate({'top':'-'+$(this).innerHeight()},500,function(){
								if($('.shengji_cover').length>0){
									$('.shengji_cover').animate({'top':($winh-$('.shengji_cover').innerHeight())/2,'display':'block'},100,function(){
										$(this).animate({'margin-top':'-10px'},50,function(){
											$(this).animate({'margin-top':'0'},50);
										});
									});
								}
							});
						});
					});
				}else{
					maskshow();
					if ($('#userfnbox').length>0) {
						$('#userfnbox').append(data.content);
					}else{
						$('#append_parent').append('<div id="userfnbox">'+data.content+'</div>');
					}
					mask_atmid('.js_memcover');
				}
			}
		});	
	}

}

//返回顶部显示或出现
function flytop(operationObj){
	var $ = jQuery;
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
	var $=jQuery;
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


//关闭弹窗口
function closedialog(){
	var $=jQuery;
	$("#append_parent").html('');
	//maskhide();	
}	


//关闭弹窗口
function typeidsort(obj){
	var $=jQuery;
	if (CURSCRIPT == 'forum') {
		var posttype  = jQuery('#typeid').find("option:selected").text();
		var postvalue  = jQuery('#typeid').find("option:selected").val();
		if (sortid) {
			if (posttype == 'typeid') {
				switchpost('forum.php?mod=post&action=newthread&typeid='+postvalue);
			}else if (posttype == 'sortid') {
				return false;
			};
		}else{
			if (posttype == 'typeid') {
				return false;
			}else if (posttype == 'sortid') {
				switchpost('forum.php?mod=post&action=newthread&sortid='+postvalue);
			};
		}
	};
}	



