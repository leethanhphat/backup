<!DOCTYPE html>
<html>
    <body>
    <h1>NBA info</h1>
    <?php
    echo "<b>Name:</b> ".$nba->getname()."<br/>";
    echo "<b>Team: </b>".$nba->getteam()."<br/>";
    echo "<b>Pic: </b> <br/><img src='".$nba->getpic()."'/><br/>"
    ?>
    </body>
</html>