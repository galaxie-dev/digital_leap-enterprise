<?php
session_start();
require_once 'includes/auth.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: register_step1.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dob        = $_POST['dob'] ?? '';
    $program    = $_POST['program'] ?? '';
    $skill      = $_POST['skill_level'] ?? '';
    $goals      = $_POST['goals'] ?? '';
    $referral   = $_POST['referral'] ?? '';
    $user_id    = $_SESSION['user_id'];

    $stmt = $conn->prepare("INSERT INTO user_surveys (user_id, dob, program, skill_level, goals, referral) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssss", $user_id, $dob, $program, $skill, $goals, $referral);

    if ($stmt->execute()) {
        $conn->query("UPDATE users SET survey_completed = 1 WHERE id = $user_id");
        header("Location: index1.php");
        exit();
    } else {
        $error = "Error: " . $stmt->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - Step 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            max-width: 600px;
            margin: 5% auto;
            padding: 30px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body class="bg-light">

<div class="form-container">
    <h3 class="mb-4 text-center">Tell Us About You</h3>

    <?php if (!empty($error)): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form method="POST">
        <div class="mb-3">
            <label>Date of Birth</label>
            <input type="date" name="dob" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Field of Interest</label>
            <select name="program" class="form-select" required>
                <option value="">Choose...</option>
                <option>Web Development</option>
                <option>Mobile Development</option>
                <option>Data Science</option>
                <option>Cybersecurity</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Skill Level</label>
            <select name="skill_level" class="form-select" required>
                <option value="">Choose...</option>
                <option>Newbie</option>
                <option>Beginner</option>
                <option>Comfortable</option>
                <option>Confident</option>
                <option>Pro</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Your Learning Goals</label>
            <textarea name="goals" class="form-control" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label>How did you hear about us?</label>
            <select name="referral" class="form-select" required>
                <option value="">Choose...</option>
                <option>Google Search</option>
                <option>Social Media</option>
                <option>Friend</option>
                <option>School</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success w-100">Submit Survey</button>
    </form>
</div>

</body>
</html>
