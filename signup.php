<?php
include_once 'header.php';
?>

<section class="signup-form">
<h2>Sign Up</h2>

<div class="signup-form-form" >
      <form action="includes/signup.inc.php" method="post">
        <input type="text"  name="name" placeholder="Full name..">
        <input type="text"  name="uid" placeholder="Username..">
         <input type="text"  name="email" placeholder="E-mail..">
          <input type="password"  name="pwd" placeholder="Password..">
<<<<<<< HEAD
           <input type="password"  name="pwdrepeat" placeholder="Repeat-password">
=======
           <input type="password"  name="pwd-repeat" placeholder="Repeat-password">
           <input type="password"  name="pwd-repeat" placeholder="Repeat-password">
           <input id="zip" name="zip" type="text" pattern="[0-9]*" placeholder="zipcode">
>>>>>>> 6eb99778e28973c2b80bf88d922e7417bdc6067e
           <button type="submit"  class="buttongroup1" name="submit">SignUp</button>
              </form>
                  </div>
                      </section>


<?php
include_once "footer.php";
?>
