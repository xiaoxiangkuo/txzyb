<?php
header('Content-Type:text/html;charset=gb2312');
include('../linkdb.php');
$gid=$_GET['id'];
mysql_query("SET NAMES 'gb2312'");//֪ͨ�������ͻ��˴��ݹ�ȥ�����ı���  
		mysql_query("SET CHARACTER_SET_CLIENT=gb2312"); //���������ÿͻ��˱���  
		mysql_query("SET CHARACTER_�ò�ѯ����ı�SET_RESULTS=gb2312");//����
	  $query="SELECT * FROM major_news where id='$gid'";
      $result=@mysql_query($query) or die('SQL����:'.mysql_error());
mysql_query("SET NAMES 'gb2312'");
while($row = mysql_fetch_assoc($result)){
$title=$row['title'];
$content=$row['content'];
}
?>