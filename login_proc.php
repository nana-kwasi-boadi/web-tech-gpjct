<?php



//check if register form was submited
//by checking if the submit button element name was sent as part of the request

if (isset($_POST['login'])) 
{

	//collection form data
	$user_name =  $_POST['uname'];
	$user_pass = $_POST['upass'];

	//database connection parameters
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "class_activity";


	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		//stop executing the code and echo error
	  die("Connection failed: " . $conn->connect_error);
	}

	$encrypted_pass = password_hash($user_pass, PASSWORD_DEFAULT);


	// A select query limiting/filtering by username
	$sql = "SELECT * FROM user_table WHERE user_name = '$user_name'";

	$result = $conn->query($sql);
	// check if query worked
	if ($result->num_rows > 0) {
	  
		//redirect to homepage
		
		$row = $result->fetch_assoc();
		$usrnm = $row["user_name"];	
		$pswd = $row["user_pass"];	
		$usr_role = $row["user_role"];	
		$usr_status = $row["user_status"];
		$usr_id= $row["user_id"];
	
		
		if(password_verify($user_pass, $pswd)){
			echo "Query Successful";
			// If status is 2 redirect to inactivity.php page
			if($usr_status == 2){
				header("Location: dashboard.php");
			}else{
				session_start();
				// store the followings in 3 different session variables: user_id, user_name and user_role
				$_SESSION["user_id"] = $usr_id;
				$_SESSION["user_name"] = $usrnm ;
				$_SESSION["user_role"] = $usr_role;

				// if role is 1 redirect to adminindex.php
				if ( $usr_role == 1){
					header("Location: adminindex.php");
				}
				elseif($usr_role == 2){
					header("Location: standardindex.php");;
				}

			} 
		}
		else{
			//redirect to register page
			echo "Query Unsuccessful";
			header("Location: login.php");
			
			exit();
		}
		exit();
	} else {
		//echo error but continue executing the code to close the session
	  echo "Error: " . $sql . "<br>" . $conn->error;
	  echo "Query Unsuccessful";

	}

	//close database connection
	$conn->close();
}
else
{
	//redirect to register page
	echo "Query UnSuccessful";
	header("Location: login.php");
	exit();
}



?>