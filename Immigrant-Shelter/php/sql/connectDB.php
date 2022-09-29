<?php

$conn = mysqli_connect('localhost', 'root', '', 'immigrant_shelter_v2');

if ($conn == false)
{
    var_dump("database not connected");
    exit();
}


// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "immigrant_shelter";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $database);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// echo "Connected successfully";


?>