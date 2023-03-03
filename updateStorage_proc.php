<?php
// database connection
// check if the connction works
include("connect.php");
// fetch data
companyStorage (storageID, warehouseID, storageArea, shelf, rack, storageBin)
if (isset($_GET['materialType'])) {
    echo $_GET['uid'];
    $storageID = $_GET['storageID'];
    $warehouseID =  $_GET['warehouseID'];
    $storageArea = $_GET['storageArea'];
    $shelf = $_GET["shelf"];
    $rack = $_GET['rack'];
    $storageBin = $_GET["storageBin"];
//write query 
echo "here here";
$sql="UPDATE parts SET  warehouseID = '$warehouseID', shelf = '$shelf', storageArea = '$storageArea', rack = '$rack' , storageBin = '$storageBin' WHERE storageID = '$storageID'";

$res= $conn->query($sql);
if ($res) {
  header("location: storage.php");
  exit();
}
else{
 echo "something went wrong";
}


}
