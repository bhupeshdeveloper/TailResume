<?php include 'header.php'; ?>
<section class="py-16 bg-white">
  <div class="container mx-auto max-w-xl">
    <h2 class="text-3xl font-bold text-center mb-6">Contact Me</h2>
    <form class="space-y-4" method="POST" action="send.php">
      <input type="text" name="name" placeholder="Your Name" class="w-full border px-4 py-2 rounded" required>
      <input type="email" name="email" placeholder="Your Email" class="w-full border px-4 py-2 rounded" required>
      <textarea name="message" placeholder="Your Message" class="w-full border px-4 py-2 rounded h-32" required></textarea>
      <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Send Message</button>
    </form>
  </div>
</section>
<?php include 'footer.php'; ?>
