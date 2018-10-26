<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
    <meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
    <title>59家居网</title>
    <link rel="stylesheet" type="text/css" href="/manage/Public/jobs/css/aui.2.0.css" />
    <!--<link rel="stylesheet" type="text/css" href="/manage/Public/jobs/css/api.css" />-->
    <!--<link rel="stylesheet" type="text/css" href="/manage/Public/jobs/css/aui-skin.css" />-->
    <!--<link rel="stylesheet" type="text/css" href="/manage/Public/jobs/css/aui-pull-refresh.css" />-->
    <!--<link rel="stylesheet" type="text/css" href="/manage/Public/jobs/css/aui-skin-night.css" />-->
    <!--<link rel="stylesheet" type="text/css" href="/manage/Public/jobs/css/aui-slide.css" />-->
    <!--<script type="text/javascript" src="/manage/Public/jobs/script/api.js" ></script>-->
    <!--<script type="text/javascript" src="/manage/Public/jobs/script/aui-dialog.js" ></script>-->
    <!--<script type="text/javascript" src="/manage/Public/jobs/script/aui-popup.js" ></script>-->
    <!--<script type="text/javascript" src="/manage/Public/jobs/script/aui-pull-refresh.js" ></script>-->
    <!--<script type="text/javascript" src="/manage/Public/jobs/script/aui-range.js" ></script>-->
    <!--<script type="text/javascript" src="/manage/Public/jobs/script/aui-scroll.js" ></script>-->
    <!--<script type="text/javascript" src="/manage/Public/jobs/script/aui-skin.js" ></script>-->
    <!--<script type="text/javascript" src="/manage/Public/jobs/script/aui-slide.js" ></script>-->
    <!--<script type="text/javascript" src="/manage/Public/jobs/script/aui-tab.js" ></script>-->
    <!--<script type="text/javascript" src="/manage/Public/jobs/script/aui-toast.js" ></script>-->
    <script type="text/javascript" src="/manage/Public/jobs/script/jquery-1.7.2.min.js" ></script>
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
  //手机输入限制
  function ValidateNumber(e, pnumber){
      if (!/^\d+$/.test(pnumber)){
      $(e).val(/^1[\d]+/.exec($(e).val()));
      }else{
        $(e).val(/^1\d{0,10}/.exec($(e).val()));
        if($("#phone_mob").val().length>11){
          $(e).val(/^1\d{0,10}/.exec($(e).val()));
        }
      }
      return false;
    }
    //获取验证码
    function getveryfy(){
    var phonenum=$("#phone_mob").val();
        if(phonenum==""){
            alert("手机号不能为空");
          }else if(phonenum.length!=11){
            alert('请输入11位的手机号');
          }else{
              //判断手机是否已经注册
             $.ajax({
               type: "POST",
                url: "/manage/jingyi.php/Home/Member/getveryfy",
                data: "phone_mob="+phonenum,
                success: function(msg){
                        if(msg=='ok'){
                            alert('已发送，请注意查收');
                        }
                     }
                }); 
            }    
          }
  //验证验证码
  function myveryfy(e, pnumber){
    var veryfy=$(e).val();
              //判断手机是否已经注册
             $.ajax({
               type: "POST",
                url: "/manage/jingyi.php/Home/Member/veryfy",
                data: "veryfy="+veryfy,
                success: function(msg){
						//alert(msg);
                        if(msg=='ok'){
                            $("#vf").val('ok');
                        }else{
                            $("#vf").val('err');
                        }
                     }
                });    
          }
    //两次密码验证
    function checkpwd(){
        var p1=$("#p1").val();
        var p2=$("#p2").val();
        if(p1==""){
            alert("密码不能为空");
            $("#pck").val('err');
        }else if(p2==""){
            alert("密码不能为空");
            $("#pck").val('err');
        }else if(p1==p2){
            $("#pck").val('ok');
        }else{
            $("#pck").val('err');
            alert("两次密码不一致");
        }
    }
	//验证电子邮件格式
	function checkemail(){
		var email=$("#isemal").val();
		if(email==""){
			$('#em').val('err');
		}else{
			$.ajax({
               type: "POST",
                url: "/manage/jingyi.php/Home/Member/isemal",
                data: "email="+email,
                success: function(msg){
                        if(msg=='ok'){
							//alert('ok');
                            $('#em').val('ok');
                            //alert( $("#vf").val());
                        }else{
							//alert('err');
                            $('#em').val('err');
                        }
                     }
                }); 
		}
	}
	//验证用户名是否已经被占用
	function checkname(){
		var user_name=$("#user_name").val();
		//alert(user_name);
		if(user_name==""){
			$('#un').val('err');
		}else{
			$.ajax({
               type: "POST",
                url: "/manage/jingyi.php/Home/Member/checkname",
                data: "user_name="+user_name,
                success: function(msg){
						//alert(msg);
                        if(msg=='ok'){
                            $('#un').val('ok');
                           // alert('ok');
                        }else{
							//alert('err');
                            $('#un').val('err');
                        }
                     }
                }); 
		}
	}
	//验证手机号码是否已经注册
	function checktel(){
		var phone_mob=$("#phone_mob").val();
		//alert(user_name);
		if(phone_mob==""){
			$('#pm').val('err');
		}else{
			$.ajax({
               type: "POST",
                url: "/manage/jingyi.php/Home/Member/checktel",
                data: "phone_mob="+phone_mob,
                success: function(msg){
						//alert(msg);
                        if(msg=='ok'){
                            $('#pm').val('ok');
                           //alert('ok');
                        }else{
							//alert('err');
                            $('#pm').val('err');
                        }
                     }
                }); 
		}
	}
	function imgclick(e){
		var jobtype=$(e).attr("name");
		$("#jobtype").val(jobtype);
		//ajax 提交表单  $("#myregform").submit();
			$.ajax({
				cache: true,
				type: "POST",
				url:"/manage/jingyi.php/Home/Zhaojob/register",
				data:$("#myregform").serialize(),// 你的formid
				async: false,
				  error: function(request) {
					  alert("Connection error");
				  },
				  success: function(data) {
					//$("#commonLayout_appcreshi").parent().html(data);
					if(data=="uperr"){
						alert('更新失败');
					}else{
						//alert(data);
						window.location.href="/manage/jingyi.php/Home/Zhaojob/register/step/3/user_id/"+data; 
					}
				   //alert(data);
				  }
			  });
	}
     //提交表单
    function tijao(){
        var vf=$("#vf").val();
		var pm=$('#pm').val();
		var phone_mob=$('#phone_mob').val();
        if(phone_mob==""){
			alert("手机必填");
		}else if(phone_mob.length!=11){
            alert('请输入11位的手机号');
         }else if(pm=='err'){
			alert('手机号已经注册,请登录');
		}else if(vf=='err'){
            alert('验证码错误');
        }else{
			//提交表单注册信息
			$.ajax({
				cache: true,
				type: "POST",
				url:"/manage/jingyi.php/Home/Zhaojob/register",
				data:$("#myregform").serialize(),// 你的formid
				async: false,
				  error: function(request) {
					  alert("Connection error");
				  },
				  success: function(data) {
					//$("#commonLayout_appcreshi").parent().html(data);
					if(data=="regerr"){
						alert('注册失败');
					}else{
						//alert(data);
						window.location.href="/manage/jingyi.php/Home/Zhaojob/register/step/1/user_id/"+data; 
					}
				   //alert(data);
				  }
			  });
			//$("#myregform").submit();
		}
    }
