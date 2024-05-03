<?php

    $HOSTNAME = "localhost";
    // $HOSTNAME = "mysql:host=localhost; dbname=examen";
    $USERNAME = "root";
    $PASSWORD = "layediop2005@10";
    $DATABASE = "examen";

    $connect = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

    if (!$connect) {
        die("Connection failed: ". mysqli_connect_error());
    } else {
        // echo "Connected successfully";
    }

?>