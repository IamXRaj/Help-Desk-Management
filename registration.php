
<?php session_start();?>

<!DOCTYPE html>
<html lang="en" class="kcHtmlClass login-pf my-root-class">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Help Desk</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Add custom CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">

</head>
<body>
<div id="root">
        <div class="mainContainer" style="min-height: 179px;">
            <div class="kcFormCardClass card-pf bg-white p-3 p-md-4 rounded-4 border border-light mx-auto">
                <header class="kcFormHeaderClass login-pf-header d-flex align-items-center flex-row mb-2 mb-md-3">
                    <div class="kcContentWrapperClass row">
                        <div class="kcLabelWrapperClass col-xs-12 col-sm-12 col-md-12 col-lg-12 subtitle"></div>
                        <div class="col-md-10">
                            <h2 class="h5 mb-0"><span>Register</span></h2>
                        </div>
                    </div>
                </header><small
                    class="d-flex align-items-center gap-1 lh-1 mb-2 fst-italic justify-content-end text-muted"><span
                        class="fs-5 text-danger">*</span><span>Required fields</span></small>
                <div id="kc-content">
                    <div id="kc-content-wrapper">
                        <form id="kc-register-form" class="kcFormClass form-horizontal"  method="post" action="">
                            <div class="kcFormGroupClass form-group">
                                <div class="kcLabelWrapperClass col-xs-12 col-sm-12 col-md-12 col-lg-12"><label
                                        for="firstName" class="kcLabelClass control-label"><span>Full Name (As per
                                            SSC/HSC marksheet)</span></label>*</div>
                                <div class="kcInputWrapperClass col-xs-12 col-sm-12 col-md-12 col-lg-12"><input
                                        type="text" id="firstName" pattern="^[A-Za-z\s]+$" name="first_name" class="kcInputClass form-control"
                                        aria-invalid="false" required autocomplete="chrome-off" autocapitalize="on" value=""
                                        style="text-transform: uppercase;"></div>
                            </div>
                            <div class="kcFormGroupClass form-group">
                                <div class="kcLabelWrapperClass col-xs-12 col-sm-12 col-md-12 col-lg-12"><label
                                        for="email" class="kcLabelClass control-label"><span>Email</span></label>*</div>
                                <div class="kcInputWrapperClass col-xs-12 col-sm-12 col-md-12 col-lg-12"><input
                                        type="email" id="email" required name="email" class="kcInputClass form-control"
                                        aria-invalid="false" autocomplete="chrome-off" value=""></div>
                            </div>
                            <div class="kcFormGroupClass form-group">
                                <div class="kcLabelWrapperClass col-xs-12 col-sm-12 col-md-12 col-lg-12"><label
                                        for="password" class="kcLabelClass control-label"><span>Password</span></label>*
                                </div>
                                <div class="kcInputWrapperClass col-xs-12 col-sm-12 col-md-12 col-lg-12"><input
                                        type="password" required id="password" name="password" class="kcInputClass form-control"
                                        aria-invalid="false" autocomplete="chrome-off" maxlength="8"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" value=""></div>
                            </div>
                            <!-- <div class="kcFormGroupClass form-group">
                                <div class="kcLabelWrapperClass col-xs-12 col-sm-12 col-md-12 col-lg-12"><label
                                        for="password-confirm" class="kcLabelClass control-label"><span>Confirm
                                            password</span></label>*</div>
                                <div class="kcInputWrapperClass col-xs-12 col-sm-12 col-md-12 col-lg-12"><input
                                        type="password" id="password-confirm" name="password-confirm"
                                        class="kcInputClass form-control" aria-invalid="false" autocomplete="chrome-off"
                                        maxlength="16" value=""></div>
                            </div> -->
                            <div class="kcFormGroupClass form-group">
                                <div class="kcLabelWrapperClass col-xs-12 col-sm-12 col-md-12 col-lg-12"><label
                                        for="birthdate" class="kcLabelClass control-label"><span>Date of
                                            Birth</span></label>*</div>
                                <div class="kcInputWrapperClass col-xs-12 col-sm-12 col-md-12 col-lg-12"><input
                                        type="date" id="birthdate" reuired name="birthdate" class="kcInputClass form-control"
                                        aria-invalid="false" autocomplete="chrome-off" max="2014-12-31" min="1940-01-10"
                                        value=""></div>
                            </div>
                            <div class="kcFormGroupClass form-group" style="margin-bottom: 30px;">
                                <div id="kc-form-options"
                                    class="kcFormOptionsClass col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="kcFormOptionsWrapperClass"><span><a
                                                href="index.php"><span>Already
                                                    Registered? Back to Login</span></a></span></div>
                                </div>
                                <button id="kc-form-buttons"
                                    class="kcFormButtonsClass col-xs-12 col-sm-12 col-md-12 col-lg-12 btn btn-primary btn-lg"
                                     type="submit" name="submit"><span>Register</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container alert_info_container">
                <div class="alert_info text-dark p-3 rounded">
                    <h4>Helpdesk Information:</h4>
                    <ol>
                        <li>Candidates have to register and complete their candidate profile first to raise a ticket
                            through the Helpdesk Ticketing System.</li>
                        <li>For the candidates, who are facing any issues in registration and are unable to create their
                            profile, please contact the below helpdesk numbers:<ul>
                                <!-- <li><a href="tel:07969134401">07969134401</a></li>
                                <li><a href="tel:07969134402">07969134402</a></li>
                                <li><a href="tel:18002090191">18002090191</a></li> -->
                            </ul><span><strong>Helpdesk Timings:</strong> 09:00 am to 06:00 pm (All Days except Public
                                Holidays)</span></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
        <footer class="bg-lighter">
        <div class="container-lg">
            
            <div
                class="d-flex align-items-center justify-content-between flex-column flex-md-row gap-3 py-2 py-md-3 text-center text-md-start">
                <p class="text-gray fs-8 mb-0">Copyright © Mobile Help Desk. All
                    rights reserved, 2024.</p>
                <div class="d-flex align-items-center gap-3"><span class="text-gray fs-8">Follow us
                        on:</span>
                    <ul class="socialLink mb-0">
                        <li><img src="images/fa_youtube.png" alt="youtube"></li>
                        <li><img src="images/facebook.png" alt="facebook"></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
</div>
    </div>
</body>


</html>

<script>

    
function validateForm() {
    // Validate first name
    var firstName = document.forms[0]["first_name"].value;
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

<!-- registration -->
<?php
include ('conn/conn.php');


if(isset($_POST['submit'])){

    extract($_POST);


    $insertStmt = mysqli_query($conn, "INSERT INTO tbl_user (first_name, email, password, birthdate) VALUES ('$first_name', '$email', '$password', '$birthdate')") or die(mysqli_error($conn));

        if($insertStmt ) {
            echo "<script>";
            echo "window.alert('Register successfully.....!');";
            echo "window.location.href='index.php';";
            echo "</script>";
        
            } else {
                echo "<script>";
            echo "window.alert('Not login.....!');";
            echo "</script>";
            }
        }    



?>

