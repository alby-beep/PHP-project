<?php
session_start();
$username=$_SESSION['username'];
$id=$_SESSION['memberid'];
include 'connection.php';
//$memberid = $_POST['member'];
 $marriagedate = $_POST['marriagedate'];
 $marriageplace = $_POST['marriageplace'];
    $spousename = $_POST['spousename'];
    if((int)strtotime("now") > (int)strtotime($marriagedate))
    {
    $s="select * from marriage where memberid='$id'";
$s1=  mysqli_query($con, $s);
$s2=  mysqli_num_rows($s1);
if($s2==0)
{
    $sqll="INSERT INTO marriage(memberid,marriagedate,marriageplace,spousename,status) VALUES ('$id','$marriagedate','$marriageplace','$spousename','0')";
                
                $result = mysqli_query($con,$sqll);
//                echo $result;
		if($result == 1)
		{
        echo "<script>
       
   window.location='marriagereg.php';
        
        alert('registration success');
        
</script>";
		}
		else
		{
			echo "<script>
        
        alert('nottt registered ');		 window.location='marriagereg.php';
        
</script>";
		}
                }
    
else
{
    
			echo "<script>
        
        alert('already  registered ');
		 window.location='marriagereg.php';
        
</script>";
}
    }
    else{
  echo "<script>
      
      alert('invalid date ');	window.location='marriagere.php';	 
</script>";
}

?>



