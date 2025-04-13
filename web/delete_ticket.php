<?php

include "../conn/conn.php";

if(isset($_GET['id'])){

    $delete = mysqli_query($conn, "DELETE FROM inqury where id = '".$_GET['id']."'") or die(mysqli_error($con));

    if($delete)
        {
            echo "<script>";
            echo "window.alert('Ticket Record Delete.....!');";
            echo "window.location.href='view_ticket.php';";
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