<?php

// ===========================
// ===== news functions ======
// ===========================

// news 1

$sql1 = "SELECT * FROM news WHERE id = 1;";
$result1 = mysqli_query($conn, $sql1);
$resultCheck1 = mysqli_num_rows($result1);
$row1 = mysqli_fetch_assoc($result1);

// news 2 

$sql2 = "SELECT * FROM news WHERE id = 2;";
$result2 = mysqli_query($conn, $sql2);
$resultCheck2 = mysqli_num_rows($result2);
$row2 = mysqli_fetch_assoc($result2);

// news 3

$sql3 = "SELECT * FROM news WHERE id = 3;";
$result3 = mysqli_query($conn, $sql3);
$resultCheck3 = mysqli_num_rows($result3);
$row3 = mysqli_fetch_assoc($result3);
?>