// JavaScript Document
$(document).ready(function(){
	document.getElementById("newsfabu").style.display='block';				
	document.getElementById("newsxiugai").style.display='none';
	var meun=$('.navigation').find('a');
	meun.click(function(){
	meun.removeClass('active');
	$(this).addClass('active');
	$(".content1").css({display:'none'});
	$(".content2").css({display:'none'});
	$(".content3").css({display:'none'});
	$(".content4").css({display:'none'});
		if($(this).text()=="ʱ������"){
		$(".content1").css({display:'block'});
		shuaxin();
		}
		/////
		if($(this).text()=="���ŷ���"){
		$(".content2").css({display:'block'});
		var time=new Date();
	    var todayyear=time.getFullYear();
		var todaymonth=time.getMonth()+1;
		var todayday=time.getDate();
		var todaytime=todayyear+'-'+todaymonth+'-'+todayday;
		$(".todaytime").text(todaytime);
		newsshuaxin();
		}
		////
		if($(this).text()=="ϵͳ����")
		$(".content3").css({display:'block'});
		///
		if($(this).text()=="�û�����")
		$(".content4").css({display:'block'});
    });
});
function addtimetable(){
	$(".check1").css({display:'none'});
	$(".check2").css({display:'none'});
	var address,time,info,timen,timey,timer,times;
	var add="add";
	address    = $("#time1").val();
	timen      = $("#timen").val();
	timey      = $("#timey").val();
	timer      = $("#timer").val();
	times      = $("#times").val();
	timef      = $("#timef").val();
	info       = $("#time3").val();
	if(address==''){
		$(".check2").css({display:'block'});
		$("#errormsg").fadeIn('slow').html("<a href='#'>����д��ַ</a>");
		return false;
		}
	if(timen==''||timey==''||timer==''){
		$(".check2").css({display:'block'});
		$("#errormsg").fadeIn('slow').html("����д����ʱ��");
		return false;
		}
	if(info==''){
		$(".check2").css({display:'block'});
		$("#errormsg").fadeIn('slow').html("����д����");
		return false;
		}
		
	
///////////////////////////////////////////////////�ж�ʱ��///////////////////////////////////////////////////////////////////////
if(timen.length!=4)
{
	$(".check2").css({display:'block'});
		$("#errormsg").fadeIn('slow').html("����д��λ�������Ϣ��");
		return false;
	}
if(timey.length>2)
{
	$(".check2").css({display:'block'});
		$("#errormsg").fadeIn('slow').html("����ȷ��д�·���Ϣ��");
		return false;
	}
if(timer.length>2)
{
	$(".check2").css({display:'block'});
		$("#errormsg").fadeIn('slow').html("����ȷ��д������Ϣ��");
		return false;
	}
if(times.length>2)
{
	$(".check2").css({display:'block'});
		$("#errormsg").fadeIn('slow').html("����ȷ��дʱ��-Сʱ��Ϣ��");
		return false;
	}
if(timef.length>2)
{
	$(".check2").css({display:'block'});
		$("#errormsg").fadeIn('slow').html("����ȷ��дʱ��-����Ϣ��");
		return false;
	}
if(timey>12||timey<1){
	$(".check2").css({display:'block'});
		$("#errormsg").fadeIn('slow').html("����ȷ��д�·���Ϣ��");
		return false;
	}
if(timer>31||timer<1){
	$(".check2").css({display:'block'});
		$("#errormsg").fadeIn('slow').html("����ȷ��д������Ϣ��");
		return false;
	}
if(times>24||times<0){
	$(".check2").css({display:'block'});
		$("#errormsg").fadeIn('slow').html("����ȷ��дʱ��-Сʱ��Ϣ��");
		return false;
	}
if(timef>60||timef<0){
	$(".check2").css({display:'block'});
		$("#errormsg").fadeIn('slow').html("����ȷ��дʱ��-����Ϣ��");
		return false;
	}
if(timey.length==1)
{
	timey='0'+timey;
	}
if(timer.length==1)
{
	timer='0'+timer;
	}
if(times.length==1)
{
	times='0'+times;
	}
if(timef.length==1)
{
	timef='0'+timef;
	}
if(times.length==0)
{
    times="00";
	}
if(timef.length==0)
{
    timef="00";
	}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	time=timen+'-'+timey+'-'+timer+'-'+times+":"+timef;
	$.ajax({
            type: "POST",
			//beforeSend:function(){$(".info").fadeIn('slow').html("�����ύ�����Ժ�");},
            url:'action.php',
            dataType: 'text',
            data: "&action="+add+"&time="+time+"&address="+address+"&info="+info,
            success: function(data){
				var msg=data.split("@fen");
				if(msg[0]=='0'){
					$(".check2").css({display:'none'});
					$(".check1").css({display:'block'});
					document.getElementById("time1").value='';
					document.getElementById("timen").value='';
					document.getElementById("timey").value='';
					document.getElementById("timer").value='';
					document.getElementById("times").value='';
					document.getElementById("timef").value='';
					document.getElementById("time3").value='';
					}
			}
			
	})
	return false;
	}

