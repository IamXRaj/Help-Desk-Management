

<?php

// db connection
$conn = mysqli_connect("localhost", "root", "", "registration_login_db");
// check connection
if($conn->connect_error) {
  die("Connection Failed : " . $conn->connect_error);
} else {
   // echo "Successfully connected";
}


?>