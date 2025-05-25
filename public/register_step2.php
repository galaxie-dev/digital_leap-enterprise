<?php
session_start();
require_once 'includes/auth.php';
if (!isset($_SESSION['user_id'])) {
    header("Location: register_step1.php");
    exit;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dob = $conn->real_escape_string($_POST['dob'] ?? '');
    $program = $conn->real_escape_string($_POST['program'] ?? '');
    $skill_level = $conn->real_escape_string($_POST['skill_level'] ?? '');
    $goals = $conn->real_escape_string($_POST['goals'] ?? '');
    $referral = $conn->real_escape_string($_POST['referral'] ?? '');
    if (empty($dob) || empty($program) || empty($skill_level) || empty($goals) || empty($referral)) {
        echo "<script>alert('All fields are required.');</script>";
    } else {
        $user_id = $_SESSION['user_id'];
        $stmt = $conn->prepare("INSERT INTO user_surveys (user_id, dob, program, skill_level, goals, referral) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isssss", $user_id, $dob, $program, $skill_level, $goals, $referral);
        if ($stmt->execute()) {
            $stmt = $conn->prepare("UPDATE users SET survey_completed = 1 WHERE id = ?");
            $stmt->bind_param("i", $user_id);
            $stmt->execute();
            header("Location: index.php");
            exit;
        } else {
            echo "<script>alert('Error: " . $stmt->error . "');</script>";
        }
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
                <label for="dob" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob" required>
            </div>
            <div class="mb-3">
                <label for="program" class="form-label">Program of Interest</label>
                <select class="form-control" id="program" name="program" required>
                    <option value="Web Design">Web Design</option>
                    <option value="Graphic Design">Graphic Design</option>
                    <option value="Video Editing">Video Editing</option>
                    <option value="Online Marketing">Online Marketing</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="skill_level" class="form-label">Skill Level</label>
                <select class="form-control" id="skill_level" name="skill_level" required>
                    <option value="Beginner">Beginner</option>
                    <option value="Intermediate">Intermediate</option>
                    <option value="Advanced">Advanced</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="goals" class="form-label">Learning Goals</label>
                <textarea class="form-control" id="goals" name="goals" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="referral" class="form-label">How Did You Hear About Us?</label>
                <input type="text" class="form-control" id="referral" name="referral" required>
            </div>
            <button type="submit" class="btn btn-primary">Complete Registration</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>