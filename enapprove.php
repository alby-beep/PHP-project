
        <?php
        include 'connection.php';
        $id = $_GET['id'];
        // $lgid=$_GET['logid'];
        $query = "update engagement set status='approved' where memberid='$id'";
        $s=mysqli_query($con, $query) ;
      if($s==TRUE)
      {

        echo "<script> alert('approved');window.location='viewengagement.php'</script>";
      }
 else {
 echo "<script> alert('not approved');window.location='viewengagement.php'</script>";          
}
        ?>


