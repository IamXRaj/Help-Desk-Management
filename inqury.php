<?php include ('conn/conn.php'); ?>
<?php include ('header.php'); ?>

<div class="container mt-5">
    <h2>Open a new Ticket</h2><br>
    <p>Please fill in the form below to open a new ticket.</p>

<?php

    $select=mysqli_query($conn,"select * from tbl_user where email='".$_SESSION['email']."' ") or die (mysqli_error($con));
    $row=mysqli_fetch_assoc($select);
    
        ?>
        <div class="row">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-6 font-weight-bold">User Name :</div>
                    <div class="col-md-6 font-weight-bold"><?php echo $row['first_name'];?></div>
                </div>
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-6 font-weight-bold">User Email :</div>
                    <div class="col-md-6 font-weight-bold"><?php echo $row['email'];?></div>
                </div>
                <div class="col-10">

                    <hr class="border border-dark">
                </div>
            </div>
        </div>
        <form action="" method="POST" onsubmit="return validateForm()">
                <div class="form-group row">
                    <div class="col-8 font-weight-bold">
                        <label for="firstName">First Name:</label>
                        <input type="text" class="form-control" name="first_name" required pattern="[A-Za-z\s]+">
                    </div>
                    <div class="col-8 font-weight-bold">
                        <label for="lastName">Last Name:</label>
                        <input type="text" class="form-control" name="last_name" pattern="[A-Za-z\s]+" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-8 font-weight-bold">
                        <label for="contactNumber">Contact Number:</label>
                        <input type="tel" class="form-control"  name="contact_number" maxlength="10" pattern="[789][0-9]{9}" required>
                    </div>
                    <div class="col-8 font-weight-bold">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" name="email" required>
                    </div>
                    
                </div>
                <div class="form-group row">
                <div class="col-4 font-weight-bold">
                        <label>Mobile Brand</label>
                        <select class="form-control" name="brand" required>
                        <option value="">Select an option</option>
                        <option value="MI">MI</option>
                        <option value="Redmi">Redmi</option>
                        <option value="Realme">Realme</option>
                        <option value="Apple">Apple</option>
                        <option value="Oppo">Oppo</option>
                        <option value="Vivo">Vivo</option>
                        <option value="One Plus">One Plus</option>
                        <option value="Poco">Poco</option>
                        <option value="Motorola">Motorola</option>
                        
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-8 font-weight-bold">

                    
                    <label for="registerUsername">Add Issue Here:</label>
                    <select class="form-control" name="issue" required>
                        <option value="">Select an option</option>
                        <option value="Battary Issue">Battary Issue</option>
                        <option value="Charger Port Damage">Charger Port Damage </option>
                        <option value="App Chashes">App Chashes</option>
                        <option value="Bluetooth Connectivity Issue">Bluetooth Connectivity Issue</option>
                        <option value="Blurry Camera">Blurry Camera </option>
                        <option value="Internet Not Working">Internet Not Working</option>
                        <option value="Overheating Issue">Overheating Issue</option>
                        <option value="Phone Running slow">Phone Running slow</option>
                        <option value="Other Issue">Other Issue</option>
                        
                    </select>
                    <!-- <textarea class="form-control" id="messageContainer"></textarea> -->
                    <!-- <input type="hidden" name="selected_message" id="selectedMessage"> -->
                </div>
                </div>
               
                <!-- <p class="registrationForm" onclick="showLoginForm()"><- Back</p> -->
                <button type="submit" name="submit" class="btn btn-success login-register">Create Ticket </button>
                <button type="reset" name="reset" class="btn btn-danger login-register">Reset</button>
                <button type="cancel" name="cancel" class="btn btn-dark login-register">Cancel</button>
                
            </form>
            </div>
            <div class="row">
            <a href="view_ticket.php">Go to Next Step</a>
        </div>

            <?php include ('footer.php'); ?>


</script>
<script>
function validateForm() {
    // Validate first name
    var firstName = document.forms[0]["first_name"].value;
    if (!/^[A-Za-z\s]+$/.test(firstName)) {
        alert("Please enter a valid  name (letters and spaces only).");
        return false;
    }
    var lastName = document.forms[0]["last_name"].value;
    if (!/^[A-Za-z\s]+$/.test(firstName)) {
        alert("Please enter a valid  name (letters and spaces only).");
        return false;
    }

    // Validate contact number
    var contactNumber = document.forms[0]["contact_number"].value;
    if (!/[789][0-9]{9}/.test(contactNumber)) {
        alert("Please enter a valid 10-digit mobile number.");
        return false;
    }

    return true; // Form will be submitted if all validations pass
}
</script>

<?php
if(isset($_POST['submit'])){
    // Extract form data
    extract($_POST);
    
    // Retrieve the selected message
    // $selectedMessage = $_POST['selected_message']; 

    // Get the user ID from the session
    $tbl_user_id = $_SESSION['tbl_user_id'];

    // Insert data into the 'inqury' table with the user ID
    $insertStmt = mysqli_query($conn,"INSERT INTO inqury (tbl_user_id, first_name, last_name, contact_number, email, brand, issue) VALUES ('$tbl_user_id', '$first_name', '$last_name', '$contact_number','$email','$brand', '$issue')") or die(mysqli_error($conn));

    if($insertStmt ) {
        echo "<script>";
        echo "window.alert('Ticket Generated successfully.....!');";
        echo "window.location.href='inqury.php';";
        echo "</script>";
    } else {
        echo "<script>";
        echo "window.alert('Record Not added.....!');";
        echo "</script>";
    }
}
?>