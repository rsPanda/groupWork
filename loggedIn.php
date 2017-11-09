<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Home Page</title>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
</head>
<body>
<div data-role="page" id="home">
<div data-role="header" role="banner">
<p>Feeds</p>
<input type='text' id='search' placeholder="Search for a game/console/genre here">
<button onclick="showTextField()" width="40px">Search</button>
<br/>
</div>

<div data-role="main" id="content">
<p>Search Results And Recent Posts</p>
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