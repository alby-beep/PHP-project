<?php

include 'connection.php';
$name=$_POST['eventname'];
$desc=$_POST['desc'];
$date=$_POST['date'];
$time=$_POST['time'];
$s="insert into events(name,descr,mdate,mtime) values('$name','$desc','$date','$time')";
$s1=  mysqli_query($con, $s);
if($s1==TRUE)
{
      echo "<script> alert ('events added');window.location='adminhome.php'</script>";
}
else
{
      echo "<script> alert ('failed');window.location='adminhome.php'</script>";
}
?>