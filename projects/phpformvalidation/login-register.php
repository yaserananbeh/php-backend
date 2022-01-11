<?php
include './login-registerFunctions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        input+span {
            color: red;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="./login-register.php" method="post">
                <input autocomplete="off" type="hidden" name="registerSubmit">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input autocomplete="off" type="text" placeholder="Email" name="email" required onkeyup="handleOnChangeInputField(this)" />
                <span class="emailmessage"></span>
                <input autocomplete="off" type="password" placeholder="Password" name="password" required onkeyup="handleOnChangeInputField(this)" />
                <span class="passwordmessage"></span>

                <input autocomplete="off" type="password" placeholder="Confirm Password" name="password2" required onkeyup="handleOnChangeInputField(this)" />
                <span class="password2message"></span>

                <button class="signUpBtn" disabled="true">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="./login-register.php" method="POST">
                <input autocomplete="off" type="hidden" name="loginSubmit">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <input autocomplete="off" type="text" placeholder="Email" name="email" required />
                <input autocomplete="off" type="password" placeholder="Password" name="password" required />
                <a href="#">Forgot your password?</a>
                <button>Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>


    <script src="./app.js"></script>
</body>

</html>