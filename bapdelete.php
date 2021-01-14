<?php
include 'connection.php';
$id=$_GET['id'];

$s2="delete from baptism where memberid='$id'";
$s3=  mysqli_query($con, $s2);

        if($s2==TRUE)
            {
                    echo "<script>
       
        window.location='viewbaptism.php';
        
        alert('Member deleted');
        
</script>";
        }
?>
