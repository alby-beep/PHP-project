<?php
include 'connection.php';


 
    
    $name = $_POST['name'];
    $age = $_POST['age'];
    $qualification = $_POST['qualification'];
    $birthplace = $_POST['birthplace'];
    $contactnumber = $_POST['contactnumber'];
 
    $monthlysalary = $_POST['monthlysalary'];
    $fathersname = $_POST['fathersname'];
    $mothersname = $_POST['mothersname'];
    $fathersparish = $_POST['fathersparish'];
    $mothersparish = $_POST['mothersparish'];
    $username = $_POST["username"];
$password = $_POST["password"];
   
    	$s="select username from member where username='$username'";
        $s1=  mysqli_query($con, $s);
        $numrows=  mysqli_num_rows($s1);
        if($numrows==0)
        {
    $sqll="INSERT INTO member(name,age,qualification,birthplace,contactnumber,monthlysalary,fathersname,mothersname,fathersparish,mothersparish,username,password,status) VALUES ('$name','$age','$qualification','$birthplace','$contactnumber','$monthlysalary','$fathersname','$mothersname','$fathersparish','$mothersparish','$username','$password','0')";
                
                $result = mysqli_query($con,$sqll);
                $sql2="INSERT INTO signup(username,password,type) VALUES ('$username','$password','0')";
                
                $result1 = mysqli_query($con,$sql2);
//                echo $result;
		if($result == TRUE)
		{
        echo "<script>
       
        window.location='memberreg.php';
        
        alert('registration success');
        
</script>";
		}
		else
		{
			echo "<script>
        
        alert('nottt registered ');
		 window.location='memberreg.php';
        
</script>";
		}
        }
 else {
     echo "<script>
        
        alert('username already exist ');
		 window.location='memberreg.php';
        
</script>";
 }
        

?>

