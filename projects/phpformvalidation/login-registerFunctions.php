<?php
session_start();
if (isset($_POST["registerSubmit"])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "not valid email";
    } elseif (strlen($password) < 8) {
        echo "not valid password";
    } elseif (strlen($password) < 8 || $password !== $password2) {
        echo "not match passwords";
    } else {
        $usersArr = [];
        $newUser = ["email" => $email, "password" => $password];
        if (isset($_SESSION['usersArr'])) {
            $exist = false;
            foreach ($_SESSION['usersArr'] as $value) {
                if ($value["email"] == $email) {
                    $exist = true;
                }
            }
            if (!$exist) {
                array_push($usersArr, $newUser, ...$_SESSION["usersArr"]);
                $_SESSION["usersArr"] = $usersArr;
                echo "You have registered successfully";
            } else {
                echo "Used Email, Please try with another email";
            }
        } else {
            array_push($usersArr, $newUser);
            $_SESSION["usersArr"] = $usersArr;
            echo "You have registered successfully";
        }
    }
} elseif (isset($_POST["loginSubmit"])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "not valid email";
    } elseif (strlen($password) < 8) {
        echo "not valid password";
    } else {
        $prevUsersArr = [];
        if (isset($_SESSION['usersArr'])) {
            $prevUsersArr = $_SESSION['usersArr'];
            $exist = false;
            foreach ($prevUsersArr as $value) {
                if ($value['email'] == $email && $value['password'] == $password) {
                    $exist = true;
                }
            }
            if ($exist) {
                $_SESSION["loggedInUser"] = ["email" => $email, "password" => $password];
                header("location:userPage.php");
            } else {
                echo 'Wrong email or password !!';
            }
        } else {
            echo "incorrect user credentials please sign up!!";
        }
    }
}
