<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>eLibrary - Digital Leap</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Contact Digital Leap" name="keywords">
    <meta content="Get in touch with Digital Leap for inquiries about our courses and community." name="description">

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
                <a href="blog.php" class="nav-item nav-link">Blog</a>
                <a href="e-library.php" class="nav-item nav-link">eLibrary</a
                <a href="contact.php" class="nav-item nav-link active">Contact</a>
                <?php if ($user): ?>
                    <a href="dashboard.php" class="nav-item nav-link">Welcome, <?php echo htmlspecialchars($user['name']); ?></a>
                    <a href="logout.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Logout<i class="fa fa-sign-out-alt ms-3"></i></a>
                <?php else: ?>
                    <a href="register_step1.php" class="nav-item nav-link">Join Now</a>
                    <a href="login.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Log In<i class="fa fa-arrow-right ms-3"></i></a>
                <?php endif; ?>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">eLibrary</h6>
                <h1 class="mb-5">Get Books from Our Store</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="mb-4">This book introduces you to python taking you through all the fundamentals
                        you need to know regarding python</p>
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <!-- <i class="fa fa-map-marker-alt text-white"></i> -->
                            <i class="fa fa-book text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Python For The Future</h5>
                            <p class="mb-0">By Kenny Roggers</p>
                            <h6 class="text-primary">124 pages</h6>
                        </div>
                    </div>                  
                </div>      
                
                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="mb-4">This book introduces you to python taking you through all the fundamentals
                        you need to know regarding python</p>
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <!-- <i class="fa fa-map-marker-alt text-white"></i> -->
                            <i class="fa fa-book text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Python For The Future</h5>
                            <p class="mb-0">By Kenny Roggers</p>
                            <h6 class="text-primary">124 pages</h6>
                        </div>
                    </div>                  
                </div> 

                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="mb-4">This book introduces you to python taking you through all the fundamentals
                        you need to know regarding python</p>
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <!-- <i class="fa fa-map-marker-alt text-white"></i> -->
                            <i class="fa fa-book text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Python For The Future</h5>
                            <p class="mb-0">By Kenny Roggers</p>
                            <h6 class="text-primary">124 pages</h6>
                        </div>
                    </div>                  
                </div> 

                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="mb-4">This book introduces you to python taking you through all the fundamentals
                        you need to know regarding python</p>
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <!-- <i class="fa fa-map-marker-alt text-white"></i> -->
                            <i class="fa fa-book text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Python For The Future</h5>
                            <p class="mb-0">By Kenny Roggers</p>
                            <h6 class="text-primary">124 pages</h6>
                        </div>
                    </div>                  
                </div> 

                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="mb-4">This book introduces you to python taking you through all the fundamentals
                        you need to know regarding python</p>
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <!-- <i class="fa fa-map-marker-alt text-white"></i> -->
                            <i class="fa fa-book text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Python For The Future</h5>
                            <p class="mb-0">By Kenny Roggers</p>
                            <h6 class="text-primary">124 pages</h6>
                        </div>
                    </div>                  
                </div> 
         
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Westlands, Nairobi, Kenya</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+254793033363</p>
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
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

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