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

    class Triangle implements Shape{

        private $base;
        private $height;

        public function __construct($b, $h)
        {
            
            $this->base = $b;
            $this->height = $h;
            
        }

    public function calculateArea()
    {
        echo "The area of Triangle is: " . ($this->base * $this->height)/2 . "<br>";
    }
    }

$ob = new Circle(2);
$ob->calculateArea();

$object = new Rectangle(5, 6);
$object->calculateArea();

$object2 = new Triangle(4, 5);
$object2->calculateArea();

?>