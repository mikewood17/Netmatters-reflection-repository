<?php

//connect to local databse

// $servername = "localhost";
// $username = "root";
// $password = "";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=nm-enquiry", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     //echo "Connected successfully";
//   } catch(PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
//   }

// connect to database
try {
    $servername = "localhost:3306";
    $username = "michaelw_michaelwood";
    $password = "MeggyCat!123";

    $conn = new PDO("mysql:host=$servername; dbname=michaelw_NM-enquiry", $username, $password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "error!: " . $e -> getMessage();
    die();
}

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
    if(empty($name) || empty($email) || empty($telephone) || empty($subject) ||empty($message)){
        header("Location: contact.php?signup=empty#enquiryForm");
        exit();
     } // check if input characters are valid
    elseif(!preg_match("/^[a-zA-Z- ]*$/", $name)){
        header("Location: contact.php?signup=char#enquiryForm");
        exit();
    } //check if email is valid
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: contact.php?signup=email#enquiryForm");
        exit();
    } //check if telephone is valid
    elseif(!preg_match("/^[0-9]*$/", $telephone)) {
        header("Location: contact.php?signup=phone#enquiryForm");
        exit();
    } else {

        try {
            $sql = "INSERT INTO `enquiry` (Name, Company_Name, Email, Telephone, Subject, Message) VALUES ('". $name ."', '". $companyName ."', '". $email ."', '". $telephone ."', '". $subject ."', '". $message ."')";
            $conn->exec($sql);
        }catch(PDOException $e) {
            echo $e->getMessage();
        }

        header("Location: contact.php?signup=success#enquiryForm");
        exit();
        $conn = null;
    }
}

?>