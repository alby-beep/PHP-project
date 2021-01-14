<?php
session_start();
include 'connection.php';
$username = $_POST['username'];
$password = $_POST['password'];

$_SESSION['username']=$username;

$sql="select * from signup where username='$username' and password='$password'";
$result=mysqli_query($con, $sql);
if($data=mysqli_fetch_assoc($result))
{
    $type=$data['type'];
       $memid=$data['id'];

$_SESSION['memberid']=$memid;

    if($type==1)
    { echo "<script> alert ('login succesfully');window.location='adminhome.php'</script>";
       
    }
    elseif ($type==0) 
    {
        echo "<script> alert ('login succesfully');window.location='userhome.php'</script>";
    }
   
}
 else {
     echo "<script> alert ('invalid username and password');window.location='login.html'</script>";
}
?>        

