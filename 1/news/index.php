<?php
include('getnews.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>卓越班新闻</title>
</head>
<link href="news.css" rel="stylesheet"  />
<body>
<div id="logo">
<div class="logopic">
<div class="home">
<a href="http://txzyb.sinaapp.com/news/list.php"></a>
</div>
</div>
</div>
<div id="news">
<div id="newscontent">
<div id="pic"></div>
<p class="address">当前位置：首页/新闻网/新闻详情 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://txzyb.sinaapp.com/news/list.php">返回新闻网</a></p>
<br />
<div id="title">
<?php echo $title ?>
</div>
<br />
<div id="author">
<p class="date">发布时间：<?php  echo $time;?></p>
<p class="author">作者：<?php  echo $author;?></p>
<p class="times">访问次数：<?php echo $times;?></p>
</div>
<div id="newsinner">

<?php  
echo $content;?>
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