function userinfo(){
	var $ = jQuery;
	$.getJSON('commonajax.php?action=userinfo&inajax=1', function(response){
		if (response.scode == '1') {
			$('#loadcont').html(response.content);
		}
	});
}
function userinfopost(){
	var $ = jQuery;
	var postdata = jQuery("#postform").serialize();
	jQuery.post('commonajax.php?action=userinfo&inajax=1', postdata , function(response){
		 if (response.scode == '1') {
					 	
			seajs.use(['/static/artDialog/src/dialog'], function (dialog) {
				dialog({ 
					title: '提示信息',
					content: response.message,
					width: 300,
					height: 50,
					ok: function () {
						userinfo();
					},
					okValue: ' 确定 '
				}).showModal();

			});
		 }else{
			seajs.use(['/static/artDialog/src/dialog'], function (dialog) {
				dialog({ 
					title: '提示信息',
					content: response.message,
					width: 300,
					height: 50,
					ok: function () {},
					okValue: ' 确定 '
				}).showModal();
			});
		 }
	}, "json");
}

function nickname(){
	var $ = jQuery;
	$.getJSON('commonajax.php?action=nickname&inajax=1', function(response){
		if (response.scode == '1') {
			$('#loadcont').html(response.content);
		}
	});
}
function nicknamepost(){
	var $ = jQuery;
	var postdata = jQuery("#postform").serialize();
	jQuery.post('commonajax.php?action=nickname&inajax=1', postdata , function(response){

		seajs.use(['/static/artDialog/src/dialog'], function (dialog) {
			dialog({ 
				title: '提示信息',
				content: response.message,
				width: 300,
				height: 50,
				ok: function () {
					debug(response.scode);
					if (response.scode == '1'){
						$('#loadcont').html('昵称信息加载中...');
						nickname();
					}
				},
				okValue: ' 确定 '
			}).showModal();
		});

	}, "json");
}

function address(){
	var $ = jQuery;
	$.getJSON('commonajax.php?action=address&inajax=1', function(response){
		if (response.scode == '1') {
			$('#loadcont').html(response.content);
		}
	});
}
function address(){
	var $ = jQuery;
	$.getJSON('commonajax.php?action=address&inajax=1', function(response){
		if (response.scode == '1') {
			$('#loadcont').html(response.content);
		}
	});
}
function addresspost(){
	var $ = jQuery;
	var postdata = jQuery("#postform").serialize();
	jQuery.post('commonajax.php?action=address&inajax=1', postdata , function(response){
		 if (response.scode == '1') {
					 	
			seajs.use(['/static/artDialog/src/dialog'], function (dialog) {
				dialog({ 
					title: '提示信息',
					content: response.message,
					width: 300,
					height: 50,
					ok: function () {},
					okValue: ' 确定 '
				}).showModal();

			});
		 }else{
			seajs.use(['/static/artDialog/src/dialog'], function (dialog) {
				dialog({ 
					title: '提示信息',
					content: response.message,
					width: 300,
					height: 50,
					ok: function () {},
					okValue: ' 确定 '
				}).showModal();
			});
		 }
	}, "json");
}