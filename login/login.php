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

                <form id = "loginForm">
                    <div class = "input-group">
                        <label>Email Address</label>
                        <div class = "input-wrapper">
                            <i class = "far fa-envelope"></i>
                            <input type = "email" placeholder = "Enter Your Email" required>
                        </div>
                    </div>

                    <div class = "input-group">
                        <label>Password</label>
                        <div class = "input-wrapper">
                            <i class = "fas fa-lock"></i>
                            <input type = "password" id = "password" placeholder = "Enter Your Password" required>
                            <i class = "far fa-eye" id = "togglePassword"></i>
                        </div>
                    </div>

                    <div class = "form-options">
                        <label><input type = "checkbox"> Remember Me</label>
                        <a href = "#" class = "forgot-link">Forgot Password?</a>
                    </div>

                    <button type = "submit" class = "btn-primary">Sign In</button>
                </form>

                <div class = "divider"><span>or Continue With</span></div>

                <div class = "social-login">
                    <button class = "btn-social"><img src = "https://www.google.com/favicon.ico" width = 16>Google</button>
                </div>

                <p class = "signup-text">Don't have an account? <a href = "../signup/signup.php">Sign Up</a></p>
            </div>
        </div>
        <script src = "login.js"></script>
    </body>
</html>