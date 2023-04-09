
<?php
  ob_start();
  session_start();
  if(isset($_SESSION['formail']))
  {

      if(isset($_SESSION['otp']))
      {

          if($_SESSION['votp'] == 1)
          {
             echo "";
          }    
          else
          {
             header('Location: login.php');     
          }
      }
      else
      {
        header('Location: login.php');
      }
  }  
  else
   {
        header('Location: login.php');
   }
?>



<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/webster-responsive-multi-purpose-html5-template/login-09.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Dec 2019 09:41:56 GMT -->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webster - Responsive Multi-purpose HTML5 Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>UTU | T&PCell | Login</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../Files/images/logo-5.png" type="images/png" />

    <!-- font -->
    <link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="../Files/css/plugins-css.css" />

    <!-- Typography -->
    <link rel="stylesheet" type="text/css" href="../Files/css/typography.css" />

    <!-- Shortcodes -->
    <link rel="stylesheet" type="text/css" href="../Files/css/shortcodes/shortcodes.css" />

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="../Files/css/style.css" />

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="../Files/css/responsive.css" />

    <!-- Style customizer -->
    <link rel="stylesheet" type="text/css" href="#" data-style="styles"/>
    <link rel="stylesheet" type="text/css" href="css/style-customizer.css" />

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-557RCPW');

    </script>
    <!-- End Google Tag Manager -->
    <script type="text/javascript">


function checkPass()

{

    //Store the password field objects into variables ...

    var password = document.getElementById('password2');

    var confirm  = document.getElementById('confirm2');

    var SubmitButtonElement = document.getElementById("SubmitButton");

    //Store the Confirmation Message Object ...

    var message = document.getElementById('confirm-message2');

    //Set the colors we will be using ...

    var good_color = "#84ba3f";

    var bad_color  = "#ff6666";

    //Compare the values in the password field 

    //and the confirmation field

    if(password.value == confirm.value){

        //The passwords match. 

        //Set the color to the good color and inform

        //the user that they have entered the correct password 

        confirm.style.borderColor = good_color;

        message.style.color           = good_color;

        message.innerHTML             = '<i class="fa fa-check" style="color:#84ba3f;">&nbsp;Passwords Match!</i>';

        SubmitButtonElement.style.display="inline";
    }else{

        //The passwords do not match.

        //Set the color to the bad color and

        //notify the user.

        confirm.style.borderColor = bad_color;

        message.style.color           = bad_color;

        message.innerHTML             = '<i class="fa fa-exclamation-triangle text-danger">&nbsp;Passwords Do Not Match!</i>';

        SubmitButtonElement.style.display="none";
    }

}  

</script>
  </head>

