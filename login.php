<?php
session_start();

$correct_username = "sull";
$correct_password = "12345";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    if ($username === $correct_username && $password === $correct_password) {

        $_SESSION["logged_in"] = true;
        $_SESSION["username"] = $username;

        header("Location: index.html");
        exit;

    } else {

        header("Location: login.html?error=1");
        exit;
    }
}

header("Location: login.html");
exit;
?>