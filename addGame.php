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
        <legend>Add Game</legend>
       
        
        <label for='gameName'>Name of Game:</label>
        <input type='text' name='gameName' id='gameName' maxlength="50" required />
        
        <label for='gameDesc'>Game Description: </label>  
        <input type='text' name='gameDesc' id='gameDesc' maxlength="50" required/>
<br>
        <label for='genreName'>Genre:</label>
        <input type='text' name='genreName' id='genreName' maxlength="50" required />

        <label for='consoleName'>Console:</label>
        <input type='text' name='consoleName' id='consoleName' maxlength="50" required /><br>          
    <br>
        <button id="addGameBTN">Add Game</button>

    </fieldset>
</form>

</body>
</html>