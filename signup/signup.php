<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
        <title>Create Account</title>
        <link rel = "stylesheet" href = "../assets/css/style.css">
        <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    </head>
    <body>
        <div class = "container">
            <div class = "logo-section">
                <img src = "../assets/images/JOMRECIPE_2.png" alt = "JOMRECIPE Logo" class = "main-logo">
                <h1>JOMRECIPE</h1>
            </div>

            <div class = "login-card">
                <h2>Create Account</h2>
                <p class = "subtitle">Join us to Explore More Recipes</p>

                <form id = "signupForm" action = "signup_process.php" method = "POST">
                    <div class = "input-group">
                        <label>Username</label>
                        <div class = "input-wrapper">
                            <i class = "far fa-user"></i>
                            <input type = "text" name = "username" placeholder = "Enter Your Username" required>
                        </div>
                    </div>

                    <div class = "input-group">
                        <label>Email Address</label>
                        <div class = "input-wrapper">
                            <i class = "far fa-envelope"></i>
                            <input type = "email" name = "email" placeholder = "Enter Your Email" required>
                        </div>
                    </div>

                    <div class = "input-group">
                        <label>Password</label>
                        <div class = "input-wrapper">
                            <i class = "fas fa-lock"></i>
                            <input type = "password" name = "password" id = "password" placeholder = "Enter Your Password" required>
                            <i class = "far fa-eye" id = "togglePassword"></i>
                        </div>
                    </div>

                    <div class = "input-group">
                        <label>Confirm Password</label>
                        <div class = "input-wrapper">
                            <i class = "fas fa-lock"></i>
                            <input type = "password" name = "confirm_password" id = "confirmPassword" placeholder = "Confirm Your Password" required>
                            <i class = "far fa-eye" id = "toggleConfirmPassword"></i>
                        </div>
                    </div>

                    <button type = "submit" class = "btn-primary">Create Account</button>
                </form>

                <p class = "signup-text">Already have an account? <a href = "../login/login.php">Login</a>
            </div>
        </div>
        <div id = "messageBox" class = "message-box"></div>
        <script src = "signup.js"></script>
    </body>
</html>