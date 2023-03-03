<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "stylesheet" href = "./UpdateInventory.css" />
	<title>Employee</title>
</head>
<body>
    employee (empID, address, tel, email) 
	<form class = "add-packing-form" action="updateEmployee_proc.php" method="GET">
	<h1>Update Employee</h1>
	  <input class = "input-fields" type = "hidden" id = "uname" name = "empID" value = <?php echo $_GET['empID'];?>><br>
	  <label>address</label><br>
	  <input class = "input-fields" type = "text" id = "pID" name = "address" value = <?php echo $_GET['address'];?>><br>
      <label>tel</label><br>
	  <input class = "input-fields" type = "text" id = "pID" name = "tel" value = <?php echo $_GET['tel'];?>><br>
      <label>email</label><br>
	  <input class = "input-fields" type = "text" id = "plot" name = "email" value = <?php echo $_GET['email'];?>><br><br>
	  <input class = "submit-form" type = "submit" id = "btn" name = "register" value="Add">
	  <div>
            </div>
    </form>
</body>
</html>
