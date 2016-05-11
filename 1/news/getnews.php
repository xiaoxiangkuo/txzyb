<?php
header('Content-Type:text/html;charset=utf8');
include('../linkdb.php');
$id=$_GET['newslist'];
mysql_query("SET NAMES 'utf8'");//通知服务器客户端传递过去的语句的编码  
		mysql_query("SET CHARACTER_SET_CLIENT=utf8"); //服务器设置客户端编码  
		mysql_query("SET CHARACTER_置查询结果的编SET_RESULTS=utf8");//设码
	  $query="SELECT * FROM news where id='$id'";
      $result=@mysql_query($query) or die('SQL错误:'.mysql_error());
mysql_query("SET NAMES 'utf8'");
while($row = mysql_fetch_assoc($result)){
$title=$row['title'];
$time=$row['date'];
$author=$row['author'];
$content=$row['content'];
}
?>