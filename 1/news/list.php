<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>卓越班新闻</title>
<style type="text/css">
.rows{
	width:800px;
	background:#FFF;
	text-align:center;
	border-bottom:1px dashed #A0A0A4;
	height:24px;
	font-size:16px;
	line-height:20px;
	}
#news_list a{
	color:#000;
	text-decoration:none;
	}
#news_list a:hover{
	color:#000;
	text-decoration:underline;
	}
.title{
	float:left;
	margin-left:5opx;
	}
.time{
	float:right;
	margin-right:50px;
	}
#news_list{
	min-height:300px;
	height:auto;
	}
</style>
</head>
<link href="news.css" rel="stylesheet"  />
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
<p class="address">当前位置：首页/新闻网 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://txzyb.sinaapp.com">返回首页</a></p>
<div id="news_list">
<?php
include('../linkdb.php');

	  //========分页代码==========
	  //1.定义一些分页变量
	  $page=isset($_POST['page'])?$_POST['page']:1;//当前页号
	  $pageSize=4;//页大小
	  $maxRows;//最大数据条数
	  $maxPages;//最大页数
	  //2.获取最大数据条数
	  $sql="select count(*) from news";
	  $res=mysql_query($sql);
	  $maxRows = mysql_result($res,0,0);
	  //3.计算出共计最大页数
	  $maxPages= ceil($maxRows/$pageSize);
	  //4.校验当前页
	  if($page>$maxPages){
		  $page=$maxPages;
		  }
		 if($page<1){
		  $page=1;
		  }
	  //拼装分页SQL语句片段
	  $limit = " limit ".(($page-1)*$pageSize).",{$pageSize}";
	  //=========================
		mysql_query("SET NAMES 'utf8'");//通知服务器客户端传递过去的语句的编码  
		mysql_query("SET CHARACTER_SET_CLIENT=utf8"); //服务器设置客户端编码  
		mysql_query("SET CHARACTER_置查询结果的编SET_RESULTS=utf8");//设码
	  $query="SELECT * FROM news order by id desc {$limit}";
      $result=@mysql_query($query) or die('SQL错误:'.mysql_error());
mysql_query("SET NAMES 'utf8'");
$num=$pageSize*($page-1);
		  while($row = mysql_fetch_assoc($result)){
			 echo "<center><div class='rows'>";
			 $num++;
			 echo "<div class='title'>{$num}&nbsp;&nbsp;&nbsp;&nbsp;";
			 $url="http://txzyb.sinaapp.com/news/index.php?newslist=".$row['id'];
			 echo "<a href={$url}>{$row['title']}</a>";
			 echo "</div>";
			 echo "<div class='time'>{$row['date']}</div>";
			 echo "<div>";
			 echo "</br></center>";
		  }
	$caozuo = "<br /><center>当前{$page}/{$maxPages}页 共计{$maxRows}条
	<a href='list.php?page=1' >&nbsp;首页</a>$nbsp
	<a href='list.php?page=".($page-1)."' >上一页</a>
	<a href='list.php?page=".($page+1)."' >下一页</a>
	<a href='list.php?page=".$maxPages."' >末页</a></center>";
	echo $caozuo;
?>
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