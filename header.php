
<?php
include "conn/conn.php";
session_start();
if(!(isset($_SESSION['tbl_user_id'])))
{
echo "<script>";
echo 'window.location.href="index.php";';
echo "</script>";

}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="main.css">
    <title>Mobile Help Desk</title>
    <style>
   
    </style>
  </head>
  <body id="backimg">
  <nav class="nav nav-pills flex-column flex-sm-row bg-dark">
  <a class="flex-sm-fill text-sm-center nav-link" href="home.php">Mobile Help Desk Home</a>
  <a class="flex-sm-fill text-sm-center nav-link" href="inqury.php">Open a New Inquiry</a>
  <?php
include "conn/conn.php";

if(isset($_SESSION['tbl_user_id'])) {
  $tbl_user_id = $_SESSION['tbl_user_id'];
  
  // Modify the SQL query to count rows for the logged-in user only
  $select = mysqli_query($conn, "SELECT COUNT(*) AS total_rows FROM inqury WHERE tbl_user_id = '$tbl_user_id'") or die(mysqli_error($conn));
  $row = mysqli_fetch_assoc($select);
  // $total_rowss = $row['total_rows'];
}
  ?>
  <a class="flex-sm-fill text-sm-center nav-link" href="view_ticket.php">View Inquiry(<?php echo $row['total_rows']; ?>)</a>
  <a class="flex-sm-fill text-sm-center nav-link" href="logout.php">Log Out</a>
</nav>
