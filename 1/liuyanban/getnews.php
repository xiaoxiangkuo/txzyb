<?php
include('../linkdb.php');
mysql_query("SET NAMES 'utf8'");//֪ͨ�������ͻ��˴��ݹ�ȥ�����ı���  
		mysql_query("SET CHARACTER_SET_CLIENT=utf8"); //���������ÿͻ��˱���  
		mysql_query("SET CHARACTER_�ò�ѯ����ı�SET_RESULTS=utf8");//����
	  $query="select * FROM liuyanban order by id";
      $result=@mysql_query($query) or die('SQL����:'.mysql_error());
mysql_query("SET NAMES 'utf8'");
echo "<table border='1'>";
$i=1;
while($row = mysql_fetch_assoc($result)){
	echo "<tr border='1' height='20'><td width='50'>$i</td>";
	echo "<td width='500'>{$row[content]}</td><td width='100'>{$row[name]}</td>";
	echo "</tr>";
	$i++;
}
echo "</table>";
?>