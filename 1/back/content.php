<?php
header('Content-Type:text/html;charset=gb2312');
$htmlData = '';
include('check.php');
include('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Excellent ��̨����ϵͳ</title>
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
	
		<h1 class="logo">Excellent ��̨����ϵͳ</h1>
		<p class="txt_right">��ǰ��¼�� <strong id="loginuser"> <?php echo $loginuser ?> </strong>  <span class="v_line"> | </span> <a href="content.php?out=out">�˳�</a></p>
	
	<!-- Navigation -->
	
		<div class="navigation">
				<ul>
					<li class="meun"><a href="javascript:;"  class="active">ʱ������</a></li>
					<li class="meun"><a href="javascript:;" >���ŷ���</a></li>
					<li class="meun"><a href="javascript:;">ϵͳ����</a></li>
					<li class="meun"><a href="javascript:;">�û�����</a></li>
				</ul>
			
				<div id="searchform">
					<form method="get" action="">
					<input class="search_box" name="search" onclick="this.value='';" type="text">
					<input class="search_btn" value="����" type="submit">
					</form>
				</div>
			
		</div>
		
		<div class="clear"></div>
	   
	
		<div class="content1">
        <!--ʱ������-->
        <div class="in author">
              <h2>ʱ������ݸ���</h2>
              </div>
              <div class="line"></div>
              <!-- Checks -->
	
			<div class="check_main">
					
				<div class="check1">
					<div class="good"><img src="img/check.gif" alt="check" class="icon"><span id="goodmsg">�����ɹ�</span></div>
				</div>
				<div class="check2">
					<div class="bad"><img src="img/x.gif" alt="check" class="icon">����ʧ��: <a href="#" id="errormsg" class=></a>.</div>
				</div>
				
			</div>

              <!---->
                  <div class="in forms">
					<form id="form1" name="form1" method="post" action="">
	
      				<p><strong>�ص�</strong><br>
					<input name="name" class="box" type="text" id="time1"></p>
					 
					<p><strong>ʱ��</strong><br><input name="name" class="input" type="text" id="timen">&nbsp;��<input name="name" class="input1" type="text" id="timey">&nbsp;��<input name="name" class="input1" type="text" id="timer">&nbsp;��<input name="name" class="input1" type="text" id="times">&nbsp;ʱ<input name="name" class="input1" type="text" id="timef">&nbsp;��</p>
	  				<p><strong>����</strong><br>
					<textarea name="mes" rows="2" cols="20" class="box" id="time3"></textarea></p> 

					<p id="fabu"><input name="submit" id="submit" tabindex="5" class="com_btn" value="����" type="submit" onclick="return addtimetable();"></p>
                    <p id="xiugai"><input name="submit" id="submit1" tabindex="5" class="com_btn" value="�޸�" type="submit" onclick="return changetimetable();"></p>
					</form>
				</div>
<!-------------------------------------------------------------------------------------------------->
<div class="in">
     
	<div id="timetable">
    </div>
	</div>


<!-------------------------------------------------------------------------------------------------->
                
        </div>
        <!--ʱ������-->
        
        
		<!--���ŷ���-->
	<!-- Intro -->
		       <div class="content2">
				<div class="in author">
					<h2>���ŷ���</h2>
					<p>Author <a href="#" id="author">admin</a> | created in <b class="todaytime">2013-12-21</b></p>
				</div>
			
				<div class="line"></div>
				
	<!-- Checks -->
	
			<div class="check_main">
				<div class="info"></div>	
				<div class="check3">
					<div class="good"><img src="img/check.gif" alt="check" class="icon">�����ɹ�</div>
				</div>
				<div class="check4">
					<div class="bad"><img src="img/x.gif" alt="check" class="icon">����ʧ�� <a href="#" id="errormsg1"></a></div>
				</div>
				
			</div>
			
	<!-- Form -->
			
				<div class="in forms">
					<form id="form1" name="example" method="post" action="">
	
      				<p><strong>����</strong><br>
					<input name="name" class="box"  id="newstitle" type="text"></p>
					 
	  				<p><strong>�ؼ���</strong><br>
                    <input name="name" class="box1" id="keywords" type="text">
							</p>
					
	  				<p><strong>����</strong><br>
					<textarea name="newscontent"  id="newscontent" style="width:700px;height:200px;visibility:hidden;"></textarea></p> 

					<p id="newsfabu"><input name="submit" id="submit" tabindex="5" class="com_btn" value="����" type="submit" onclick="return addnews();"></p>
                    <p id="newsxiugai"><input name="submit" id="submit1" tabindex="5" class="com_btn" value="�޸�" type="submit" onclick="return changenews();"></p>
					</form>
			
				</div>
				
				
				
	
	
	<div class="in">			
		<div id="newshis">
    </div>				
	</div>
	
    
    
   
    	
    </div>
     <!--���ŷ�������-->
     <!--ϵͳ����-->
      <div class="content3">
      
      <div class="in author">
					<h2>��ҳ��������</h2>
				</div>
			
				<div class="line"></div>
				
	<!-- Checks -->
	
			<div class="check_main">
				<div class="info"></div>	
				<div class="check5">
					<div class="good"><img src="img/check.gif" alt="check" class="icon">���óɹ�</div>
				</div>
				<div class="check6">
					<div class="bad"><img src="img/x.gif" alt="check" class="icon">����ʧ�� <a href="#" id="errormsg1"></a></div>
				</div>
				
			</div>
			
	<!-- Form -->
			
				<div class="in forms">
					<form id="banji" name="banji" method="post" action="">
					
                    <p><strong>��������</strong><br />
							<select name="banjiitem" id="shezhititle" class="box2"  onblur="return content();">
                            <option selected="selected"></option>
        					<option>�༶�ſ�</option>
							<option>�༶����</option>
        					<option>�༶�Ļ�</option>
        					<option>����</option>
					  </select></p> 
	  				
					
	  				<p><strong>����</strong><br>
					<textarea name="banjicontent"  id="banjicontent" style="width:700px;height:200px;visibility:hidden;"></textarea></p> 

					<p id="banjifabu"><input name="submit" id="submit" tabindex="5" class="com_btn" value="����" type="submit" onclick="return banjifabu();"></p>
                    <p id="banjixiugai"><input name="submit" id="submit1" tabindex="5" class="com_btn" value="�޸�" type="submit" onclick="return banjifabu();"></p>
					</form>
			
				</div>
             
      </div>
      <!--ϵͳ���ý���-->
      <div class="content4">
       <div class="in author">
					<h2>�޸�����</h2>
				</div>
				<div class="line"></div>
                <form class="cpwd">
				<p>��&nbsp;&nbsp;��&nbsp;&nbsp;�룺<input type="password"  name="oldpassword"    id="oldpassword"/><span id="tip1" class="tip"></span></p>
                <p>��&nbsp;&nbsp;��&nbsp;&nbsp;�룺<input type="password"  name="password"       id="password"/><span id="tip2" class="tip"></span></p>
                <p>�ظ����룺<input type="password"  name="repassword"     id="repassword"/><span id="tip3" class="tip"></span></p>
                <p><input class="submit" type="submit" onclick="return changepwd();" value="�޸�����"></input><p>
                <center><span id="tip4" class="tip"></span></center>
                </form>
      </div>
    <p class="footer"><a href="#">�߼�����</a> <span class="v_line"> |</span> <a href="#">�ǳ�</a></p>
	</div>

<script src="normal.js" charset='gb2312'></script>
</body></html>