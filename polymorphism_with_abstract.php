<h1>Polymorphism with abstract class</h1>
<br>

<?php

use Circle as GlobalCircle;

abstract class Shape{

    abstract public function calculateArea();
}

class Circle extends Shape{

    private $radius;

    public function __construct($r)
    {
        $this->radius = $r;
    }

    public function calculateArea()
    {
        echo "The Circle area is: ". pi()*$this->radius*$this->radius."<br>";
    }
}

$ob = new Circle(4);
$ob->calculateArea();
?>