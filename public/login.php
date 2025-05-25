<?php
session_start();

// Auto-login from cookie
if (!isset($_SESSION['user_id']) && isset($_COOKIE['remember_me'])) {
    $_SESSION['user_id'] = $_COOKIE['remember_me'];
    header('Location: index1.php');
    exit();
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'includes/auth.php';

    $email = $conn->real_escape_string($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $remember = isset($_POST['remember']);

    if (empty($email) || empty($password)) {
        $error = "Please fill in both email and password.";
    } else {
        $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows === 1) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];

                // Remember Me
                if ($remember) {
                    setcookie("remember_me", $user['id'], time() + (30 * 24 * 60 * 60), "/"); // 30 days
                }

                header("Location: index1.php");
                exit();
            } else {
                $error = "Incorrect password. Please try again.";
            }
        } else {
            $error = "No user found with that email.";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Digital Leap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            max-width: 400px;
            margin: 5% auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 30px;
            border-radius: 10px;
            background: #ffffff;
        }
    </style>
</head>
<body class="bg-light">

<div class="form-container">
    <h3 class="mb-4 text-center">Login to Digital Leap</h3>
    
    <?php if ($error): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form method="post" action="">
        <div class="mb-3">
            <label>Email address</label>
            <input type="email" name="email" class="form-control" placeholder="Enter email" required>
        </div>

        <div class="mb-3 position-relative">
            <label>Password</label>
            <input type="password" name="password" id="passwordInput" class="form-control" placeholder="Enter password" required>
            <button type="button" class="btn btn-sm btn-outline-secondary position-absolute end-0 top-0 mt-2 me-2" onclick="togglePassword()">Show</button>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" name="remember" class="form-check-input" id="rememberCheck">
            <label class="form-check-label" for="rememberCheck">Remember Me</label>
        </div>

        <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>

    <div class="mt-3 text-center">
        <small><a href="register_step1.php">Don't have an account? Register</a></small>
    </div>
</div>

<script>
function togglePassword() {
    const input = document.getElementById('passwordInput');
    const btn = event.target;
    if (input.type === "password") {
        input.type = "text";
        btn.textContent = "Hide";
    } else {
        input.type = "password";
        btn.textContent = "Show";
    }
}
</script>

</body>
</html>
