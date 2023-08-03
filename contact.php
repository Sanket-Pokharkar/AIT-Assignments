<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/stylecon.css">
</head>
<body>
<?php require_once('heder.php'); ?>
  </div>
  <div class="container">
    <h2>Contact Us</h2>
    <form>
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="text" name="email" placeholder="Your Email" required>
      <textarea name="message" placeholder="Your Message" required></textarea>
      <input type="submit" value="Submit">
    </form>
  </div>
  <?php require_once('footer.php'); ?>
</body>
</html>
