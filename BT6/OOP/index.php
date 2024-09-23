<?php
include_once("student.php");

$firstobj = new Student();
$firstobj->setid("SV01");
$firstobj->setname("Nguyen A");
$firstobj->setgpa(6.5); 
echo $firstobj ;
?>

<hr>
<?php
include_once("INHERITANCE/human.php"); 
include_once("INHERITANCE/teacher.php");
$myteacher = new Teacher("Nguyen Van A", 6500000);
echo $myteacher;
?>

<hr>
<?php
include_once("ABSTRACTION/ahuman.php"); 
include_once("ABSTRACTION/employee.php");
$emp = new Employee("NV001", "Le Van A"); 
echo $emp->showinfo();
?>

<hr>
<?php
include_once("INTERFACE/iphone.php");
include_once("INTERFACE/ismarter.php");
include_once("INTERFACE/smartphone.php");
$smp = new SmartPhone();
$smp->call();
$smp->sendsms(); 
$smp->connectwifi();
$smp->managesensors();
?>

<hr>
