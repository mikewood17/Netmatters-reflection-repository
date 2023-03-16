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

$success = false;

// check if button pressed
if(ISSET($_POST["submit"])) {

    // variables
    $name = $_POST['name']; 
    $companyName = $_POST['company'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // error count
    $errorCount = 0;

    // alert array
    $alerts = [];

    // check if all inputs are empty
    if(empty(trim($name)) || empty(trim($email)) || empty(trim($telephone)) || empty(trim($subject)) ||empty(trim($message))){
        array_push($alerts, 'Please fill in all required fields');
        $errorCount++;
    } 

    // check if input characters are valid
    if(!preg_match("/^[a-zA-Z- ]*$/", $name) || empty(trim($name))) {
        array_push($alerts, 'Please enter a valid name');
        $errorCount++;
    }

    //check if email is valid
    if(!filter_var($email, FILTER_VALIDATE_EMAIL) || empty(trim($email))){
        array_push($alerts, 'Please enter a valid email');
        $errorCount++;
    }

    //check if telephone is valid
    if(!preg_match("/^[0-9]*$/", $telephone) || empty(trim($telephone))){
        array_push($alerts, 'Please enter a valid telephone');
        $errorCount++;
    }

    if ($errorCount === 0){

        try {
            $sql = "INSERT INTO `enquiry` (Name, Company_Name, Email, Telephone, Subject, Message) VALUES ('". $name ."', '". $companyName ."', '". $email ."', '". $telephone ."', '". $subject ."', '". $message ."')";
            $conn->exec($sql);
        }catch(PDOException $e) {
            echo $e->getMessage();
        }
        $conn = null;
        $success = true;
    } 
    
}

?>