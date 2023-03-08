<?php

// function OpenCon(){
//     $dbHost = "localhost";
//     $dbUsername = "michaelw_michaelwood";
//     $dbPassword = "MeggyCat!123";
//     $dbName = "michaelw_NM-enquiry";

// $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName) or die("Connection Failed");

// return $db;
// echo "connection successful";
// }

try {
    $servername = "localhost:3306";
    $username = "michaelw_michaelwood";
    $password = "MeggyCat!123";

    $conn = new PDO("mysql:host=$servername; dbname=michaelw_NM-enquiry", $username, $password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
    echo "error!: " . $e -> getMessage();
    die();
}

if(!empty($_POST["submit"])) {

    $name = $_POST['name']; 
    $companyName = $_POST['company'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $insertQuery = "insert into michaelw_NM-enquiry (Name, Company Name, Email, Telephone, Subject, Message) values('". $name ."', '". $companyName ."', '". $email ."', '". $telephone ."', '". $subject ."', '". $message ."')";

}

?>