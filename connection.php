<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "medidocx";

    $conn = mysqli_connect($server, $user, $pass, $database);

    if ($conn){
        echo "Connection Successfully established";
    }else{
        echo "Connection Failure";
    }
?>