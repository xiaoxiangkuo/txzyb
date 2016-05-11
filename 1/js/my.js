// JavaScript Document
	$(".aa").click(function(){
		$("#information").css({display:'block'});
		});
	$("#information").hover(function(){
		},function(){
			$("#information").css({display:'none'});
			});

function aler(){
	alert("无法辨别您的浏览器，请按菜单栏中的收藏按钮收藏本站。");
	}
$(document).ready(function() {

	var time=new Date();
	var todayyear=time.getFullYear();
	var todaymonth=time.getMonth()+1;
	var todayday=time.getDate();
	var todaytime=todayyear+'-'+todaymonth+'-'+todayday;
	$(".todaytime").text(todaytime);
	var yu=todayday%7;
	switch(yu){
		case 0 : $("#star").attr("src","images/star4.png");break;
		case 1 : $("#star").attr("src","images/star3.png");break;
		case 2 : $("#star").attr("src","images/star2.png");break;
		case 3 : $("#star").attr("src","images/star1.png");break;
		case 4 : $("#star").attr("src","images/star0.png");break;
		case 5 : $("#star").attr("src","images/star5.png");break;
		case 6 : $("#star").attr("src","images/star6.png");break;
		case 7 : $("#star").attr("src","images/star7.png");break;
		}
	

	$(".timeli").hover(function(){
	switch($(this).index()+1){
		case 2:$("#donghua").animate({left:'27.8%'},"fast") ;break;
	    case 3:$("#donghua").animate({left:'42.5%'},"fast");break;
		case 4:$("#donghua").animate({left:'57.3%'},"fast");break;
		case 5:$("#donghua").animate({left:'72.2%'},"fast");break;
		//case 2:$("#donghua").animate({left:'376px'},"fast") ;break;
	    //case 3:$("#donghua").animate({left:'574px'},"fast");break;
		//case 4:$("#donghua").animate({left:'772px'},"fast");break;
		//case 5:$("#donghua").animate({left:'970px'},"fast");break;
		default :break;
		}
		
	});
	var timeli=$('#timeinner').find('a');
	timeli.hover(function(){
		timeli.removeClass('active');
	    timeli.addClass('unactive');
	    $(this).fadeIn('slow').addClass('active');
    	$(this).removeClass('unactive');
		})
    
})
$("#ournews").hover(function(){
	$("#aboutmajor").addClass('aboutmajor');
	$(this).removeClass('aboutmajor');
	$(this).addClass('ournews');
	$("#ournewscontent").removeClass('newsunactive');
	$("#ournewscontent").addClass('newsactive');
	$("#aboutmajorcontent").removeClass('newsactive');
	$("#aboutmajorcontent").addClass('newsunactive');
	})
	
$("#aboutmajor").hover(function(){
	$("#ournews").addClass('aboutmajor');
	$(this).removeClass('aboutmajor');
	$(this).addClass('ournews');
	$("#ournewscontent").removeClass('newsactive');
	$("#ournewscontent").addClass('newsunactive');
	$("#aboutmajorcontent").removeClass('newsunactive');
	$("#aboutmajorcontent").addClass('newsactive');
})



	$("#onlinks").click(function(){
		  $("#onlinks").removeClass('onlinks');
		  $("#onlinks").addClass('offlinks');
		  $("#offlinks").removeClass('offlinks');
		  $("#offlinks").addClass('onlinks');
		  $("#links").slideToggle();
		})
	$("#offlinks").click(function(){
		  $("#offlinks").addClass('offlinks');
		  $("#offlinks").removeClass('onlinks');
		  $("#onlinks").removeClass('offlinks');
		  $("#onlinks").addClass('onlinks');
		  $("#links").slideToggle();
		})
