
        <?php
        include 'connection.php';
        $id = $_GET['id'];
     
        $query = "update family set status='approve' where memberid='$id'";
       $s=mysqli_query($con, $query) ;
      
if($s1=TRUE)
{
        echo "<script> alert('approved');window.location='viewfamily.php'</script>";
}
 else {
     echo "<script> alert(' not approved');window.location='viewfamily.php'</script>";
}
        ?>