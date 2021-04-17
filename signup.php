<?php
require "header.php";
?>
<main>

  <div class="wrapper-main">

   <section class="section-default">
      <h1>SignUp</h1>
       <?php
       if (isset($_GET['error'])) {
         if ($_GET['error'] == "emptyfields") {
           echo '<p class="signuperror"> Fill in the all Fields!</p>';
         }
         else if ($_GET['error'] == "invaliduidmail") {
           echo '<p class="signuperror"> Invalid Username and Password!</p>';
         }
         else if ($_GET['error'] == "invaliduid") {
           echo '<p class="signuperror"> invalid Username!</p>';
         }
         else if ($_GET['error'] == "invalidmail") {
           echo '<p class="signuperror"> Invalid E-mail!</p>';
         }
         else if ($_GET['error'] == "passwordcheck") {
           echo '<p class="signuperror"> Password does not match!</p>';
         }
          else if ($_GET['error'] == "usertaken") {
            echo '<p class="signuperror"> username is already taken!</p>';
          }
            }
     if (isset($_GET["signup"])) {
       if ($_GET["signup"] == "success") {
          echo '<p class="signupsuccess"> Signup Successfull!</p>';
        }
          else if ($_GET["signup"] == "new"){
              	echo '<span class="message status">Just fill in the fields.</span>';
              }
               }
    ?>

      <form class="form-signup" action="includes/signup.inc.php" method="post">
        <input type="text"  name="uid" placeholder="Username">
         <input type="text"  name="mail" placeholder="E-mail">
          <input type="password"  name="pwd" placeholder="Password">
           <input type="password"  name="pwd-repeat" placeholder="Repeat-password">
           <button type="submit" name="signup-submit">signup</button>
 </form>
     </section>
 </div>
</main>

<?php
require "footer.php";
?>
