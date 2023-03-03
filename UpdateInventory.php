<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "stylesheet" href = "./updateInventory.css" />
	<title>Edit Inventory</title>
</head>
<body>
	<!-- register form -->
	<form class = "add-packing-form" action="updateInventory_proc.php" method="GET">
		<h1>Edit Inventory</h1>
	  <label>Type of material</label><br>
	  <input class = "input-fields" type = "text" id = "uname" name = "materialType" value = <?php echo $_GET['materialType'];?>><br>
	  <label>Name of part</label><br>
	  <input class = "input-fields" type = "text" id = "pID" name = "partName" value = <?php echo $_GET['partName'];?>><br>
      <label>Cost</label><br>
	  <input class = "input-fields" type = "text" id = "pID" name = "cost" value = <?php echo $_GET['cost'];?>><br>
      <label>Quantity</label><br>
	  <input class = "input-fields" type = "text" id = "plot" name = "quantity" value = <?php echo $_GET['quantity'];?>><br><br>
	  <input class = "input-fields" type = "hidden" id = "plot" name = "uid" value = <?php echo $_GET['uid'];?>><br><br>
	  <input class = "submit-form" type = "submit" id = "btn" name = "register" value="Edit Inventory">
    </form>
</body>
</html>
