<?php
header('Content-Type:text/html;charset=gb2312');
include('../linkdb.php');
$gid=$_GET['id'];
mysql_query("SET NAMES 'gb2312'");//通知服务器客户端传递过去的语句的编码  
		mysql_query("SET CHARACTER_SET_CLIENT=gb2312"); //服务器设置客户端编码  
		mysql_query("SET CHARACTER_置查询结果的编SET_RESULTS=gb2312");//设码
	  $query="SELECT * FROM major_news where id='$gid'";
      $result=@mysql_query($query) or die('SQL错误:'.mysql_error());
mysql_query("SET NAMES 'gb2312'");
while($row = mysql_fetch_assoc($result)){
$title=$row['title'];
$content=$row['content'];
}
?>