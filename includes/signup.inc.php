<?php
if (isset($_POST["submit"])) {
  echo "it-works"; }



$name = $_POST["name"];
$email = $_POST["email"];
$username = $_POST["uid"];
$pwd = $_POST["pwd"];
$pwdRepeat = $_POST["pwdrepeat"];
$zipcode = $_POST["zipcode"];

require_once 'dbh2.inc.php';
require_once 'functions.inc.php';
if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat, $zipcode) !== false) {
  header("Location: ../signup.php?error=invaliduid");
  exit();
}
if (invalidUid($username) !== false) {
  header("Location: ../signup.php?error=emptyinput");
  exit();
}
if (invalidEmail($email) !== false) {
  header("Location: ../signup.php?error=invalidemail");
  exit();
}
if (pwdMatch($pwd, $pwdRepeat) !== false) {
  header("Location: ../signup.php?error=passwordsdontmatch");
  exit();
}
if (uidExists($conn, $username) !== false) {
  header("Location: ../signup.php?error=usernametaken");
  exit();
}
createUser($conn, $name, $email, $username, $pwd, $zipcode);
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
  header("Location: ../signup.php?error=invalidmail&uid");
  exit();
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  header("Location: ../signup.php?error=invalidmail&uid=".$username);
  exit();
}
else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../signup.php?error=invaliduid&mail=".$email);
    exit();
}
else if ($password !== $passwordRepeat) {
  header("Location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
  exit();
}
else if ($password !== $passwordRepeat) {
  header("Location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
  exit();
}
else {
  $sql = "SELECT * FROM users WHERE uidUsers=?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../signup.php?error=sqlerror");
    exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $mailuid);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if ($resultCheck > 0) {
        header("Location: ../signup.php?error=usertaken&mail=".$email);
        exit();
      }
      else {
        $sql = "INSERT INTO users (uidUsers, emailUsers ,pwdUsers) VALUES (?, ?, ? )";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ../signup.php?error=sqlerror");
          exit();
      }
      else {
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
        mysqli_stmt_execute($stmt);
        header("Location: ../signup.php?signup=success");
        exit();
      }
    }
   }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else {
  header("Location: ../signup.php");
  exit();
}
