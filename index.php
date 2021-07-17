<h1>Hello world</h1>
<hr>
<?php

class Hello
{

    public function sayHello()
    {

        echo "hello world";
    }
}

$ob = new Hello;

$ob->sayHello();

?>

<h1>Object and classes</h1>
<hr>
<?php
class User
{

    public $id;
    public $name;
    public $email;
    public $phone;


    public function setData($i, $n, $e, $p)
    {

        $this->id = $i;
        $this->name = $n;
        $this->email = $e;
        $this->phone = $p;
    }

    public function getData()
    {

        return "User id is: " . $this->id . "<br>" . "name is: " . $this->name . "<br>" . "email is: " . $this->email . "<br>" . "phone is: " . $this->phone;
    }
}

$object = new User;
$object->setData(9999, "rayhan kabir", "devrayhankabir@gmail.com", 2322);
echo $object->getData();

$obejectTwo = new User;
$obejectTwo->setData(2222, "ashikur rahman", "ashikurrahman@gmail.com", 4444);
echo $obejectTwo->getData();


?>

<h1>Constructor and desctructor</h1>
<hr>

<?php

class Person
{

    function __construct()
    {
        echo "The class '" . __CLASS__ . "' has been initiated<br>";
    }

    function __destruct()
    {
        echo "The class '" . __CLASS__ . "' has been initiated<br>";  //eta sobar ses load hobe krn desctruct method sobar sese run kore
    }
}

$object = new Person;


?>

<h1>Constructor and desctructor assigning value</h1>
<hr>
<?php
//assigning value to the contstruct method

class Man
{

    private $first_name;
    private $last_name;

    function __construct($fname, $lname)
    {
        $this->first_name = $fname;
        $this->last_name = $lname;
    }

    public function showName()
    {

        echo "My name is: " . $this->first_name . " " . $this->last_name . "<br>";
    }
}
$object = new Man("Rayhan", "Kabir");

$object->showName();


?>

<h1>Static properties and methods</h1>
<hr>

<?php

class Test
{

    public static $name;

    public static function showName()
    {

        return self::$name;
    }
}

Test::$name = "Rayhan Kabir";
echo Test::showName();
?>

<h1>Static properties and methods another class</h1>
<hr>

<?php

class Info
{


    public static $id = 1;
    public static $name = "John";

    public static function showData()
    {

        echo "Id is: " . self::$id++ . "<br>";
        echo "Name is: " . self::$name . "<br>";
    }
}

Info::showData();
Info::showData();
Info::showData();
?>

<h1>Static properties and methods another use(trimming)</h1>
<hr>

<?php

class Word
{

    public $first_name;
    public $last_name;


    public function __construct($fname, $lname)

    {
        $this->first_name = self::filterName($fname);
        $this->last_name = self::filterName($lname);
    }

    public static function filterName($name)
    {

        $name = trim($name);
        $name = preg_replace('/[^a-zA-Z0-9]/', '', $name);
        return $name;
    }
}

$object = new Word("Rayhan     ", "@@@@@Kabir");
echo $object->first_name . " " . $object->last_name;

?>

<h1>Encapsulation(getter and setter method)</h1><hr>

<?php

class personInfo{


    private $id;
    private $name;
    private $email;


    public function setId($id){

        $this->id = $id;
    }
    public function getId(){

        return $this->id;
    }

    public function setName($name){

        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
    
    public function setEmail($email){
        $this->email = $email;

    }

    public function getEmail(){
        return $this->email;
    }


}

$object = new personInfo;
$object->setId(5);
echo $object->getId() . "<br>";
$object->setName("Rayhan Kabir");
echo $object->getName() . "<br>";
$object->setEmail("devrayhankabir@gmail.com");
echo $object->getEmail() . "<br>";

?>