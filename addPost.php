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
 
    <form id="add">

    <fieldset>
        <legend>Add Post</legend>
       
        
        <label for='articleDesc'>Description of article</label>
        <input type='text' name='articleDesc' id='articleDesc' maxlength="50" required />
        
        <label for='articleLink'>Article Link: </label>  
        <input type='text' name='articleLink' id='articleLink' maxlength="50" required/>
          
    <br>
        <button id="addPostBTN">Add Game</button>

    </fieldset>
</form>
 
</body>
</html>