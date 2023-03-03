<?php
// database connection
// check if the connction works
include("connect.php");
// fetch data
if (isset($_GET['materialType'])) {
    echo $_GET['uid'];
    $id = $_GET['uid'];
    $materialType =  $_GET['materialType'];
    $partName = $_GET['partName'];
    $cost= $_GET['cost'];
    $quantity = $_GET["quantity"];
//write query 
echo "here here";
$sql="UPDATE parts SET materialType= '$materialType', partName = '$partName', cost = '$cost', quantity = '$quantity' WHERE lotID= '$id'";

$res= $conn->query($sql);
if ($res) {
  header("location: inventory.php");
  exit();
}
else {
 echo "something went wrong";
}


}
