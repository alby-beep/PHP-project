<?php
include 'connection.php';
$id=$_GET['id'];
$s="update member set status='approve' where id='$id'";
$s1=  mysqli_query($con, $s);
if($s1==TRUE)
{
      echo "<script> alert ('approved');window.location='viewmembers.php'</script>";
}
else
{
      echo "<script> alert ('not approved');window.location='viewmembers.php'</script>";
}
?>