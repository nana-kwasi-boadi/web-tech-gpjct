<?php
// database connection
// check if the connction works
include("connect.php");
// fetch data
if (isset($_GET['materialType'])) {
    echo $_GET['uid'];
    $chassisNo = $_GET['chassisNo'];
    $modelCode =  $_GET['modelCode'];
    $colour = $_GET['colour'];
    $ManufacturingDate= $_GET['ManufacturingDate'];
//write query 
echo "here here";
$sql="UPDATE parts SET modelCode = '$modelCode', colour = '$colour', ManufacturingDate = '$ManufacturingDate' WHERE chassisNo = '$chassisNo'";

$res= $conn->query($sql);
if ($res) {
  header("location: employees.php");
  exit();
}
else {
 echo "something went wrong";
}


}
