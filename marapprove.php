
        <?php
        include 'connection.php';
        $id = $_GET['id'];
        // $lgid=$_GET['logid'];
        $query = "update marriage set status='approved' where memberid='$id'";
        $s=mysqli_query($con, $query) ;
      if($s==TRUE)
      {

        echo "<script> alert('approved');window.location='viewmarriage.php'</script>";
      }
 else {
 echo "<script> alert('not approved');window.location='viewmarriage.php'</script>";          
}
        ?>