function dodel(id){
    var id=id;
    var del="del";
    if(confirm("ȷ��ɾ����������,���ɻָ�")){
        $.ajax({
            type: "POST",
            //beforeSend:function(){$("#all").fadeIn('slow').html("�����޸�...");},
            url:'action.php',
            dataType: 'text',
            data: "&action="+del+"&id="+id,
            success: function(data){
                var msg=data.split("@fen");
                if(msg[0]==1)
                {
                    if(msg[1]==id)
                    {
                        var tag=""+id+"";
                        document.getElementById(tag).style.display='none';

                    }
                }
            }

        });
    }
    return false;
}


function dochange(id){
ida= id;
	var chaxun="chaxun";
	 $.ajax({
            type: "POST",
            //beforeSend:function(){$("#all").fadeIn('slow').html("�����޸�...");},
            url:'action.php',
            dataType: 'text',
            data: "&action="+chaxun+"&id="+ida,
            success: function(data){
                 var info=data.split("@fen");
            if(info[0]=='ok'){
				    var time=info[1];
					year = time.substr(0, 4); 
					month = time.substr(5, 2); 
					day = time.substr(8, 2); 
					hour = time.substr(11, 2); 
					fen = time.substr(14, 2);
					document.getElementById("time1").value=info[2];
					document.getElementById("timen").value=year;
					document.getElementById("timey").value=month;
					document.getElementById("timer").value=day;
                    document.getElementById("times").value=hour;
					document.getElementById("timef").value=fen;
                    document.getElementById("time3").value=info[3];
					document.getElementById("fabu").style.display='none';
					document.getElementById("xiugai").style.display='block';
            }
            else{
                alert("��ȡ��Ϣʧ��");
            }
            }

        });
		 return false;
	}
