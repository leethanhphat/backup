<!DOCTYPE html>
<html>

    <body>
    <h1>NBA List</h1>
        <table border="1">
        <tr>
            <th>Name:</th>
            <th>Team:</th>
            <th>Pic:</th>
        </tr>
    <?php
        foreach($nbas as $nba)
        echo "
        <tr>
            <td><a href='index.php?nbaid=".$nba->getid()."'>".$nba->getname()."</a></td>
            <td>".$nba->getteam()."</td>
            <td>
            <img style='height: 150px;' src='".$nba->getpic()."'/>
            </td>
            
        </tr>
        ";
    ?>
    
        </table>
    </body>
</html>