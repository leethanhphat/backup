<?php
class Human{
protected $name; public function getname()
{ 
    return $this->name;
}
public function setname($name) 
{ 
    $this->name = $name;
}
public function __construct($name)
{
$this->name = $name;
}
public function __toString()
{
return "Human(name=$this->name)";
}
}
?>