function changetimetable(){
	var address,time,info,timen,timey,timer,times;
	var xiugai="xiugai";
	address    = $("#time1").val();
	timen      = $("#timen").val();
	timey      = $("#timey").val();
	timer      = $("#timer").val();
	times      = $("#times").val();
	timef      = $("#timef").val();
	info       = $("#time3").val();
	if(address==''){
		$(".check2").css({display:'block'});
		$("#errormsg").fadeIn('slow').html("����д�ص�");
		return false;
		}
	if(timen==''||timey==''||timer==''){
		$(".check2").css({display:'block'});
		$("#errormsg").fadeIn('slow').html("����д����ʱ��");
		return false;
		}
	if(info==''){
		$(".check2").css({display:'block'});
		$("#errormsg").fadeIn('slow').html("����д����");
		return false;
		}
		
	
///////////////////////////////////////////////////�ж�ʱ��///////////////////////////////////////////////////////////////////////
if(timen.length!=4)
{
	$(".check2").css({display:'block'});
		$("#errormsg").fadeIn('slow').html("����д��λ�������Ϣ��");
		return false;
	}
if(timey.length>2)
{
	$(".check2").css({display:'block'});
		$("#errormsg").fadeIn('slow').html("����ȷ��д�·���Ϣ��");
		return false;
	}
if(timer.length>2)
{
	$(".check2").css({display:'block'});
		$("#errormsg").fadeIn('slow').html("����ȷ��д������Ϣ��");
		return false;
	}
if(times.length>2)
{
	$(".check2").css({display:'block'});
		$("#errormsg").fadeIn('slow').html("����ȷ��дʱ��-Сʱ��Ϣ��");
		return false;
	}
if(timef.length>2)
{
	$(".check2").css({display:'block'});
		$("#errormsg").fadeIn('slow').html("����ȷ��дʱ��-����Ϣ��");
		return false;
	}
if(timey>12||timey<1){
	$(".check2").css({display:'block'});
		$("#errormsg").fadeIn('slow').html("����ȷ��д�·���Ϣ��");
		return false;
	}
if(timer>31||timer<1){
	$(".check2").css({display:'block'});
		$("#errormsg").fadeIn('slow').html("����ȷ��д������Ϣ��");
		return false;
	}
if(times>24||times<0){
	$(".check2").css({display:'block'});
		$("#errormsg").fadeIn('slow').html("����ȷ��дʱ��-Сʱ��Ϣ��");
		return false;
	}
if(timef>60||timef<0){
	$(".check2").css({display:'block'});
		$("#errormsg").fadeIn('slow').html("����ȷ��дʱ��-����Ϣ��");
		return false;
	}
if(timey.length==1)
{
	timey='0'+timey;
	}
if(timer.length==1)
{
	timer='0'+timer;
	}
if(times.length==1)
{
	times='0'+times;
	}
if(timef.length==1)
{
	timef='0'+timef;
	}
if(times.length==0)
{
    times="00";
	}
if(timef.length==0)
{
    timef="00";
	}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	time=timen+'-'+timey+'-'+timer+'-'+times+":"+timef;
	$.ajax({
            type: "POST",
			//beforeSend:function(){$(".info").fadeIn('slow').html("�����ύ�����Ժ�");},
            url:'action.php',
            dataType: 'text',
            data: "&action="+xiugai+"&time="+time+"&address="+address+"&info="+info+"&id="+ida,
            success: function(data){
				var msg=data.split("@fen");
				if(msg[0]=='1'){
					if(msg[1]=='ok'){
					$(".check2").css({display:'none'});
					$(".check1").css({display:'block'});
					$("#goodmsg").fadeIn('slow').html("�޸ĳɹ�");
					document.getElementById("time1").value='';
					document.getElementById("timen").value='';
					document.getElementById("timey").value='';
					document.getElementById("timer").value='';
					document.getElementById("times").value='';
					document.getElementById("timef").value='';
					document.getElementById("time3").value='';
					document.getElementById("fabu").style.display='block';
					document.getElementById("xiugai").style.display='none';
					}
					}
					else{
						$(".check2").css({display:'block'});
					    $(".check1").css({display:'none'});
					    $("#errormsg").fadeIn('slow').html("���ݿ��������ϵ����Ա��");
						}
			}
			
	})
	return false;
	}

