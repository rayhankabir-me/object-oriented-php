<?php

namespace Dev{

    class User
    {

        public function Data()
        {

            echo "class and method name with path is: " . __METHOD__ . "<br>";
        }

        public function hello()
        {

            echo "the namespace name is: " . __NAMESPACE__ . "<br>";
        }
    }

    $ob = new User();
    $ob->Data();
    $ob->hello();
};

namespace mynamespace\Person{

    class User{   //same class declaration has been possible for different namespace
        
        public function Data(){
            echo "class and method name with path is: " . __METHOD__ . "<br>";
        }

        public function hello(){
            echo "the namespace name is: " . __NAMESPACE__ . "<br>";
        }
    }

    $ob = new User();
    $ob->Data();
    $ob->hello();
}


?>