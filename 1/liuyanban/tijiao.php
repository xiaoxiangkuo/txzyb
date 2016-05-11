<?php
include('../linkdb.php');
$name=$_POST['name'];
$content=$_POST['content'];
if($name==""){
	echo "<br />";
    echo "<br />";
     echo "<br />";
	echo "<center>";
	echo "留言失败！请填写名字";
	echo "<br />";
		echo "<br />";
			echo "<br />";
			
	echo "<a href='http://txzyb.sinaapp.com/liuyanban/fabiao.php'>重新留言</a>";
	echo "</center>";
	}
else if($content==""){
	echo "<br />";
    echo "<br />";
     echo "<br />";
	echo "<center>";
	echo "留言失败！请填写内容";
	echo "<br />";
		echo "<br />";
			echo "<br />";
				echo "<br />";
	echo "<a href='http://txzyb.sinaapp.com/liuyanban/fabiao.php'>重新留言</a>";
	echo "</center>";
	}
if($content!=""&&$name!=""){
mysql_query("SET NAMES 'utf8'");//通知服务器客户端传递过去的语句的编码  
		mysql_query("SET CHARACTER_SET_CLIENT=utf8"); //服务器设置客户端编码  
		mysql_query("SET CHARACTER_置查询结果的编SET_RESULTS=utf8");//设码
	  $query="INSERT INTO liuyanban (name,content) VALUES ('$name','$content')";
      $result=@mysql_query($query) or die('SQL错误:'.mysql_error());
mysql_query("SET NAMES 'utf8'");
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<center>";
echo "您的留言已经提交！";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<a href='http://txzyb.sinaapp.com/liuyanban/index.php'>查看留言</a>";
echo "<br />";
echo "<br />";
echo "<a href='http://txzyb.sinaapp.com/'>返回首页</a>";
echo "</center>";
}
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<center>";
echo "<p>@简易版-请期待更新版本</p>";
echo "</center>";
?>