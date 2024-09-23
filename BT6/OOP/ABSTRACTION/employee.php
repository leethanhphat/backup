<?php
class Employee extends AHuman{ 
    public function __construct($id, $name)
    {
    $this->id = $id;
    $this->name = $name;
    }
    public function showinfo()
    {
    return "Employee info: ID=$this->id, Name=$this->name";
    }
}
?>