<!DOCTYPE html>
<html>

    <body>
    <h1>Book List</h1>
        <table border="1">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Description</th>
        </tr>
    <?php
        foreach($books as $book)
        echo "
        <tr>
            <td><a href='index.php?bookid=".$book->getid()."'>".$book->gettitle()."</a></td>
            <td>".$book->getauthor()."</td>
            <td>
            <img style='height: 150px;' src='".$book->getdescription()."'/>
            </td>
            
        </tr>
        ";
    ?>
        </table>
    </body>
</html>