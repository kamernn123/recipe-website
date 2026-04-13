<?php
$saved_email = isset($_COOKIE['user_email']) ? $_COOKIE['user_email'] : "";
$saved_pass = isset($_COOKIE['user_password']) ? $_COOKIE['user_password'] : "";
$is_checked = isset($_COOKIE['user_email']) ? "checked" : "";
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta = charset = "UTF-8">
        <meta name = "viewport" content = "width-device-width, initial-scale = 1.0">
        <title>JOMRECIPE</title>

        <link rel = "stylesheet" href = "../assets/css/style.css">
        <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    </head>
    <body>
        <div class = "container">
            <div class = "logo-section">
                <img src = "../assets/images/JOMRECIPE_2.png" alt = "JOMRECIPE Logo" class = "main-logo">
                <h1>JOMRECIPE</h1>
                <p>Discover Recipes with US</p>
            </div>

            <div class = "login-card">
                <h2>Welcome Back!</h2>
                <p class = "subtitle">Sign in to access recipes</p>

                <form id = "loginForm" action = "login_process.php" method = "POST"> 
                    <div class = "input-group">
                        <label>Email Address</label>
                        <div class = "input-wrapper">
                            <i class = "far fa-envelope"></i>
                            <input type = "email" name = "email" value = "<?php echo $saved_email; ?>" placeholder = "Enter Your Email" required>
                        </div>
                    </div>

                    <div class = "input-group">
                        <label>Password</label>
                        <div class = "input-wrapper">
                            <i class = "fas fa-lock"></i>
                            <input type = "password" name = "password" id = "password" value = "<?php echo $saved_pass; ?>" placeholder = "Enter Your Password" required>
                            <i class = "far fa-eye" id = "togglePassword"></i>
                        </div>
                    </div>

                    <div class = "form-options">
                        <label><input type = "checkbox" name = "remember_me" <?php echo $is_checked; ?>> Remember Me</label>
                        <a href = "#" class = "forgot-link" id = "forgotPassLink">Forgot Password?</a>
                    </div>

                    <button type = "submit" class = "btn-primary">Sign In</button>
                </form>

                <div id = "resetModal" class = "modal-overlay">
                    <div class = "modal-content">
                        <span class = "close-btn" id = "closeModal">&times;</span>
                        <h2>Reset Password</h2>
                        <p class = "modal-subtitle">Enter your email address and we'll send you a link to reset your password.</p>

                        <form id = "resetForm" action = "reset_process.php" method = "POST">
                            <div class = "input-group">
                                <label>Email Address</label>
                                <div class = "input-wrapper focus-border">
                                    <i class = "far fa-envelope"></i>
                                    <input type = "email" name = "reset_email" placeholder = "Enter Your Email" required>
                                </div>
                            </div>

                            <div class = "modal-actions">
                                <button type = "button" class = "btn-cancel" id = "cancelBtn">Cancel</button>
                                <button type = "submit" class = "btn-primary reset-btn">Send Reset Link</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class = "divider"><span>or Continue With</span></div>

                <div class = "social-login">
                    <button class = "btn-social"><img src = "https://www.google.com/favicon.ico" width = 16>Google</button>
                </div>

                <p class = "signup-text">Don't have an account? <a href = "../login/signup/signup.php">Sign Up</a></p>
            </div>
        </div>
        <div id = "messageBox" class = "message-box"></div>
        <script src = "login.js"></script>
    </body>
</html>