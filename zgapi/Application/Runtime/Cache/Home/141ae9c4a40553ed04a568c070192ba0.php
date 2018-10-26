<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
    <meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
    <title>test填写</title>
    <link rel="stylesheet" type="text/css" href="/zgapi/Public/jobs/css/aui.2.0.css" />
    
    <script type="text/javascript" src="/zgapi/Public/jobs/script/jquery-1.7.2.min.js" ></script>
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
                url: "/zgapi/index.php/Home/Jymember/getveryfy",
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
                url: "/zgapi/index.php/Home/Jymember/veryfy",
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
                url: "/zgapi/index.php/Home/Jymember/isemal",
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
		var unname=$("#unname").val();
		//alert(user_name);
		if(user_name==""){
			$('#un').val('err');
		}else{
			$.ajax({
               type: "POST",
                url: "/zgapi/index.php/Home/Jymember/checkname",
                data: "user_name="+user_name,
                success: function(msg){
						//alert(msg);
                        if(msg=='ok'){
                            $('#un').val('ok');
                            //alert('ok');
                        }else{
							//alert('err');
							if(unname==user_name){
								//alert('ok');
								  $('#un').val('ok');
							}else{
								 $('#un').val('err');
							}
                           
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
                url: "/zgapi/index.php/Home/Jymember/checktel",
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
		var phone=$("#phone").val();
		if(phone_mob==phone){
			 $('#pm').val('ok');
		}
	}
     //提交表单
    function tijao(){
		var un=$('#un').val();
		//alert(un);
		var user_name=$("#user_name").val();
		var phone_mob=$("#phone_mob").val();
       
		$("#myregform").submit();
			
		
    }
</script>
<style type="text/css">
.aui-content-padded p{width:80%;max-width:80%;margin-left:auto;margin-right: auto;margin-bottom: 10px;background-color: #FE7113;}
</style>
</head>
<body>
<header class="aui-bar aui-bar-nav" style="background-color:#3BB3C3;">
    <a class="aui-pull-left aui-btn" onclick="goBack()">
        <span class="aui-iconfont aui-icon-left"></span>
    </a>
    <span style="color:#FFFFFF;float:left;" ><a onclick="goBack()" href="javascript:;"><span id='s_city'>返回</span></a></span>
    
</header>
<form id='myregform' action="/zgapi/index.php/Home/Jymember/getqiuzhi" method="post" enctype="multipart/form-data">
<div class="aui-content aui-margin-b-15">
     <ul class="aui-list aui-form-list">
	 <!-- <input type="file" name="img"/>-->
	  <input type='text' name="user_id" value='1473403835'>
		<!--<li class="aui-list-item">
            <div class="aui-list-item-inner">
                <div class="aui-list-item-input">
                    <input id="age" name='age' type="text" placeholder="|年龄" >
                </div>
            </div>
        </li>
		<li class="aui-list-item">
            <div class="aui-list-item-inner">
                <div class="aui-list-item-input">
                    <input id="huji" name='huji' type="text" placeholder="|户籍" >
                </div>
            </div>
        </li>
		<li class="aui-list-item">
            <div class="aui-list-item-inner">
                <div class="aui-list-item-input">
					工种：
					<select name='jobtype' style="display:inline;width:30%;max-width:30%;">
					  <option value ="1" selected="selected">泥水工</option>
					  <option value ="3">电焊工</option>
					  <option value="4">扇灰工</option>
					  <option value="5">木工</option>
					  <option value="13">水电工</option>
					  <option value ="14">杂工</option>
					</select>
                </div>
            </div>
        </li>
		<li class="aui-list-item">
            <div class="aui-list-item-inner">
                <div class="aui-list-item-input">
                    <input id="job_exp" name='job_exp' type="text" placeholder="|经验" >
                </div>
            </div>
        </li>
		<li class="aui-list-item">
            <div class="aui-list-item-inner">
                <div class="aui-list-item-input">
                    <input id="job_live" name='job_live' type="text" placeholder="|经历" >
                </div>
            </div>
        </li>
		<li class="aui-list-item">
            <div class="aui-list-item-inner">
                <div class="aui-list-item-input">
                    <input id="skill" name='skill' type="text" placeholder="|技能" >
                </div>
            </div>
        </li>
		<li class="aui-list-item">
            <div class="aui-list-item-inner">
                <div class="aui-list-item-input">
                    <textarea id="intension" name='intension' placeholder="|意向" ></textarea>
                </div>
            </div>
        </li>
		-->
		 
		
		
     </ul>
</div>
</form>
<div class="aui-content-padded">
    <p><div class="aui-btn aui-btn-primary aui-btn-block" onclick="tijao()">确认发布</div></p>
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