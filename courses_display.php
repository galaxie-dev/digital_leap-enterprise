<?php

session_start();

$servername = "localhost";
$username = "root";  // Default for XAMPP
$password = "";      // Default for XAMPP, but use your password if set
$dbname = "digital_leap";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (isset($_GET['course_id'])) {
    $course_id = $conn->real_escape_string($_GET['course_id']);
    $sql = "SELECT * FROM courses WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $course_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $course = $result->fetch_assoc();
} else {
    header("Location: courses.php");
    exit();
}


if ($course === null) {
    echo "No course found with this ID.";
    exit;
}

// Function to clean and format text
function cleanText($text) {
    $text = preg_replace("/\r\n|\r|\n/", "<br>", $text);
    $text = str_replace("\\r", "", $text);
    $text = str_replace("\\n", "", $text);
    $text = htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
    $text = stripslashes($text);
    return $text;
}

$course['about_course'] = cleanText($course['about_course']);
$course['career_opportunities'] = cleanText($course['career_opportunities']);
$course['additional_info'] = cleanText($course['additional_info']);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($course['course_name']); ?> - Digital Leap</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
    <style>
        /* Additional styles for the admin-like layout */
        .admin-container {
            display: flex;
            min-height: 100vh;
            background-color: #f5f7fa;
        }
        
        .sidebar {
            width: 280px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 20px 0;
        }
        
        .main-content {
            flex: 1;
            padding: 20px;
            background-color: var(--light);
        }
        
        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .sidebar-menu li {
            position: relative;
        }
        
        .sidebar-menu a {
            display: block;
            padding: 12px 20px;
            color: var(--dark);
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .sidebar-menu a:hover {
            background-color: rgba(6, 92, 204, 0.1);
            color: var(--primary);
        }
        
        .sidebar-menu .active > a {
            background-color: rgba(6, 92, 204, 0.1);
            color: var(--primary);
            border-left: 3px solid var(--primary);
        }
        
        .menu-header {
            padding: 15px 20px;
            text-transform: uppercase;
            font-weight: 600;
            color: var(--dark);
            font-size: 14px;
            letter-spacing: 0.5px;
        }
        
        .submenu {
            list-style: none;
            padding-left: 20px;
            display: none;
        }
        
        .submenu a {
            padding: 10px 20px 10px 30px;
            font-size: 14px;
        }
        
        .menu-item.has-submenu > a::after {
            content: '\f078';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            float: right;
            font-size: 12px;
            transition: transform 0.3s;
        }
        
        .menu-item.has-submenu.active > a::after {
            transform: rotate(180deg);
        }
        
        .course-content {
            background: white;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        }
        
        .course-image {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        
        .section-title {
            position: relative;
            margin-bottom: 20px;
            padding-bottom: 10px;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 3px;
            background: var(--primary);
        }
    </style>
</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status"></div>
    </div>
    <!-- Spinner End -->

    <div class="admin-container">
        <!-- Sidebar Navigation -->
        <div class="sidebar">
            <ul class="sidebar-menu">
                <li class="menu-header">Course Content</li>
                
                <!-- Main Topics (would be fetched from database in real implementation) -->
                <li class="menu-item has-submenu active">
                    <a href="#"><i class="fas fa-code me-2"></i> Web Development</a>
                    <ul class="submenu" style="display: block;">
                        <!-- Subtopic 1 (active by default) -->
                        <li class="active"><a href="#" data-content="about"><i class="fas fa-circle me-2" style="font-size: 8px;"></i> About the Course</a></li>
                        <!-- Other subtopics -->
                        <li><a href="#" data-content="career"><i class="fas fa-circle me-2" style="font-size: 8px;"></i> Career Opportunities</a></li>
                        <li><a href="#" data-content="info"><i class="fas fa-circle me-2" style="font-size: 8px;"></i> Additional Information</a></li>
                        <!-- More subtopics would be added dynamically from database -->
                    </ul>
                </li>
                
                <li class="menu-item has-submenu">
                    <a href="#"><i class="fas fa-database me-2"></i> Database</a>
                    <ul class="submenu">
                        <li><a href="#"><i class="fas fa-circle me-2" style="font-size: 8px;"></i> SQL Basics</a></li>
                        <li><a href="#"><i class="fas fa-circle me-2" style="font-size: 8px;"></i> Advanced Queries</a></li>
                    </ul>
                </li>
                <li class="menu-item has-submenu active">
                    <a href="#"><i class="fas fa-code me-2"></i> Web Development</a>
                    <ul class="submenu" style="display: block;">
                        <!-- Subtopic 1 (active by default) -->
                        <li class="active"><a href="#" data-content="about"><i class="fas fa-circle me-2" style="font-size: 8px;"></i> About the Course</a></li>
                        <!-- Other subtopics -->
                        <li><a href="#" data-content="career"><i class="fas fa-circle me-2" style="font-size: 8px;"></i> Career Opportunities</a></li>
                        <li><a href="#" data-content="info"><i class="fas fa-circle me-2" style="font-size: 8px;"></i> Additional Information</a></li>
                        <!-- More subtopics would be added dynamically from database -->
                    </ul>
                </li>
                
                <li class="menu-item has-submenu">
                    <a href="#"><i class="fas fa-database me-2"></i> Database</a>
                    <ul class="submenu">
                        <li><a href="#"><i class="fas fa-circle me-2" style="font-size: 8px;"></i> SQL Basics</a></li>
                        <li><a href="#"><i class="fas fa-circle me-2" style="font-size: 8px;"></i> Advanced Queries</a></li>
                    </ul>
                </li>
                <!-- More main topics would be added here -->
            </ul>
        </div>
        
        <!-- Main Content Area -->
        <div class="main-content">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="mb-0"><?php echo htmlspecialchars($course['course_name']); ?></h2>
                <a href="courses.php" class="btn btn-primary return-to-courses">Return to Courses</a>
            </div>
            
            <div class="course-content">
                <!-- Default content shown (About the Course) -->
                <div id="about-content" class="content-section">
                    <img src="<?php echo htmlspecialchars($course['course_image']); ?>" alt="<?php echo htmlspecialchars($course['course_name']); ?>" class="course-image">
                    <h3 class="section-title">About the Course</h3>
                    <div class="section-content">
                        <?php echo $course['about_course']; ?>
                    </div>
                </div>
                
                <!-- Career Opportunities (hidden by default) -->
                <div id="career-content" class="content-section" style="display: none;">
                    <h3 class="section-title">Career Opportunities</h3>
                    <div class="section-content">
                        <?php echo $course['career_opportunities']; ?>
                    </div>
                </div>
                
                <!-- Additional Information (hidden by default) -->
                <div id="info-content" class="content-section" style="display: none;">
                    <h3 class="section-title">Additional Information</h3>
                    <div class="section-content">
                        <?php echo $course['additional_info']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            // Handle menu toggling
            $('.has-submenu > a').click(function(e) {
                e.preventDefault();
                $(this).parent().toggleClass('active');
                $(this).next('.submenu').slideToggle();
            });
            
            // Handle content switching when subtopics are clicked
            $('.submenu a').click(function(e) {
                e.preventDefault();
                
                // Update active state in menu
                $('.submenu li').removeClass('active');
                $(this).parent().addClass('active');
                
                // Get which content to show
                var contentId = $(this).data('content');
                
                // Hide all content sections
                $('.content-section').hide();
                
                // Show the selected content
                $('#' + contentId + '-content').show();
            });
            
            // Hide spinner when page is loaded
            setTimeout(function() {
                $('#spinner').fadeOut();
            }, 500);
        });
    </script>
</body>
</html>