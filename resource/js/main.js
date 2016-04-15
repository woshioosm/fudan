function changeToLogin(){
  	$("#registry").hide();
	$("#login").show();
	$("#myModalLabel").text("登录");
}
function changeToRegistry(){
  	$("#login").hide();
	$("#registry").show();
	$("#myModalLabel").text("注册");
}