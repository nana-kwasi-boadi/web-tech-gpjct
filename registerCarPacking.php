<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Packing</title>
</head>
<body>



	<h2>Add Packing</h2>
	<!-- register form -->
	<form action="register_proc.php" method="GET">
	  <label>chassisNo:</label><br>
	  <input type="text" id="uname" name="chassisNo"><br>
	  <label>packingID:</label><br>
	  <input type="text" id="pID" name="packingID"><br>
      <label>parkinglot:</label><br>
	  <input type="text" id="plot" name="parkinglot"><br><br>
	  <input type = "submit" id="btn" name="register" value="Submit">

	<!-- link to register -->
	<a href="register_proc.php">Go to Login Page</a>
	</form>


</body>
</html>