//###########################农历##################################################
var   CalendarData=new   Array(20);   
  var   madd=new   Array(12);   
  var   TheDate=new   Date();   
  var   tgString="甲乙丙丁戊己庚辛壬癸";   
  var   dzString="子丑寅卯辰巳午未申酉戌亥";   
  var   numString="一二三四五六七八九十";   
  var   monString="正二三四五六七八九十冬腊";   
  var   weekString="日一二三四五六";   
  var   sx="鼠牛虎兔龙蛇马羊猴鸡狗猪";   
  var   cYear;   
  var   cMonth;   
  var   cDay;   
  var   cHour;   
  var   cDateString;   
  var   DateString;   
  var   Browser=navigator.appName;   
    
  function   init()   
  {     
      CalendarData[0]=0x41A95;   
      CalendarData[1]=0xD4A;   
      CalendarData[2]=0xDA5;   
      CalendarData[3]=0x20B55;   
      CalendarData[4]=0x56A;   
      CalendarData[5]=0x7155B;   
      CalendarData[6]=0x25D;   
      CalendarData[7]=0x92D;   
      CalendarData[8]=0x5192B;   
      CalendarData[9]=0xA95;   
      CalendarData[10]=0xB4A;   
      CalendarData[11]=0x416AA;   
      CalendarData[12]=0xAD5;   
      CalendarData[13]=0x90AB5;   
      CalendarData[14]=0x4BA;   
      CalendarData[15]=0xA5B;   
      CalendarData[16]=0x60A57;   
      CalendarData[17]=0x52B;   
      CalendarData[18]=0xA93;   
      CalendarData[19]=0x40E95;   
      madd[0]=0;   
      madd[1]=31;   
      madd[2]=59;   
      madd[3]=90;   
      madd[4]=120;   
      madd[5]=151;   
      madd[6]=181;   
      madd[7]=212;   
      madd[8]=243;   
      madd[9]=273;   
      madd[10]=304;   
      madd[11]=334;   
    }   
    
  function   GetBit(m,n)   
  {     
        return   (m>>n)&1;   
  }   
    
  function   e2c()   
  {       
      var   total,m,n,k;   
      var   isEnd=false;   
      var   tmp=TheDate.getYear();   
      if   (tmp<1900)     tmp+=1900;   
      total=(tmp-2001)*365   
          +Math.floor((tmp-2001)/4)   
          +madd[TheDate.getMonth()]   
          +TheDate.getDate()   
          -23;   
      if   (TheDate.getYear()%4==0&&TheDate.getMonth()>1)   
          total++;   
      for(m=0;;m++)   
      {       
          k=(CalendarData[m]<0xfff)?11:12;   
          for(n=k;n>=0;n--)   
          {   
              if(total<=29+GetBit(CalendarData[m],n))   
              {     
                  isEnd=true;   
                  break;   
              }   
              total=total-29-GetBit(CalendarData[m],n);   
          }   
          if(isEnd)break;   
      }   
      cYear=2001   +   m;   
      cMonth=k-n+1;   
      cDay=total;   
      if(k==12)   
      {   
          if(cMonth==Math.floor(CalendarData[m]/0x10000)+1)   
              cMonth=1-cMonth;   
          if(cMonth>Math.floor(CalendarData[m]/0x10000)+1)   
              cMonth--;   
      }   
      cHour=Math.floor((TheDate.getHours()+3)/2);   
  }   
    
  function   GetcDateString()   
  {   var   tmp="";   
      tmp+=tgString.charAt((cYear-4)%10);       //年干   
      tmp+=dzString.charAt((cYear-4)%12);       //年支   
      tmp+="年(";   
      tmp+=sx.charAt((cYear-4)%12);   
      tmp+=")   ";   
      if(cMonth<1)   
      {     
        tmp+="闰";   
          tmp+=monString.charAt(-cMonth-1);   
      }   
      else   
          tmp+=monString.charAt(cMonth-1);   
      tmp+="月";   
      tmp+=(cDay<11)?"初":((cDay<20)?"十":((cDay<30)?"二十":"三十"));   
      if(cDay%10!=0||cDay==10)   
          tmp+=numString.charAt((cDay-1)%10);   
      tmp+="    ";   
      if(cHour==13)tmp+="夜";   
          tmp+=dzString.charAt((cHour-1)%12);   
      tmp+="时";   
      cDateString=tmp;   
      return   tmp;   
  }   
    
  function   GetDateString()   
  {     
      var   tmp="";   
      var   t1=TheDate.getYear();   
      if   (t1<1900)t1+=1900;   
      tmp+=t1   
                +"年"   
                +(TheDate.getMonth()+1)+"月"   
                +TheDate.getDate()+"日   "   
                //+TheDate.getHours()+":"   
                //+((TheDate.getMinutes()<10)?"0":"")   
                //+TheDate.getMinutes() 
                +"   星期"+weekString.charAt(TheDate.getDay());     
      DateString=tmp;   
      return   tmp;   
  }
    
  init();   
  e2c();   
  GetDateString(); 
  GetcDateString(); 
  bingo = cDateString.substr(7,8); 
  bingo ="农历"+bingo;
  $(".nongli").text(bingo);
//=============================行业新闻==============================================	
function majoronload(){
	$.ajax({
            type: "POST",
            url:'../majornews/majoronload.php',
            dataType: 'text',
            data: "&action="+"newsshuaxin",
            success: function(data){
				var msg=data.split("@fen");
				var action=(msg[6].replace(/@1/g,"当前"));
				 action=(action.replace(/@2/g,"页 共计"));
				 action=(action.replace(/@3/g,"条"));
				 action=(action.replace(/@4/g,"首页"));
				 action=(action.replace(/@5/g,"上一页"));
				 action=(action.replace(/@6/g,"下一页"));
				 action=(action.replace(/@7/g,"末页"));
				$(".majorcontent").empty().html(msg[0]+msg[1]+msg[2]+msg[3]+msg[4]+msg[5]+action);
				}
	});
	}
//================================================================
function majorqiehuan(i){
		var page=i;
	$.ajax({
            type: "POST",
			url:'../majornews/majoronload.php',
            dataType: 'text',
            data: "&page="+page,
            success: function(data){
				var msg=data.split("@fen");
				var action=(msg[6].replace(/@1/g,"当前"));
				 action=(action.replace(/@2/g,"页 共计"));
				 action=(action.replace(/@3/g,"条"));
				 action=(action.replace(/@4/g,"首页"));
				 action=(action.replace(/@5/g,"上一页"));
				 action=(action.replace(/@6/g,"下一页"));
				 action=(action.replace(/@7/g,"末页"));
				$(".majorcontent").empty().html(msg[0]+msg[1]+msg[2]+msg[3]+msg[4]+msg[5]+action);
				}
	})
	}
majoronload();