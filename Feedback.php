<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>FeedBack</title>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<script src="redirect.js"></script>

<script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
<script type="text/javascript">
   (function(){
      emailjs.init("user_cdqFPvdGoNYhKd0eI182f");
   })();
   $(document).ready(function(event){
   
   $("#btnSendFeedback").click(function (event){
		var myform = $("#feedbackSubject").val();
		console.log(myform);
	  emailjs.send("gameshub2017email_gmail_com","template_send_form_1", {message : myform});
	});
   });
   
</script>
	
</head>
<body>
<div data-role="page" id="home">
<div data-role="header" id="banner">
<p>FeedBack</p>
</div>

<div data-role="content" id="content">
<!-- <form id="comments" method="POST" action="https://api.emailjs.com/api/v1.0/email/send"> -->
<textarea rows="27" cols="135" id="feedbackSubject">
</textarea>
<br/>
<button id="btnSendFeedback">Send Feedback</button>
<br/>
<!-- </form> -->
<br/>
</div>
<div data-role="footer">
<button id="btnFeeds" >Feeds</button>
<button id="btnFeedback">FeedBack</button>
<button id="btnLogin">Log In</button>
<p>&copy; GamesHub</p>
<p>&copy; Christopher Sanderson</p>
</div>
</div>
</body>
</html>