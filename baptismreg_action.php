<?php

session_start();
$username=$_SESSION['username'];
$id=$_SESSION['memberid'];
 $date1 = date('d/m/Y').'';
echo '<br/>';
include 'connection.php';




//$memberid = $_POST['member'];
$baptismalname = $_POST['baptismalname'];
$baptismaldate = $_POST['baptismaldate'];
//echo '<br/>';
//$d1 = explode("-", $baptismaldate);
//
//echo $d2 = '' . $d1[2] . '/' . $d1[1] . '/' . $d1[0];

$baptismalplace = $_POST['baptismalplace'];
$godfathersname = $_POST['godfathersname'];
$godfathersparish = $_POST['godfathersparish'];
$godfathershousename = $_POST['godfathershousename'];

//
//$date_today = new DateTime($date);
//$date_selected = new DateTime($d2);
// 

if((int)strtotime("now") > (int)strtotime($baptismaldate))
{
    
$s="select * from baptism where memberid='$id'";
$s1=  mysqli_query($con, $s);
$s2=  mysqli_num_rows($s1);
if($s2==0)
{
    $sqll="INSERT INTO baptism(memberid,baptismalname,baptismaldate,baptismalplace,godfathersname,godfathersparish,godfathershousename,status) VALUES ('$id','$baptismalname','$baptismaldate','$baptismalplace','$godfathersname','$godfathersparish','$godfathershousename','0')";
                
                $result = mysqli_query($con,$sqll);
//                echo $result;
		if($result==TRUE)
		{
        echo "<script>    
        alert('registration success');
     window.location='baptismreg.php';
</script>";
                }
		
		else
		{
			echo "<script>
        
        alert('nottt registered ');
	 window.location='baptismreg.php';
        
</script>";
		}
}
else
{
    
			echo "<script>
        
        alert('already  registered ');
		 window.location='baptismreg.php';
        
</script>";
}
}
else{
  echo "<script>
      
      alert('invalid date ');	window.location='baptismreg.php';	 
</script>";
}

?>


