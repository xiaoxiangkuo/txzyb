<?php include('getwether.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="baidu-tc-verification" content="ef82144aa2f51ff11b31ff8e5404053a" />
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>2011级通信卓越班</title>
<link href="style/index.css" rel="stylesheet"  />
<link href="style/bgstretcher.css" rel="stylesheet"  />
<script src="js/jquery.js"></script>
<script src="js/bgstretcher.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	
        //  Initialize Backgound Stretcher	   
		$('.demoo').bgStretcher({
			images: ['images/1.png', 'images/2.png', 'images/3.png', 'images/4.png', 'images/5.png', 'images/6.png'],
			imageWidth: 1000, 
			imageHeight: 350, 
			nextSlideDelay: 3000,
			slideDirection: 'W',
			slideShowSpeed: 500,
			transitionEffect: 'simpleSlide',
			anchoring: 'center center',
            anchoringImg: 'center center',
			sequenceMode: 'normal',
			buttonPrev: '#bg_prev',
            buttonNext: '#bg_next'
 });
 
	$(".btn1").click(function(){
	$(".plus1").slideToggle("normal");
	});
	
	$(".btn2").click(function(){
	$(".plus2").slideToggle("normal");
			
		});
		
	});
</script>
</head>
<body>
<div id="topcenter">
<div id="topbar">
<div id="topbarcontent">
<div class="selectid" >
<p class="topbarlink" align="left";>
<a href="#">学生</a>|
<a href="#">教师</a>|
<a href="#">访客</a>|
<a href="http://192.168.1.133:8088/ItcastOA/homeAction_index.action">OA系统</a>|
<a href="back/index.php">管理员</a>
</p>
</div>
<div class="selectnormal">
<div class="normal">
<a class="bb" onclick="aler();">设为主页</a>|
<a  class="aa">
联系我们
</a>
</div>
<div id="information">
<span>Contact</span>
<P>地址：江西省南昌市华东交通大学信息工程学院</P>
<p>邮编：330000</p>
<p>联系电话：1872007****</p>
<p>负责人：林宏城</p>
<p>邮箱：962608051@qq.com</p>
</div>
</div>
</div>
</div>
<!-- topbar -->
<div id="logo">
<div class="logopic">
<div class="home">
<a href="#"></a>
</div>
</div>
</div>
<!--logo end -->
<div id="navbar">
<div class="navbarcontent">
<ul>
<li>
<a href="http://txzyb.sinaapp.com/introduce.php">班级概况</a>
</li>
<li>
<a href="http://txzyb.sinaapp.com/honor.php">班级荣誉</a>
</li>
<li>
<a href="http://txzyb.sinaapp.com/wenhua.php">班级文化</a>
</li>
<li>
<a href="http://txzyb.sinaapp.com/active.php">文体活动</a>
</li>
<li>
<a href="http://txzyb.sinaapp.com/liuyanban/fabiao.php">卓越BBS</a>
</li>
</ul>
</div>
</div>
<!-- nav end-->
<div id="activeimg">
<div class="demoo">
</div>
<a id="bg_prev" class="bg_btn" href="javascript:;" style="left: 0px; display: block;"><img src="images/leftarrow.png"></a>
  <a id="bg_next" class="bg_btn" href="javascript:;" style="right: 0px; display: block;"><img src="images/rightarrow.png"></a>
</div>
<!-- active img end-->
<div id="timetable">
<div id="timetablecontent">
<div id="timetitle">
<p class="shijianbiao">
</p>
<div class="todaytimeleft">
<p class="today">
今日时间
</p>
<p class="todaytime">
</p>
<p class="nongli"></p>
</div>
<div class="todaytianqi">
<p class="today">今日天气</p>
<p class="tq"><?php echo $tianqi[1]; ?></p>
<p class="tq"><?php echo $low[1]."℃-".$high[1]."℃"; ?></p>
</div>
</div>
<div id="timeinner">
<ul class="timebiao">
<div id="donghua">
</div>
<li class="timeli"><a href="javascript:;" class="active">
<p class="timetime">
2013-12-13 12:00
</p>
<p class="info">
加载中..
</p>
<p class="addres">
地点：12-111
</p>
</a>
</li>
<li class="timeli"><a href="javascript:;" class="unactive">
<p class="timetime">
2013-12-13 12:00
</p>
<p class="info">
加载中..
</p>
<p class="addres">
地点：12-111
</p>
</a>
</li>
<li class="timeli"><a href="javascript:;" class="unactive">
<p class="timetime">
2013-12-13 12:00
</p>
<p class="info">
加载中..
</p>
<p class="addres">
地点：12-111
</p>
</a>
</li>
<li class="timeli"><a href="javascript:;" class="unactive">
<p class="timetime">
2013-12-13 12:00
</p>
<p class="info">
加载中..
</p>
<p class="addres">
地点：12-111
</p>
</a>
</li>
</ul>
</div>
</div>
</div>
<!--info end-->
<div id="newsandpic">
<div id="newsandpicconent">