</script>
<style type="text/css">
body{background-color:#EFEEF3;}
.aui-content-padded p{width:80%;max-width:80%;margin-left:auto;margin-right: auto;margin-bottom: 10px;background-color: #FE7113;}
</style>
</head>
<body>
<header class="aui-bar aui-bar-nav" style="background-color:#3BB3C3;">
    <a class="aui-pull-left aui-btn" onclick="goBack()">
        <span class="aui-iconfont aui-icon-left"></span>
    </a>
    <span style="color:#FFFFFF;float:left;" ><a onclick="goBack()" href="javascript:;"><span id='s_city'>返回</span></a></span>
    <div class="aui-title" ><span style="float:right;"><a href="/manage/jingyi.php/Home/Zhaojob/login">登录</a><span></div>
</header>
<input type="hidden" id='vf' value="err">
<input type="hidden" id='pck' value="err">
<input type="hidden" id='pm' value="err">
<input type="hidden" id='un' value="err">
<form id='myregform' action="/manage/jingyi.php/Home/Zhaojob/register" method="post">
<input type='hidden' name="data[user_id]" value='<?php echo ($user_id); ?>'>
<input type='hidden' id="jobtype" name="data[jobtype]">
<div class="aui-content aui-margin-b-15">
    <ul class="aui-list aui-media-list">
        <li class="aui-list-item">
            <div class="aui-list-item-inner">
                <div class="aui-row aui-row-padded">
                    <div class="aui-col-xs-4">
                        <img style="width:162px;height:184px;" onclick="imgclick($(this))" name="4" src="/manage/Public/jobs/img/gz1.png"/>
                    </div>
                    <div class="aui-col-xs-4">
                        <img style="width:162px;height:184px;" onclick="imgclick($(this))" name="3" src="/manage/Public/jobs/img/gz2.png" />
                    </div>
                    <div class="aui-col-xs-4">
                        <img style="width:162px;height:184px;" onclick="imgclick($(this))" name="5" src="/manage/Public/jobs/img/gz3.png" />
                    </div>
                    <div class="aui-col-xs-4">
                        <img style="width:162px;height:184px;" onclick="imgclick($(this))" name="1" src="/manage/Public/jobs/img/gz4.png" />
                    </div>
                    <div class="aui-col-xs-4">
                        <img style="width:162px;height:184px;" onclick="imgclick($(this))" name="13" src="/manage/Public/jobs/img/gz5.png" />
                    </div>
                    <div class="aui-col-xs-4">
                        <img style="width:162px;height:184px;" onclick="imgclick($(this))" name="14" src="/manage/Public/jobs/img/gz6.png" />
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
<div style="width:100%;max-width:100%;text-align:center;">
	<img style="width:162px;height:184px;" onclick="imgclick($(this))" name="15" src="/manage/Public/jobs/img/gz7.png" />
</div>
</form>
<div style="width:100%;max-width:100%;">
<img src="/manage/Public/jobs/img/gz8.png" style="width:100%;" />
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