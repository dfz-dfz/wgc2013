<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
    <meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
    <title>我的级别-我拉的工友</title>
    <link rel="stylesheet" type="text/css" href="/zgapi/Public/jobs/css/api.css"/>
    <link rel="stylesheet" type="text/css" href="/zgapi/Public/jobs/css/aui.css" />
    <style>
    	html,body{
    		height:100%;
    	}
    </style>
	 <script type="text/javascript" src="/zgapi/Public/jobs/script/jquery-1.7.2.min.js" ></script>
     <script type="text/javascript">
	//切换
	function qiehuan(num){
		if(num=='ok'){
			//$("p").removeClass("aui-tab-item aui-active"); 
			//$("p").attr("class", "aui-tab-item aui-active"); 
			$("#ok").show();
			$("#no").hide();
			$("#pok").attr("class", "aui-tab-item aui-active"); 
			$("#pno").attr("class", "aui-tab-item"); 
		}else if(num=='no'){
			$("#no").show();
			$("#ok").hide();
			$("#pno").attr("class", "aui-tab-item aui-active"); 
			$("#pok").attr("class", "aui-tab-item"); 
		}
	}
	</script>
</head>
<body>
	<div class="aui-tab" id="tab">
	    <div class="aui-tab-item aui-active"><a href="<?php echo U('Jymember/mygrade',array('type'=>1));?>">我拉的工友</a></div>
	    <div class="aui-tab-item"><a href="<?php echo U('Jymember/mygrade',array('type'=>2));?>">级别特权</a></div>
	    <div class="aui-tab-item"><a href="<?php echo U('Jymember/mygrade',array('type'=>3));?>">级别结构</a></div>
	</div>

	
	<div class="aui-content aui-margin-b-15">
        <ul class="aui-list aui-media-list">
            
            <li class="aui-list-item aui-list-item-middle">
                <div class="aui-media-list-item-inner">
                    <div class="aui-list-item-media" style="width: 3rem;">
                        <img src="/zgapi/Public/jobs/img/logo.png" class="aui-img-round aui-list-img-sm">
                    </div>
                    <div class="aui-list-item-inner aui-list-item">
                        <div class="aui-list-item-text">
                            <div class="aui-list-item-title aui-font-size-14"><?php echo ($info["real_name"]); ?></div>
                            <div class="aui-list-item-right aui-font-size-14">当前级别：<?php echo ($info["mygrade"]); ?></div>
                        </div>
                        <div class="aui-list-item-text">
                            <div class="aui-list-item-title aui-font-size-14">工种：<?php echo ($info["jobtypename"]); ?></div>
                            <div class="aui-list-item-right aui-font-size-14">工价次数：3次/月</div>
                        </div>
                        <div class="aui-list-item-text">
                            <div class="aui-list-item-title aui-font-size-14">需交押金：1500元</div>
                            <div class="aui-list-item-right aui-font-size-14">已交押金：<font style="color:#ff552e">1500元</font></div>
                        </div>
                    </div>
                </div>
            </li>   
        </ul>
    </div>
    
    
    <div class="aui-content aui-margin-b-15">
        <ul class="aui-list aui-list-in">
            <li class="aui-list-item">
                <div class="aui-list-item-inner">
                    <div class="aui-list-item-title">本月已发布工价次数：2次</div>
                </div>
            </li>
            <li class="aui-list-item">
                <div class="aui-list-item-inner">
                    <div class="aui-list-item-title">本月还可发布工价次数：1次</div>
                    <div class="aui-list-item-right">
                        <div class="aui-label aui-label-info"><a href="/zgapi/jingyi.php/Home/Jysearch/searchadd/user_id/<?php echo ($info["user_id"]); ?>" style="color:#FFF;">点击进入发布</a></div>
                    </div>
                </div>
            </li>
            <li class="aui-list-item">
                <div class="aui-list-item-inner">
                    <div class="aui-list-item-title">成长历程：</div>
                    
                    <div class="aui-list-item-right">已拉工友注册数<?php echo ($info["teams"]); ?>人
                        <div class="aui-label aui-label-warning"><a href="/zgapi/jingyi.php/Home/Jymember/erweima" style="color:#FFF;">拉工友</a></div>
                    </div>
                </div>
            </li>
        </ul>
      
        <p>
			 
			<?php if(($info['teams'] >= 3) AND ($info['teams'] < 6) ): ?><img src="/zgapi/Public/jobs/img/dengji2.jpg"style="width:100%;"/>
			<?php elseif(($info['teams'] >= 6) AND ($info['teams'] < 12) ): ?>
				 <img src="/zgapi/Public/jobs/img/dengji3.jpg"style="width:100%;"/>
			<?php elseif(($info['teams'] >= 12) AND ($info['teams'] < 24) ): ?>
				<img src="/zgapi/Public/jobs/img/dengji4.jpg"style="width:100%;"/>
			<?php elseif($info['teams'] >= 24 ): ?>
				<img src="/zgapi/Public/jobs/img/dengji5.jpg"style="width:100%;"/>
			<?php else: ?>
				<img src="/zgapi/Public/jobs/img/dengji1.jpg"style="width:100%;"/><?php endif; ?>
		</p>

    </div>
	
	<div style="width:95%;margin:0 auto;overflow:hidden;height:auto;padding-bottom:44px;">
		<div style="width:100%;margin:10px auto;overflow:hidden;height:auto;">
			<div class="aui-tab" id="tab">
			    <div class="aui-tab-item aui-active" id='pok' onclick="qiehuan('ok')">已验证工友</div>
			    <div class="aui-tab-item" id='pno' onclick="qiehuan('no')">待验证的工友</div>
			</div>
		</div>
		
		<!---已验证-->
		<div class="aui-content aui-margin-b-15" id="ok">
	        <ul class="aui-list aui-media-list">
	<?php if(is_array($mygy)): foreach($mygy as $key=>$info): ?><li class="aui-list-item aui-list-item-middle">
	                <div class="aui-media-list-item-inner">

	                    <div class="aui-list-item-inner aui-list-item-arrow">
	                        <div class="aui-list-item-text">
	                            <div class="aui-list-item-title aui-font-size-14"><?php echo ($info["user_name"]); ?></div>
	                            <div class="aui-list-item-right"><?php echo ($info["phone_mob"]); ?></div>
	                        </div>
	                        <div class="aui-list-item-text">
	                            工种：<?php echo ($info["jobtypename"]); ?> <span style="float:right;">系统已赠送10积分</span>
	                        </div>
	                    </div>
	                </div>
	            </li><?php endforeach; endif; ?> 
	            
	        </ul>
	    </div>
	    
	    <!---未验证-->
		<div class="aui-content aui-margin-b-15" id="no"  style="display: none;">
	        <ul class="aui-list aui-media-list">
	
	            <?php if(is_array($nmygy)): foreach($nmygy as $key=>$info): ?><li class="aui-list-item aui-list-item-middle">
	                <div class="aui-media-list-item-inner">

	                    <div class="aui-list-item-inner aui-list-item-arrow">
	                        <div class="aui-list-item-text">
	                            <div class="aui-list-item-title aui-font-size-14"><?php echo ($info["user_name"]); ?></div>
	                            <div class="aui-list-item-right"><?php echo ($info["phone_mob"]); ?></div>
	                        </div>
	                        <div class="aui-list-item-text">
	                            工种：<?php echo ($info["jobtypename"]); ?> <span style="float:right;">系统已赠送10积分</span>
	                        </div>
	                    </div>
	                </div>
	            </li><?php endforeach; endif; ?> 
	           
	        </ul>
	    </div>
    </div>
    
</body>
 
<script type="text/javascript" src="/zgapi/Public/jobs/script/api.js"></script>
<!--Zepto.js,类似Jquery-->
<script type="text/javascript" src="/zgapi/Public/jobs/script/zepto.min.js"></script>
<script type="text/javascript" src="/zgapi/Public/jobs/script/winu-base.js" ></script>
<script type="text/javascript" src="/zgapi/Public/jobs/script/aui-tab.js" ></script>
<script type="text/javascript">
	
	apiready = function(){
		

	};
	
	var tab = new auiTab({
        element:document.getElementById("tab"),
        index:1,
        repeatClick:false
    },function(ret){
    	
    	var index = ret.index;
      
      	if(index == 1){
      		$("#ok").show();
      		$("#on").hide();
      	}else if(index == 2){
      		$("#on").show();
      		$("#ok").hide();
      	}
      	
			
       
    });
	
</script>
</html>