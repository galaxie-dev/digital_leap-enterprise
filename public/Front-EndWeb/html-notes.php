<?php


// Database credentials
$host     = "localhost";
$username = "root";         
$password = "";             
$database = "digital_leap";  

// Create a new MySQLi connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// OSet character set to UTF-8
$conn->set_charset("utf8mb4");

$html_course_id = 5; 

$notes_data = [];
if ($conn) {
    // Prepare a statement to fetch all notes for the specific HTML course, ordered by section_order
    $stmt = $conn->prepare("SELECT note_title, note_content, section_order FROM course_notes WHERE course_id = ? ORDER BY section_order ASC");
    if ($stmt) {
        $stmt->bind_param("i", $html_course_id);
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            $notes_data[] = $row;
        }
        $stmt->close();
    } else {
        // Handle database query preparation error
        error_log("Failed to prepare statement for fetching HTML notes: " . $conn->error);
        // You might want to display a user-friendly message on the page
        $error_message = "Could not load notes. Please try again later.";
    }
} else {
    // Handle database connection error (if auth.php didn't connect)
    $error_message = "Database connection failed. Notes cannot be displayed.";
}

$user = null;
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $stmt = $conn->prepare("SELECT name FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Leap - HTML Notes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <link href="../../css/animate.min.css" rel="stylesheet">
    <link href="../../css/owl.carousel.min.css" rel="stylesheet">
    <link href="../../css/bootst.css" rel="stylesheet">
    <link href="../../css/about.css" rel="stylesheet">
    <link href="../../css/notes.css" rel="stylesheet"> <style>
        /* Add any specific styles for this page here if not in notes.css */
        .note-section {
            margin-bottom: 2rem;
            padding: 1.5rem;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .note-section h2, .note-section h3 {
            color: #06BBCC; /* A primary color from your theme */
            margin-bottom: 1rem;
        }
        .note-section pre {
            background-color: #e8e8e8;
            padding: 1rem;
            border-radius: 5px;
            overflow-x: auto; /* Ensures code blocks are scrollable if too wide */
        }
        .note-section code {
            font-family: 'Consolas', 'Monaco', 'Andale Mono', 'Ubuntu Mono', monospace;
            font-size: 0.9em;
            color: #333;
        }
        .progress-container {
            background-color: #e0e0e0;
            border-radius: 10px;
            height: 20px;
            margin-bottom: 20px;
            overflow: hidden;
        }
        .progress-fill {
            height: 100%;
            width: 0%;
            background-color: #06BBCC;
            border-radius: 10px;
            text-align: center;
            color: white;
            line-height: 20px;
            transition: width 0.5s ease-in-out;
        }
        .progress-text {
            text-align: center;
            margin-top: 5px;
            font-weight: bold;
        }
        .menu-item.active {
            font-weight: bold;
            color: #06BBCC; /* Highlight active menu item */
        }
        .menu-item a {
            display: block;
            padding: 8px 15px;
            text-decoration: none;
            color: #333;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .menu-item a:hover {
            background-color: #e0e0e0;
        }
        .submenu {
            padding-left: 20px;
        }
        .submenu a {
            font-size: 0.9em;
            padding: 5px 10px;
        }
    </style>
</head>
<body>

    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0" style="opacity: 1; top: 0px;">
        <a href="../../index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>Digital Leap</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="../../index.php" class="nav-item nav-link">Home</a>
                <a href="../../about.php" class="nav-item nav-link">About</a>
                <a href="../../courses.php" class="nav-item nav-link active">Courses</a>
                <a href="../../e-library.php" class="nav-item nav-link">eLibrary</a>
                <a href="../../contact.php" class="nav-item nav-link">Contact</a>
                <?php if ($user): ?>
                    <a href="../../profile.php" class="nav-item nav-link">Welcome, <?php echo htmlspecialchars($user['name']); ?></a>
                    <a href="../../logout.php" class="nav-item nav-link">Logout</a>
                <?php else: ?>
                    <a href="../../login.php" class="nav-item nav-link">Login</a>
                    <a href="../../register.php" class="nav-item nav-link">Register</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">HTML Notes</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="../../index.php">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="../../courses.php">Courses</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">HTML Notes</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-3">
                <div class="bg-light rounded p-4 sticky-top" style="top: 100px;">
                    <h4 class="mb-4">HTML Topics</h4>
                    <ul class="list-unstyled" id="notes-menu">
                        <?php foreach ($notes_data as $note): ?>
                            <li class="menu-item">
                                <a href="#section-<?php echo htmlspecialchars($note['section_order']); ?>" data-content="html_section_<?php echo htmlspecialchars($note['section_order']); ?>">
                                    <?php echo htmlspecialchars($note['note_title']); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="progress-container mt-4">
                        <div class="progress-fill" id="progress-fill">0%</div>
                    </div>
                    <div class="progress-text" id="progress-percent">0%</div>
                    <div class="progress-text" id="completed-topics">0 of <?php echo count($notes_data); ?> topics completed</div>
                </div>
            </div>

            <div class="col-lg-9">
                <?php if (!empty($notes_data)): ?>
                    <?php foreach ($notes_data as $note): ?>
                        <div class="note-section" id="section-<?php echo htmlspecialchars($note['section_order']); ?>">
                            <?php echo $note['note_content']; ?>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-center text-danger"><?php echo $error_message ?? 'No HTML notes found. Please ensure the course ID is correct and notes are inserted into the database.'; ?></p>
                <?php endif; ?>

                <div class="text-center mt-5">
                    <a href="../../courses.php" class="btn btn-primary py-3 px-5">Back to Courses</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="../../about.php">About Us</a>
                    <a class="btn btn-link" href="../../contact.php">Contact Us</a>
                    <a class="btn btn-link" href="#">Privacy Policy</a>
                    <a class="btn btn-link" href="#">Terms &amp; Condition</a>
                    <a class="btn btn-link" href="#">FAQs &amp; Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Nairobi, Kenya</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+254 712 345678</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@digitalleap.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        © <a class="border-bottom" href="#">Digital Leap</a>, All Rights Reserved.
                        Designed By <a class="border-bottom" href="https://evansosumba.vercel.app" target="_blank">Galaxie-dev</a> | 2025
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../js/wow.min.js"></script>
    <script src="../../js/easing.min.js"></script>
    <script src="../../js/waypoints.min.js"></script>
    <script src="../../js/owl.carousel.min.js"></script>

    <script src="../../js/main.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const notesMenu = document.getElementById('notes-menu');
            const sections = document.querySelectorAll('.note-section');
            const totalSections = sections.length;

            // Scroll to section when menu item is clicked
            notesMenu.addEventListener('click', function(e) {
                if (e.target.tagName === 'A' && e.target.getAttribute('href').startsWith('#')) {
                    e.preventDefault();
                    const targetId = e.target.getAttribute('href').substring(1);
                    const targetSection = document.getElementById(targetId);
                    if (targetSection) {
                        targetSection.scrollIntoView({ behavior: 'smooth' });
                    }
                }
            });

            // Update active menu item and progress on scroll
            window.addEventListener('scroll', updateLearningProgress);

            function updateLearningProgress() {
                let completedSections = 0;
                let currentActiveSectionId = '';

                sections.forEach(section => {
                    const rect = section.getBoundingClientRect();
                    // Check if the section is at least partially in view
                    if (rect.top <= window.innerHeight / 2 && rect.bottom >= window.innerHeight / 2) {
                        currentActiveSectionId = section.id;
                    }
                    // Consider a section "completed" if its top is above the viewport center
                    if (rect.top < window.innerHeight / 2) {
                        completedSections++;
                    }
                });

                // Highlight active menu item
                document.querySelectorAll('#notes-menu .menu-item').forEach(item => {
                    item.classList.remove('active');
                    const link = item.querySelector('a');
                    if (link && link.getAttribute('href') === '#' + currentActiveSectionId) {
                        item.classList.add('active');
                    }
                });

                // Ensure completedSections doesn't exceed totalSections
                completedSections = Math.min(completedSections, totalSections);

                // Update progress bar
                const progressPercent = totalSections > 0 ? Math.round((completedSections / totalSections) * 100) : 0;
                document.getElementById('progress-fill').style.width = progressPercent + '%';
                document.getElementById('progress-percent').textContent = progressPercent + '%';
                document.getElementById('completed-topics').textContent =
                    completedSections + ' of ' + totalSections + ' topics completed';
            }

            // Initial progress update on load
            updateLearningProgress();
        });
    </script>

</body>
</html>
