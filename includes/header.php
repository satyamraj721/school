<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>C.B.S.C Hybrid School</title>
  <meta name="description" content="C.B.S.C Hybrid School - NEET & IIT-JEE Foundation Coaching Institute" />
  <link rel="icon" type="image/png" href="assets/images/logo.png" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top cbsc-navbar shadow-sm">
    <div class="container">
      <a class="navbar-brand school-brand d-flex align-items-center" href="index.php">
        <img src="assets/images/logo.png" alt="C.B.S.C Hybrid School Logo" class="school-logo me-2" />
        <span class="school-name fw-bold">C.B.S.C Hybrid School</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link <?php echo $currentPage === 'index.php' ? 'active' : ''; ?>" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link <?php echo $currentPage === 'about.php' ? 'active' : ''; ?>" href="about.php">About</a></li>
          <li class="nav-item"><a class="nav-link <?php echo $currentPage === 'courses.php' ? 'active' : ''; ?>" href="courses.php">Courses</a></li>
          <li class="nav-item"><a class="nav-link <?php echo $currentPage === 'gallery.php' ? 'active' : ''; ?>" href="gallery.php">Gallery</a></li>
          <li class="nav-item"><a class="nav-link <?php echo $currentPage === 'contact.php' ? 'active' : ''; ?>" href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <main>