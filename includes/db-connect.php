<?php

function OpenCon(){
    $dbHost = "127.0.0.1";
    $dbUsername = "michaelw_michaelwood";
    $dbPassword = "MeggyCat!123";
    $dbName = "michaelw_NM-enquiry";

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName) or die("Connection Failed");

return $db;
}


?>