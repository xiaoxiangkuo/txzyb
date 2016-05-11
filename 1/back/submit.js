function tijiao(){
	var username,password;
	var login="login";
	username = $("#username").val();
	password = $("#password").val();
	$("#tip1").fadeIn('slow').html("");
	$("#tip2").fadeIn('slow').html("");
	if(username==''){
		$("#tip1").fadeIn('slow').html("用户名为空");
		return false;
		}
	if(password==''){
		$("#tip2").fadeIn('slow').html("密码为空");
		return false;
		}
		else{
			$.ajax({
				type:"POST",
				beforeSend:function(){$("#info").fadeIn('slow').html("登陆中...");},
				url:'action.php',
				data:"&action="+login+"&username="+username+"&password="+password,
				 success: function(data){
					 $("#info").fadeIn('slow').html("");
					 var msg=data.split("@fen");
					 if(msg[0]=="0"){
						 $("#info").fadeIn('slow').html(msg[1]);
						 }
					 else if(msg[0]=="1"){
						 if(msg[1]=="ok"){
							 location='content.php';
							 }
						 }
					 }
				
			})
			}
	}

function wjmm(){
	alert("请联系管理员或技术人员");
	}