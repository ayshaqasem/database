<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $type=$_POST['type'];
    $company=$_POST['company'];
    $id=$_POST['id'];
    $date_c=$_POST['date_c'];
   //insert data 
    $sql="INSERT INTO coun_tbl (`type`, `company`, `id`, `date_c`) 
    VALUES('$type','$company','$id','$date_c')";
$result=mysqli_query($con,$sql);

if($result){
  // echo "Data Inserted Successfully !! " ;
    header('location:count.php');
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
  <style>

select{
    display:flex;
    flex-direction: column;
    position:relative;
 width:500px;
    height:40px;
}
</style>
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
  <h3 class="my-3 container" style="font-family:monospace;">Create New Counter </h3>
    <div class="container my-5" >
    <form method="POST">
    <div class="mb-3">
    <label  class="form-label">Type</label>
    <input type="text" class="form-control" placeholder="Enter The Type" name="type" autocomplete="off"/>
   </div>
   <div class="mb-3">
    <label  class="form-label">Company Name</label>
    <input type="text" class="form-control" placeholder="Enter Company Name" name="company" autocomplete="off"/>
   </div>
   <div class="mb-3">
    <label  class="form-label">Id Customer</label>
    <input type="number" class="form-control" placeholder="Enter Email" name="id" autocomplete="off"/>
   </div>
   <div class="mb-3">
    <label  class="form-label">Date</label>
    <input type="date" class="form-control" placeholder="Enter The Date" name="date_c" autocomplete="off"/>
   </div>

  <button  class="btn btn-primary" name="submit">Submit</button>
  <button class="btn btn-danger">
        <a href="count.php " class="text-light">Back</a>
   </button>
   <br>
   <br>
   <div>
  <select>
    <div >
        <option>Customer name and id</option>
      <button  >
        <?php
     $s="select * from sup_tbl ";
     $r=mysqli_query($con,$s);
     while($ro=mysqli_fetch_assoc($r)){
    
          echo'<option>'.$ro['first_name'].'</option>' ; 
           echo '<option>' .$ro['id'].'</option>';       
}
?></button>
</div>
  </div>
  
    </form>
    </div>
  </body>
    </html>