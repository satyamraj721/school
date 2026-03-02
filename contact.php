<?php
$formSuccess = '';
$formError = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = trim($_POST['name'] ?? '');
  $email = trim($_POST['email'] ?? '');
  $message = trim($_POST['message'] ?? '');

  if ($name === '' || $email === '' || $message === '') {
    $formError = 'Please fill out all fields.';
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $formError = 'Please enter a valid email address.';
  } else {
    $formSuccess = 'Thank you! Your message has been received. Our team will contact you shortly.';
  }
}
?>

<?php include 'includes/header.php'; ?>

<section class="page-hero text-center">
  <div class="container">
    <h1 class="fw-bold">Contact Us</h1>
    <p class="mb-0">Get in touch for admissions, counseling, and batch details.</p>
  </div>
</section>

<section class="section-padding">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-6">
        <div class="card card-premium p-4 h-100">
          <h3 class="section-title h4">Send us a Message</h3>

          <?php if ($formSuccess !== ''): ?>
            <div class="alert alert-success" role="alert"><?php echo htmlspecialchars($formSuccess); ?></div>
          <?php endif; ?>

          <?php if ($formError !== ''): ?>
            <div class="alert alert-danger" role="alert"><?php echo htmlspecialchars($formError); ?></div>
          <?php endif; ?>

          <form method="POST" action="contact.php" novalidate>
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Enter your name" required />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Enter your email" required />
            </div>
            <div class="mb-4">
              <label for="message" class="form-label">Message</label>
              <textarea class="form-control" id="message" name="message" rows="5" placeholder="Write your message" required></textarea>
            </div>
            <button type="submit" class="btn btn-success px-4 py-2">Submit</button>
          </form>

          <a href="https://wa.me/919876543210" target="_blank" rel="noopener" class="btn whatsapp-btn mt-4">
            <i class="bi bi-whatsapp me-2"></i>Contact on WhatsApp
          </a>
        </div>
      </div>
      <div class="col-lg-6">
        <iframe class="map-frame h-100" src="https://maps.google.com/maps?q=Piro%20Bihar&t=&z=13&ie=UTF8&iwloc=&output=embed" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/contact-info-cards.php'; ?>

<?php include 'includes/footer.php'; ?>