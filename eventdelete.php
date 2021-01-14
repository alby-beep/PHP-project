<?php
include 'connection.php';
$id=$_GET['id'];
$s="delete from events where id='$id'";
$s1=  mysqli_query($con, $s);
if($s1==TRUE)
{
     echo "<script> alert('deleted');window.location='adminhome.php'</script>";
}
else
{
     echo "<script> alert('failed');window.location='adminhome.php'</script>";
}
?>

