<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
    <meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
    <title>59家居网</title>
    <link rel="stylesheet" type="text/css" href="/manage/Public/jobs/css/aui.2.0.css" />
	<script type="text/javascript" src="/manage/Public/jobs/script/api.js" ></script>
	<link href="/manage/Public/jobs/css/style.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="/manage/Public/jobs/script/jquery-1.7.2.min.js" ></script>
	<script type="text/javascript" src="/manage/Public/jobs/script/jquery.qrcode.min.js" ></script>
<style type="text/css">
.demo{width:200px; margin:40px auto 0 auto; min-height:250px;}
.demo p{line-height:30px}
#code{margin-top:10px}
</style>
<script type="text/javascript">
$(function(){
	var str = "http://www.59jiaju.com/manage/jingyi.php/Home/Zhaojob/register/id/2/p_id/1473403832";
	$('#code').qrcode(str);
		$("#code").empty();
		var str = toUtf8(str);
		
		$("#code").qrcode({
			render: "table",
			width: 200,
			text: str,
			height:200,
		});
	
})
function toUtf8(str) {   
    var out, i, len, c;   
    out = "";   
    len = str.length;   
    for(i = 0; i < len; i++) {   
    	c = str.charCodeAt(i);   
    	if ((c >= 0x0001) && (c <= 0x007F)) {   
        	out += str.charAt(i);   
    	} else if (c > 0x07FF) {   
        	out += String.fromCharCode(0xE0 | ((c >> 12) & 0x0F));   
        	out += String.fromCharCode(0x80 | ((c >>  6) & 0x3F));   
        	out += String.fromCharCode(0x80 | ((c >>  0) & 0x3F));   
    	} else {   
        	out += String.fromCharCode(0xC0 | ((c >>  6) & 0x1F));   
        	out += String.fromCharCode(0x80 | ((c >>  0) & 0x3F));   
    	}   
    }   
    return out;   
}  
</script>
<script type="text/javascript">
		function goBack(){ 
		if ((navigator.userAgent.indexOf('MSIE') >= 0) && (navigator.userAgent.indexOf('Opera') < 0)){
				// IE 
				if(history.length > 0){ 
					window.history.go( -1 ); 
				}else{
					window.opener=null;window.close(); 
				} 
			}else{ 
				//非IE浏览器 
				if (navigator.userAgent.indexOf('Firefox') >= 0 || navigator.userAgent.indexOf('Opera') >= 0 || navigator.userAgent.indexOf('Safari') >= 0 || navigator.userAgent.indexOf('Chrome') >= 0 || navigator.userAgent.indexOf('WebKit') >= 0){ 
					if(window.history.length > 1){ 
						window.history.go( -1 ); 
					}else{
						window.opener=null;window.close(); 
					} 
				}else{ 
					//未知的浏览器 
					window.history.go( -1 );
				} 
			} 
		}
</script>
</head>
<body>
<header class="aui-bar aui-bar-nav" style="background-color:#1C1B20;">
    <a class="aui-pull-left aui-btn" onclick="goBack()">
        <span class="aui-iconfont aui-icon-left"></span>返回
    </a>
    <div class="aui-title">二维码邀请工友</div>
</header>
<!--内容列表-->

<!--<div style="width:100%;max-width:100%;">
	<div style="width:70%;max-width:70%;margin-left:auto;margin-right:auto;text-align:center;padding-top:30px;">
		<h2>我的二维码</h2>
	</div>
</div>-->
<div class="demo">
<p>我的二维码</p>
   		<div id="code"></div>
</div>
</body>
<script type="text/javascript">
    apiready = function(){
        api.parseTapmode();
    }
    function openWin(name){
        var delay = 0;
        if(api.systemType != 'ios'){
            delay = 300;
        }
        api.openWin({
            name: ''+name+'',
            url: ''+name+'.html',
            bounces:false,
            delay: delay,
            slidBackEnabled:true,
            vScrollBarEnabled:false
        });
    }

</script>
</html>