<?php
include('../linkdb.php');
header('Content-Type:text/html; charset=utf-8');
mysql_query("SET NAMES 'utf8'");//通知服务器客户端传递过去的语句的编码  
mysql_query("SET CHARACTER_SET_CLIENT=utf8"); //服务器设置客户端编码  
mysql_query("SET CHARACTER_置查询结果的编SET_RESULTS=utf8");//设码
$sql = "select * from news order by id desc limit 6";
$result = mysql_query($sql);
//$data = array();
$i=0;
while ($row = mysql_fetch_array($result)) {
//extract ($row);
if($i==0){
$data= array("title"=>$row['title'],"date"=>$row['date'],"id"=>$row['id']);
}
if($i==1){
$data1= array("title"=>$row['title'],"date"=>$row['date'],"id"=>$row['id']);
}
if($i==2){
$data2= array("title"=>$row['title'],"date"=>$row['date'],"id"=>$row['id']);
}
if($i==3){
$data3= array("title"=>$row['title'],"date"=>$row['date'],"id"=>$row['id']);
}
if($i==4){
$data4= array("title"=>$row['title'],"date"=>$row['date'],"id"=>$row['id']);
}
if($i==5){
$data5= array("title"=>$row['title'],"date"=>$row['date'],"id"=>$row['id']);
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
$str4 = json_encode($data4);
$str5 = json_encode($data5);
//echo json_encode($row);
echo "{";
echo '"total":6,';
echo '"rows":[';

echo $str;
echo ",";
echo $str1;
echo ",";
echo $str2;
echo ",";
echo $str3;
echo ",";
echo $str4;
echo ",";
echo $str5;
echo "]}";

?>