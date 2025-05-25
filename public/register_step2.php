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
        echo "Survey submitted! Thank you.";

            $_SESSION['user_id'] = $stmt->insert_id;
            header("Location: index1.php");        
    
        session_destroy();
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>



<!DOCTYPE html>
<html>
<head><title>Register - Step 2</title></head>
<body>
<h2>Tell Us About You</h2>
<form method="POST">
    <label>Date of Birth: <input type="date" name="dob" required></label><br>
    <label>Field of Interest:
        <select name="program" required>
            <option value="Web Development">Web Development</option>
            <option value="Mobile Development">Mobile Development</option>
            <option value="Data Science">Data Science</option>
            <option value="Cybersecurity">Cybersecurity</option>
        </select>
    </label><br>
    <label>Skill Level:
        <select name="skill_level" required>
            <option value="Newbie">Newbie</option>
            <option value="Beginner">Beginner</option>
            <option value="Comfortable">Comfortable</option>
            <option value="Confident">Confident</option>
            <option value="Pro">Pro</option>
        </select>
    </label><br>
    <label>Goals:<br>
        <textarea name="goals" required></textarea>
    </label><br>
    <label>Referral:
        <select name="referral" required>
            <option value="Google Search">Google Search</option>
            <option value="Social Media">Social Media</option>
            <option value="Friend">Friend</option>
            <option value="School">School</option>
        </select>
    </label><br>
    <button type="submit">Submit Survey</button>
</form>
</body>
</html>
