<?php
include('../linkdb.php');
$name=$_POST['name'];
$content=$_POST['content'];
if($name==""){
	echo "<br />";
    echo "<br />";
     echo "<br />";
	echo "<center>";
	echo "����ʧ�ܣ�����д����";
	echo "<br />";
		echo "<br />";
			echo "<br />";
			
	echo "<a href='http://txzyb.sinaapp.com/liuyanban/fabiao.php'>��������</a>";
	echo "</center>";
	}
else if($content==""){
	echo "<br />";
    echo "<br />";
     echo "<br />";
	echo "<center>";
	echo "����ʧ�ܣ�����д����";
	echo "<br />";
		echo "<br />";
			echo "<br />";
				echo "<br />";
	echo "<a href='http://txzyb.sinaapp.com/liuyanban/fabiao.php'>��������</a>";
	echo "</center>";
	}
if($content!=""&&$name!=""){
mysql_query("SET NAMES 'utf8'");//֪ͨ�������ͻ��˴��ݹ�ȥ�����ı���  
		mysql_query("SET CHARACTER_SET_CLIENT=utf8"); //���������ÿͻ��˱���  
		mysql_query("SET CHARACTER_�ò�ѯ����ı�SET_RESULTS=utf8");//����
	  $query="INSERT INTO liuyanban (name,content) VALUES ('$name','$content')";
      $result=@mysql_query($query) or die('SQL����:'.mysql_error());
mysql_query("SET NAMES 'utf8'");
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<center>";
echo "���������Ѿ��ύ��";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<a href='http://txzyb.sinaapp.com/liuyanban/index.php'>�鿴����</a>";
echo "<br />";
echo "<br />";
echo "<a href='http://txzyb.sinaapp.com/'>������ҳ</a>";
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
echo "<p>@���װ�-���ڴ����°汾</p>";
echo "</center>";
?>