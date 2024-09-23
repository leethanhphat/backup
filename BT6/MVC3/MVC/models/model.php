<?php
require_once("models/book.php"); 
require_once("modules/db_module.php");

class Model{
public function getbooklist(){
$link = null;
taoKetNoi ($link);
$result = chayTruyVanTraVeDL($link, "select * from tbl_book");
$data = array();
while($rows = mysqli_fetch_assoc($result)){
$book = new Book(
$rows["id"],
$rows["title"],
$rows["author"], 
$rows["description"]);
array_push($data, $book);
}
giaiPhongBoNho ($link, $result);
return $data;
}
public function getbook($id){
    $allbooks = $this->getbooklist();
    foreach($allbooks as $book) 
        if($book->getid()===$id)
            return $book;
    return null;
}
}
?>