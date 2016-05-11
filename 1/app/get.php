<?php
header("Content-type:text/html;charset=utf-8");
include('config.php');
if($_POST['submit']){
	$name=$_POST['name'];
	if($name==''){
		echo "<p style=\"width:100%;height:30px;line-height:30px;text-align:center;\">请输入姓名</p>";
		echo "<script>{setTimeout(\"location='http://lightapp.duapp.com/light/index?pageId=pg21303527727890365&preview=1&token=sO0SFEO3hOgcY4e*2*kqHu9MtMG6KV1JT7qomFlM59S70XOB';\",1000)}</script>";
		exit();
		}
	else{
		$query="INSERT INTO `app_txzyb`.`trhd` (`id`, `name`) VALUES (NULL, '$name');";
		mysql_query($query);
		echo "<p style=\"width:100%;height:30px;line-height:30px;text-align:center;\">恭喜您".$name."宣誓成功</p>";
		echo "<script>{setTimeout(\"location='http://lightapp.duapp.com/light/index?pageId=pg21247723887838432&preview=1&token=qt*m7yjL2i6ywMUIU5l2*9gZ6YG6KV1lofkpeVm5Q3IXqAaz';\",1000)}</script>";
		exit();
		}
	}
?>