<?php
header('Content-Type:text/html;charset=utf8');
include('../linkdb.php');
$id=$_GET['newslist'];
mysql_query("SET NAMES 'utf8'");//֪ͨ�������ͻ��˴��ݹ�ȥ�����ı���  
		mysql_query("SET CHARACTER_SET_CLIENT=utf8"); //���������ÿͻ��˱���  
		mysql_query("SET CHARACTER_�ò�ѯ����ı�SET_RESULTS=utf8");//����
	  $query="SELECT * FROM news where id='$id'";
      $result=@mysql_query($query) or die('SQL����:'.mysql_error());
mysql_query("SET NAMES 'utf8'");
while($row = mysql_fetch_assoc($result)){
$title=$row['title'];
$time=$row['date'];
$author=$row['author'];
$content=$row['content'];
}
?>