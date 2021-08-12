<?php

interface Login{

    const EMAIL = 'tempmail@gmail.com';
    const PASSWORD = 12345;

    public function getEmail();
    public function getPassword();
}

interface Register extends Login{

    const PHONE = 3435345454;
    public function getPhone();
}

class User implements Register{

    public function getEmail()
    {
        echo Register::EMAIL;
    }

    public function getPassword()
    {
        echo Register::PASSWORD;
    }

    public function getPhone()
    {
        echo Register::PHONE;
    }
}

$ob = new User;
$ob->getEmail();
echo "<br>";
$ob->getPassword();
echo "<br>";
$ob->getPhone();

?>