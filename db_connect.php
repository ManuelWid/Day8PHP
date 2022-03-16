<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "restaurant";

    $connect = mysqli_connect($hostname, $username, $password, $dbname);
    if(!$connect){
        echo "Something went wrong".mysqli_connect_error();
    }