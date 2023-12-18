<?php
include 'connect.php';
$bill_id=$_GET['C_bill'];
$sqlid = "select id from bill_tbl where bill_id=$bill_id";
$re = mysqli_query($con,$sqlid);
$rowid=mysqli_fetch_assoc($re);
$bill_id=$rowid['bill_id'];


if(isset($_POST['submit'])){
    $date_b=$_POST['date_b'];
    $qunt=$_POST['qunt'];
    $id=$_POST['id'];

   //insert data 
    $sql="INSERT INTO bill_tbl (`date_b`, `qunt`) 
    VALUES('$date_b','$qunt')";
    $result=mysqli_query($con,$sql);

if($result){
   //echo "Data Inserted Successfully !! " ;
   header('location:bill.php');
    } else{
     
    die(mysqli_error($con));
         }
}


?>


<!doctype html>
<html lang="en">

  <head>
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

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <style>

    select{
        display:flex;
        flex-direction: column;
        position:relative;
     width:500px;
        height:40px;
    }
   </style>

<title>Sara Project</title>
  </head>
  <body>
  <h3 class="my-3 container" style="font-family:monospace;">Create New Bill </h3>
    
    </select>
    <div class="container my-5" >
    <form method="POST">
    <div class="mb-3">
    <label  class="form-label">Date Bill</label>
    <input type="date" class="form-control"  name="date_b" autocomplete="off"/>
   </div>
   <div class="mb-3">
    <label  class="form-label">Price Quntity</label>
    <input type="number" class="form-control" " name="qunt" autocomplete="off"/>
   </div>
   <div class="mb-3">
    <label  class="form-label">id</label>
    <input type="number" class="form-control"  name="id" autocomplete="off"
    value=<?php echo $bill_id ;?>
    />
   </div>

   <button  class="btn btn-primary" name="submit">Submit</button>
   <button class="btn btn-danger">
        <a href="bill.php " class="text-light">Back</a>
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
    
  </body>
    </html>