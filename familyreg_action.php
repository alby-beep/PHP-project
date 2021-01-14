<?php
session_start();
$username=$_SESSION['username'];
$id=$_SESSION['memberid'];

include 'connection.php';


 
//      $memberid = $_POST['member'];
    $housename = $_POST['housename'];
    $housegroup = $_POST['housegroup'];
    $address = $_POST['address'];
    $familytype = $_POST['familytype'];
    	
    $s="select * from family where memberid='$id'";
$s1=  mysqli_query($con,$s);
$s2=  mysqli_num_rows($s1);
if($s2==0)
{
    $sqll="INSERT INTO family(memberid,housename,housegroup,address,familytype,status) VALUES ('$id','$housename','$housegroup','$address','$familytype','0')";
                
                $result = mysqli_query($con,$sqll);
         
		if($result==TRUE)
		{
        echo "<script>
       
        window.location='familyreg.php';
        
        alert('registration success');
        
</script>";
		}
		else
		{
			echo "<script>
        
        alert('nottt registered ');
		 window.location='familyreg.php';
        
</script>";
		}

}
else
{
    
			echo "<script>
        
        alert('already  registered ');
		 window.location='familyreg.php';
        
</script>";
}
?>

