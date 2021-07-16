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

    public function getData(){

        return "User id is: ".$this->id."<br>"."name is: ".$this->name."<br>"."email is: ".$this->email."<br>"."phone is: ".$this->phone;
    }
}

$object = new User;
$object->setData(9999, "rayhan kabir", "devrayhankabir@gmail.com", 2322);
echo $object->getData();

$obejectTwo = new User;
$obejectTwo->setData(2222, "ashikur rahman", "ashikurrahman@gmail.com", 4444);
echo $obejectTwo->getData();


?>