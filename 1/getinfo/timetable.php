<?php
include('../linkdb.php');
header('Content-Type:text/html; charset=utf-8');
mysql_query("SET NAMES 'utf8'");//֪ͨ�������ͻ��˴��ݹ�ȥ�����ı���  
mysql_query("SET CHARACTER_SET_CLIENT=utf8"); //���������ÿͻ��˱���  
mysql_query("SET CHARACTER_�ò�ѯ����ı�SET_RESULTS=utf8");//����
$sql = "select * from timetable order by id desc limit 4";
$result = mysql_query($sql);
//$data = array();
$i=0;
while ($row = mysql_fetch_array($result)) {
//extract ($row);
if($i==0){
$data= array("time"=>$row['time'],"address"=>$row['address'],"info"=>$row['info']);
}
if($i==1){
$data1= array("time"=>$row['time'],"address"=>$row['address'],"info"=>$row['info']);
}
if($i==2){
$data2= array("time"=>$row['time'],"address"=>$row['address'],"info"=>$row['info']);
}
if($i==3){
$data3= array("time"=>$row['time'],"address"=>$row['address'],"info"=>$row['info']);
}
$i++;
}
//echo $time;
//$time=$row['time'];
//$address=$row['address'];
//$info=$row['info'];
//$time=($time); // convert from Unix timestamp to JavaScript time
//echo $time;wendu);
//$str.="{".'"time"'." : ".$time.","."address"." : ".$address.","."info"." : ".$info."},";

//}
//$str=substr($str,0,strlen($str)-1);
//sprint_r($data);
$str = json_encode($data);
$str1 = json_encode($data1);
$str2 = json_encode($data2);
$str3 = json_encode($data3);
//echo json_encode($row);
echo "{";
echo '"total":2,';
echo '"rows":[';

echo $str;
echo ",";
echo $str1;
echo ",";
echo $str2;
echo ",";
echo $str3;
echo "]}";

?>