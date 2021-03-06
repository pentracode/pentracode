<?php
  // session_start
  session_start();
  if (isset($_SESSION['uid'])) {
    header('location: home.php');
  }

  // require('login_parse.php');

$errorMsg = $username = $password = "";

 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Pentracode | Sign-in</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="css/main_style.css" > -->
    <link rel="stylesheet" type=" text/css" href="css/layout.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/main_style.css"> -->
    <link rel="stylesheet" type="text/css" href="css/login_style.css">
    <!-- <link rel="stylesheet" type=" text/css" href="css/mediaquery.css"> -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <script src="js/jquery.js"></script>
    <script src="js/login_script.js"></script>
    <script src="js/script.js"></script>

    <script lang="javascript">

    </script>
  </head>

<body>
<!-- overall-wrap -->
<div class="overall-wrap">

  <!-- header -->
  <header>

    <div class="header" id="header">
      <div class="logo" id="logo">
        <a href='index.php'> <img src="images/logo.png"></a>
      </div>
    </div>
    <hr>
    <!-- nav -->
    <nav>
      <i id="fa" class="fa fa-bars" aria-hidden="true"></i>

      <ul>
        <!-- <li><a href="index.php"><i class="fa fa-code icon "></i>  Discussion </a></li> -->
        <!-- <li><a href="login.php" class="active"><i class="fa fa-sign-in icon"></i> Login </a></li> -->
        <!-- <li><a href="register.php" ><i class="fa fa-key icon"></i> Register </a></li> -->
      </ul>
    </nav>

  </header>

  <!-- content -->
  <div id="content">
      <div class="content-text">
        <hr style="width: 150px;">
        <h3>Account Sign-in</h3>
        <h6>Sign in to access your account</h6>
        <hr style="width: 150px;">
      </div>
        <div class="form-wrap" align="center">
          <!-- checking username and password error -->
          <div class="error"></div>
          <form action="" method="post" id="login-form">
            <table>
               <tr>
                 <td>
                   <label for="username">Username</label>
                 </td>
               </tr>
               <tr>
                 <td>
                   <input type="text" name="username" id="username" placeholder="Enter username" <?php if (isset($_POST['username'])){ echo 'value="', $_POST['username'], '"';} ?> />
                 </td>
               </tr>

               <!-- break line for table -->
               <tr><td></td></tr>
               <tr><td></td></tr>

               <!-- password input field -->
               <tr>
                 <td>
                   <label for="password">Password</label>
                 </td>
               </tr>
               <tr>
                 <td>
                   <input type="password" name="password" id="password" placeholder="Enter password" />
                 </td>
               </tr>

               <!-- submit button -->

                <!-- break line for table -->
                <tr><td></td></tr>
                <tr><td></td></tr>

                <tr>
                  <td>
                    <input type="submit" name="submit" id="submit" value="Login" /><br>
                    <span style="color:#fff;">&nbsp;<a href="recovery.php">Forgot password?</a>&nbsp; or &nbsp;<a href="register.php">Register</a></span>
                  </td>

                </tr>

                <!-- break line for table -->
                <tr><td></td></tr>
                <tr><td></td></tr>

              </table>
          </form>

        </div>


  </div>

  <!-- footer -->
  <footer id="footer">Copyright © 2010-2017  |  www.pentracode.com</footer>
</div>
</body>
</html>
