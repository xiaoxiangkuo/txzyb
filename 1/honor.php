<?php 
include('linkdb.php');
   		$sql = "select * FROM shezhi where id = 1";
	    $query = mysql_query($sql);
		$row=mysql_fetch_array($query);
		$content=$row['rongyucontent'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>卓越班班级介绍</title>
</head>
<link href="normal.css" rel="stylesheet"  />
<body>
<div id="logo">
<div class="logopic">
<div class="home">
<a href="#"></a>
</div>
</div>
</div>
<div id="news">
<div id="newscontent">
<div id="pic"></div>
<p class="address">当前位置：首页/荣誉 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://txzyb.sinaapp.com">返回首页</a></p>
</div>
<div id="content">
<div id="title">班级荣誉</div>
<div id="rongyucontent">
<?php echo $content; ?>
</div>
</div>
</div>
<div id="copyright">
<p>版权所有 @华东交通大学信息工程学院11级通信工程（卓越工程师） 地址：南昌市双港路88号
 </p>
<p>技术支持：11级通信工程（卓越工程师）</p>
</div>
</body>
</html>