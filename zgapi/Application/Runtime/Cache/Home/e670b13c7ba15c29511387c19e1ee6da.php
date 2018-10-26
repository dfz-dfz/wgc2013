<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
    <meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
    <title>59家居网</title>
    <link rel="stylesheet" type="text/css" href="/manage/Public/jobs/css/aui.2.0.css" />
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
     //提交表单
    function tijao(){
		      
		var title=$('#title').val();
		var num=$('#num').val();
		var xinzi=$('#xinzi').val();
		var unit=$('#unit').val();
		var livetime=$('#livetime').val();
        if(title==""){
			alert("项目名称必填");
		}else if(num==""){
			alert("数量/范围必填");
		}else if(xinzi==""){
			alert("人工费必填");
		}else if(unit==""){
			alert("计价单位必填");
		}else if(livetime==""){
			alert("工期必填");
		}else{
			//$("#myregform").submit();
			//ajax 提交表单  $("#myregform").submit();
			$.ajax({
				cache: true,
				type: "POST",
				url:"/manage/jingyi.php/Home/Jysearch/searchadd",
				data:$("#myregform").serialize(),// 你的formid
				async: false,
				  error: function(request) {
					  alert("Connection error");
				  },
				  success: function(data) {
					//$("#commonLayout_appcreshi").parent().html(data);
					if(data=="err"){
						alert('发布失败');
					}else{
						//alert($("#sid").val());
						$("#sid").val(data);
						alert('发布成功');
						//window.location.href="/manage/jingyi.php/Home/Zhaojob/register/step/ok/user_id/"+data; 
					}
				   //alert(data);
				  }
			  });
		}
    }
</script>
<style type="text/css">
.aui-content-padded p{width:80%;max-width:80%;margin-left:auto;margin-right: auto;margin-bottom: 10px;background-color: #FE7113;}
</style>
</head>
<body>
<header class="aui-bar aui-bar-nav" style="background-color:#EA8415;">
    <a class="aui-pull-left aui-btn" onclick="goBack()">
        <span class="aui-iconfont aui-icon-left"></span>
    </a>
    <div class="aui-title">工价发布</div>
</header>
<input type="hidden" id='vf' value="err">
<input type="hidden" id='pck' value="err">
<input type="hidden" id='pm' value="err">
<input type="hidden" id='un' value="err">
<form id='myregform' action="/manage/jingyi.php/Home/Jysearch/searchadd" method="post">
<input type="hidden" id='sid' name="id">
<div class="aui-content aui-margin-b-15">
     <ul class="aui-list aui-form-list">
        <li class="aui-list-item">
            <div class="aui-list-item-inner">
                <div class="aui-list-item-input">
                    <input id="title" name='data[title]' type="text" placeholder="|项目名称：">
                </div>
            </div>
        </li>
		<li class="aui-list-item">
            <div class="aui-list-item-inner">
                <div class="aui-list-item-input">
                    <input id="unit" name='data[unit]' type="text" placeholder="|计价单位：">
                </div>
            </div>
        </li>
		<li class="aui-list-item">
            <div class="aui-list-item-inner">
                <div class="aui-list-item-input">
                    <input id="num" name='data[num]' type="text" placeholder="|数量：">
                </div>
            </div>
        </li>
		<li class="aui-list-item">
            <div class="aui-list-item-inner">
                <div class="aui-list-item-input">
                    <input id="xinzi" name='data[xinzi]' type="text" placeholder="|纯人工收费：">
                </div> 
            </div>
        </li>
		<li class="aui-list-item">
            <div class="aui-list-item-inner">
                <div class="aui-list-item-input">
					工种：
					<select name='data[jobtype]' style="display:inline;width:30%;max-width:30%;">
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
                    平台管理费：<span style="font-size:15px;">（平台收取10%的管理费，客服审核）</span>
                </div>
            </div>
        </li>
		<li class="aui-list-item">
            <div class="aui-list-item-inner">
                <div class="aui-list-item-input">
                    发布价格：<span style="font-size:15px;">（纯人工收费+平台管理费，客服审核）</span>
                </div>
            </div>
        </li>
		<li class="aui-list-item">
            <div class="aui-list-item-inner">
                <div class="aui-list-item-input">
                    <input id="livetime" name='data[livetime]' type="text" placeholder="|工期：">
                </div>
            </div> 
        </li>
		<li class="aui-list-item">
            <div class="aui-list-item-inner">
                <div class="aui-list-item-input">
                    <input id="xiangxi" name='data[xiangxi]' type="text" placeholder="|工作地点：">
                </div>
            </div>
        </li>
        <li class="aui-list-item">
            <div class="aui-list-item-inner">
                <div class="aui-list-item-input">
                    <textarea id="ps" name='data[ps]' placeholder="|备注："></textarea>
                </div>
            </div>
        </li>
       <li class="aui-list-item">
            <div class="aui-list-item-inner">
                <div class="aui-list-item-input">
                    <input id="sender" name='data[sender]' type="text" placeholder="|联系人：">
                </div>
            </div>
        </li>
		<li class="aui-list-item">
            <div class="aui-list-item-inner">
                <div class="aui-list-item-input">
                    <input id="senderphone" name='data[senderphone]' type="text" placeholder="|联系电话：">
                </div>
            </div>
        </li>
     </ul>
</div>
</form>
<div class="aui-content-padded" style="text-align:center;width:100%;max-width:100%;">
	 <div class="aui-btn aui-btn-warning" style="display:inline;width:40%;max-width:40%;" onclick="tijao()">提交发布</div>&nbsp;&nbsp;
	 <div onclick="goBack()" class="aui-btn aui-btn-warning" style="display:inline;width:40%;max-width:40%;">取消发布</div>
    <!--<p><div class="aui-btn aui-btn-primary aui-btn-block" onclick="tijao()">确认发布</div></p>-->
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