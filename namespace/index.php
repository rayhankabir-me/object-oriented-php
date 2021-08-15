<?php

use function rayhan\Age;

include "java.php";
include "php.php";
include "Ruby.php";

$ob = new rayhan\Java();
$ob = new rayhan\dev\ PHP();
$ob = new rayhan\ Ruby();

echo HTML;  //define works without calling the namespace path

echo rayhan\ NAME;  //constant doesn't work without calling the namespace path

rayhan\Age();  //function doesn't work without calling the namespace path

?>