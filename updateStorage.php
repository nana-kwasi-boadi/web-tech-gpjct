<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "stylesheet" href = "./UpdateInventory.css" />
	<title>Edit Car info</title>
</head>
<body>
	<form class = "add-packing-form" action="updateStorage_proc.php" method="GET">
		<h1>Edit Car info</h1>
	  <input class = "input-fields" type = "hidden" id = "uname" name = "storageID" value = <?php echo $_GET['storageID'];?>><br>
	  <label>warehouseID</label><br>
	  <input class = "input-fields" type = "text" id = "pID" name = "warehouseID" value = <?php echo $_GET['warehouseID'];?>><br>
      <label>storageBin</label><br>
	  <input class = "input-fields" type = "text" id = "tt" name = "storageBin" value = <?php echo $_GET['storageBin'];?>><br>
      <label>shelf</label><br>
	  <input class = "input-fields" type = "text" id = "hnf" name = "shelf" value = <?php echo $_GET['shelf'];?>><br><br>
      <label>rack</label><br>
	  <input class = "input-fields" type = "text" id = "fdg" name = "rack" value = <?php echo $_GET['rack'];?>><br><br>
      <label>storageArea</label><br>
	  <input class = "input-fields" type = "text" id = "plot" name = "storageArea" value = <?php echo $_GET['storageArea'];?>><br><br>
	  <input class = "submit-form" type = "submit" id = "btn" name = "register" value="Add">
	  <div>
            </div>
    </form>
</body>
</html>
