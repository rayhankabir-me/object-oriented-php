<?php 



spl_autoload_register(function($class_name){

    include "classes/".$class_name.".php";
});


$ob = new Java();
echo "<br>";
$ob = new PHP();
echo "<br>";
$ob = new JS();

?>