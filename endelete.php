<?php
include 'connection.php';
$id=$_GET['id'];



$s6="delete from engagement where memberid='$id'";
$s7=  mysqli_query($con,$s6);
        if($s7==TRUE)
            {
                    echo "<script>
       
        window.location='viewengagement.php';
        
        alert('Member deleted');
        
</script>";
        }
?>


