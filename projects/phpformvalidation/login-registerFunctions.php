<?php
session_start();
include "./config/connect.php";
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
        try {
            $sql = "INSERT INTO users ( email,password)
                    VALUES ('$email','$password')";
            $conn->exec($sql);
            echo "You have registered successfully";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
} elseif (isset($_POST["loginSubmit"])) {

    $email = $_POST['email'];
    $userPassword = $_POST['password'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "not valid email";
    } else {
        try {
            $stmt = $conn->query("SELECT * FROM users WHERE email='$email'");
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if (count($data)) {
                $password = ($data[0]['password']);
                $userRole = ($data[0]['userRole']);
                if ($password == $userPassword) {
                    if ($userRole == 1) {
                        echo "test";
                        $_SESSION['loggedInUser']=$data[0];
                        header("Location: userPage.php");
                        exit;
                    } else {
                        echo "admin";
                    }
                } else {
                    echo "incorrect password";
                }
            } else {
                echo "Not a valid credentials";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
