<?php
include 'connect.php';
$bill_id=$_GET['updateid'];
$sql = "select * from bill_tbl where id=$bill_id";
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$date_b=$row['date_b'];
$qunt=$row['qunt'];
$id=$row['id'];


if(isset($_POST['submit'])){
    $date_b=$_POST['date_b'];
    $qunt=$_POST['qunt'];
    $id=$_POST['id'];


    //update data
$sql="update bill_tbl set 
bill_id=$bill_id,date_b='$date_b',qunt='$qunt',id='$id'
where bill_id=$bill_id ";

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
  <h3 class="my-3 container" style="font-family:monospace;">Update Bill Informations</h3>

  <div class="container my-5" >
    <form method="POST">
    <div class="mb-3">
    <label  class="form-label">Date</label>
    <input type="text" class="form-control" placeholder="Enter The Date" name="date_b" autocomplete="off"
    value=<?php echo $date_b ;?>
    />
   </div>
   <div class="mb-3">
    <label  class="form-label">Qunti</label>
    <input type="text" class="form-control" placeholder="Enter " name="qunt" autocomplete="off"
    value=<?php echo $qunt ;?>
    />
   </div>
   <div class="mb-3">
    <label  class="form-label">id</label>
    <input type="number" class="form-control" placeholder="Enter id" name="id" autocomplete="off"
    value=<?php echo $id ;?>
    />
   </div>
   
   </div>
   <button  class="btn btn-primary " name="submit">Update</button>
   <button class="btn btn-danger">
        <a href="bill.php " class="text-light">Back</a>
   </button>

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