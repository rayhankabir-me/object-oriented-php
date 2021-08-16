<?php

$database = new mysqli("localhost", "root", "" ,"db_user");

if(mysqli_connect_errno()){

    echo "connection failed...";
}else{

    echo "connection successful...";
}

?>