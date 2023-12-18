<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
$coun_id=$_GET['deleteid'];
$sql = "delete from coun_tbl where coun_id=$coun_id";
$result = mysqli_query($con,$sql);
if($result){
  // echo "Deleted Successfull" ;
  header('location:count.php');
}else{
    die(mysqli_error($con));
}
}
 ?>