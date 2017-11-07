<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>FeedBack</title>
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<?PHP
// require_once("./include/fgcontactform.php");
// $formproc = new FGContactForm();
// //1. Add your email address here.
// 8
// //You can add more than one recipients.
// 9;
// $formproc->AddRecipient('b00330306@studentmail.uws.ac.uk'); //<<---Put your //email address here

// //2. For better security. Get a random string from
// // this link: http://tinyurl.com/randstr
// // and put it here
// $formproc->SetFormRandomKey('gkEFthfv6gvGAuL');

?>

<script src="redirect.js"></script>
    <link href="stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body>
<div data-role="page" id="home">
<div data-role="header" id="header" style=" color: white; background-color: blue;">
<p>FeedBack</p>
</div>

<div data-role="content" id="content">
<textarea rows="27" cols="135">

</textarea>
<br/>
<button width="600px" id="btnSendFeedback">Send Feedback</button>
<br/>
</div>
<div data-role="footer">
<button id="btnFeeds" onclick="home()">Feeds</button>
<button id="btnFeedback" onclick="redirectFeedback()">FeedBack</button>
<button id="btnLogin" onclick="redirectLogin()">Log In</button>
<p>&copy; GamesHub</p>
<p>&copy; Christopher Sanderson</p>
</div>
</div>
</body>
</html>