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
                        $_SESSION['loggedInUser'] = $data[0];
                        $currentDate = date("y-m-d  H:i:s");
                        $userId = $data[0]["id"];
                        $sql = "UPDATE users SET lastLoginDate= '$currentDate' WHERE id='$userId'";
                        $conn->exec($sql);
                        header("Location: userPage.php");
                        exit;
                    } else {
                        $_SESSION['loggedInUser'] = $data[0];
                        $currentDate = date("y-m-d  H:i:s");
                        $userId = $data[0]["id"];
                        $sql = "UPDATE users SET lastLoginDate= '$currentDate' WHERE id='$userId'";
                        $conn->exec($sql);
                        // header("Location: ./admin/index.php");
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
