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

class Rectangle extends Shape
{

    private $width;
    private $height;

    public function __construct($w, $h)
    {
        $this->width = $w;
        $this->height = $h;
    }

    public function calculateArea()
    {
        echo "The area of Rectangle is: " . ($this->width * $this->height) / 2 . "<br>";
    }
}

$ob = new Circle(4);
$ob->calculateArea();
$ob = new Rectangle(4, 5);
$ob->calculateArea();
?>