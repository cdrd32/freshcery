<?php

    // if(!isset($_SERVER['HTTP_REFERER'])){
    //     header('location: http://localhost/frechcery/index.php');
    //     exit;
    // }

    try {
        //host
        define("HOST", "localhost");

        //user
        define("USER", "root");

        //password
        define("PASS", "");

        //database
        define("DBNAME", "frechcery");

        //pdo("HOST, USER, PASS, DBNAME)
        $conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME. ";", USER, PASS);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // if($conn == true){
        //     echo "Connected";
        // }else{
        //     echo "Not Connected";
        // }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    
    