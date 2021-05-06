<?php
include_once 'header.php';
?>

<section class="signup-form">
<h2>Login </h2>

<div class="signup-form-form" >
      <form action="login.inc.php" method="post">

        <input type="text"  name="uid" placeholder="Username..">

          <input type="password"  name="pwd" placeholder="Password..">
           <input type="password"  name="pwd-repeat" placeholder="Repeat-password">
           <button type="submit"  class="buttongroup2" name="submit">Login</button>
 </form>

  </section>
</div>

<?php
include_once "footer.php";
?>
