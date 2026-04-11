<?php
include '../config/db.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pass = $_POST['password'];
    $confirm_pass = $_POST['confirm_password'];

    $error = "";

    if($pass !== $confirm_pass) {
        $error = "Passwords do not match!";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format!";
    } elseif(strlen($pass) < 6) {
        $error = "Password too short!";
    } else {
        $check_query = "SELECT * FROM users WHERE username = '$user' OR email = '$email' LIMIT 1";
        $result = mysqli_query($conn, $check_query);
        
        if(mysqli_num_rows($result) > 0) {
            $exists = mysqli_fetch_assoc($result);
            $error = ($exists['username'] === $user) ? "Username taken!" : "Email exists!";
        }
    }

    if($error !== "") {
        header("Location: ../signup/signup.php?error=" . urlencode($error));
        exit();
    } else {
        $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$hashed_password')";

        if(mysqli_query($conn, $sql)) {
            header("Location: ../signup/signup.php?success=1");
        } else {
            header("Location: signup.php?error=Database Error");
            exit();
        }
    }
}