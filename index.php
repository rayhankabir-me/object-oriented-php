<h1>Hello world</h1><hr>
<?php 

class Hello{

    public function sayHello(){

        echo "hello world";
    }
}

$ob = new Hello;

$ob->sayHello();

?>

<h1>Object and classes</h1> <hr>
<?php 
class User{

    public $id;
    public $name;
    public $email;
    public $phone;
    

    public function setData($i, $n, $e, $p){

        $this->id = $i;
        $this->name = $n;
        $this->email = $e;
        $this->phone = $p;

    }

    public getData(){

        return "User id is: ".$this->id;
        return "User name is: ".$this->name;
        return "User email is: ".$this->email;
        return "User phone is: ".$this->phone;
    }
}

$object = new User;
$object->setData(9999, "rayhan kabir", "devrayhankabir@gmail.com", 01643163478);
echo $object->getData();


?>