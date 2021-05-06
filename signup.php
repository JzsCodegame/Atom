<?php
include_once 'header.php';
?>

<section class="signup-form">
<h2>Sign Up</h2>

<div class="signup-form-form" >
      <form action="signup.inc.php" method="post">
        <input type="text"  name="name" placeholder="Full name..">
        <input type="text"  name="uid" placeholder="Username..">
         <input type="text"  name="mail" placeholder="E-mail..">
          <input type="password"  name="pwd" placeholder="Password..">
           <input type="password"  name="pwd-repeat" placeholder="Repeat-password">
           <button type="submit"  class="buttongroup1" name="submit">SignUp</button>
              </form>
                  </div>
                      </section>


<?php
include_once "footer.php";
?>
