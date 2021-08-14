<?php

//set values in private properties from outside of the class

use User as GlobalUser;

class User{

    private $name;
    private $age;

    public function __set($Propertyname, $Propertyvalue)
    {
        if($Propertyname == "name"){

            $this->name = $Propertyvalue;
        }
        elseif($Propertyname == "age"){
            $this->age = $Propertyvalue;
        }
        else{
            echo "this property ({$Propertyname}) is not exists in this (" . __CLASS__ . ") class ! <br>";
        }
            
        
    }

    public function showValue(){

        echo "name is: ".$this->name . "<br>";
        echo "age is ".$this->age . "<br>";
    }
}

$ob = new User;
$ob->name = "rayhan";
$ob->age = 24;
$ob->id = 22;
$ob->showValue();

?>