<?php
session_start();
if (isset($_SESSION['loggedInUser'])) {
    $userEmail = $_SESSION['loggedInUser']["email"];
    $userPassword = $_SESSION['loggedInUser']["password"];
} else {
    header("location:login-register.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        main {
            display: flex;
            justify-content: space-evenly;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            text-align: center;
        }

        main h1>span {
            color: violet;
        }

        .prizeBox {
            width: 50px;
            height: 50px;
            background-color: rgb(163 5 30);
            overflow: hidden;
            font-size: 0;
            cursor: pointer;
            transition: 0.3s ease all;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .prizeBox:hover {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            font-size: 2rem;
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 2s ease infinite;

        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }
    </style>
</head>

<body>
    <main>
        <h1><?php echo "Welcome $userEmail We Are Glad To See You Again<br> <span>-- hover at the below box to get your prize --</span>"; ?></h1>
        <div class="prizeBox">
            <h2>PRIZE</h2>
        </div>
    </main>
</body>

</html>