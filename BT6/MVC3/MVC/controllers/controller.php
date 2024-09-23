<?php
require_once("models/model.php");
class Controller{ 
    public $model;
    public function __construct()
    {
    $this->model = new Model();
    }
    public function invoke()
    {
        if(!isset($_GET["bookid"])){
            $books = $this->model->getbooklist();
            include "views/booklist.php";
        }
        else
        {
            $book = $this->model->getBook($_GET["bookid"]); 
            include "views/viewbook.php";
        }
    }
}
?>