<div id="news">
<div class="newshead">
<p id="ournews" class="ournews">班级动态</p>
<p id="aboutmajor" class="aboutmajor">行业新闻</p>
</div>
<div id="ournewscontent" class="newsactive">
<div class="newscontent">
<ul>
<li><a id="news1"  href="" class="newsitem"></a><p class="newstime"></p></li>
<li><a id="news2"  href=""  class="newsitem"></a><p class="newstime"></p></li>
<li><a id="news3"  href=""  class="newsitem"></a><p class="newstime"></p></li>
<li><a id="news4"  href=""   class="newsitem"></a><p class="newstime"></p></li>
<li><a id="news5"  href=""   class="newsitem"></a><p class="newstime"></p></li>
<li><a id="news6"  href=""   class="newsitem"></a><p class="newstime"></p></li>
</ul>
<p style="float:right; margin-right:10px;"><a href="http://txzyb.sinaapp.com/news/list.php">更多>></a></p>
</div>
</div>
<div id="aboutmajorcontent" class="newsunactive">
<div class="majorcontent">
</div>
</div>
</div>
<!----->
<div class="ourstar">
<div class="pic">
<p style="text-align:center; margin-bottom:10px;">今日之卓越</p>
<img  width="220px" height="160px;" id="star" src="images/star.png" />
</div>
<div class="video">
<p style="text-align:center;margin-bottom:10px;">班级介绍视频</p>
<div id="youkuplayer" style="width:280px;height:180px"></div>
<script type="text/javascript" src="http://player.youku.com/jsapi">
player = new YKU.Player('youkuplayer',{
	client_id: '8beb8a3c9241b366',
	vid: 'XNjUzMDczMTQ0'
});

</script>
</div>



</div>
</div>
</div>
<!--news end-->
<p  class="onlinks" id="onlinks"><img src="images/arrow_bottom.jpg" style="margin-top:3px;" /><span>展开快速链接</span></p>
<p  class="offlinks" id="offlinks"><img src="images/arrow_top.jpg"  style="margin-top:3px;"/><span>收起快速链接</span></p>
<div id="links" class="onunactive">
<div id="linksinner">
<br />
<br />
<br />
<div id="linkstable">
<div class="xiaonei">
<table border="0">
<tr><td><a href="http://ecjtu.jx.cn/" target="_blank">交大首页</a></td><td><a href="http://xxxy.ecjtu.jx.cn/" target="_blank">学院首页</a></td><td><a href="http://jwc.ecjtu.jx.cn/" target="_blank">教务处</a></td><td><a href="http://zjb.ecjtu.jx.cn/" target="_blank">招生就业处</a></td></tr>
<tr><td><a href="http://ecjtu.net" target="_blank">日新闻</a></td><td><a href="http://ecjtu.org" target="_blank">交大蓝盾</a></td><td><a href="http://kmh.ecjtu.jx.cn/" target="_blank">孔目湖讲坛</a></td><td><a href="http://lib.ecjtu.jx.cn/" target="_blank">图书馆</a></td></tr>
<tr><td><a href="http://jwc.ecjtu.jx.cn:8080/jwcmis/examarrange.jsp" target="_blank">考试安排</a></td><td><a href="http://jwc.ecjtu.jx.cn:8080/jwcmis/assess/" target="_blank">网上评教</a></td><td><a href="http://jwc.ecjtu.jx.cn/mis_o/login.htm" target="_blank">成绩查询</a></td><td><a href="http://jwc.ecjtu.jx.cn:8080/jwcmis/classroom/class.jsp">课表查询</a></td></tr>
<tr><td><a href="http://jwc.ecjtu.jx.cn:8080/jwcmis/index.htm" target="_blank">网上选修</a></td><td><a href="http://soul.ecjtu.jx.cn/" target="_blank">心里咨询</a></td><td><a href="#">好梦网</a></td><td><a href="liuyanban/fabiao.php" target="_blank">留言板</a></td></tr>
</table>
</div><div class="xiaowai">
<table border="0">
<tr><td><a href="http://scholar.google.com/ " target="_blank">谷歌学术</a></td><td><a href="http://www.cnki.net/" target="_blank">知网</a></td><td><a href="http://open.163.com/" target="_blank">网易公开课</a></td><td><a href="http://bbs.hiapk.com/" target="_blank">安卓论坛</a></td></tr>
<tr><td><a href="http://bbs.elecfans.com/zhuti_arm_1.html " target="_blank">嵌入式</a></td><td><a href="http://www.csdn.net/" target="_blank">CSDN</a></td><td><a href="http://www.chinaitlab.com/" target="_blank">中国IT实验室</a></td><td><a href="http://blog.sina.com.cn/lm/tech/" target="_blank">新浪IT博客</a></td></tr>
<tr><td><a href="http://www.blogjava.net/" target="_blank">JAVA技术网</a></td><td><a href="http://www.w3school.com.cn/" target="_blank">W3C</a></td><td><a href="http://sk.neea.edu.cn/jsjdj/" target="_blank">计算机等级考试</a></td><td><a href="http://www.yealink.com.cn/" target="_blank">yeelink</a></td></tr>
<tr><td><a href="http://www.jxedu.gov.cn/ " target="_blank">江西教育网</a></td><td><a href="http://cet.jlste.com.cn/cet/" target="_blank">CET</a></td><td><a href="http://www.yuelvxing.com/" target="_blank">悦旅行</a></td><td><a href="http://www.tianya.cn/bbs/" target="_blank">天涯论坛</a></td></tr>
</table>
</div>
</div>
</div>
</div>
<!--links end-->
<div id="copyright">
<p>版权所有 @华东交通大学信息工程学院11级通信工程（卓越工程师） 地址：南昌市双港路88号
 </p>
<p>技术支持：11级通信工程（卓越工程师）</p>
</div>

</div>
<div style="width:120px;height:120px;position:fixed;bottom:0px;right:0px;background:url(1.png);z-index:100"></div>
<script src="js/my.js" charset='gb2312'>
</script>
<script src="js/news.js">
</script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=30340855" charset="UTF-8"></script>			
</body>
</html>
