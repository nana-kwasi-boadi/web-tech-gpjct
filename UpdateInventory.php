<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "stylesheet" href = "./UpdateInventory.css" />
	<title>Inventory</title>
</head>
<body>
	<!-- register form -->
	<form class = "add-packing-form" action="updateInventory_proc.php" method="GET">
		<h1>Add Packing</h1>
	  <label>materialType</label><br>
	  <input class = "input-fields" type = "text" id = "uname" name = "materialType" value = <?php echo $_GET['materialType'];?>><br>
	  <label>partName</label><br>
	  <input class = "input-fields" type = "text" id = "pID" name = "partName" value = <?php echo $_GET['partName'];?>><br>
      <label>cost</label><br>
	  <input class = "input-fields" type = "text" id = "pID" name = "cost" value = <?php echo $_GET['cost'];?>><br>
      <label>quantity</label><br>
	  <input class = "input-fields" type = "text" id = "plot" name = "quantity" value = <?php echo $_GET['quantity'];?>><br><br>
	  <input class = "input-fields" type = "hidden" id = "plot" name = "uid" value = <?php echo $_GET['uid'];?>><br><br>
	  <input class = "submit-form" type = "submit" id = "btn" name = "register" value="Add">
	  <div>
            <a class = "return-to-packing" href = "./packing.php">Return to packing page</a> 
            </div>
    </form>
</body>
</html>
