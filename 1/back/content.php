<?php
header('Content-Type:text/html;charset=gb2312');
$htmlData = '';
include('check.php');
include('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Excellent 后台管理系统</title>
<link rel="stylesheet" type="text/css" href="main.css">
<script src="../js/jquery.js"></script>
<link rel="stylesheet" href="bjq/themes/default/default.css" />
	<script charset="utf-8" src="bjq/kindeditor.js"></script>
	<script charset="utf-8" src="bjq/lang/zh_CN.js"></script>
	<script>
		var editor;
			KindEditor.ready(function(K) {
				editor = K.create('textarea[name="newscontent"]', {
					allowFileManager : true
				});
				
		
			});
	</script>
    <script>
		var editor1;
			KindEditor.ready(function(K) {
				editor1 = K.create('textarea[name="banjicontent"]', {
					allowFileManager : true
				});
				
		
			});
	</script>
</head>

<body>

	<div class="wrapper">
	
		<h1 class="logo">Excellent 后台管理系统</h1>
		<p class="txt_right">当前登录： <strong id="loginuser"> <?php echo $loginuser ?> </strong>  <span class="v_line"> | </span> <a href="content.php?out=out">退出</a></p>
	
	<!-- Navigation -->
	
		<div class="navigation">
				<ul>
					<li class="meun"><a href="javascript:;"  class="active">时间表更新</a></li>
					<li class="meun"><a href="javascript:;" >新闻发布</a></li>
					<li class="meun"><a href="javascript:;">系统设置</a></li>
					<li class="meun"><a href="javascript:;">用户管理</a></li>
				</ul>
			
				<div id="searchform">
					<form method="get" action="">
					<input class="search_box" name="search" onclick="this.value='';" type="text">
					<input class="search_btn" value="搜索" type="submit">
					</form>
				</div>
			
		</div>
		
		<div class="clear"></div>
	   
	
		<div class="content1">
        <!--时间表更新-->
        <div class="in author">
              <h2>时间表内容更新</h2>
              </div>
              <div class="line"></div>
              <!-- Checks -->
	
			<div class="check_main">
					
				<div class="check1">
					<div class="good"><img src="img/check.gif" alt="check" class="icon"><span id="goodmsg">发布成功</span></div>
				</div>
				<div class="check2">
					<div class="bad"><img src="img/x.gif" alt="check" class="icon">发布失败: <a href="#" id="errormsg" class=></a>.</div>
				</div>
				
			</div>

              <!---->
                  <div class="in forms">
					<form id="form1" name="form1" method="post" action="">
	
      				<p><strong>地点</strong><br>
					<input name="name" class="box" type="text" id="time1"></p>
					 
					<p><strong>时间</strong><br><input name="name" class="input" type="text" id="timen">&nbsp;年<input name="name" class="input1" type="text" id="timey">&nbsp;月<input name="name" class="input1" type="text" id="timer">&nbsp;日<input name="name" class="input1" type="text" id="times">&nbsp;时<input name="name" class="input1" type="text" id="timef">&nbsp;分</p>
	  				<p><strong>内容</strong><br>
					<textarea name="mes" rows="2" cols="20" class="box" id="time3"></textarea></p> 

					<p id="fabu"><input name="submit" id="submit" tabindex="5" class="com_btn" value="发布" type="submit" onclick="return addtimetable();"></p>
                    <p id="xiugai"><input name="submit" id="submit1" tabindex="5" class="com_btn" value="修改" type="submit" onclick="return changetimetable();"></p>
					</form>
				</div>
<!-------------------------------------------------------------------------------------------------->
<div class="in">
     
	<div id="timetable">
    </div>
	</div>


<!-------------------------------------------------------------------------------------------------->
                
        </div>
        <!--时间表结束-->
        
        
		<!--新闻发布-->
	<!-- Intro -->
		       <div class="content2">
				<div class="in author">
					<h2>新闻发布</h2>
					<p>Author <a href="#" id="author">admin</a> | created in <b class="todaytime">2013-12-21</b></p>
				</div>
			
				<div class="line"></div>
				
	<!-- Checks -->
	
			<div class="check_main">
				<div class="info"></div>	
				<div class="check3">
					<div class="good"><img src="img/check.gif" alt="check" class="icon">发布成功</div>
				</div>
				<div class="check4">
					<div class="bad"><img src="img/x.gif" alt="check" class="icon">操作失败 <a href="#" id="errormsg1"></a></div>
				</div>
				
			</div>
			
	<!-- Form -->
			
				<div class="in forms">
					<form id="form1" name="example" method="post" action="">
	
      				<p><strong>标题</strong><br>
					<input name="name" class="box"  id="newstitle" type="text"></p>
					 
	  				<p><strong>关键字</strong><br>
                    <input name="name" class="box1" id="keywords" type="text">
							</p>
					
	  				<p><strong>正文</strong><br>
					<textarea name="newscontent"  id="newscontent" style="width:700px;height:200px;visibility:hidden;"></textarea></p> 

					<p id="newsfabu"><input name="submit" id="submit" tabindex="5" class="com_btn" value="发布" type="submit" onclick="return addnews();"></p>
                    <p id="newsxiugai"><input name="submit" id="submit1" tabindex="5" class="com_btn" value="修改" type="submit" onclick="return changenews();"></p>
					</form>
			
				</div>
				
				
				
	
	
	<div class="in">			
		<div id="newshis">
    </div>				
	</div>
	
    
    
   
    	
    </div>
     <!--新闻发布结束-->
     <!--系统设置-->
      <div class="content3">
      
      <div class="in author">
					<h2>主页内容设置</h2>
				</div>
			
				<div class="line"></div>
				
	<!-- Checks -->
	
			<div class="check_main">
				<div class="info"></div>	
				<div class="check5">
					<div class="good"><img src="img/check.gif" alt="check" class="icon">设置成功</div>
				</div>
				<div class="check6">
					<div class="bad"><img src="img/x.gif" alt="check" class="icon">操作失败 <a href="#" id="errormsg1"></a></div>
				</div>
				
			</div>
			
	<!-- Form -->
			
				<div class="in forms">
					<form id="banji" name="banji" method="post" action="">
					
                    <p><strong>设置内容</strong><br />
							<select name="banjiitem" id="shezhititle" class="box2"  onblur="return content();">
                            <option selected="selected"></option>
        					<option>班级概况</option>
							<option>班级荣誉</option>
        					<option>班级文化</option>
        					<option>文体活动</option>
					  </select></p> 
	  				
					
	  				<p><strong>正文</strong><br>
					<textarea name="banjicontent"  id="banjicontent" style="width:700px;height:200px;visibility:hidden;"></textarea></p> 

					<p id="banjifabu"><input name="submit" id="submit" tabindex="5" class="com_btn" value="发布" type="submit" onclick="return banjifabu();"></p>
                    <p id="banjixiugai"><input name="submit" id="submit1" tabindex="5" class="com_btn" value="修改" type="submit" onclick="return banjifabu();"></p>
					</form>
			
				</div>
             
      </div>
      <!--系统设置结束-->
      <div class="content4">
       <div class="in author">
					<h2>修改密码</h2>
				</div>
				<div class="line"></div>
                <form class="cpwd">
				<p>旧&nbsp;&nbsp;密&nbsp;&nbsp;码：<input type="password"  name="oldpassword"    id="oldpassword"/><span id="tip1" class="tip"></span></p>
                <p>新&nbsp;&nbsp;密&nbsp;&nbsp;码：<input type="password"  name="password"       id="password"/><span id="tip2" class="tip"></span></p>
                <p>重复密码：<input type="password"  name="repassword"     id="repassword"/><span id="tip3" class="tip"></span></p>
                <p><input class="submit" type="submit" onclick="return changepwd();" value="修改密码"></input><p>
                <center><span id="tip4" class="tip"></span></center>
                </form>
      </div>
    <p class="footer"><a href="#">高级搜索</a> <span class="v_line"> |</span> <a href="#">登出</a></p>
	</div>

<script src="normal.js" charset='gb2312'></script>
</body></html>