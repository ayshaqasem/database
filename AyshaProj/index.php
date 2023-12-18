<?php
include 'connect.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Sara Project</title>

    <style>
  #tit {font-family: "Trirong", serif; 
    text-shadow: 3px 3px 3px #ababab;
    text-align:center;
  }
    </style>
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
<h4 class="my-4" id="tit">electricity company / Customer Bage  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-lightbulb" viewBox="0 0 16 16">
  <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1z"/>
</svg></i>
 </h4>
 
  <i class="bi bi-lightbulb">
    <div class="container">
 
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Address</th>
      <th scope="col">----</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $sql="Select * from sup_tbl ";
  $result = mysqli_query($con,$sql);


  if($result){
    While($row=mysqli_fetch_assoc($result)){
   $id=$row['id'];
   $first_name=$row['first_name'];
   $last_name=$row['last_name'];
   $email=$row['email'];
   $mobile=$row['mobile'];
   $address=$row['address'];
   

   echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$first_name.'</td>
        <td>'.$last_name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$address.'</td>
        <td>

        <td>
        <button class="btn btn-primary">
        <a href="update.php? updateid='.$id.'" class="text-light">Update</a>
        </button>
        <button class="btn btn-danger">
        <a href="delete.php? deleteid='.$id.' " class="text-light">Delete</a>
        </button>
        <button class="btn btn-danger">
        <a href="C_bill.php? c_id='.$id.' " class="text-light">Add Bill</a>
        </button>
   </td>
         </tr>';
    }
  
}
  ?>
</tbody>

</table>
   <button class="btn btn-outline-primary my-3">
        <a href="create.php" class="text-dark">Add New </a> 
    </button>
  </div>
</body>