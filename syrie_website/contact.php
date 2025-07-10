<?php
session_start();

require_once __DIR__ . '/includes/PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/includes/PHPMailer/src/SMTP.php';
require_once __DIR__ . '/includes/PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'includes/config.php';
require_once 'includes/functions.php';

$message = '';
$message_type = '';

if (isset($_GET['success']) && $_GET['success'] == 1) {
    $message = 'Thank you for your message! You will receive a confirmation email.';
    $message_type = 'success';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyCSRFToken($_POST['csrf_token'] ?? '')) {
        $message = 'Security error. Please try again.';
        $message_type = 'error';
    } else {
        $name = trim($_POST['name'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $subject = trim($_POST['subject'] ?? '');
        $contact_message = trim($_POST['message'] ?? '');

        $errors = [];

        if (empty($name)) $errors[] = 'Name is required';
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid email is required';
        if (empty($subject)) $errors[] = 'Subject is required';
        if (empty($contact_message)) $errors[] = 'Message is required';

        if (empty($errors)) {
            try {
                $mail = new PHPMailer(true);
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'sameerloul2010@gmail.com';
                $mail->Password = 'xeglplpqsdyjcrfq';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                // Mail to YOU
                $mail->setFrom($email, $name);
                $mail->addAddress('sameerloul2010@gmail.com', 'Website Contact');
                $mail->Subject = "New contact message from {$name}";
                $mail->isHTML(true);
                $mail->Body = "<p><strong>From:</strong> {$name} ({$email})</p><p>{$contact_message}</p>";
                $mail->send();

                // Mail to VISITOR
                $mailVisitor = new PHPMailer(true);
                $mailVisitor->isSMTP();
                $mailVisitor->Host = 'smtp.gmail.com';
                $mailVisitor->SMTPAuth = true;
                $mailVisitor->Username = 'sameerloul2010@gmail.com';
                $mailVisitor->Password = 'xeglplpqsdyjcrfq';
                $mailVisitor->SMTPSecure = 'tls';
                $mailVisitor->Port = 587;

                $mailVisitor->setFrom('sameerloul2010@gmail.com', 'Syria Website');
                $mailVisitor->addAddress($email, $name);
                $mailVisitor->Subject = "We received your message";
                $mailVisitor->isHTML(true);
                $mailVisitor->Body = "<p>We have received your message and will get back to you soon.</p>";
                $mailVisitor->send();

                // Redirect to avoid resubmission
                header("Location: contact.php?success=1");
                exit;

            } catch (Exception $e) {
                $message = 'Message could not be sent. Mailer Error: ' . $e->getMessage();
                $message_type = 'error';
            }
        } else {
            $message = 'Please fix: ' . implode(', ', $errors);
            $message_type = 'error';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact - Syria</title>
<meta name="description" content="Contact us for questions about Syria, website suggestions, or general information.">
<link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php include 'includes/header.php'; ?>

<main>
<section class="hero" style="background: linear-gradient(rgba(139,69,19,0.8),rgba(218,165,32,0.8)), url('images/contact-hero.jpg') center/cover;">
<h1>Contact</h1>
<p>Contact us for questions or suggestions</p>
</section>

<section class="contact-section">
<div class="grid grid-2">

<div class="contact-form-container">
<h2>Send us a message</h2>

<?php if ($message): ?>
<div class="message <?php echo $message_type; ?>">
<?php echo htmlspecialchars($message); ?>
</div>
<?php endif; ?>

<form method="POST" class="contact-form">
<input type="hidden" name="csrf_token" value="<?php echo generateCSRFToken(); ?>">

<div class="form-group">
<label for="name">Name *</label>
<input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name ?? ''); ?>" required>
</div>

<div class="form-group">
<label for="email">Email Address *</label>
<input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email ?? ''); ?>" required>
</div>

<div class="form-group">
<label for="subject">Subject *</label>
<input type="text" id="subject" name="subject" value="<?php echo htmlspecialchars($subject ?? ''); ?>" required>
</div>

<div class="form-group">
<label for="message">Message *</label>
<textarea id="message" name="message" rows="6" required><?php echo htmlspecialchars($contact_message ?? ''); ?></textarea>
</div>

<button type="submit" class="btn btn-primary">Send Message</button>
</form>
</div>

<div class="contact-info">
<h2>Contact Information</h2>
<p>Email: syriawebsite@gmail.com.com</p>
<p>This site is maintained from The heart. We usually respond within 24 hours.</p>
<img class="hart" src="https:/"  alt="">
<img class="https:"  alt="">


</div>


</div>
</section>
</main>

<?php include 'includes/footer.php'; ?>
<style>
.hart {
  width: 250px;
  margin-left: 250px;
  margin-top: 100px;
  aspect-ratio: 1;
  object-fit: cover;
  --_m: radial-gradient(#000 69%,#0000 70%) 84.5%/50%;
  -webkit-mask-box-image: var(--_m);
             mask-border: var(--_m);
  clip-path: polygon(-41% 0,50% 91%, 141% 0);
  outline: 100vmax solid #ff3e60;
  outline-offset: -100vmax;
  transition: .7s;
  cursor: pointer;
}
img:hover {
  outline-color: #0000;
}

/* fallback until better support for mask-border */
@supports not (-webkit-mask-box-image: var(--_m)) { 
  img {
   --_m:
     radial-gradient(at 70% 31%,#000 29%,#0000 30%),
     radial-gradient(at 30% 31%,#000 29%,#0000 30%),
     linear-gradient(#000 0 0) bottom/100% 50% no-repeat;
   -webkit-mask: var(--_m);
           mask: var(--_m);
  }
}


</style>
<script>
document.addEventListener("DOMContentLoaded", () => {
  const heart = document.querySelector(".heart-animation");
  setTimeout(() => {
    heart.classList.add("pulse");
  }, 1500); // wacht tot alle puntjes verschijnen
});
</script>
<script src="js/main.js"></script>

</body>
</html>
