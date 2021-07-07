<?php

$servername = "localhost";
$username = "root";
$password = "";
$databaseName ="elearn";

// Create connection
$conn = new mysqli($servername, $username, $password,$databaseName);

// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";


// FILTER_SANITIZE_STRING for data validation
function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
    }
?>
