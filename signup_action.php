<?php

$fname = $_POST["fname"];
$lname = $_POST["lname"];

$username = $_POST["email"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];
include 'connection.php';
   
       $qry="select * from signup where username='$username'"; 
       $res=mysqli_query($con,$qry);
    if(mysqli_num_rows($res)>=1)
    {
        
        echo"<script>
         window.location='index.html';
         alert('This username already exist');
             </script>;";
    }
    else
    {
        if($username=='admin' && $password=='admin')
        {
            $query1="INSERT INTO signup (fname,lname,username,password,cpassword,type)
VALUES ('$fname','$lname','$username','$password','$cpassword','1')";
 $exe1=  mysqli_query($con, $query1);
        
         if($exe1==TRUE)
            {
                 echo"<script>
                 window.location='adminhome.php';
                 alert('Success');
                 </script>;";
            }
         else {
    
                       echo"<script>
                 window.location='index.html';
                 alert('not');
                 </script>;";
              }
        }
 else {
      $query="INSERT INTO signup (fname,lname,username,password,cpassword,type)
VALUES ('$fname','$lname','$username','$password','$cpassword','0')";
 $exe=  mysqli_query($con, $query);
 }
    }
    /*echo "Done!!!!";*/
 if($exe==TRUE)
 {
     echo"<script>
         window.location='userhome.php';
         alert('Success');
             </script>;";
 }
 else {
    /*echo"<script>
         window.location=signup.php;
         alert('Not Success');
             </script>;";*/
     echo("NOT");
 }
 

?>


