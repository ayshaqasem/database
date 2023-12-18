<?php
include 'connect.php';
if(isset($_GET['deleteidb'])){
$bill_id=$_GET['deleteidb'];
$sql = "delete from bill_tbl where bill_id=$bill_id";
$result = mysqli_query($con,$sql);
if($result){
 //  echo "Deleted Successfull" ;
  header('location:bill.php');
}else{
    die(mysqli_error($con));
}
}
 ?>