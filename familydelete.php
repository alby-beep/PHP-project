<?php
include 'connection.php';
$id=$_GET['id'];
$s="delete from family where memberid='$id'";
$s1=  mysqli_query($con, $s);

        if($s1==TRUE)
            {
                    echo "<script>
       
        window.location='viewfamily.php';
        
        alert('Member deleted');
        
</script>";
        }
?>
