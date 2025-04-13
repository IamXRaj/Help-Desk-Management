<?php

include "../conn/conn.php";

if(isset($_GET['tbl_user_id'])){

    $delete = mysqli_query($conn, "DELETE FROM tbl_user where tbl_user_id = '".$_GET['tbl_user_id']."'") or die(mysqli_error($con));

    if($delete)
        {
            echo "<script>";
            echo "window.alert(' Record Delete.....!');";
            echo "window.location.href='customer_ist.php';";
            echo "</script>";
        }
        else
        {
            echo "<script>";
            echo "window.alert('Record Not Deleted.....!');";
            echo "</script>";
        }
    
}


?>