<?php
session_start();

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    // AKUN DEMO
    $accounts = [
        "admin" => [
            "password" => "admin123",
            "role" => "Admin"
        ],
        "user" => [
            "password" => "user123",
            "role" => "User"
        ]
    ];

    if (
        isset($accounts[$username]) &&
        $accounts[$username]["password"] === $password
    ) {
        $_SESSION["logged_in"] = true;
        $_SESSION["username"] = $username;
        $_SESSION["role"] = $accounts[$username]["role"];

        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login — SULL</title>

    <link rel="stylesheet" href="dashboard.css">
</head>

<body class="login-page">

    <div class="login-container">

        <div class="login-card">

            <div class="login-logo">
                SULL<span>.</span>
            </div>

            <p class="login-label">PORTFOLIO MANAGEMENT</p>

            <h1>Welcome Back.</h1>

            <p class="login-description">
                Login untuk mengakses dashboard.
            </p>

            <?php if ($error): ?>
                <div class="login-error">
                    <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="login.php">

                <div class="input-group">
                    <label>Username</label>

                    <input
                        type="text"
                        name="username"
                        placeholder="Masukkan username"
                        required
                    >
                </div>

                <div class="input-group">
                    <label>Password</label>

                    <input
                        type="password"
                        name="password"
                        placeholder="Masukkan password"
                        required
                    >
                </div>

                <button type="submit" class="login-submit">
                    LOGIN
                    <span>→</span>
                </button>

            </form>

            <a href="index.html" class="back-portfolio">
                ← Kembali ke Portfolio
            </a>

            <div class="demo-account">
                <p>Demo Account</p>

                <span>Admin: <b>admin</b> / <b>admin123</b></span>
                <span>User: <b>user</b> / <b>user123</b></span>
            </div>

        </div>

    </div>

</body>
</html>