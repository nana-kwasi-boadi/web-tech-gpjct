<?php
// database connection
// check if the connction works
include("connect.php");
// fetch data
if (isset($_GET['uid'])) {
  $table =  $_GET['table'];
	$attr = $_GET['attr'];
  $id=$_GET['uid'];
  $page = $_GET["page"];
//write query 

$sql="DELETE from `$table` where `$attr` = '$id'";
$res= $conn->query($sql);
if ($res) {
  header("location: $page");
  exit();

}
else {
 echo "something went wrong";
}

  
  
  
}






?>