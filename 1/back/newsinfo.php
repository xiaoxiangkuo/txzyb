<?php
include('config.php');

	  //========分页代码==========
	  //1.定义一些分页变量
	  $page=isset($_POST['page'])?$_POST['page']:1;//当前页号
	  $pageSize=4;//页大小
	  $maxRows;//最大数据条数
	  $maxPages;//最大页数
	  //2.获取最大数据条数
	  $sql="select count(*) from news";
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
	  $query="SELECT * FROM news order by id desc {$limit}";
      $result=@mysql_query($query) or die('SQL错误:'.mysql_error());
mysql_query("SET NAMES 'utf8'");

$html1 = "<table class='table_main' border='0' cellpadding='10' cellspacing='0' width='850'>
		  <tbody><tr style='background-color:#d9d8d8; font-size:14px;'>
			<td width='179'><strong>%</strong></td>
			<td width='273'><strong>~</strong></td>
			<td width='184'><strong>#@</strong></td>
			<td width='132'><strong>@</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='javascript:void(0);' onClick='newsshuaxin()'>##</a></td>
		  </tr>";
		  $i=0;
		  while($row = mysql_fetch_assoc($result)){
			  switch($i){
				  case 0 : $data1="<tr id='{$row[id]}'>
			<td>{$row['date']}</td>
			<td><a href='#'>{$row['title']}</a></td>
			<td>{$row['author']} </td>
			<td><a href='javascript:void(0);' onclick='return donewschange({$row['id']});'>@</a><span class='v_line'>| </span> <a href='javascript:void(0);' onclick='return donewsdel({$row['id']});' class='delete'>%</a></td>
		  </tr>"; break;
		  case 1 : $data2="<tr id='{$row[id]}'>
			<td>{$row['date']}</td>
			<td><a href='#'>{$row['title']}</a></td>
			<td>{$row['author']} </td>
			<td><a href='javascript:void(0);' onclick='return donewschange({$row['id']});'>@</a><span class='v_line'>| </span> <a href='javascript:void(0);' onclick='return donewsdel({$row['id']});' class='delete'>%</a></td>
		  </tr>"; break;
		  case 2 : $data3="<tr id='{$row[id]}'>
			<td>{$row['date']}</td>
			<td><a href='#'>{$row['title']}</a></td>
			<td>{$row['author']} </td>
			<td><a href='javascript:void(0);' onclick='return donewschange({$row['id']});'>@</a><span class='v_line'>| </span> <a href='javascript:void(0);' onclick='return donewsdel({$row['id']});' class='delete'>%</a></td>
		  </tr>"; break;
		  case 3 : $data4="<tr id='{$row[id]}'>
			<td>{$row['date']}</td>
			<td><a href='#'>{$row['title']}</a></td>
			<td>{$row['author']} </td>
			<td><a href='javascript:void(0);' onclick='return donewschange({$row['id']});'>@</a><span class='v_line'>| </span> <a href='javascript:void(0);' onclick='return donewsdel({$row['id']});' class='delete'>%</a></td>
		  </tr>"; break;
		  }
		  $i++;
		  }
		$html2="</tbody></table>";
		////
	$caozuo= "<br /><center>@1{$page}/{$maxPages}@2{$maxRows}@3
	<a href='javascript:void(0);' onclick='newsqiehuan(1)'>&nbsp;@4</a>$nbsp
	<a href='javascript:void(0);' onclick='newsqiehuan(".($page-1).")'>@5</a>
	<a href='javascript:void(0);' onclick='newsqiehuan(".($page+1).")'>@6</a>
	<a href='javascript:void(0);'   onclick='newsqiehuan(".$maxPages.")'>@7</a></center>";
		////
$messageReturn[0]=$html1;
	      $messageReturn[1]=$data1;
		  $messageReturn[2]=$data2;
		  $messageReturn[3]=$data3;
		  $messageReturn[4]=$data4;
		  $messageReturn[5]=$html2;
		  $messageReturn[6]=$caozuo;
	      error($messageReturn);
function error($msg){
	                 global $messageReturn;
	                 exit($msg[0]."@fen".$msg[1]."@fen".$msg[2]."@fen".$msg[3]."@fen".$msg[4]."@fen".$msg[5]."@fen".$msg[6]);
                      }
?>
