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
	<link rel="stylesheet" href="/manage/Public/jobs/css/cityselect.css">
	<script type="text/javascript" src="/manage/Public/jobs/script/cityselect.js"></script>

<style type="text/css">

</style>

	
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
    <div class="aui-title">59家居招工人</div>
</header>
<!--内容列表-->
<div style="width:100%;max-width:100%;">
	<div style="width:53%;max-width:53%;margin:0px;padding:0px;float:left;display:inline;" >
		<img style="width:100%;max-width:100%;margin:0px;padding:0px;" src="/manage/Public/jobs/img/zuo01.png">
		<img style="width:100%;max-width:100%;margin:0px;padding:0px;" src="/manage/Public/jobs/img/zuo02.png">
		<a href="/manage/jingyi.php/Home/Jysearch/searchjobs/jobtype/4"><img style="width:100%;max-width:100%;margin:0px;padding:0px;" src="/manage/Public/jobs/img/zuo03.png"></a>
		<a href="/manage/jingyi.php/Home/Jysearch/searchjobs/jobtype/13"><img style="width:100%;max-width:100%;margin:0px;padding:0px;" src="/manage/Public/jobs/img/zuo04.png"></a>
		<a href="/manage/jingyi.php/Home/Jysearch/searchjobs/jobtype/14"><img style="width:100%;max-width:100%;margin:0px;padding:0px;" src="/manage/Public/jobs/img/zuo05.png"></a>
		<img style="width:100%;max-width:100%;margin:0px;padding:0px;" src="/manage/Public/jobs/img/zuo06.png">
		
	</div>
	<div style="width:47%;max-width:47%;margin:0px;padding:0px;float:left;display:inline">
		<img style="width:100%;max-width:100%;margin:0px;padding:0px;" src="/manage/Public/jobs/img/you01.png">
		<a href="/manage/jingyi.php/Home/Jysearch/searchjobs/jobtype/1"><img style="width:100%;max-width:100%;margin:0px;padding:0px;" src="/manage/Public/jobs/img/you02.png"></a>
		<a href="/manage/jingyi.php/Home/Jysearch/searchjobs/jobtype/3"><img style="width:100%;max-width:100%;margin:0px;padding:0px;" src="/manage/Public/jobs/img/you03.png"></a>
		<a href="/manage/jingyi.php/Home/Jysearch/searchjobs/jobtype/5"><img style="width:100%;max-width:100%;margin:0px;padding:0px;" src="/manage/Public/jobs/img/you04.png"></a>
		<img style="width:100%;max-width:100%;margin:0px;padding:0px;" src="/manage/Public/jobs/img/you05.png">
		<a href="/manage/jingyi.php/Home/Jysearch/searchjobs/wujindz/jobtype/15"><img style="width:100%;max-width:100%;margin:0px;padding:0px;" src="/manage/Public/jobs/img/you06.png"></a>
		<img style="width:100%;max-width:100%;margin:0px;padding:0px;" src="/manage/Public/jobs/img/you07.png">
	</div>
</div>
<div style="width:100%;max-width:100%;margin:0px;padding:0px;">
	<img style="width:100%;max-width:100%;margin:0px;padding:0px;" src="/manage/Public/jobs/img/zy.png">
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