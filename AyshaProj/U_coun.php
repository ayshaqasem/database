<?php
include 'connect.php';
$coun_id=$_GET['updateid'];
$sql = "select * from coun_tbl where coun_id=$coun_id";
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$type=$row['type'];
$company=$row['company'];
$id=$row['id'];
$date_c=$row['date_c'];

if(isset($_POST['submit'])){
    $type=$_POST['type'];
    $company=$_POST['company'];
    $id=$_POST['id'];
    $date_c=$_POST['date_c'];
    $address=$_POST['address'];

    //update data
$sql="update coun_tbl set 
coun_id=$coun_id,type='$type',company='$company',id='$id',date_c='$date_c'
where coun_id=$coun_id  ";

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
  <body>
  <h3 class="my-3 container" style="font-family:monospace;">Update Counter Informations</h3>
 
    <div class="container my-5" >
    <form method="POST">
    <div class="mb-3">
    <label  class="form-label">Type</label>
    <input type="text" class="form-control" placeholder="Enter the Type" name="type" autocomplete="off"
    value=<?php echo $type ;?>
    />
   </div>
   <div class="mb-3">
    <label  class="form-label">Company</label>
    <input type="text" class="form-control" placeholder="Enter The Company Name" name="company" autocomplete="off"
    value=<?php echo $company ;?>
    />
   </div>
   <div class="mb-3">
    <label  class="form-label">id Customer</label>
    <input type="number" class="form-control" placeholder="Enter id " name="id" autocomplete="off"
    value=<?php echo $id ;?>
    />
   </div>
   <div class="mb-3">
    <label  class="form-label">Date</label>
    <input type="date" class="form-control"  name="date_c" autocomplete="off"
    value=<?php echo $date_c ;?>
    />
    </div>
  <button  class="btn btn-primary" name="submit">Update</button>
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