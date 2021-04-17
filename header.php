<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<!--localhost/-->
<head>
  <meta charset="utf-8">
   <meta name="description" content="Free Web tutorials">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

</head>

<body>

<div class="nav-1">
  <ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="#Portfolio">Portfolio</a></li>
  <li><a href="#About Me">About Me</a></li>
  <li><a href="#Contact">Contact</a></li>
  </ul>
</div>




  <div class="whole">
    <div class="mid-container">
        <div class="wrap-login-container">


<div class="loginpic js-tilt" data-tilt>
    <img src="img/blogo.jpg" alt="IMG">
  </div>

    <?php
        if (isset($_SESSION['userId'])) {
             echo '<form action="includes/logout.inc.php" method="post">
                   <button class="buttn2" type="submit" name="logout-submit">Logout</button>
                  </form>';
         }
       else {
             echo '<form action="includes/login.inc.php" method="post">
                   <input class="input1-username" type="text" name="mailuid" placeholder="Username/E-mail...">
                   <input class="input2-passwrd" type="password" name="pwd"  placeholder="Password">
                   <button class="buttn1-login" type="submit" name="login-submit">Login</button>
                   <div class="text-center1 part1">
                   <span class="txt1">
                   Forgot
                   </span>
                   <a class="txt2" href="#">
                   Username / Password
                   </a>
                  </div>
                  </form>'; }
       /*if(array_key_exists('button1', $_POST)) {
            button1();
            function button1() {

            ;
        }
      }*/
  ?>


</div>
</div>
 </div>
 </div>
</body>
      </html>
