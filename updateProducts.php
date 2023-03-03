<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "stylesheet" href = "./updateInventory.css" />
	<title>Edit Car info</title>
</head>
<body>
	<!-- register form -->
	<form class = "add-packing-form" action="updateProduct_proc.php" method="GET">
		<h1>Edit Car info</h1>
	  <label>Chassis number</label><br>
	  <input class = "input-fields" type = "text" id = "uname" name = "chassisNo" value = <?php echo $_GET['chassisNo'];?>><br>
	  <label>Code of model</label><br>
	  <input class = "input-fields" type = "text" id = "pID" name = "modelCode" value = <?php echo $_GET['modelCode'];?>><br>
      <label>Colour of car</label><br>
	  <input class = "input-fields" type = "text" id = "pID" name = "colour" value = <?php echo $_GET['colour'];?>><br>
      <label>Car manufacturing date</label><br>
	  <input class = "input-fields" type = "text" id = "plot" name = "ManufacturingDate" value = <?php echo $_GET['ManufacturingDate'];?>><br><br>
	  <input class = "submit-form" type = "submit" id = "btn" name = "register" value="Edit products">
    </form>
</body>
</html>
