
/**
 * Name		: Slide  幻灯片
 * Author	: Haierspi 
 * Date		: 2015.02.05 24:00
 */

/*
	example:

	$('._mmbeautiful').slide({
		display:'._mmslidepic', //显示台容器
		pointer:'._mmslidetit'，//滚动控制器
		onclass:'classname', //控制器选中class
		speed:0   // 自动播放速度
	});

*/
(function($) {
	$.fn.slide = function(options) {
		var settings = {
            'display' : '._slidepic',
            'pointer' : '._slidetit',
            'onclass' : 'current',
            'position' : '',
            'speed' : 7000
        };
		if (options) {
			$.extend(settings, options)
		}
		var _this = this;

        var displayobj, pointerobj, i=0, num=0, timer;
        var timesc = function(){
        	if (settings.speed == 0) {
        		return;
        	};
			var _this = this;
			clearTimeout(timer);
			timer = setTimeout(function() {
				next();
			}, settings.speed);
		}
		var next = function(p){
			if(p===undefined){
				var ni = (i+1>=num)?0:i+1;
			}else{
				var ni = (p>=num)?0:p;
			}
			pointerobj.removeClass(settings.onclass).eq(ni).addClass(settings.onclass);
			displayobj.eq(ni).fadeIn(0).siblings().fadeOut(0);
			i = ni;
			timesc();
		}
		var init = function(){
			displayobj	= $(_this).find(settings.display).children();
			pointerobj	= $(_this).find(settings.pointer).children();
			num = pointerobj.length;
			if (settings.position) {
				displayobj.css('position',settings.position);
			};
			
			displayobj.hide().eq(i).show();
			pointerobj.removeClass(settings.onclass).eq(i).addClass(settings.onclass);
			pointerobj.mouseover(function(){
				next(pointerobj.index($(this)));
			});
			timesc();
		}
        init();
    }
})(jQuery);