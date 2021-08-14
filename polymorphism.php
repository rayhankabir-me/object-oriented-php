<h1>Polymorphism</h1>
<br>
<?php

interface Shape{

    public function calculateArea();
}

class Circle implements Shape{

    private $radius;

    public function __construct($r) 
    {
        $this->radius = $r;
    }

    public function calculateArea()
    {
        echo "The area of circle is: ".pi().$this->radius*$this->radius."<br>";
    }
}

class Rectangle implements Shape{

    private $width;
    private $height;

    public function __construct($w, $h)
    {
        $this->width = $w;
        $this->height = $h;
    }

    public function calculateArea()
    {
        echo "The area of rectangle is: ".$this->width*$this->height."<br>";
    }
}

$ob = new Circle(2);
$ob->calculateArea();

$object = new Rectangle(5, 6);
$object->calculateArea();

?>