<?php 

//check if register form was submited
//by checking if the submit button element name was sent as part of the request
include("connect.php");
// fetch data
if (isset($_POST['register'])) 
{
	//collection form data
	$cNo =  $_GET['chassisNo'];
	$pID = $_GET['packingID'];
	$plot = $_GET["packinglot"];


	$sql = "INSERT INTO carPacking (chassisNo, packingID, parkinglot)
	VALUES ('$cNo', '$pID', '$plot')";

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

