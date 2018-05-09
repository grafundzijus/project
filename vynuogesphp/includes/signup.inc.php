<?php
session_start ();
//Patikriname, kad vartotojas pasiek4 si faila ne tiesiogiai
if (isset($_POST['submit'])) {

  include_once 'connect.php';

  $pwd = mysqli_real_escape_string($conn, $_POST['user_pass']);
  $email = mysqli_real_escape_string($conn, $_POST['user_email']);

  //error handlers
  //patikriname ar yra tusciu laukeliu
  if(empty($pwd) || empty($email)) {
    header("Location: ../signup.php?signup=empty");
    exit();
  } else {
      //patikriname ar email galiojantis
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?signup=invalidemail");
        exit();
      } else {
        //patikriname ar username jau naudojamas
        $sql = "SELECT * FROM vartotojai WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $result_check = mysqli_num_rows($result);
        if($result_check > 0) {
          header("Location: ../signup.php?signup=emailtaken");
          exit();
        } else {
          //sukuriame hash slaptazodziui
          $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
          //ikeliame vartotoja i DB
          $sql = "INSERT INTO users (user_pass, user_email) VALUES ('$hashedPwd', '$email');";
          mysqli_query($conn, $sql);
          header("Location: ../index.php");
          exit();
        }
      }
    }
  } else {
    header("Location: ../index.php");
    exit();
}
?>
