<?php
include('getmajor.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��ҵ����</title>
</head>
<link href="major.css" rel="stylesheet"  />
<body>
<div id="logo">
<div class="logopic">
<div class="home">
<a href="http://txzyb.sinaapp.com/news/list.php"></a>
</div>
</div>
</div>
<div id="news">
<div id="newscontent">
<div id="pic"></div>
<p class="address">��ǰλ�ã���ҳ/��ҵ���� &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://txzyb.sinaapp.com">������ҳ</a></p>
<br />
<div id="title">
<?php echo $title ?>
</div>
<div id="newsinner">
<?php  echo $content;?>
</div>
</div>
</div>
<div id="copyright">
<p>��Ȩ���� @������ͨ��ѧ��Ϣ����ѧԺ11��ͨ�Ź��̣�׿Խ����ʦ�� ��ַ���ϲ���˫��·88��
 </p>
<p>����֧�֣�11��ͨ�Ź��̣�׿Խ����ʦ��</p>
</div>
</body>
</html>