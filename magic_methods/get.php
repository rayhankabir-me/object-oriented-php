<?php
//magic method get is used to acess private and protected properties from outside of the class

class User{

    private $name;
    private $age;

    public function __construct($n, $e)
    {
        $this->name = $n;
        $this->age = $e;
    }

    public function __get($name)
    {
        if($name == "name"){
            return $this->name."<br>";
        }
        elseif($name == "age"){

            return $this->age . "<br>";
        }
        else{
            return "{$name} property is not exits in this (".__CLASS__.") class! <br>";
        }
    }
}

$ob = new User("rayhan", 24);
echo $ob->id;
echo $ob->name;
echo $ob->age;

?>