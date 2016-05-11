// JavaScript Document
$(document).ready(function(){
  $.getJSON("http://txzyb.sinaapp.com/getinfo/timetable.php",function(data){
	  //alert(data.rows[0].time);
	 var info=document.getElementsByClassName("info");
	  var address=document.getElementsByClassName("addres");
	  var time=document.getElementsByClassName("timetime");
	  for(var i=0;i<4;i++){
	  time[i].innerHTML=data.rows[i].time;
	  info[i].innerHTML=data.rows[i].info;
	  address[i].innerHTML=data.rows[i].address;
	  }
    });
	
	
	$.getJSON("http://txzyb.sinaapp.com/getinfo/news.php",function(data){
		//alert(data);
	  //alert(data.rows[0].time);
	 var newsitem=document.getElementsByClassName("newsitem");
	  var newstime=document.getElementsByClassName("newstime");
	  for(var i=0;i<6;i++){
		  title=data.rows[i].title;
		  if(title.length>18){
			  title=title.substr(0,18);
			  title=title+"бн" ;
			  }
	  newsitem[i].innerHTML=title;
	  newstime[i].innerHTML=data.rows[i].date;
	  switch(i){
		  case 0:{ 
		           var href="news/index.php?newslist="+data.rows[0].id;                   $("#news1").attr('href',href);
				   break;
				   }
		  case 1:{
			  var href="news/index.php?newslist="+data.rows[1].id;
			  $("#news2").attr('href',href);
			  break;
			  }
			  
		  case 2:
		  {var href="news/index.php?newslist="+data.rows[2].id;
		  $("#news3").attr('href',href);
		  break;
		  }
		  case 3:
		  {
			  var href="news/index.php?newslist="+data.rows[3].id;
			  $("#news4").attr('href',href);
			  break;
		  }
		  case 4:
		  {var href="news/index.php?newslist="+data.rows[4].id;
		  $("#news5").attr('href',href);
		  break;
		  }
		  case 5:
		  {var href="news/index.php?newslist="+data.rows[5].id;
		  $("#news6").attr('href',href);
		  break;
		  }
		  }
	  }
    });

});