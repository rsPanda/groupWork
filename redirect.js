$(document).ready(function(){
	$("#btnLogin").click(function (event){
		window.location.href = "login.php";
	});
	$("#btnFeedback").click(function (event){
		window.location.href = "feedback.php";
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
	
	// $("#btnSendFeedback").click(function (event){
		
	// document.alert("You're feedback has been sent");
	
	// });
	
});