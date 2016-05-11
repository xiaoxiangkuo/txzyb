<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>登陆</title>
<script language="JavaScript"> 
    function keyLogin(){  
        if (event.keyCode==13)  { //回车键的键值为13  
             document.getElementById("login").click(); //调用登录按钮的登录事件  
		}
        }  
</script> 
<style type="text/css">
*{padding:0; margin:0;}
html{
background:url(img/back.jpg) repeat-x;
}
#all{
	width:100%;
	margin:0px auto;
	}
#content{
	margin:0px auto;
	width:400px;
	height:300px;
	margin-top:100px;
	}
.h2{
	background:url(img/header.jpg) repeat-x ;
	width:400px;
	height:50px;
	color:#FFF;
	font-size:20px;
	text-align:center;
	line-height:50px;
	font-family:"楷体";
	}
#table{
	width:370px;
	height:150px;
	background:url(img/form.jpg) repeat-x;
	padding-top:20px;
	padding-left:30px;
	float:none;
	}
.shuru1{
	color:#fff;
	font-size:20px;
	font-family:"楷体";
	height:50px;
	width:50px;
	line-height:50px;
	}
.shuru2{
	color:#fff;
	font-size:20px;
	font-family:"楷体";
	height:50px;
	width:50px;
	line-height:50px;
	}
.txt1 .txt2{
	font-size:20px; line-height:20px; color:#FFF; padding-left:5px;z-index:0;
	}
#inputarea input{font-size:20px; color:#fff; background:none; z-index:0;width:180px; margin-left:14px;border:none; height:28px; margin-top:10px;}
#zi{
	
	width:50px;
	height:100px;
	float:left;}
#inputarea{
	float:left;
	width:290px;
	margin-left:10px;
	height:100px;
	margin-top:4px;
	background:url(img/input.png) repeat-y;
	z-index:1000;

}
.button{
	width:300px;
	height:20px;
	text-align:center;
	padding-top:15px;
	}
.tablecenter{
     width:360px;
	 height:100px; 
	 clear:both;
	}
.wjmm{
	color:white;
	font-size:18px;
	text-decoration:none;
	margin-left:30px;}
.tijiao{
	margin-left:20px;
	color:white;
	font-size:18px;
	text-decoration:none;
	}
.tijiao:hover{
	}
.tip{
	color:red;
	font-size:14px;
	margin-left:20px;
}
.footer{
	font-size:14px;
	color:#000;
	text-align:center;
	margin-top:100px;
	font-family:"微软雅黑";
	}
.footer a{
	color:#000;
	text-decoration:none;
	}
.footer a:hover{
	color:#000;
	text-decoration:underline;
	}
</style>
</head>
<body onkeydown="keyLogin();">
<div id="all">
<div id="content">
<P align="center"> <img src="img/logo.png"  width="360" height="79" /></P>
<div id="form">
<h2 class="h2">
后台信息管理系统
</h2>
<div id="table">
<div  class="tablecenter">
<div id="zi">
<div class="shuru1">账号:</div>
<div class="shuru2">密码:</div>
</div>
<div id="inputarea">
<input type="text"  name="user" class="txt1" border="0" id="username" /><span id="tip1" class="tip"></span>
<input type="password"  name="password" class="txt2" style="margin-top:18px;"  id="password"/><span id="tip2" class="tip"></span>
</div>
</div>
<div class="button">
<a href="javascript:void(0)"  class="tijiao" onclick="return tijiao();"  id="login">登陆</a>
<a href="javascript:void(0)" class="wjmm" onclick="wjmm();">忘记密码？</a>
<p id="info" style="text-align:center;color:red;margin-top:20px;"></p>
</div>
</div>
</div>
</div>
<div class="footer">
<a href="http://txzyb.sinaapp.com/">返回首页</a>
<p>@华东交通大学信息工程学院11级通信工程（卓越工程师）</p>
</div>
</div>
</body>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="submit.js"></script>
</html>