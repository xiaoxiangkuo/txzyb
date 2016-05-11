<?php
include('../linkdb.php');

	  //========分页代码==========
	  //1.定义一些分页变量
	  $page=isset($_POST['page'])?$_POST['page']:1;//当前页号
	  $pageSize=6;//页大小
	  $maxRows;//最大数据条数
	  $maxPages;//最大页数
	  //2.获取最大数据条数
	  $sql="select count(*) from major_news";
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
	  $query="SELECT * FROM major_news order by id  {$limit}";
      $result=@mysql_query($query) or die('SQL错误:'.mysql_error());
mysql_query("SET NAMES 'utf8'");
		  $i=0;
		  $num=$pageSize*($page-1);
		  while($row = mysql_fetch_assoc($result)){
		  $num++;
			  switch($i){
		  case 0 : $data1="<p><a href='majornews/view.php?id=".$row['id']."'>{$num}.{$row['title']}</a></p>"; break;
		  case 1 : $data2="<p><a href='majornews/view.php?id=".$row['id']."'>{$num}.{$row['title']}</a></p>"; break;
		  case 2 : $data3="<p><a href='majornews/view.php?id=".$row['id']."'>{$num}.{$row['title']}</a></p>"; break;
		  case 3 : $data4="<p><a href='majornews/view.php?id=".$row['id']."'>{$num}.{$row['title']}</a></p>"; break;
		  case 4 : $data5="<p><a href='majornews/view.php?id=".$row['id']."'>{$num}.{$row['title']}</a></p>"; break;
		  case 5 : $data6="<p><a href='majornews/view.php?id=".$row['id']."'>{$num}.{$row['title']}</a></p>"; break;
		  }
		  $i++;
		  }
		////
	$caozuo= "<br><br><p>@1{$page}/{$maxPages}@2{$maxRows}@3
	<a href='javascript:void(0);' onclick='majorqiehuan(1)'>&nbsp;@4</a>&nbsp
	<a href='javascript:void(0);' onclick='majorqiehuan(".($page-1).")'>@5</a>
	<a href='javascript:void(0);' onclick='majorqiehuan(".($page+1).")'>@6</a>
	<a href='javascript:void(0);' onclick='majorqiehuan(".$maxPages.")'>@7</a></p>";
		////
          $messageReturn[0]=$data1;
	      $messageReturn[1]=$data2;
		  $messageReturn[2]=$data3;
		  $messageReturn[3]=$data4;
		  $messageReturn[4]=$data5;
		  $messageReturn[5]=$data6;
		  $messageReturn[6]=$caozuo;
	      error($messageReturn);
          function error($msg){
	                 global $messageReturn;
	                 exit($msg[0]."@fen".$msg[1]."@fen".$msg[2]."@fen".$msg[3]."@fen".$msg[4]."@fen".$msg[5]."@fen".$msg[6]);
                      }
?>
