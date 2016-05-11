<?php
include('config.php');
header('Content-Type:text/html; charset=utf-8');
mysql_query("SET NAMES 'utf8'");//通知服务器客户端传递过去的语句的编码  
mysql_query("SET CHARACTER_SET_CLIENT=utf8"); //服务器设置客户端编码  
mysql_query("SET CHARACTER_置查询结果的编SET_RESULTS=utf8");//设码
$action         =$_POST['action'];
$messageReturn  =array("error","数据库错误");
switch($action){
case 'add'       : insert();break;
case 'del'       : del();break;
case 'login'       : login();break;
case 'newsdel'       : newsdel();break;
case 'xiugai'     : chang();break;
case 'chaxun'       : cha();break;
case 'chanews'       : chanews();break;
case 'addnews'       : addnews();break;
case 'changenews'       : changenews();break;
case 'chanews'       : chanews();break;
case 'delnews'       : delnews();break;
case 'shezhi'       : shezhi();break;
case 'shezhicha'     :shezhicha();break;
case 'cpwd'     :cpwd();break;
}

function cpwd(){
	$oldpass=str_replace(" ","",$_POST[oldpassword]);
	$config=md5($oldpass.ALL_PS);
	$newpass=$_POST[password];
	$query = "SELECT username,password FROM userinfo where username='admin' AND password='$config'";
	$result = @mysql_query($query) or die('SQL语句错误！错误信息:'.mysql_error());
	if(mysql_fetch_array($result)) {
										 $password=md5($newpass.ALL_PS);
										 $query ="UPDATE userinfo SET password='$password' WHERE id='$_SESSION[id]'";
                                         @mysql_query($query) or die('SQL语句错误！错误信息:'.mysql_error());
										  $messageReturn[0]=1;
			                             $messageReturn[1]="修改成功";
			                            error($messageReturn);
										
	       }
	
		else
		{
			$messageReturn[0]=0;
            $messageReturn[1]="密码错误";
		    error($messageReturn);
			}
	}

function login(){
	$username=str_replace(" ","",$_POST[username]);
	$password=$_POST[password];
	if($username==""||$password==""){
	if($username==''&&$password!='')
	    {   
	    $messageReturn[0]="0";
	    $messageReturn[1]="账号不能为空";
		error($messageReturn);
		}
		else if($username!=''&&$password=='')
		    {
			$messageReturn[0]="0";
	        $messageReturn[1]="请输入密码";
			error($messageReturn);
			}
			
			else
			   {
				$messageReturn[0]="0";
	            $messageReturn[1]="账号不能为空";
				error($messageReturn);
				}
	   }
	   ///panduan
	   if($username!=""&&$password!=""){
	    $sql = "select * FROM userinfo where username = '$username'";
	    $query = mysql_query($sql);
		$us = is_array($row=mysql_fetch_array($query));
		$pd = $us ? $tip='' :$tip='账号错误';
		$ps = $us ? md5($password.ALL_PS)==$row[password] : FALSE;
			if($ps){
					$_SESSION[id]=$row[id];
					$_SESSION[user_shell]=md5($row[username].$row[password].ALL_PS);
					$messageReturn[0]="1";
	                $messageReturn[1]="ok";
					error($messageReturn);
					}
			else if($us){
					$messageReturn[0]="0";
	                $messageReturn[1]="密码错误";
					session_destroy();
					error($messageReturn);
				}
				if($tip=='账号错误'){
				$messageReturn[0]="0";
	                $messageReturn[1]="账号不存在";
					error($messageReturn);
				}
										}
	   ///
	  }
//插入数据
function insert(){
	$time        =$_POST['time'];
	$address       =$_POST['address'];
	$info    =$_POST['info'];
	$query="INSERT INTO timetable (time,address,info) VALUES ('$time','$address','$info')";     //增加数据
	if(mysql_query($query)){
		 $messageReturn[0]='0';
	 //creatimg($goodId);
	      $messageReturn[1]='ok';
	      error($messageReturn);
	}
	else{
		$messageReturn[0]='1';
		$messageReturn[1]='sql error';
	          error($messageReturn);
		}

	}
//-------------------------------------新闻发布------------------------//
function addnews(){
	$time        =$_POST['time'];
	$content       =$_POST['newscontent'];
	$keywords    =$_POST['keywords'];
	$title    =$_POST['title'];
	$author    =$_POST['author'];
	$date    =$_POST['date'];
	$query="INSERT INTO news (time,content,keywords,title,author,date) VALUES ('$time','$content','$keywords','$title','$author','$date')";     
	if(mysql_query($query)){
		 $messageReturn[0]='0';
	 //creatimg($goodId);
	      $messageReturn[1]="ok";
	      error($messageReturn);
	}
	else{
		$messageReturn[0]='aa';
		$messageReturn[1]='addnewserror';
	          error($messageReturn);
		}

	}
