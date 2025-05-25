<?php
session_start();
require_once 'includes/auth.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = trim($_POST['name'] ?? '');
    $email    = trim($_POST['email'] ?? '');
    $phone    = trim($_POST['phone'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm  = $_POST['confirm_password'] ?? '';

    if ($password !== $confirm) {
        die("Passwords do not match.");
    }

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (name, email, phone, password) VALUES (?, ?, ?, ?)");

    if ($stmt) {
        $stmt->bind_param("ssss", $name, $email, $phone, $password_hash);

        if ($stmt->execute()) {
            $_SESSION['user_id'] = $stmt->insert_id;
            header("Location: register_step2.php");
            exit();
        } else {
            echo "Error executing query: " . $stmt->error;
        }
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
}
?>


<!DOCTYPE html>
<html>
<head><title>Register - Step 1</title></head>
<body>
<h2>Create Your Account</h2>
<form method="POST">
    <input name="name" placeholder="Full Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input name="phone" placeholder="Phone" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <input type="password" name="confirm_password" placeholder="Confirm Password" required><br>
    <button type="submit">Next</button>
</form>
</body>
</html>
