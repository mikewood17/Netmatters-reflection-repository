<?php


try {
    $servername = "localhost:3306";
    $username = "michaelw_michaelwood";
    $password = "MeggyCat!123";

    $conn = new PDO("mysql:host=$servername; dbname=michaelw_news_section", $username, $password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "error!: " . $e -> getMessage();
    die();
}


?>