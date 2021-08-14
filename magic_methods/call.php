<?php

class User{

    public function __construct()
    {
        echo "constructor is called <br>";
    }

    public function hello(){

        echo "hello world <br>";
    }

    public function __call($name, $arguments)
    {
        echo "Function ({$name}) you called doesn't exists in the (".__CLASS__.") class ! <br>";
        echo "the argumetns are: ";
        print_r($arguments);
        echo "<br>";
    }




}

$ob = new User;
$ob->hello();
$ob->unavailableMethod("one", "two", "three");
$ob->update();

//if any method is called under any objects which is not declared in the class, then the call method works. 