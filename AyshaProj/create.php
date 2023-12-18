<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
   //insert data 
    $sql="INSERT INTO sup_tbl (`first_name`, `last_name`, `email`, `mobile`,`address`) 
    VALUES('$first_name','$last_name','$email','$mobile','$address')";
$result=mysqli_query($con,$sql);

if($result){
  // echo "Data Inserted Successfully !! " ;
    header('location:index.php');
    } else{
     
    die(mysqli_error($con));
         }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Sara Project</title>
  </head>
   <!--nav-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">

    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="Index" href="index.php">Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="bill.php">Bills</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="count.php">Counters</a>
        </li>
      </ul>
      
    </div>
   
  </div>
</nav>


  <body>
    <h3 class="my-3 container" style="font-family:monospace;">Create New Customer </h3>
    <div class="container my-5" >
    <form method="POST">
    <div class="mb-3">
    <label  class="form-label">First Name</label>
    <input type="text" class="form-control" placeholder="Enter First Name" name="first_name" autocomplete="off"/>
   </div>
   <div class="mb-3">
    <label  class="form-label">Last Name</label>
    <input type="text" class="form-control" placeholder="Enter Last Name" name="last_name" autocomplete="off"/>
   </div>
   <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control" placeholder="Enter Email" name="email" autocomplete="off"/>
   </div>
   <div class="mb-3">
    <label  class="form-label">Mobile Number</label>
    <input type="text" class="form-control" placeholder="Enter Mobile Number" name="mobile" autocomplete="off"/>
   </div>
   <div class="mb-3">
    <label  class="form-label">Address</label>
    <input type="text" class="form-control" placeholder="Enter Address" name="address" autocomplete="off"/>
   </div>
  <button  class="btn btn-primary" name="submit">Submit</button>
  <button class="btn btn-danger">
        <a href="index.php " class="text-light">Back</a>
   </button>
    </form>
    </div>
  </body>
    </html>