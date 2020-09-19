<?php
    $serverName = "localhost";
    $username = "username";
    $password = "password";

    $connection = new mysqli($serverName, $username, $password);


    if ($connection -> connect_error){
        die("Connection failed: " . $connection -> connect_error);
    }

    $sql = "CREATE DATABASE potato";

    if ($connection -> query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database" . $connection -> error;
    }

    $connection -> close();

?>