function shuaxin(){
	$.ajax({
            type: "POST",
            url:'timeinfo.php',
            dataType: 'text',
            data: "&action="+"aa",
            success: function(data){
				var msg=data.split("@fen");
				var str=(msg[0].replace(/%/g,"ʱ��"));
				 str=(str.replace(/~/g,"�ص�"));
				 str=(str.replace(/#@/g,"����"));
				 str=(str.replace(/@/g,"����"));
				 str=(str.replace(/##/g,"ˢ��"));
				var data1=(msg[1].replace(/@/g,"�޸�"));
				 data1=(data1.replace(/%/g,"ɾ��"));
				var data2=(msg[2].replace(/@/g,"�޸�"));
				 data2=(data2.replace(/%/g,"ɾ��"));
				var data3=(msg[3].replace(/@/g,"�޸�"));
				data3=(data3.replace(/%/g,"ɾ��"));
				var data4=(msg[4].replace(/@/g,"�޸�"));
				data4=(data4.replace(/%/g,"ɾ��"));
				var action=(msg[6].replace(/@1/g,"��ǰ"));
				 action=(action.replace(/@2/g,"ҳ ����"));
				 action=(action.replace(/@3/g,"��"));
				 action=(action.replace(/@4/g,"��ҳ"));
				 action=(action.replace(/@5/g,"��һҳ"));
				 action=(action.replace(/@6/g,"��һҳ"));
				 action=(action.replace(/@7/g,"ĩҳ"));
				$("#timetable").empty().html(str+data1+data2+data3+data4+msg[5]+action);
				}
	});
	}
	
	function qiehuan(i){
		var page=i;
	$.ajax({
            type: "POST",
            url:'timeinfo.php',
            dataType: 'text',
            data: "&page="+page,
            success: function(data){
				var msg=data.split("@fen");
				var str=(msg[0].replace(/%/g,"ʱ��"));
				 str=(str.replace(/~/g,"�ص�"));
				 str=(str.replace(/#@/g,"����"));
				 str=(str.replace(/@/g,"����"));
				  str=(str.replace(/##/g,"ˢ��"));
				var data1=(msg[1].replace(/@/g,"�޸�"));
				 data1=(data1.replace(/%/g,"ɾ��"));
				var data2=(msg[2].replace(/@/g,"�޸�"));
				 data2=(data2.replace(/%/g,"ɾ��"));
				var data3=(msg[3].replace(/@/g,"�޸�"));
				data3=(data3.replace(/%/g,"ɾ��"));
				var data4=(msg[4].replace(/@/g,"�޸�"));
				data4=(data4.replace(/%/g,"ɾ��"));
				var action=(msg[6].replace(/@1/g,"��ǰ"));
				 action=(action.replace(/@2/g,"ҳ ����"));
				 action=(action.replace(/@3/g,"��"));
				 action=(action.replace(/@4/g,"��ҳ"));
				 action=(action.replace(/@5/g,"��һҳ"));
				 action=(action.replace(/@6/g,"��һҳ"));
				 action=(action.replace(/@7/g,"ĩҳ"));
				$("#timetable").empty().html(str+data1+data2+data3+data4+msg[5]+action);
				
				}
	})
	}


//--------------------------------------------------------------- ����----------------------------------------------------------------------------------------------//
function addnews(){
	$(".check3").css({display:'none'});
	$(".check4").css({display:'none'});
	var title,keywords,newscontent,time,author;
	var addnews="addnews";
	title           = $("#newstitle").val();
	keywords         = $("#keywords").val();
	newscontent      = editor.html()
	author           = $("#author").text();
	if(title==''){
		$(".check4").css({display:'block'});
		$("#errormsg1").fadeIn('slow').html("����д����");
		return false;
		}
	if(keywords==''){
		$(".check4").css({display:'block'});
		$("#errormsg1").fadeIn('slow').html("����д�ؼ���");
		return false;
		}
	if(newscontent==''){
		$(".check4").css({display:'block'});
		$("#errormsg1").fadeIn('slow').html("����д����");
		return false;
		}
	var time1=new Date();
	    var todayyear=time1.getFullYear();
		var todaymonth=time1.getMonth()+1;
		var todayday=time1.getDate();
		var date=todayyear+'-'+todaymonth+'-'+todayday;	
	
///////////////////////////////////////////////////��ȡʱ���///////////////////////////////////////////////////////////////////////
var time = Date.parse(new Date());
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$.ajax({
            type: "POST",
			beforeSend:function(){},
            url:'action.php',
            dataType: "html",
            data: {'action': addnews ,'time': time, 'title':title,'keywords':keywords,'newscontent':newscontent, 'author' : author, 'date':date},
            success: function(data){
				var msg=data.split("@fen");
				if(msg[0]=='0'){
					if(msg[1]=='ok'){
					$(".check4").css({display:'none'});
					$(".check3").css({display:'block'});
					document.getElementById("keywords").value='';
					document.getElementById("newstitle").value='';
					editor.html('');
					var t=setTimeout("$(\".check3\").css({display:'none'})",3000)
					}
					}
				else{
					alert(msg[0]);
					}
			}
			
	})
	return false;
	}




/////////--------------------------------------------------------------------------------------------------------ˢ������
function newsshuaxin(){
	$.ajax({
            type: "POST",
            url:'newsinfo.php',
            dataType: 'text',
            data: "&action="+"newsshuaxin",
            success: function(data){
				var msg=data.split("@fen");
				var str=(msg[0].replace(/%/g,"ʱ��"));
				 str=(str.replace(/~/g,"����"));
				 str=(str.replace(/#@/g,"����"));
				 str=(str.replace(/@/g,"����"));
				 str=(str.replace(/##/g,"ˢ��"));
				var data1=(msg[1].replace(/@/g,"�޸�"));
				 data1=(data1.replace(/%/g,"ɾ��"));
				var data2=(msg[2].replace(/@/g,"�޸�"));
				 data2=(data2.replace(/%/g,"ɾ��"));
				var data3=(msg[3].replace(/@/g,"�޸�"));
				data3=(data3.replace(/%/g,"ɾ��"));
				var data4=(msg[4].replace(/@/g,"�޸�"));
				data4=(data4.replace(/%/g,"ɾ��"));
				var action=(msg[6].replace(/@1/g,"��ǰ"));
				 action=(action.replace(/@2/g,"ҳ ����"));
				 action=(action.replace(/@3/g,"��"));
				 action=(action.replace(/@4/g,"��ҳ"));
				 action=(action.replace(/@5/g,"��һҳ"));
				 action=(action.replace(/@6/g,"��һҳ"));
				 action=(action.replace(/@7/g,"ĩҳ"));
				$("#newshis").empty().html(str+data1+data2+data3+data4+msg[5]+action);
				}
	});
	}
	
	function newsqiehuan(i){
		var page=i;
	$.ajax({
            type: "POST",
            url:'newsinfo.php',
            dataType: 'text',
            data: "&page="+page,
            success: function(data){
				var msg=data.split("@fen");
				var str=(msg[0].replace(/%/g,"ʱ��"));
				 str=(str.replace(/~/g,"�ص�"));
				 str=(str.replace(/#@/g,"����"));
				 str=(str.replace(/@/g,"����"));
				  str=(str.replace(/##/g,"ˢ��"));
				var data1=(msg[1].replace(/@/g,"�޸�"));
				 data1=(data1.replace(/%/g,"ɾ��"));
				var data2=(msg[2].replace(/@/g,"�޸�"));
				 data2=(data2.replace(/%/g,"ɾ��"));
				var data3=(msg[3].replace(/@/g,"�޸�"));
				data3=(data3.replace(/%/g,"ɾ��"));
				var data4=(msg[4].replace(/@/g,"�޸�"));
				data4=(data4.replace(/%/g,"ɾ��"));
				var action=(msg[6].replace(/@1/g,"��ǰ"));
				 action=(action.replace(/@2/g,"ҳ ����"));
				 action=(action.replace(/@3/g,"��"));
				 action=(action.replace(/@4/g,"��ҳ"));
				 action=(action.replace(/@5/g,"��һҳ"));
				 action=(action.replace(/@6/g,"��һҳ"));
				 action=(action.replace(/@7/g,"ĩҳ"));
				$("#newshis").empty().html(str+data1+data2+data3+data4+msg[5]+action);
				
				}
	})
	}

function donewsdel(id){
    var id=id;
    var newsdel="newsdel";
    if(confirm("ȷ��ɾ����������,���ɻָ�")){
        $.ajax({
            type: "POST",
            //beforeSend:function(){$("#all").fadeIn('slow').html("�����޸�...");},
            url:'action.php',
            dataType: 'text',
            data: "&action="+newsdel+"&id="+id,
            success: function(data){
                var msg=data.split("@fen");
                if(msg[0]==1)
                {
                    if(msg[1]==id)
                    {
                        var tag=""+id+"";
                        document.getElementById(tag).style.display='none';

                    }
                }
            }

        });
    }
    return false;
}


function donewschange(id){
idb= id;
	var chanews="chanews";
	 $.ajax({
            type: "POST",
            //beforeSend:function(){$("#all").fadeIn('slow').html("�����޸�...");},
            url:'action.php',
            dataType: 'text',
            data: "&action="+chanews+"&id="+idb,
            success: function(data){
                 var info=data.split("@fen");
            if(info[0]=='ok'){
					document.getElementById("newstitle").value=info[1];
                    document.getElementById("keywords").value=info[2];
					editor.html(info[3]);
					document.getElementById("newsfabu").style.display='none';
					document.getElementById("newsxiugai").style.display='block';
            }
            else{
                alert("��ȡ��Ϣʧ��");
            }
            }

        });
		 return false;
	}




function changenews(){
	$(".check3").css({display:'none'});
	$(".check4").css({display:'none'});
	var title,keywords,newscontent,time,author;
	var changenews="changenews";
	title           = $("#newstitle").val();
	keywords         = $("#keywords").val();
	newscontent      = editor.html()
	author           = $("#author").text();
	if(title==''){
		$(".check4").css({display:'block'});
		$("#errormsg1").fadeIn('slow').html("����д����");
		return false;
		}
	if(keywords==''){
		$(".check4").css({display:'block'});
		$("#errormsg1").fadeIn('slow').html("����д�ؼ���");
		return false;
		}
	if(newscontent==''){
		$(".check4").css({display:'block'});
		$("#errormsg1").fadeIn('slow').html("����д����");
		return false;
		}
	var time1=new Date();
	    var todayyear=time1.getFullYear();
		var todaymonth=time1.getMonth()+1;
		var todayday=time1.getDate();
		var date=todayyear+'-'+todaymonth+'-'+todayday;	
	
///////////////////////////////////////////////////��ȡʱ���///////////////////////////////////////////////////////////////////////
var time = Date.parse(new Date());
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$.ajax({
            type: "POST",
			//beforeSend:function(){$(".info").fadeIn('slow').html("�����ύ�����Ժ�");},
            url:'action.php',
            dataType: 'text',
            data: {'action': changenews ,'time': time, 'title':title,'keywords':keywords,'newscontent':newscontent, 'author' : author, 'date':date, 'id':idb},
            success: function(data){
				var msg=data.split("@fen");
				if(msg[0]=='0'){
					if(msg[1]=='ok'){
					$(".check4").css({display:'none'});
					$(".check3").css({display:'block'});
					document.getElementById("keywords").value='';
					document.getElementById("newstitle").value='';
					editor.html('');
					document.getElementById("newsfabu").style.display='block';
					document.getElementById("newsxiugai").style.display='none';
					}
					}
				else{
					alert(msg[0]);
					}
			}
			
	})
	return false;
	
	}
//--------------------------------------��ҳ��������------------------------------------------------------------------------------------//
function banjifabu(){
	$(".check5").css({display:'none'});
	$(".check6").css({display:'none'});
	var shezhititle,shezhicontent;
	var action="shezhi";
	shezhititle      = $("#shezhititle").val();
	shezhicontent      = editor1.html()
	//alert(shezhicontent);
	if(shezhititle==''){
		$(".check6").css({display:'block'});
		$("#errormsg1").fadeIn('slow').html("��ѡ����������");
		return false;
		}
	$.ajax({
            type: "POST",
			beforeSend:function(){},
            url:'action.php',
            dataType: "html",
            data: {'action': action ,'shezhititle':shezhititle,'shezhicontent':shezhicontent},
            success: function(data){
				var msg=data.split("@fen");
				if(msg[0]=='0'){
					if(msg[1]=='ok'){
					$(".check6").css({display:'none'});
					$(".check5").css({display:'block'});
					document.getElementById("shezhititle").value='';
					editor1.html('');
					var t=setTimeout("$(\".check5\").css({display:'none'})",3000)
					}
					}
				else{
					alert(msg[1]);
					}
			}
			
	})
	return false;
	}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//--------------------------------------��ҳ���ݻ�ȡ��ѯ------------------------------------------------------------------------------------//
function content(){
	$(".check5").css({display:'none'});
	$(".check6").css({display:'none'});
	var shezhititle;
	var action="shezhicha";
	shezhititle      = $("#shezhititle").val();
	if(shezhititle==''){
		$(".check6").css({display:'block'});
		$("#errormsg1").fadeIn('slow').html("��ѡ����������");
		return false;
		}
	$.ajax({
            type: "POST",
			beforeSend:function(){},
            url:'action.php',
            dataType: "html",
            data: {'action': action ,'shezhititle':shezhititle},
            success: function(data){
				var msg=data.split("@fen");
				if(msg[0]=='ok'){					
					editor1.html(msg[1]);
					document.getElementById("banjifabu").style.display='none';
					document.getElementById("banjixiugai").style.display='block';
					}
				else{
					
					}
			}
			
	})
	return false;
	}
/////////////////////////////////////�޸�����////////////////////////////////////////////////////////////////////////////////////////////////
function changepwd(){
	var oldpwd,pwd,repwd;
	var action="cpwd";
	oldpassword      = $("#oldpassword ").val();
	password     = $("#password").val();
	repassword      = $("#repassword").val();
	if(oldpassword==''){
		$("#tip1").fadeIn('slow').html("���벻��Ϊ��");
		$("#tip2").fadeIn('slow').html("");
		$("#tip3").fadeIn('slow').html("");
		return false;
		}
	if(password==''){
		$("#tip2").fadeIn('slow').html("���벻��Ϊ��");
		$("#tip1").fadeIn('slow').html("");
		$("#tip3").fadeIn('slow').html("");
		return false;
		}
	if(repassword==''){
		$("#tip3").fadeIn('slow').html("�������벻ͬ");
		$("#tip1").fadeIn('slow').html("");
		$("#tip2").fadeIn('slow').html("");
		return false;
		}
	if(repassword!=password){
		$("#tip3").fadeIn('slow').html("�������벻ͬ");
		$("#tip1").fadeIn('slow').html("");
		$("#tip2").fadeIn('slow').html("");
		return false;
		}
	$.ajax({
            type: "POST",
			beforeSend:function(){},
            url:'action.php',
            dataType: "html",
            data: {'action': action ,'oldpassword':oldpassword,'password':password},
            success: function(data){
				var msg=data.split("@fen");
				if(msg[0]=='1'){					
					document.getElementById("oldpassword").value='';
					document.getElementById("password").value='';
					document.getElementById("repassword").value='';
					$("#tip4").fadeIn('slow').html(msg[1]);
					var t=setTimeout("$(\"#tip4\").fadeIn('slow').html('');",3000);
					var t=setTimeout("$(\"#tip1\").fadeIn('slow').html('');",3000);
					var t=setTimeout("$(\"#tip2\").fadeIn('slow').html('');",3000);
					var t=setTimeout("$(\"#tip3\").fadeIn('slow').html('');",3000);
					}
				else{
					$("#tip4").fadeIn('slow').html(msg[1]);
					var t=setTimeout("$(\"#tip4\").fadeIn('slow').html('');",3000);
					var t=setTimeout("$(\"#tip1\").fadeIn('slow').html('');",3000);
					var t=setTimeout("$(\"#tip2\").fadeIn('slow').html('');",3000);
					var t=setTimeout("$(\"#tip3\").fadeIn('slow').html('');",3000);
					}
			}
			
	})
	return false;
	}