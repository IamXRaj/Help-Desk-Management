
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
    <div class="kcLoginClass login-pf-page">
        <header class="py-2 py-md-3">
            <div class="d-flex align-items-center gap-3 flex-lg-row position-relative container pt-0 header-div">
                <img class="logoPillar" src="images/pngwing.com.png" alt="logo">
                <div
                    class="header_cet_text_logo fw-semibold text-primary align-items-center lh-sm d-flex  gap-3 text-left flex-fill">
                    <!-- <img src="images/cet.9121c0624a2c863b8f32.png" alt="Logo" class="logoImage"> -->
                    <div class="right_text">
                        <div class="logo_heading">Mobile Help Desk</div>
                        <!-- <div class="slogan_title">State Common Entrance Test Cell</div> -->
                    </div>
                </div>
                <!-- <div class="right_logo"><img src="images/Seal_of_Maharashtra.svg.4fcd8beec71b3fb6d365.png" alt="Logo">
                </div> -->
            </div>
        </header>
        <div class="" style="min-height: 621px;">
            <div
                class="kcFormCardClass card-pf kcFormCardAccountClass login-pf-accounts bg-white p-3 p-md-4 rounded-4 border border-light mx-auto">
                <header class="kcFormHeaderClass login-pf-header d-flex align-items-center flex-row mb-2 mb-md-3">
                    <h2 class="h5 mb-0"><span>Sign In</span></h2>
                </header>
                <div id="kc-content">
                    <div id="kc-content-wrapper">
                        <div id="kc-form" class="kcContentWrapperClass row">
                            <div id="kc-form-wrapper" class="kcFormSocialAccountClass login-pf-social-section">
                                <form id="kc-form-login"
                                      method="post">
                                    <div class="kcFormGroupClass form-group"><label for="email"
                                            class="kcLabelClass control-label">Registered Email ID</label><input
                                            tabindex="1" id="email" class="kcInputClass form-control" required name="email"
                                            type="email" autocomplete="off" value=""></div>
                                    <div class="kcFormGroupClass form-group"><label for="password"
                                            class="kcLabelClass control-label"><span>Password</span></label><input
                                            tabindex="2" id="password" class="kcInputClass form-control" required  name="password"
                                            type="password" autocomplete="off"></div>
                                    <div class="kcFormGroupClass form-group kcFormSettingClass login-pf-settings">
                                        <div id="kc-form-options"></div>
                                        <div class="kcFormOptionsWrapperClass"><small
                                                class="d-block text-end fw-semibold form-text"><a tabindex="5"
                                                  >      forgot my password</span></a></small></div>
                                    </div>
                                    <div id="kc-form-buttons" class="kcFormGroupClass form-group"><input type="hidden"
                                            id="id-hidden-input" name="credentialId"><input tabindex="4"
                                            class="kcButtonClass btn kcButtonPrimaryClass btn-primary kcButtonBlockClass btn-block kcButtonLargeClass btn-lg"
                                            name="login" id="kc-login" type="submit" value="Sign In"></div>
                                </form>
                            </div>
                            <div
                                class="kcFormSocialAccountContentClass col-xs-12 col-sm-6 kcFormSocialAccountClass login-pf-social-section d-flex flex-column justify-content-center text-center mt-5 mt-md-0 pt-5 pt-md-0 regsiterColumn">
                                <h2 class="h4"><span>New user?</span></h2><a tabindex="6" href="registration.php"
                                     class="btn btn-primary btn-lg"><span>Register</span></a>
                            </div>
                        </div>
                        
                        <div id="kc-info" class="kcSignUpClass login-pf-signup">
                            <div id="kc-info-wrapper" class="kcInfoAreaWrapperClass form-text"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container alert_info_container">
                <div class="alert_info text-dark p-3 rounded">
                    <h4>Helpdesk Information:</h4>
                    <ol>
                        <li>Candidates have to register and complete their candidate profile first to raise a
                            ticket through the Helpdesk Ticketing System.</li>
                        <li>For the candidates, who are facing any issues in registration and are unable to
                            create their profile, please contact the below helpdesk numbers:<ul>
                                <li><a href="tel:07969134401">07969134401</a></li>
                                <li><a href="tel:07969134402">07969134402</a></li>
                                <li><a href="tel:18002090191">18002090191</a></li>
                            </ul><span><strong>Helpdesk Timings:</strong> 09:00 am to 06:00 pm (All Days except
                                Public Holidays)</span></li>
                    </ol>
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




<!-- login -->


<?php

include "conn/conn.php";

if (isset($_POST['login'])) {

	extract($_POST);

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	$log = mysqli_query($conn, "select * from tbl_user where email='$email' and password='$password'") or die(mysqli_error($con));

	if (mysqli_num_rows($log) > 0) {

		$fetch = mysqli_fetch_array($log);

		$_SESSION['tbl_user_id'] = $fetch['tbl_user_id'];
		$_SESSION['email'] = $fetch['email'];

		echo "<script>";
		echo "alert('Successfully Login...');";
		echo 'window.location.href="home.php";';
		echo "</script>";
	} else {
		echo "<script>";
		echo "alert('Login Failed');";
		echo "</script>";
	}
}

?>



