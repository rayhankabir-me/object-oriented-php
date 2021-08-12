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

<h1>Interface</h1>
<br>

<?php 
interface Test{
    const A = 100;

    public function showValue(); //by default it is abstract method, because interface doesn't allow normal method...
}

interface Test2{
    const B = 200;
    public function showValue();
}

class Main implements Test,Test2{

    public function showValue(){
        echo Test::A.'<br>';
        echo Test2::B;
    }
}

$ob = new Main();
$ob->showValue();


?>

<h2>Interface inheritance</h2>
<br>

<?php

interface Test3{

    const A = 300;
    public function showNumber();
}
interface Test4 extends Test3{

    const B = 200;
}

class Info{
    private $name;

    public function showInfo($n){
        
        echo "Name is: ".$this->name = $n;
    }
}

class User2 extends Info implements Test4{

    public function showNumber()
    {
        echo Test3::A.'<br>';
        echo Test4::B;
    }
}

$ob = new User2;
$ob->showNumber();
$ob->showInfo();

?>