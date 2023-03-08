<?php

function OpenCon(){
    $dbHost = "localhost";
    $dbUsername = "michaelw_michaelwood";
    $dbPassword = "MeggyCat!123";
    $dbName = "michaelw_NM-enquiry";

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName) or die("Connection Failed");

return $db;
echo "connection successful";
}

// try {
//     $servername = "localhost:3306";
//     $username = "michaelw_michaelwood";
//     $password = "MeggyCat!123";

//     $connection = new PDO("mysql:host=$servername; dbname=michaelw_NM-enquiry", $username, $password);
//     $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch(Exception $e) {
//     echo "error!: " . $e -> getMessage();
//     die();
// }

?>