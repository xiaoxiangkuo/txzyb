<?php
include('config.php');

	  //========��ҳ����==========
	  //1.����һЩ��ҳ����
	  $page=isset($_POST['page'])?$_POST['page']:1;//��ǰҳ��
	  $pageSize=4;//ҳ��С
	  $maxRows;//�����������
	  $maxPages;//���ҳ��
	  //2.��ȡ�����������
	  $sql="select count(*) from news";
	  $res=mysql_query($sql);
	  $maxRows = mysql_result($res,0,0);
	  //3.������������ҳ��
	  $maxPages= ceil($maxRows/$pageSize);
	  //4.У�鵱ǰҳ
	  if($page>$maxPages){
		  $page=$maxPages;
		  }
		 if($page<1){
		  $page=1;
		  }
	  //ƴװ��ҳSQL���Ƭ��
	  $limit = " limit ".(($page-1)*$pageSize).",{$pageSize}";
	  //=========================
		mysql_query("SET NAMES 'utf8'");//֪ͨ�������ͻ��˴��ݹ�ȥ�����ı���  
		mysql_query("SET CHARACTER_SET_CLIENT=utf8"); //���������ÿͻ��˱���  
		mysql_query("SET CHARACTER_�ò�ѯ����ı�SET_RESULTS=utf8");//����
	  $query="SELECT * FROM news order by id desc {$limit}";
      $result=@mysql_query($query) or die('SQL����:'.mysql_error());
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
