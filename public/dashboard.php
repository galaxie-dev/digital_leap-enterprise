<?php
session_start();
require_once 'includes/auth.php'; 

$user_id = $_SESSION['user_id'] ?? null;
if (!$user_id) {
    header('Location: login.php');
    exit();
}

// Fetch user data
$sql = "SELECT name, email, phone, profile_picture FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Handle update
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    // $dob = $_POST['dob'];
    // $program = $_POST['program'];
    $profile_picture_path = $user['profile_picture'];

    if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] == 0) {
        $upload_dir = 'profile-pic/';
        if (!is_dir($upload_dir)) mkdir($upload_dir);

        if ($profile_picture_path && file_exists($profile_picture_path)) {
            unlink($profile_picture_path);
        }

        $ext = pathinfo($_FILES['profile_picture']['name'], PATHINFO_EXTENSION);
        $new_filename = $upload_dir . 'user_' . $user_id . '.' . $ext;
        move_uploaded_file($_FILES['profile_picture']['tmp_name'], $new_filename);
        $profile_picture_path = $new_filename;
    }

    $update_sql = "UPDATE users SET name=?, phone=?, profile_picture=? WHERE id=?";
    $stmt = $conn->prepare($update_sql);
    $stmt->bind_param("sisi", $name, $phone, $profile_picture_path, $user_id);
    $stmt->execute();
    header('Location: dashboard.php');
    exit();
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
   
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0"> 
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>Digital Leap</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">Blog</a>
                <a href="courses.php" class="nav-item nav-link">Courses</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <!-- <a href="join_now.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a> -->
        </div>
    </nav>
    <!-- Navbar End -->

    <div class="container py-4">
    <h2 class="mb-4">Your Profile</h2>
    <form method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label>Full Name</label>
            <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($user['name']) ?>" required>
        </div>
        <div class="mb-3">
            <label>Phone</label>
            <input type="tel" name="phone" class="form-control" value="<?= htmlspecialchars($user['phone']) ?>" required>
        </div>
        <!-- <div class="mb-3">
            <label>Age</label>
            <input type="number" name="age" class="form-control" value="<?= htmlspecialchars($user['age']) ?>" required>
        </div>
        <div class="mb-3">
            <label>Course of Interest</label>
            <input type="text" name="program" class="form-control" value="<?= htmlspecialchars($user['program']) ?>" required>
        </div> -->
        <div class="mb-3">
            <label>Profile Picture (1:1)</label><br>
            <?php if ($user['profile_picture']): ?>
                <img src="<?= $user['profile_picture'] ?>" width="150" height="150" style="object-fit: cover; border-radius: 50%;"><br><br>
            <?php endif; ?>
            <input type="file" name="profile_picture" accept="image/*" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
</div>



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