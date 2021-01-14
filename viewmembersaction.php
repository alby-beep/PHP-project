<?php
session_start();
include '../connection.php';
if (isset($_POST['submit'])) {
    $action = $_POST['action'];
	//echo $action;
	$id=$_POST['id'];
	if($action="approved")
	{
		
            $sql="UPDATE member SET status='1' WHERE id = '$id'";
	
            
        }
	elseif ($action="delete") {
        
    
		$sql="DELETE FROM member WHERE id='$id'";
	}
        else
        {
            echo 'invalid';
        }
	if(mysqli_query($con,$sql))
		{
        echo "<script>
       
        window.location='adminhome.php';
        
        alert('Action Done ');
        
</script>";
		}
		else
		{
			echo "<script>
        
        alert('Not Done ');
        
</script>";
		}
	}
	?>

