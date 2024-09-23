<?php
class Book{

    private $id;
    private $title;
    private $author; private $description;
    public function getid(){return $this->id;}
    public function gettitle(){return $this->title;}
    public function getauthor(){return $this->author;} 
    public function getdescription(){return $this->description;}
    public function __construct($id, $title, $author, $description)
    {
    $this->id = $id;
    $this->title = $title; 
    $this->author = $author;
    $this->description = $description;
    }
    public function __toString()
    {
    return "Book($this->id, $this->title, $this->author, $this->description)";
    }
}
?>