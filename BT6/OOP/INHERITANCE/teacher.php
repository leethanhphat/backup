<?php
class Teacher extends Human{ 
    private $salary; 
    public function getsalary()
    { 
        return $this->salary;
    }
    public function setsalary($salary)
    { 
        $this->salary=$salary;
    }
    public function __construct($name, $salary)
    {
    $this->name = $name;
    $this->salary = $salary;
    }
    public function __toString()
    {
    return "Teacher(name=$this->name, salary=".number_format($this->salary, 0). ")";
    }
}
?>