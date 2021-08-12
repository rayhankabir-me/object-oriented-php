<h1>Abstract class</h1>
<hr>

<?php



abstract class Person{

    public $name;
    public $age;

    public function __construct($n, $a)
    {
        $this->name = $n;
        $this->age = $a;
    }

    public function showData(){

        echo "I am from abstract class";
    }

    abstract public function myData();

    
}

class User extends Person{

    public function myData(){

        echo "my name is ".$this->name." and my age is ".$this->age;
    }
}


$obj = new User("rayhan", 24);
$obj->myData();



?>