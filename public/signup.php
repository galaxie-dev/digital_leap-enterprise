<?php
session_start();
require_once 'includes/auth.php'; 

// Form submission handler
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data here
    $name = $conn->real_escape_string($_POST['name'] ?? '');
    $email = $conn->real_escape_string($_POST['email'] ?? '');
    $phone = $conn->real_escape_string($_POST['phone'] ?? '');
    $age = intval($_POST['age'] ?? 0);
    $gender = $conn->real_escape_string($_POST['gender'] ?? '');
    $program = $conn->real_escape_string($_POST['program'] ?? '');

    // SQL to insert data into the join_us table
    $sql = "INSERT INTO users (name, email, phone, age, program) VALUES ('$name', '$email', '$phone', '$age', '$gender', '$program')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Form submitted successfully!'); window.location.href='thank_you.php';</script>";
    } else {
        echo "Error : " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Digital Leap | Join us</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="" rel="icon">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/owl.carousel.min.css" rel="stylesheet">
    <link href="../css/bootst.css" rel="stylesheet">
    <link href="../css/about.css" rel="stylesheet">
</head>

<body>



    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>Digital Leap</h2>
        </a>       
   
    </nav>
    <!-- Navbar End -->


    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h2 class="mb-4">Join Digital Leap Africa</h2>
                    <form id="studentRegistrationForm" class="student-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="e.g. Jane Doe" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="e.g. jane@example.com" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="+254712345678" required>
                        </div>

                        <div class="mb-3">
                            <label for="age" class="form-label">Age</label>
                            <input type="number" class="form-control" id="age" name="age" min="10" max="100" placeholder="e.g. 22" required>
                        </div>

                        <div class="mb-3">
                            <label for="program" class="form-label">Course of Interest</label>
                            <select class="form-select" id="program" name="program" required>
                                <option value="" disabled selected>Select a course</option>
                                <option value="Web Development">Web Development</option>
                                <option value="Mobile App Development">Mobile App Development</option>
                                <option value="Data Science & AI">Data Science & AI</option>
                                <option value="Cybersecurity">Cybersecurity</option>
                                <option value="Graphic Design">Graphic Design</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                                <option value="UI/UX Design">UI/UX Design</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="level" class="form-label">Current Skill Level</label>
                            <select class="form-select" id="level" name="level" required>
                                <option value="" disabled selected>Select your skill level</option>
                                <option value="Beginner">Beginner</option>
                                <option value="Intermediate">Intermediate</option>
                                <option value="Advanced">Advanced</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="learning_mode" class="form-label">Preferred Learning Mode</label>
                            <select class="form-select" id="learning_mode" name="learning_mode" required>
                                <option value="" disabled selected>Select one</option>
                                <option value="Self-paced">Self-paced</option>
                                <option value="Instructor-led">Instructor-led</option>
                                <option value="Live Online Classes">Live Online Classes</option>
                                <option value="Weekend Bootcamps">Weekend Bootcamps</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="availability" class="form-label">Your Availability</label>
                            <select class="form-select" id="availability" name="availability" required>
                                <option value="" disabled selected>When are you available to learn?</option>
                                <option value="Weekdays (Morning)">Weekdays (Morning)</option>
                                <option value="Weekdays (Evening)">Weekdays (Evening)</option>
                                <option value="Weekends Only">Weekends Only</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="goals" class="form-label">Learning Goals</label>
                            <textarea class="form-control" id="goals" name="goals" rows="3" placeholder="e.g. I want to become a full-stack developer within 6 months..." required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="referral" class="form-label">How did you hear about us?</label>
                            <select class="form-select" id="referral" name="referral">
                                <option value="" disabled selected>Select one</option>
                                <option value="Google Search">Google Search</option>
                                <option value="Social Media (Instagram, TikTok, etc.)">Social Media</option>
                                <option value="Friend or Family">Friend or Family</option>
                                <option value="School or College">School or College</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary w-100">Create Account</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/easing.min.js"></script>
    <script src="../js/waypoints.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>