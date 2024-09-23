<?php
class NBA{

    private $id;
    private $name;
    private $team;
     private $pic;
    public function getid(){return $this->id;}
    public function getname(){return $this->name;}
    public function getteam(){return $this->team;} 
    public function getpic(){return $this->pic;}
    public function __construct($id, $name, $team, $pic)
    {
    $this->id = $id;
    $this->name = $name; 
    $this->team = $team;
    $this->pic = $pic;
    }
    public function __toString()
    {
    return "nba($this->id, $this->name, $this->team, $this->pic)";
    }
}
?>