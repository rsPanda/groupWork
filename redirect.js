$(document).ready(function(){
	$("#btnLogin").click(function (event){
		window.location.href = "login.php";
	});
	$("#btnFeedback").click(function (event){
		window.location.href = "Feedback.php";
	});
	$("#btnFeeds").click(function (event){
		window.location.href = "homepage.php";
	});
	$("#btnLogout").click(function (event){
		window.location.href = "logout.php";
	});
	$("#btnAddPost").click(function (event){
		window.location.href = "addPost.php";
	});
	$("#btnPost").click(function (event){
		window.location.href = "post.php";
	});
	$("#create").click(function (event){
		window.location.href = "newuser.php";
	});
	$("#log").click(function (event){
		window.location.href = "user.php";
	});
	$("#post").click(function (event){
		window.location.href = "post.php";
	});
	$("#cancelButton").click(function (event){
		window.location.href = "homepage.php";
	});
})