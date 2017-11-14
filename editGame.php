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
 
   <div class="form">  
    <form id="edit" action="" method="Get">

    <fieldset >
        <legend>Edit</legend>      
        <input type="hidden" id="RecordsID" value="<?php echo $row['id']; ?>" />
        
        <label for="gameName">Game name: </label> <br>
        <input type="text" name="gameName" value="<?php echo $row['gameName'] ?>" /> 
        

        <label for='gameDesc'>Game Description: </label> <br>   
        <input type="text" name="gameDesc" value="<?php echo $row['gameDesc'] ?>"/>
<br>
        <label for='genreName'>Genre:</label><br>
        <input type="text" name="genreName" value="<?php echo $row['genreName'] ?>"/>
        

        <label for='consoleName'>Console: </label><br>
        <input type="text" name="consoleName" value="<?php echo $row['consoleName'] ?>"/><br>

             
        
       <br>
       <input type="submit" name="update" value="update">

    </fieldset>
</form>
</div>
        

</body>
</html>