<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-557RCPW"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <div class="wrapper">

  <!--=================================
   preloader -->

    <div id="pre-loader">
    <img src="../Files/images/pre-loader/loader-01.svg" alt="">
    </div>

    <!--=================================
     preloader -->

    <!--=================================
     login-->

    <section class="login-box-main height-100vh page-section-ptb" style="background: url(../Files/images/login/06.jpg);">
      <div class="login-box-main-middle">
        <div class="container">
          <div class="row justify-content-center no-gutter">
            <div class="col-lg-2 col-md-4">
              <div class="login-box-left  white-bg">
                <img class="logo-small" src="../Files/images/logo-5.png" alt="">
                  <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="../index.php"> <i class="fa fa-home"></i>Home</a></li>
                    <li class="nav-item active"><a class="nav-link" href="../Login/login.php"> <i class="fa fa-sign-in"></i> Login</a></li>
                    <li class="nav-item dropdown"><a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown"><i class="fa fa-user-plus"></i>Sign-Up</a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="../Sign_Up/student_reg.php"><i class="fa fa-user"></i>Student</a>
                        <a class="dropdown-item" href="../Sign_Up/company_reg.php"><i class="fa fa-users"></i>Company</a>
                        <a class="dropdown-item" href="../Sign_Up/faculty_reg.php"><i class="fa fa-university"></i>Faculty</a>
                      </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../about_us.php"> <i class="fa fa-info-circle"></i>About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="../contact_us.php"> <i class="fa fa-phone"></i>Contact Us</a></li>
                  </ul>
                  <div class="social-icons color-hover clearfix pos-bot pb-30 pl-30">
                    <ul>
                      <li class="social-facebook"><a href="https://www.facebook.com/utu.malibacampus/"><i class="fa fa-facebook"></i></a></li>
                      <li class="social-youtube"><a href="https://www.youtube.com/channel/UC2N7bQCLyHnUnMfTwA8MgMw/"><i class="fa fa-youtube-play"></i></a></li>
                      <li class="social-instagram"><a href="https://www.instagram.com/utu.malibacampus/"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
              </div>
            </div>
            <div class="col-md-4 theme-bg">
              <div class="login-box pos-r text-white login-box-theme">
                <h2 class="text-white mb-16">Uka Tarsadia University</h2>
                <p class="mb-10 text-white pl-1">Empowering Your Knowledge </p>          
                <ul class="list-unstyled pos-bot">
                  <h3 class="text-white pt-8 pb-1">Training and<br>Placement Cell</h3>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="login-box pb-50 clearfix white-bg">
                <h3 class="mb-30">New Password</h3>
                <form action="#" method="post">
                  <div class="section-field mb-20">
                    <label class="mb-10 text-dark font-weight-bold" for="name">New Password<label class="text-danger">*</label></label>
                    <input id="password2" class="Password form-control"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                     title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" type="password" placeholder="Password" name="pswd" onkeyup="checkPass();" required>
                  </div>
                  <div class="section-field mb-20">
                    <label class="mb-10 text-dark font-weight-bold" for="name">Re-Type Password<label class="text-danger">*</label></label>
                    <input id="confirm2" class="Password form-control" type="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                     title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Re-Type Password" name="rpswd" onkeyup="checkPass();" required>
                    <span id="confirm-message2" class="confirm-message"></span>
                  </div>
                  <br><br>
                  <div class="section-field">
                    <div class="remember-checkbox mb-30">
                      <!-- <input type="checkbox" class="form-control" name="two" id="two" />
                      <label for="two"> Remember me</label> -->
                    <!-- <a href="forgot_password.php" class="float-right">Forgot Password?</a> -->
                    </div>
                  </div>
                  <div class="row">
                    <input type="submit" name="Submit" value="Reset Password" id="SubmitButton" class="button col-6">
                    <input type="reset" name="reset" value="Reset" class="button col-5">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

<script src="../Files/js/jquery-3.4.1.min.js"></script>

<!-- plugins-jquery -->
<script src="../Files/js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>var plugin_path = '../Files/js/index.html';</script>

<!-- Style Customizer -->
<script src="../Files/js/style-customizer.min.js"></script>

<!-- custom -->
<script src="../Files/js/custom.js"></script>



</body>

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/webster-responsive-multi-purpose-html5-template/login-09.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Dec 2019 09:41:57 GMT -->
</html>
<?php
  
  if(isset($_REQUEST['Submit']))
  {
      session_start();
      $pass = $_REQUEST['pswd'];
      $rpass = $_REQUEST['rpswd'];
      $email = $_SESSION['formail'];

      include('../Files/PDO/dbcon.php');
      $stmt=$con->prepare("CALL NEW_PASSWORD(:email,:pass);");
      $stmt->bindParam(':email',$email);
      $stmt->bindParam(':pass',$pass);
      $stmt->execute();

      if($stmt == TRUE)
      {
        ?>
          <script>
            alert('Password Update Sccessfully!!.......');
            window.open('login.php','_self');
          </script>
        <?php
      }
      else
      {
          ?>
          <script>
            alert('Password Not Update Sccessfully!!.......');
            window.open('login.php','_self');
          </script>
        <?php  
      }

  }
?>pswd