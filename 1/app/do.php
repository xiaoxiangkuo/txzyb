<?php
include('config.php');
mysql_query("SET NAMES 'utf8'");//通知服务器客户端传递过去的语句的编码  
mysql_query("SET CHARACTER_SET_CLIENT=utf8"); //服务器设置客户端编码  
mysql_query("SET CHARACTER_SET_RESULTS=utf8");//设置查询结果的编码
if($_POST['action']=='getname'){
	$bg=$_POST['bg'];
	$query="SELECT * from trhd where id>$bg order by id";
	$res=mysql_query($query);
	$namelist='';
	if(mysql_num_rows($res)>0){
	while($row=mysql_fetch_assoc($res)){
		$namelist=$namelist."&&".$row['name'];
	}
		$msg="1@txzy".$namelist;
	}
	else{
		$msg="0@txzynone";
		}
		}
	exit($msg);
?>