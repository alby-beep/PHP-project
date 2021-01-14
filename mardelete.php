<?php
include 'connection.php';
$id=$_GET['id'];



$s6="delete from marriage where memberid='$id'";
$s7=  mysqli_query($con,$s6);
        if($s7==TRUE)
            {
                    echo "<script>
       
        window.location='viewmarriage.php';
        
        alert('Member deleted');
        
</script>";
        }
?>


