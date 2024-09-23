<?php
class SmartPhone implements IPhone, ISmarter{ 
public function call()
{
    echo "Calling...<br/>";
}
public function sendsms()
{
echo "Sending SMS...<br/>";
}
public function connectwifi()
{
    echo "Connecting wifi...<br/>";
}
public function managesensors()
{
    echo "Looking for sensors...<br/>";
}
}
?>