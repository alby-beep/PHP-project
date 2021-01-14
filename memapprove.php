
        <?php
        include './connection.php';
        $id = $_GET['id'];
        // $lgid=$_GET['logid'];
        $query = "update member set status='approved' where id='$id'";
        mysqli_query($con, $query) ;
      

        echo "<script>window.location='viewmembers.php'</script>";
        ?>
