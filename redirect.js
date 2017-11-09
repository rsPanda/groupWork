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
		window.location.href = "login.php";
	});
	$("#post").click(function (event){
		window.location.href = "post.php";
	});
	$("#addGameBTN").click(function (event){
		window.location.href = "test.php";
	});
	$("#editGameBTN").click(function (event){
		window.location.href = "editContent.php?editBy=editGame";
	});
	$("#deleteGameBTN").click(function (event){
		window.location.href = "editContent.php?editBy=deleteGame";
	});
	$("#addPostBTN").click(function (event){
		window.location.href = "editContent.php?editBy=addPost";
	});
	$("#editPostBTN").click(function (event){
		window.location.href = "editContent.php?editBy=editPost";
	});
	$("#deletePostBTN").click(function (event){
		window.location.href = "editContent.php?editBy=deletePost";
	});
})