<?php
class Student {
private $id;
private $name;
private $gpa;
public function getid()
{ 
    return $this->id;
} 
public function setid($id) 
{ 
    $this->id = $id;
}
public function getname()
{
    return $this->name;
}
public function setname($name) 
{
$this->name = $name;
}
public function getgpa()
{
     return $this->gpa;
}
public function setgpa($gpa) {
    $this->gpa = $gpa;
} 

public function _construct()
{
$this->id = "SV00";
$this->name="None"; 
$this->gpa = 0;
}
public function __toString()
{
return "Student(id= $this->id, name=$this->name, GPA=$this->gpa)";
}
}
?>