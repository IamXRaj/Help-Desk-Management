

<?php
include ('../conn/conn.php');

if(isset($_POST['submit'])){

    extract($_POST);


$insertStmt = $conn->prepare("INSERT INTO `inqury` (`tbl_user_id`, `first_name`, `last_name`, `contact_number`, `email`, `issue`) VALUES ($first_name, $last_name, $contact_number,$email, $issue)");
    if($insertStmt ) {

       
    echo "<script>";
    echo "window.alert('Data Added successfully.....!');";
    echo "window.location.href='purchase.php';";
    echo "</script>";

    } else {
        echo "<script>";
    echo "window.alert('Record Not added.....!');";
    echo "</script>";
    }

}

?>

<?php

include 'conn.php';


if(isset($_POST['purch_submit'])) {	

  extract($_POST);
 
	$purchase = mysqli_query($con,"INSERT INTO purchase_details(custmer_name,  inv_id,  purch_item_quantity, vender_id, purchase_date,rate,gst,percent,tamount,total_gst,bill) 
	VALUES ('$custmer_name','$inv_item_name', '$purch_item_quantity', '$ven_name','$purchase_date','$rate','$gst','$percent','$tamount','$total_gst','$bill')") or die(mysqli_error($con));

if($purchase)
{
    echo "<script>";
    echo "window.alert('Data Added successfully.....!');";
    echo "window.location.href='purchase.php';";
    echo "</script>";
}
else
{
    echo "<script>";
    echo "window.alert('Record Not added.....!');";
    echo "</script>";
}


}

  ?>