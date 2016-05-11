<?php
header('Content-Type:text/html; charset=gb2312');
include('../linkdb.php');
mysql_query("SET NAMES 'gb2312'");//通知服务器客户端传递过去的语句的编码  
mysql_query("SET CHARACTER_SET_CLIENT=gb2312"); //服务器设置客户端编码  
mysql_query("SET CHARACTER_置查询结果的编SET_RESULTS=gb2312");//设码
$con=file_get_contents("http://www.c114.net/news/22.html");
$preg = "#<p><a href=\"(.*)\">·(.*)</a>&nbsp;#iUs";
preg_match_all($preg,$con,$arr);

foreach($arr[1] as $id=>$v){
	$sql="INSERT INTO `major_url` (`id`, `title`, `url`) VALUES (NULL, '".$arr[2][$id]."', '".$v."')";
	mysql_query($sql);
	}
?>