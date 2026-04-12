<?php
session_start();
include '../config/db.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = $_POST['password'];

    $error = "";

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid Email Format!";
    } else {
        $sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);

            if(password_verify($pass, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];

                if(isset($_POST['remember_me'])) {
                    setcookie("user_email", $email, time() + (86400 * 30), "/");
                    setcookie("user_password", $pass, time() + (86400 * 30), "/");
                } else {
                    setcookie("user_email", "", time() - 3600, "/");
                    setcookie("user_password", "", time() - 3600, "/");
                }

                header("Location: login.php?success=1");
                exit();
            } else {
                $error = "Wrong Password!";
            }
        } else {
            $error = "Email Not Registered!";
        }
    }

    if($error != "") {
        header("Location: login.php?error=" . urlencode($error));
        exit();
    }
}
?>