<?php
     session_start();
     require_once 'includes/auth.php';

     if (!isset($_SESSION['user_id'])) {
         header("Location: login.php");
         exit;
     }

     if (isset($_GET['course_id'])) {
         $user_id = $_SESSION['user_id'];
         $course_id = intval($_GET['course_id']);

         // Check if already enrolled
         $stmt = $conn->prepare("SELECT id FROM enrollments WHERE user_id = ? AND course_id = ?");
         $stmt->bind_param("ii", $user_id, $course_id);
         $stmt->execute();
         $result = $stmt->get_result();
         if ($result->num_rows == 0) {
             // Enroll user
             $stmt = $conn->prepare("INSERT INTO enrollments (user_id, course_id) VALUES (?, ?)");
             $stmt->bind_param("ii", $user_id, $course_id);
             if ($stmt->execute()) {
                 // Update student count
                 $stmt = $conn->prepare("UPDATE courses SET student_count = student_count + 1 WHERE id = ?");
                 $stmt->bind_param("i", $course_id);
                 $stmt->execute();
                 header("Location: courses.php?success=Enrolled successfully");
             } else {
                 header("Location: courses.php?error=Enrollment failed");
             }
         } else {
             header("Location: courses.php?error=Already enrolled");
         }
         $stmt->close();
     } else {
         header("Location: courses.php?error=Invalid course");
     }
     exit;
     ?>