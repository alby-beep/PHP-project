
        <?php
        include 'connection.php';
        $id = $_GET['id'];
        // $lgid=$_GET['logid'];
        $query = "update baptism set status='approved' where memberid='$id'";
        $s=mysqli_query($con, $query) ;
        if ($s==TRUE)
        {

        echo "<script> alert('approved');window.location='viewbaptism.php'</script>";
        }
 else {
      echo "<script> alert('not approved');window.location='viewbaptism.php'</script>";
 }
        ?>

