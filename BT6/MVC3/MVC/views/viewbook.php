<!DOCTYPE html>
<html>
    <body>
    <h1>Book info</h1>
    <?php
    echo "<b>Title:</b> ".$book->gettitle()."<br/>";
    echo "<b>Author: </b>".$book->getauthor()."<br/>";
    echo "<b>Description: </b> 
    <br/><img src='".$book->getdescription()."'/><br/>"
    ?>
    </body>
</html>