<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Post</title>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<script src="redirect.js"></script>
</head>
<body>
<div data-role="page" id="home">
<div data-role="header" role="banner">
<p>Post</p>
</div>
<table>
<tr>	<th>title</th>	<th>console</th>	<th>genre</th>	</tr>
<tr>	<td><input type="text" id="title"></input></td>	<td><input type="text" id="console"></input></td>	<td><input type="text" id="genre"></input></td>	</tr>
</table>
<div data-role="main" id="content">
<!-- this should be loading the post data into the text area -->
<textarea rows="27" cols="135">

</textarea>
<br/>
<button id="btnAddPost">Add Post</button>
<br/>
</div>
<div data-role="footer">
<button id="btnFeeds">Feeds</button>
<button id="btnFeedback">FeedBack</button>
<button id="btnLogout">Log Out</button>
<br/>
<button id="btnPosts">Add Posts</button>
<button id="btnRemovePost">Remove Post</button>
<button id="btnRemoveConsole">Remove Console</button>
<br/>
<p>&copy; GamesHub</p>
<p>&copy; Christopher Sanderson</p>
</div>
</div>
</body>
</html>