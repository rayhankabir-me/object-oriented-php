<h1>implode & explode</h1>
<hr>
<?php

$string = "Hello Bangladesh How are you";

$args = explode(" ", $string);

$args_length = count($args);

for($i = 0; $i<$args_length; $i++ ){

    echo "<li>".$args[$i]."</li>";
}

$arg = ["Hello", "Bangladesh", "How", "Are", "You"];

echo implode(" ", $arg);

?>

<h1>Php error handling exception</h1>
<hr>

<?php

function numCheck($n){
    if($n>1){
        throw new Exception("Value Is greater than 1");
    }

    return true;
}

try{

    numCheck(2);
    echo "Number is not greater than 1";
}
catch(Exception $e){

    echo "Message: ".$e->getMessage();
}

?>