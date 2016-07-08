$(document).ready(function(a) {
	
	var usernameOk = false;
	var opswOk = false;


	var username  = $("#username");
	var opsw = $("#passwd");
	//var reg_usename = $("#usename");
	
	username.focus(function(){
		var divs = $(this).parent().next().children('p');
		divs.hide();
		var spanmsg = $('.login_ree').children('span');
		spanmsg.hide();
		//alert(msg.html());
		//alert(divs.html());
	});
	
	username.blur(function(){
							  
		usernameval=$.trim($(this).val());
		//var div_right = $(this).parent().next().children('.right');
		//var div_err = $(this).parent().next().children('.err');

		//var divs = $('.login_ree').children('span');//$(this).parent().next().children('p');
		var divs = $(this).parent().next().children('p');
		//alert(divs.html());
		var spanmsg = $('.login_ree').children('span');
		//alert(msg.html());
		var refc = /^[a-zA-z0-9_]{5,16}$/;
        var email = /\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
        var tel = /^(13|15|18)\d{9}$/;
		divs.show();
		spanmsg.show();
		if(usernameval==null||usernameval=="")
		{
			if(!divs.hasClass("error"))
			{
				divs.removeClass("right");
				divs.addClass("error");
			}
			//divs.show();
			spanmsg.html('账号不能为空');
			usernameOk=false;
		}

		else if(refc.test(usernameval) )
		//else if(email.test(usenameval)|| refc.test(usenameval) || tel.test(usenameval))
		{
			$.ajax({
			   type: "POST",
			   url: "/index.php/Check/checkAccount",
			   data: "account="+usernameval,
			 
			   success: function(msg){
					if(msg=='1006')
					{
						if(!divs.hasClass("right"))
						{
							//msg.text('账号正确');
							divs.removeClass("error");
							divs.addClass("right");
						}
						usernameOk=true;
						spanmsg.hide();
					}
					else if(msg=='1007')
					{
						if(!divs.hasClass("error"))
						{
							divs.removeClass("right");
							divs.addClass("error");
						}
						spanmsg.html('账号不存在');
						usernameOk=false;
					}
					else
					{
						if(!divs.hasClass("error"))
						{
							divs.removeClass("right");
							divs.addClass("error");
						}
						spanmsg.html(geterr(parseInt($.trim(msg))));
						usernameOk=false;
					}
			   }
			});
		}
		else
		{
			if(!divs.hasClass("error"))
			{
				divs.removeClass("right");
				divs.addClass("error");
			}
			spanmsg.html('用户名由5~16位数字和字母组成');
			usernameOk=false;
		}
	});
	
	opsw.focus(function(){
		var divs = $(this).parent().next().children('p');
		divs.hide();
		var spanmsg = $('.login_ree').children('span');
		spanmsg.hide();
	});
	
	opsw.blur(function(){
		var pwdval = $(this).val();
		var divs = $(this).parent().next().children('p');
		divs.show();
		var spanmsg = $('.login_ree').children('span');
		spanmsg.show();
		if (pwdval == "") 
		{
			if(!divs.hasClass("error"))
			{
				divs.removeClass("right");
				divs.addClass("error");
			}
			//divs.text('密码不能为空');
			spanmsg.html('密码不能为空');
			opswOk=false;
		} 
		else 
		{
			var refc = /^[a-zA-z0-9]{1}[a-zA-z0-9]{5,11}$/;
			if (!refc.test(pwdval)) 
			{
				if(!divs.hasClass("error"))
				{
					divs.removeClass("right");
					divs.addClass("error");
				}
				//divs.text('密码采用6~12位字母、数字组合，区分大小写');
				spanmsg.html('密码采用6~12位字母、数字组合，区分大小写');
				opswOk=false;
			} 
			else 
			{
				if(!divs.hasClass("right"))
				{
					divs.removeClass("error");
					divs.addClass("right");
				}
				//divs.text('密码格式正确');
				spanmsg.hide();
				opswOk=true;
			}
		}			   
	});
	
	$("#flogin").submit(function(){
		var f_validate = true;
		
		if(!usernameOk)
		{
			username.blur();
		}
		if(!opswOk)
		{
			opsw.blur();
		}
		
		if(!usernameOk)
		{
			f_validate = false;
			alert('玩家账号有误');
		}
		else if(!opswOk)
		{
			f_validate = false;
			alert('密码有误');
		}
		return f_validate;
	});
	
	function geterr(i)
{
	var str="";
	switch(i)
   {
   case 1004:
   	 str = "账号错误";
	 break;
   case 1006:
	 str="帐号已存在";
	 break;
	case 1007:
	 str="账户不存在";
	 break;
    case 2001:
	 str="暂时无法连接服务器，请稍候再试";
	 break
    default:
	 str="未知错误";break
   }
   return str;
}
});