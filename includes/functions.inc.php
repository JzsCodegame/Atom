<?php
function emptyInputSignup($name, $email, $usernamer, $pwd, $pwdRepeat) {
  $result;
  if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat))
$result = true;
}
else {
  $result = false;
}
return $result;
function invalidUid($usernamer){
  if (preg_match("/^[a-zA-Z0-9]*$/"), $username) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}
function invalidEmail($email){
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
  function pwdMatch($pwd, $pwdRepeat){
    if (($pwd !== $pwdRepeat)) {
      $result = true;
    }
    else {
      $result = false;
    }
    return $result;
  function uidExists($conn, $username, $email){
      $sql = "SELECT * FROM users WHERE uidUsers = ? OR usersEmail = ?;"; {
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ../signup.php?error=sqlstmterror");
          exit();
          }
        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);
          $resultsData = mysqli_stmt_get_result($stmt);
          if ($row = mysqli_fetch_assoc($resultsData)){
            return $row
            }
            else {
              $result = false;
              return $result;
            }
            mysqli_stmt_close($stmt);

            function createUser($conn, $name, $email, $username, $pwd, $zipcode) {
                $sql = "INSERT INTO users(usersName, usersEmail, usersUid, usersPwd) VALUES(?, ?, ?, ?);"; {
                  $stmt = mysqli_stmt_init($conn);
                  if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../signup.php?error=sqlstmterror");
                    exit();
                    }
                    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                  mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $pwd, $zipcode);
                  mysqli_stmt_execute($stmt);
                  mysqli_stmt_close($stmt);
                  header("Location: ../signup.php?error=none");
                  exit();

}
?>
