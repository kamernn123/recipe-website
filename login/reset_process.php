<?php
include '../config/db.php';

if($$_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['reset_email']);

    $sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0) {
        $token = bin2hex(random_bytes(32));
        $expires = date("Y-m-d H:i:s", strtotime("+1 hour"));

        $update_sql = "UPDATE users SET reset_token = '$token', reset_expires = '$expires' WHERE email = '$email'";
        mysqli_query($conn, $update_sql);

        $reset_link = "http://localhost/recipe-website/login/change_password.php?token=" . $token;
        header("Location: login.php?success=" . urlencode("Email Sent!"));
        exit();
    } else {
        header("Location: login.php?error=" . urlencode("Email Not Registered!"));
        exit();
    }
}
?>