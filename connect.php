<?php

//database connection parameters
$servername = "sql300.epizy.com";
$username = "epiz_33716553";
$password = "Du7oVxIS4GJGO";
$dbname = "epiz_33716553_carManufacturingCompany";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  //stop executing the code and echo error
  die("Connection failed: " . $conn->connect_error);
} 

?>