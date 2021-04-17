<?php
require "header.php";
?>

<main>
  <div class="wrapper-main">
    <section class="section-default">
      <?php
        if (isset($_SESSION['userId'])) {
        echo '<p class="login-status">You are now Logged In!</p>';
      }
        else {
        echo '<p class="login-status">You are now Logged Out!</p>';
      }
       ?>

  </section>
</div>
</main>

<?php
require "footer.php";
?>
