<?php
header('Content-Type:text/html; charset=gb2312');
include('../linkdb.php');
mysql_query("SET NAMES 'gb2312'");//通知服务器客户端传递过去的语句的编码  
mysql_query("SET CHARACTER_SET_CLIENT=gb2312"); //服务器设置客户端编码  
mysql_query("SET CHARACTER_置查询结果的编SET_RESULTS=gb2312");//设码
$gid=(int)$_GET['id'];
$sql = "select * from major_url where id ='$gid'";
$q   = mysql_query($sql);
$row = mysql_fetch_array($q);
$con = file_get_contents($row['url']);
$title = $row['title']; 
echo $title;
echo "<br>";
$content = zz("#<div class=\"text\" id=\"text1\"><div class=\"textad\" id=\"adtt1\">(.*)<div class=\"share\"><script type=\"text/javascript\" charset=\"utf-8\" src=\"http://www.c114.net/news/js/weibo.js\"></script></div>#iUs",$con); 
$content = preg_replace("/<a(.*?)>/","",$content);
$content = preg_replace("/C114讯/","",$content);
$content = preg_replace("/<\/div>/","",$content);
$content = preg_replace("/<p>/","<p>&nbsp;&nbsp;&nbsp;&nbsp;",$content);
$content = preg_replace("/<strong>/","<strong><center>",$content);
echo $content = preg_replace("/<\/strong>/","</strong></center>",$content);
$intosql="INSERT INTO `major_news` (`id`, `title`, `content`) VALUES (NULL, '".$title."', '".$content."')";
mysql_query($intosql);

//=========================================
$cha="select * from major_url where id>'$gid' order by id asc limit 1";
$re = mysql_query($cha);
$row2 =mysql_fetch_array($re);
echo $row2[0].$row[1]."<br>";
if($row2[0]){
	echo "<script>location.href='vi.php?id=".$row2[0]."'</script>";
	}
function zz($preg,$con,$num=1){
	preg_match($preg,$con,$arr);
	return $arr[$num];
	}
?>