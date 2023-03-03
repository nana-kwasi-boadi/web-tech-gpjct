<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "stylesheet" href = "./UpdateInventory.css" />
	<title>Edit Car info</title>
</head>
<body>
	<!-- register form -->
	<form class = "add-packing-form" action="updateProduct_proc.php" method="GET">
		<h1>Edit Car info</h1>
	  <label>chassisNo</label><br>
	  <input class = "input-fields" type = "text" id = "uname" name = "chassisNo" value = <?php echo $_GET['chassisNo'];?>><br>
	  <label>modelCode</label><br>
	  <input class = "input-fields" type = "text" id = "pID" name = "modelCode" value = <?php echo $_GET['modelCode'];?>><br>
      <label>colour</label><br>
	  <input class = "input-fields" type = "text" id = "pID" name = "colour" value = <?php echo $_GET['colour'];?>><br>
      <label>ManufacturingDate</label><br>
	  <input class = "input-fields" type = "text" id = "plot" name = "ManufacturingDate" value = <?php echo $_GET['ManufacturingDate'];?>><br><br>
	  <input class = "submit-form" type = "submit" id = "btn" name = "register" value="Add">
	  <div>
            </div>
    </form>
</body>
</html>
