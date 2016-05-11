<?php
$url="http://www.weather.com.cn/data/cityinfo/101240101.html";
$fp= @fopen($url,"r");
$content=file_get_contents($url);
$content = mb_convert_encoding($content, "gb2312", "utf-8"); 
preg_match('/weather":"(.*)","img1/', $content, $tianqi);
preg_match('/temp1":"(.*)¡æ","temp2/', $content, $low);
preg_match('/temp2":"(.*)¡æ","weather/', $content, $high);
if($low[1]>$high[1]){
	$a=$low[1];
	$low[1]=$high[1];
	$high[1]=$a;
	}
?>