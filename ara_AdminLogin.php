<?php
  
   session_start();
?>


<html lang="en">
   
   <head>
   <META HTTP-EQUIV="Content-Type"  CONTENT="text/html; CHARSET=utf-8">
      <title>SIT </title>
      <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <style>
         body {
               background-image: url(images/background.jpg);
               font-family: "Helvetica Neue", Helvetica, Arial;
               padding-top: 100px;
               }
         
         .form-signin {
               max-width: 330px;
               padding: 20px;
               margin: 0 auto;
               color: #017572;
               }
         
         .form-signin .form-signin-heading,
         .form-signin .checkbox {
               margin-bottom: 10px;
               }
         
         .form-signin .checkbox {
               font-weight: normal;
               }
         
         .form-signin .form-control {
               position: relative;
               height: auto;
               -webkit-box-sizing: border-box;
               -moz-box-sizing: border-box;
               box-sizing: border-box;
               padding: 20px;
               font-size: 16px;
               }
         
         .form-signin .form-control:focus {
               z-index: 2;
               }
         
         .form-signin input[type="email"] {
               margin-bottom: -1px;
               border-bottom-right-radius: 0;
               border-bottom-left-radius: 0;
               border-color:#017572;
               }
         
         .form-signin input[type="password"] {
               margin-bottom: 10px;
               border-top-left-radius: 0;
               border-top-right-radius: 0;
               border-color:#017572;
               }
         
         h2{
               text-align: center;
               color: #017572;
               }
      </style>
      
   </head>
	
   <body>
      <a href="AdminLogin.php" style="float:right;margin-top:-90px;font-size:18px; "><b>الانتقال الى اللغة الانجليزية</b></a> 
      <h2>تسجيل دخول </h2> 
      <div class="container form-signin">
         <?php
            $msg = '';
            if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) 
            {
               if ($_POST['username'] == 'SIT@sit.com' && $_POST['password'] == 'SIT12345') 
               {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'SIT@sit.com';
                  $_SESSION['is_logged_in'] = 'test';
                  $_SESSION['can_access'] = true; 
                  header("Location: ara_admin.php");
               }
               else 
               {
                  // $msg = 'Wrong username or password,,, Try again';
                  header("Location: ara_AdminLogin.php");
               }
            }
         ?>
      </div> <!-- /container -->
      
      <div class="container">
      
         <form class="form-signin" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"  method="POST">
            <h4 class="form-signin-heading"><?php echo $msg; ?></h4>
            <input type="text" class="form-control" name="username" style="direction: rtl; text-align: right;" placeholder="ادخل ايميلك هنا" required autofocus></br>
            <br/>
            <br/>
            <input type="password" class="form-control" name="password" style="direction: rtl; text-align: right;" placeholder="ادخل الرقم السرى هنا" required>
            <br/>
            <br/>
            <center>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">دخول</button>
            </center>
         </form>
      </div> 
   </body>
</html>