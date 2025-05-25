<?php
session_start();
require_once 'includes/auth.php';

// Redirect to login if not authenticated
$user_id = $_SESSION['user_id'] ?? null;
if (!$user_id) {
    header('Location: login.php');
    exit;
}

// Fetch user data
$sql = "SELECT name, email, phone, profile_picture FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();

$error = '';
$success = '';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string(trim($_POST['name'] ?? ''));
    $phone = $conn->real_escape_string(trim($_POST['phone'] ?? ''));
    $profile_picture_path = $user['profile_picture'];

    // Validate inputs
    if (empty($name) || empty($phone)) {
        $error = 'Name and phone are required.';
    } elseif (strlen($name) < 2 || strlen($name) > 100) {
        $error = 'Name must be between 2 and 100 characters.';
    } elseif (!preg_match("/^\+?[1-9]\d{1,14}$/", $phone)) {
        $error = 'Invalid phone number format (e.g., +254123456789).';
    } elseif (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] == UPLOAD_ERR_OK) {
        // Validate profile picture
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        $max_size = 2 * 1024 * 1024; // 2MB
        $file_type = $_FILES['profile_picture']['type'];
        $file_size = $_FILES['profile_picture']['size'];

        if (!in_array($file_type, $allowed_types)) {
            $error = 'Only JPEG, PNG, or GIF images are allowed.';
        } elseif ($file_size > $max_size) {
            $error = 'Image size must not exceed 2MB.';
        } else {
            $upload_dir = 'profile-pic/';
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0755, true);
            }

            // Delete old picture if exists
            if ($profile_picture_path && file_exists($profile_picture_path)) {
                unlink($profile_picture_path);
            }

            $ext = pathinfo($_FILES['profile_picture']['name'], PATHINFO_EXTENSION);
            $new_filename = $upload_dir . 'user_' . $user_id . '.' . $ext;
            if (move_uploaded_file($_FILES['profile_picture']['tmp_name'], $new_filename)) {
                $profile_picture_path = $new_filename;
            } else {
                $error = 'Failed to upload profile picture.';
            }
        }
    }

    // Update database if no errors
    if (empty($error)) {
        $update_sql = "UPDATE users SET name = ?, phone = ?, profile_picture = ? WHERE id = ?";
        $stmt = $conn->prepare($update_sql);
        $stmt->bind_param("sssi", $name, $phone, $profile_picture_path, $user_id);
        if ($stmt->execute()) {
            $success = 'Profile updated successfully!';
            // Update user data for display
            $user['name'] = $name;
            $user['phone'] = $phone;
            $user['profile_picture'] = $profile_picture_path;
        } else {
            $error = 'Error updating profile: ' . $stmt->error;
        }
        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Dashboard - Digital Leap</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Digital Leap Dashboard" name="keywords">
    <meta content="Manage your Digital Leap profile, update personal details, and upload a profile picture." name="description">

    <!-- Favicon -->
    <link href="images/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/owl.carousel.min.css" rel="stylesheet">
    <link href="../css/bootst.css" rel="stylesheet">
    <link href="../css/about.css" rel="stylesheet">
</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

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
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="about.php" class="nav-item nav-link">Blog</a>
                <a href="courses.php" class="nav-item nav-link">Courses</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
                <a href="dashboard.php" class="nav-item nav-link active">Welcome, <?php echo htmlspecialchars($user['name']); ?></a>
                <a href="logout.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Logout<i class="fa fa-sign-out-alt ms-3"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Dashboard Content -->
    <div class="container py-5">
        <h2 class="mb-4">Your Profile</h2>
        <?php if (!empty($success)): ?>
            <div class="alert alert-success"><?php echo htmlspecialchars($success); ?></div>
        <?php elseif (!empty($error)): ?>
            <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>
        <div class="row">
            <div class="col-lg-8">
                <form method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="<?php echo htmlspecialchars($user['name']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" class="form-control" value="<?php echo htmlspecialchars($user['email']); ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" name="phone" id="phone" class="form-control" value="<?php echo htmlspecialchars($user['phone']); ?>" pattern="\+?[1-9]\d{1,14}" placeholder="+254123456789" required>
                    </div>
                    <div class="mb-3">
                        <label for="profile_picture" class="form-label">Profile Picture (1:1, max 2MB)</label><br>
                        <?php if ($user['profile_picture']): ?>
                            <img src="<?php echo htmlspecialchars($user['profile_picture']); ?>" width="150" height="150" style="object-fit: cover; border-radius: 50%;" alt="Profile Picture"><br><br>
                        <?php endif; ?>
                        <input type="file" name="profile_picture" id="profile_picture" accept="image/jpeg,image/png,image/gif" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Profile</button>
                </form>
            </div>
            <div class="col-lg-4">
                <h4>Account Details</h4>
                <p><strong>Name:</strong> <?php echo htmlspecialchars($user['name']); ?></p>
                <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
                <p><strong>Phone:</strong> <?php echo htmlspecialchars($user['phone']); ?></p>
                <?php if ($user['profile_picture']): ?>
                    <p><strong>Profile Picture:</strong><br>
                    <img src="<?php echo htmlspecialchars($user['profile_picture']); ?>" width="100" height="100" style="object-fit: cover; border-radius: 50%;" alt="Profile Picture"></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- Dashboard Content End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/easing.min.js"></script>
    <script src="../js/waypoints.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>
</html>