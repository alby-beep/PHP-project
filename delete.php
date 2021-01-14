<?php
include 'connection.php';
$id=$_GET['id'];
$s="delete from member where id='$id'";
$s1=  mysqli_query($con, $s);
$s2="delete from baptism where memberid='$id'";
$s3=  mysqli_query($con, $s2);
$s4="delete from marriage where memberid='$id'";
$s5=  mysqli_query($con,$s4);
$s6="delete from engagement where memberid='$id'";
$s7=  mysqli_query($con,$s6);
        if($s1==TRUE)
            {
                    echo "<script>
       
        window.location='viewmembers.php';
        
        alert('Member deleted');
        
</script>";
        }
?>
