<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "prosa_test";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e) {
        print $e->getMessage();
    }

?>