<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Home Page</title>
    <link href="stylesheet.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
</head>
<body>
<div data-role="page" id="home">
<div data-role="header" id="header" style=" color: white; background-color: blue;">
<p>Feeds</p>
<input type='text' id='search' placeholder='Search for a game/console/genre here' style="height: 40px;width: 250px;font-size: 10px;">
<button onclick="showTextField()" width="40px">Search</button>
<br/>
</div>

<div data-role="content" id="content">
<p>Search Results And Recent Posts</p>
<!--This loads up with the data found in the php server-->
<script type="text/javascript">
for(var i = 0; i < 3; i++)
{
//this loads up the posts from the database
document.write("<ul>");
document.write("<li>");
document.write(i);
document.write("</li>");
document.write("</ul>");
}
</script>
</div>
<div data-role="footer">
<script src="redirect.js"></script>
<button id="btnFeeds">Feeds</button>
<button id="btnFeedback">FeedBack</button>
<button id="btnLogout">Log Out</button>
<p>&copy; GamesHub</p>
<p>&copy; Christopher Sanderson</p>
</div>
</div>
</body>
</html>