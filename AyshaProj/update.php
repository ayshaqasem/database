<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql = "select * from sup_tbl where id=$id";
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$first_name=$row['first_name'];
$last_name=$row['last_name'];
$email=$row['email'];
$mobile=$row['mobile'];
$address=$row['address'];

if(isset($_POST['submit'])){
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];

    //update data
$sql="update sup_tbl set 
id=$id,first_name='$first_name',last_name='$last_name',email='$email',mobile='$address',mobile='$address'
where id=$id  ";

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
  <body>
  <h3 class="my-3 container" style="font-family:monospace;">Update Customer Informations</h3>
    <div class="container my-5" >
    <form method="POST">
    <div class="mb-3">
    <label  class="form-label">First Name</label>
    <input type="text" class="form-control" placeholder="Enter First Name" name="first_name" autocomplete="off"
    value=<?php echo $first_name ;?>
    />
   </div>
   <div class="mb-3">
    <label  class="form-label">Last Name</label>
    <input type="text" class="form-control" placeholder="Enter Last Name" name="last_name" autocomplete="off"
    value=<?php echo $last_name ;?>
    />
   </div>
   <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control" placeholder="Enter Email" name="email" autocomplete="off"
    value=<?php echo $email ;?>
    />
   </div>
   <div class="mb-3">
    <label  class="form-label">Mobile Number</label>
    <input type="text" class="form-control" placeholder="Enter Mobile Number" name="mobile" autocomplete="off"
    value=<?php echo $mobile ;?>
    />
   </div>
   <div class="mb-3">
    <label  class="form-label">Address</label>
    <input type="text" class="form-control" placeholder="Enter Address" name="address" autocomplete="off"
    value=<?php echo $address ;?>
    />
   </div>
  <button  class="btn btn-primary" name="submit">Update</button>
  <button class="btn btn-danger">
        <a href="index.php " class="text-light">Back</a>
   </button>
    </form>
    </div>
  </body>
    </html>