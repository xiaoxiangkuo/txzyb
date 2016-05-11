<?php 
include("config.php");
if($_GET[out]){
		unset($_SESSION[id]);
		unset($_SESSION[user_shell]);
	}
	//echo $_SESSION[id];
	//echo $_SESSION[user_shell];
	function user_shell($id,$shell){
		
		$sql = "select * FROM userinfo where id = '$id'";
		$query = mysql_query($sql);
		$us = is_array($row=mysql_fetch_array($query));
		$shell  = $us ? $shell==md5($row[username].$row[password].ALL_PS) : FALSE;
		if($shell)
		{
			
		}
		else {
			echo " <script charset='gb2312'> {alert('PLEASE LOGIN FIRST!');location='index.php';
	}</script>";
			exit();
		}
		
	}
	user_shell($_SESSION[id],$_SESSION[user_shell]);
?>
