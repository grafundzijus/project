<?php
  session_start();
    include_once 'connect.php';
    $email = mysqli_real_escape_string($conn, $_POST['user_email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['user_pass']);

    // Error handlers
    // Patikriname ar yra tuščių laukelių
    if (empty($email) || empty($pwd)) {
        header("Location: ../login.php?login=empty");
        exit();
    } else {
        $sql = "SELECT * FROM vartotojai WHERE user_email = '$email'";
        $result = mysqli_query($conn, $sql);
        $result_check = mysqli_num_rows($result);
        if($result_check < 1) {
            header("Location: ../login.php?login=error");
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($result)) {
                // dehashing slaptažodį
                $hashedPwdCheck = password_verify($pwd, $row['user_pass']);
                if ($hashedPwdCheck == false) {
                    header("Location: ../login.php?login=error");
                    exit();
                } elseif ($hashedPwdCheck == true) {
                  // Login vartotoją į svetainę
                  $_SESSION['user_id'] = $row['user_id'];
                  $_SESSION['user_email'] = $row['user_email'];


                  header("Location: ../index.php?login=success");
                  exit();
              }
          }
      }
  }

 ?>
