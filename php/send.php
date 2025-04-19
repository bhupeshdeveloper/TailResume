<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name    = htmlspecialchars($_POST['name'] ?? '');
  $email   = htmlspecialchars($_POST['email'] ?? '');
  $message = htmlspecialchars($_POST['message'] ?? '');

  // For now, just simulate a send (you can integrate with mail or DB later)
  if ($name && $email && $message) {
    $success = true;
  } else {
    $success = false;
  }
}
?>

<?php include 'header.php'; ?>
<section class="py-16">
  <div class="container mx-auto text-center">
    <?php if (!empty($success) && $success): ?>
      <h2 class="text-3xl font-bold text-green-600 mb-4">Thank you!</h2>
      <p class="text-gray-700">Your message has been received. I'll get back to you soon.</p>
    <?php else: ?>
      <h2 class="text-3xl font-bold text-red-600 mb-4">Oops!</h2>
      <p class="text-gray-700">Something went wrong. Please make sure you filled out all fields.</p>
    <?php endif; ?>
    <a href="contact.php" class="mt-6 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Go Back</a>
  </div>
</section>
<?php include 'footer.php'; ?>
