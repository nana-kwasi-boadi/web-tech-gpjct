(packingID, warehouseID, packingArea, packingZone)
<?php 

//check if register form was submited
//by checking if the submit button element name was sent as part of the request
include("connect.php");
// fetch data
if (isset($_GET['register'])) 
{
	//collection form data
	$pID =  $_GET['packingID'];
	$wID = $_GET['warehouseID'];
	$pArea = $_GET["packingArea"];
    $pZone = $_GET["packingZone"];


	$sql = "INSERT INTO packing (packingID, warehouseID, packingArea, packingZone)
	VALUES ('$pID', '$wID', '$pArea', '$pZone')";

	// check if query worked
	if ($conn->query($sql) === TRUE) {
	  
		//redirect to homepage
		header("Location: index.php");
		exit();

	} else {
		//echo error but continue executing the code to close the session
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	//close database connection
	$conn->close();
}
else
{
	//redirect to register page
	header("Location: register.php");
	exit();
}



?>

