<?php
// database connection
// check if the connction works
include("connect.php");
 // fetch data
if (isset($_GET['email'])) {
    $empID = $_GET['empID'];
    $email =  $_GET['email'];
    $address =  $_GET['address'];
    $tel = $_GET['tel'];

//write query 
echo "here here";
$sql="UPDATE employee SET address = '$address', email = '$email', tel = '$tel' WHERE empID = '$empID'";

$res= $conn->query($sql);
if ($res) {
  header("location: employees.php");
  exit();
}
else {
 echo "something went wrong";
}


}
