<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Post</title>
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<!-- <?php -->


<!-- ?> -->
<script src="redirect.js"></script>
    <link href="stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body>
<div data-role="page" id="home">
<div data-role="header" id="header" style=" color: white; background-color: blue;">
<p>Post</p>
</div>
<table>
<tr>	<th>title</th>	<th>console</th>	<th>genre</th>	</tr>
<tr>	<td>title</td>	<td>console</td>	<td>genre</td>	</tr>
</table>
<div data-role="content" id="content">
<!-- this should be loading the post data into the text area -->
<textarea rows="27" cols="135">

</textarea>
<br/>
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