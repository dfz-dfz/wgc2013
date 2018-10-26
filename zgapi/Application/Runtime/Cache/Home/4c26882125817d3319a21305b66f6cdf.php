<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
    <meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
    <title>59家居网</title>
    <link rel="stylesheet" type="text/css" href="/zgapi/Public/jobs/css/aui.2.0.css" />
	<script type="text/javascript" src="/zgapi/Public/jobs/script/api.js"></script>
</head>
<body>
<link rel="stylesheet" type="text/css" href="/zgapi/Public/jobs/css/aui-slide.css" />
<div id="aui-slide">
    <div class="aui-slide-wrap" >
        <div class="aui-slide-node bg-dark">
            <img src="/zgapi/Public/jobs/img/top.png" />
        </div>
        <div class="aui-slide-node bg-dark">
            <img src="/zgapi/Public/jobs/img/top.png" />
        </div>
        <div class="aui-slide-node bg-dark">
            <img src="/zgapi/Public/jobs/img/top.png" />
        </div>
    </div>
    <div class="aui-slide-page-wrap"><!--分页容器--></div>
</div>
<div class="aui-card-list" style='background-color:#F5F5F5;'>
	<div class="aui-card-list-content" style='padding-top:10px;padding-bottom:10px;text-align:center;'>
		<div style="width:170px;height:170px;border-radius:120px;border:solid rgb(255,255,255) 1px;margin:auto;padding-top:10px;background-color:#FFFFFF;">
			<div style="width:150px;height:150px;border-radius:100px;border:solid rgb(255,255,255) 1px; overflow:hidden;margin:auto;">
				<div style="width:100%;max-width:100%;height:50px;line-height:50px;">关注有奖</div>
				<div style='float:left;border-right:1px solid #EAEAEA;width:50%;max-width:50%;'>
					<div>
						<span style='font-family:宋体;font-size:20px;color:#62566D;'>0</span><br/>
						<span>记工(个工)</span>
					</div>
				</div>
				<div style='float:left;border-left:1px solid #EAEAEA;width:50%;max-width:50%;'>
					<div>
						<span style='font-family:宋体;font-size:20px;color:#D92528;'>0</span><br/>
						<span>收入(元)</span>
					</div>
				</div>
				<div style='width:100%;max-width:100%;'>
					<img style="width:100%;" src='/zgapi/Public/jobs/img/bl.png' />
				</div>
			</div>
		</div>
	</div>
</div>
<section class="aui-grid aui-margin-b-15">
        <div class="aui-row" style='background-color:#F5F5F5;height:50px;'>
            <div class="aui-col-xs-4" align='center'>
                <div style='float:left;padding-left:20px;'><img src='/zgapi/Public/jobs/img/gzxx.png' /></div><div style='float:left;'><span style='padding-bottom:10px;padding-left:3px;'> 工作消息</span></div>
            </div>
            <div class="aui-col-xs-4" align='center'>
            </div>
            <div class="aui-col-xs-4" align='center'>
               <div style='float:left;'><img src='/zgapi/Public/jobs/img/ckjg.png' /></div><div style='float:left;'><span style='padding-bottom:10px;padding-left:3px;'> 查看记工</span></div>
            </div>
        </div>
</section>
<div class="aui-content aui-margin-b-15"  >
        <ul class="aui-list aui-list-in">
            <li class="aui-list-item">
                <div class="aui-list-item-inner">
					<div class="aui-list-item-title" ><img src='/zgapi/Public/jobs/img/wdxm2.png' style='float:left;' /><span style='font-size:20px;'>我的项目(1)</span></div>
                    <div class="aui-list-item-right">
                        <div class="aui-bar aui-bar-btn aui-bar-btn-sm" style="width:60%;float:right">
                            <div style='border:1px solid #DDDDDD;border-radius: 20px;padding:4px;'>创建项目 | 查看材料</div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
</div>
<div style='width:100%;max-width:100%;'>
	<span style='font-size:10px;color:#979797;'>天河城麦当劳维修 </span>
</div>
<div class="aui-content aui-margin-b-15">
        <ul class="aui-list aui-media-list">
           
            <li class="aui-list-item">
                <div class="aui-media-list-item-inner">
                    <div class="aui-list-item-media">
                        <img src="/zgapi/Public/jobs/img/dt.png">
                    </div>
                    <div class="aui-list-item-inner">
                        <div class="aui-list-item-text">
                            <div class="aui-list-item-title">水电班(3)</div>
        					<div class="aui-list-item-right"></div>
                        </div>
                        <div class="aui-list-item-text">
                            王生[图片]
                        </div>
                    </div>
                </div>
            </li>
            
        </ul>
</div>
<div style='width:80%;margin-left:auto;margin-right:auto;height:50px;line-height:50px;'>
	<span style='font-size:15px;color:#979797;'>已关闭的班组/项目组(4)</span>
</div>
<script type="text/javascript" src="/zgapi/Public/jobs/script/aui-slide.js"></script>
<script type="text/javascript">
    var slide = new auiSlide({
        container:document.getElementById("aui-slide"),
        // "width":300,
        "height":100,
        "speed":300,
		"autoPlay": 2000, //自动播放
        "pageShow":true,
        "pageStyle":'dot',
        "loop":true,
        'dotPosition':'center',
        currentPage:currentFun
    })

    function currentFun(index) {
        console.log(index);
    }
    var slide2 = new auiSlide({
        container:document.getElementById("aui-slide2"),
        // "width":300,
        "height":240,
        "speed":300,
        "autoPlay": 3000, //自动播放
        "pageShow":true,
        "loop":true,
        "pageStyle":'dot',
        'dotPosition':'center'
    })
    var slide3 = new auiSlide({
        container:document.getElementById("aui-slide3"),
        // "width":300,
        "height":240,
        "speed":500,
        "autoPlay": 3000, //自动播放
        "loop":true,
        "pageShow":true,
        "pageStyle":'line',
        'dotPosition':'center'
    })
    console.log(slide3.pageCount());
</script>
</body>

</html>