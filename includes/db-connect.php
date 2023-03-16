<?php

//connect to local databse

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=nm-enquiry", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

// connect to database
// try {
//     $servername = "localhost:3306";
//     $username = "michaelw_michaelwood";
//     $password = "MeggyCat!123";

//     $conn = new PDO("mysql:host=$servername; dbname=michaelw_NM-enquiry", $username, $password);
//     $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// } catch(PDOException $e) {
//     echo "error!: " . $e -> getMessage();
//     die();
// }

// Variables

$error = null;
$success = null;

// check if button pressed
if(ISSET($_POST["submit"])) {

    // variables
    $name = $_POST['name']; 
    $companyName = $_POST['company'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // check if inputs are empty
    if(empty(trim($name)) || empty(trim($email)) || empty(trim($telephone)) || empty(trim($subject)) ||empty(trim($message))){
        $error = "Please fill in all required fields";
     } // check if input characters are valid
    elseif(!preg_match("/^[a-zA-Z- ]*$/", $name)){
        $error = "Please enter a valid name";
    } //check if email is valid
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = "Please enter a valid email";
    } //check if telephone is valid
    elseif(!preg_match("/^[0-9]*$/", $telephone)) {
        $error = "Please enter a valid telephone";
    } else {

        try {
            $sql = "INSERT INTO `enquiry` (Name, Company_Name, Email, Telephone, Subject, Message) VALUES ('". $name ."', '". $companyName ."', '". $email ."', '". $telephone ."', '". $subject ."', '". $message ."')";
            $conn->exec($sql);
        }catch(PDOException $e) {
            echo $e->getMessage();
        }

        $success = "Your message has been sent!";
        $conn = null;
    }
}

?>