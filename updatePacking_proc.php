<?php
// database connection
// check if the connction works
include("connect.php");
// fetch data
if (isset($_GET['packingID'])) {
    $packingID = $_GET['packingID'];
    $warehouseID =  $_GET['warehouseID'];
    $packingArea = $_GET['packingArea'];
    $packingZone= $_GET['packingZone'];
//write query 
echo "here here";
$sql="UPDATE packing SET  warehouseID = '$warehouseID', packingArea = '$packingArea', packingZone = '$packingZone' WHERE packingID= '$packingID'";

$res= $conn->query($sql);
if ($res) {
  header("location: parking.php");
  exit();
}
else {
 echo "something went wrong";
}


}
