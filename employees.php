<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dzagli & Co</title>
    <link rel="stylesheet" href="employees.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@1,9..144,500&family=Montserrat:wght@200&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
  </head>

  <style>
 .new_button{
        background-color:#0298cf;
        color: white;
        border-radius: 4px;
        border-color: none;
      
        outline-style: hidden;
        
        position:relative;
        left: 90%;
        margin-top:-3%;                          
    }   
</style>

<body>
    <nav class="navbar " id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" style="font-family: 'Fraunces', serif;margin-left: 120px;">Dzagli & Co</a>
            <form class="d-flex" role="search" style="margin: 0 auto;" >
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="border-color: #35A5E4;">
            <button class="btn btn-outline-success" type="submit" style="background-color: #35A5E4;color: white;">Go</button>
            <a  href = "./myAccount.php" class="navbar-brand" id = "navbar-account" style="padding-left: 250px;">View account</a>
            <span class="icon" style="padding-top:8px;color:#35A5E4"><i class="fa fa-user" aria-hidden="true"></i></span>
                <a href = "./index.php" class="navbar-brand" style="padding-left: 70px;">Logout</a>
                <span class="icon" style="padding-top:8px;left: 5px;color:#35A5E4;"><i class="fa fa-external-link" aria-hidden="true"></i></span>
            </form>
        </div>
    </nav>

    <div style="float:right; width:80%; margin-right: 3%; margin-top: 6%;">
    <?php
  //  Database connection 
  include "configuration.php"; 
  
  $employee_page = mysqli_query($conn,"SELECT * FROM employee LIMIT 10");

?>
  <a href="registerEmployee.php" style="text-decoration: none;"><button class="new_button btn btn-outline" type="button">New Employee</button></a>

  <table class="table table-hover">
    <thead class="thead-light" style="text-align:center;">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Employee ID</th>
        <th scope="col">Address</th>
        <th scope="col">Telephone</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
    </tr>
 </thead>

<?php
$count = 1;
  while ($row = mysqli_fetch_array($employee_page)) {
?>

    <tr>
        <td style="text-align:center;" scope="row"><?php echo $count;?> </td>
        <td style="text-align:center;" scope="row"><?php echo $row['empID']?> </td>
        <td style="text-align:center;" scope="row"><?php echo $row['address']?> </td>
        <td style="text-align:center;" scope="row"><?php echo $row['tel']?> </td>
        <td style="text-align:center;" scope="row"><?php echo $row['email']?> </td>
        <td style="text-align:center;" scope="row">
            
            
        <?php
            echo ('<button class="btn btn-sm btn-primary text-light edit" data-toggle="modal" class="update_btn" data-target="#update_employee" 
            onclick= \'location.href="updateEmployee.php?uid=' . $row["empID"] . '&address='.
            $row['address'].'&tel='.$row['tel'].'&email='.$row['email'].
            '&empID='.$row['empID'].' &table=employee&attr=empID&page=employees.php"\'>
            <i class="fa-solid fa-pen-to-square"></i></button>');
            ?>

            <?php
            echo('<button class="btn btn-sm btn-danger text-light delete" data-toggle="modal" data-target="#del_employee"><i class="fa-solid fa-trash" onclick= \'location.href="delete_proc.php?uid=' . $row["empID"] . 
            '&table=employee&attr=empID&page=employees.php"\'></i></button>');
            ?>
        </td>
    </tr>
  
  <?php $count += 1; } ?>
 
  
  </table>
    </div>


    <div class="left-side">
        <p class="lSide"  id="dashboard" onclick="Dashboard()">Dashboard</p> <br>
        <p class="lSide" id="inventory" onclick="Inventory()" >Inventory</p> <br>
        <p class="lSide" id="products" onclick="Products()" >Products</p> <br>
        <p class="lSide" id="storage" onclick="Storage()">Storage</p> <br>
        <p class="lSide" id="parking" onclick="Parking()">Parking</p> <br>
        <p class="lSide" id="employees" onclick="Employees()" style="background-color: #35A5E4;color: white;padding: 3px;  border-radius: 5px;">Employees</p> <br>
    </div>

   

    <div id="footer">
        <footer> Built by Dzagli & Co</footer> 
    </div>


    <script src="index.js"></script>
    </body>
</html>