//----------------------------------------------------------------------//
function del(){
	$id = $_POST['id'];
	$query="DELETE from timetable where id=$id";
	$result= @mysql_query($query) or error($messageReturn);
	$messageReturn[0]=1;
				$messageReturn[1]=$id;
				error($messageReturn);
	
	}
function newsdel(){
	$id = $_POST['id'];
	$query="DELETE from news where id=$id";
	$result= @mysql_query($query) or error($messageReturn);
	$messageReturn[0]=1;
				$messageReturn[1]=$id;
				error($messageReturn);
	
	}
function chang(){
	$time        =$_POST['time'];
	$address       =$_POST['address'];
	$info    =$_POST['info'];
	$id     =$_POST['id'];
	$query="UPDATE timetable SET address='$address',time='$time',info='$info' where id='$id'";
	$result= @mysql_query($query) or error($messageReturn);
	$messageReturn[0]=1;
				$messageReturn[1]="ok";
				error($messageReturn);
	
	}
function changenews(){
	$id    =$_POST['id'];
	$time        =$_POST['time'];
	$content       =$_POST['newscontent'];
	$keywords    =$_POST['keywords'];
	$title    =$_POST['title'];
	$author    =$_POST['author'];
	$query="UPDATE news SET time='$time',content='$content',title='$title',author='$author',keywords='$keywords' where id='$id'";
	$result= @mysql_query($query) or error($messageReturn);
	$messageReturn[0]=0;
				$messageReturn[1]="ok";
				error($messageReturn);
	
	}
function cha(){
	$id = $_POST['id'];
	$query="select * from timetable where id=$id";
	$result= @mysql_query($query) or error($messageReturn);
	if(mysql_num_rows($result) > 0 ){
				   $row = mysql_fetch_assoc($result);
				   $dataReturn[0]="ok";
				   $dataReturn[1]=$row['time'];
				   $dataReturn[2]=$row['address'];
				   $dataReturn[3]=$row['info'];
				   backdata($dataReturn);
				   }
	else{
		$dataReturn  =array("sql error","","","");
		backdata($dataReturn);
		}
	}
function chanews(){
	$id = $_POST['id'];
	$query="select * from news where id=$id";
	$result= @mysql_query($query) or error($messageReturn);
	if(mysql_num_rows($result) > 0 ){
				   $row = mysql_fetch_assoc($result);
				   $dataReturn[0]="ok";
				   $dataReturn[1]=$row['title'];
				   $dataReturn[2]=$row['keywords'];
				   $dataReturn[3]=$row['content'];
				   backdata($dataReturn);
				   }
	else{
		$dataReturn  =array("sql error","","","");
		backdata($dataReturn);
		}
	}
//=========shezhi==========//
function shezhi(){
	$shezhititle = $_POST['shezhititle'];
	$shezhicontent = $_POST['shezhicontent'];
	switch($shezhititle){
		case '班级概况' : $query="UPDATE shezhi SET jieshaocontent  ='$shezhicontent'  where id=1";break;
		case '班级荣誉' : $query="UPDATE shezhi SET rongyucontent  ='$shezhicontent'  where id=1";break;
		case '班级文化' : $query="UPDATE shezhi SET wenhuacontent   ='$shezhicontent'  where id=1";break;
		case '文体活动' : $query="UPDATE shezhi SET wenticontent    ='$shezhicontent'  where id=1";break;
		}
	if(mysql_query($query)){
		 $messageReturn[0]='0';
	      $messageReturn[1]='ok';
	      error($messageReturn);
	}
	else{
		$messageReturn[0]='x';
		$messageReturn[1]='shezhierror';
	    error($messageReturn);
		}
	}
function shezhicha(){
	$shezhititle = $_POST['shezhititle'];
	$sql = "select * FROM shezhi";
	$result= @mysql_query($sql) or error($messageReturn);
	if(mysql_num_rows($result) > 0 ){
				   $row = mysql_fetch_assoc($result);
				   $messageReturn[0]='ok';
				   switch($shezhititle){
		        		case '班级概况' : $messageReturn[1]=$row['jieshaocontent'];break;
						case '班级荣誉' : $messageReturn[1]=$row['rongyucontent'];break;
						case '班级文化' : $messageReturn[1]=$row['wenhuacontent'];break;
						case '文体活动' : $messageReturn[1]=$row['wenticontent'];break;
									}
	                 error($messageReturn);
				   }
	else{
		       $messageReturn[0]='x';
		       $messageReturn[1]='shezhierror';
	           error($messageReturn);
		}
	}
//==========================//
function error($msg){
	                 global $messageReturn;
	                 exit($msg[0]."@fen".$msg[1]);
                      }
function backdata($data){
	                 global $dataReturn;
	                 exit($data[0]."@fen".$data[1]."@fen".$data[2]."@fen".$data[3]);
                      }
?>