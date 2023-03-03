<?php

$servername = "sql300.epizy.com";
$username = "epiz_33716553";
$password = "Du7oVxIS4GJGO";
$dbname = "epiz_33716553_carManufacturingCompany";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>


