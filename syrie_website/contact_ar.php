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
    $message = 'شكراً لتواصلك معنا! ستصلك رسالة تأكيد على بريدك الإلكتروني.';
    $message_type = 'success';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyCSRFToken($_POST['csrf_token'] ?? '')) {
        $message = 'خطأ أمني. الرجاء المحاولة مرة أخرى.';
        $message_type = 'error';
    } else {
        $name = trim($_POST['name'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $subject = trim($_POST['subject'] ?? '');
        $contact_message = trim($_POST['message'] ?? '');

        $errors = [];

        if (empty($name)) $errors[] = 'الاسم مطلوب';
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'بريد إلكتروني صحيح مطلوب';
        if (empty($subject)) $errors[] = 'الموضوع مطلوب';
        if (empty($contact_message)) $errors[] = 'الرسالة مطلوبة';

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

                $mail->setFrom($email, $name);
                $mail->addAddress('sameerloul2010@gmail.com', 'Website Contact');
                $mail->Subject = "رسالة جديدة من {$name}";
                $mail->isHTML(true);
                $mail->Body = "<p><strong>من:</strong> {$name} ({$email})</p><p>{$contact_message}</p>";
                $mail->send();

                $mailVisitor = new PHPMailer(true);
                $mailVisitor->isSMTP();
                $mailVisitor->Host = 'smtp.gmail.com';
                $mailVisitor->SMTPAuth = true;
                $mailVisitor->Username = 'sameerloul2010@gmail.com';
                $mailVisitor->Password = 'xeglplpqsdyjcrfq';
                $mailVisitor->SMTPSecure = 'tls';
                $mailVisitor->Port = 587;

                $mailVisitor->setFrom('sameerloul2010@gmail.com', 'موقع سوريا');
                $mailVisitor->addAddress($email, $name);
                $mailVisitor->Subject = "استلمنا رسالتك";
                $mailVisitor->isHTML(true);
                $mailVisitor->Body = "<p>لقد استلمنا رسالتك وسنقوم بالرد عليك قريباً.</p>";
                $mailVisitor->send();

                header("Location: contact_ar.php?success=1");
                exit;

            } catch (Exception $e) {
                $message = 'لم يتم إرسال الرسالة. خطأ: ' . $e->getMessage();
                $message_type = 'error';
            }
        } else {
            $message = 'يرجى تصحيح: ' . implode('، ', $errors);
            $message_type = 'error';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>اتصل بنا - سوريا</title>
<meta name="description" content="اتصل بنا للاستفسارات حول سوريا أو اقتراحات على الموقع أو معلومات عامة.">
<link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php include 'includes/header.php'; ?>

<main>
<section class="hero" style="background: linear-gradient(rgba(139,69,19,0.8),rgba(218,165,32,0.8)), url('images/contact-hero.jpg') center/cover;">
<h1>اتصل بنا</h1>
<p>تواصل معنا لأي استفسار أو اقتراح</p>
</section>

<section class="contact-section">
<div class="grid grid-2">

<div class="contact-form-container">
<h2>أرسل لنا رسالة</h2>

<?php if ($message): ?>
<div class="message <?php echo $message_type; ?>">
<?php echo htmlspecialchars($message); ?>
</div>
<?php endif; ?>

<form method="POST" class="contact-form">
<input type="hidden" name="csrf_token" value="<?php echo generateCSRFToken(); ?>">

<div class="form-group">
<label for="name">الاسم *</label>
<input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name ?? ''); ?>" required>
</div>

<div class="form-group">
<label for="email">البريد الإلكتروني *</label>
<input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email ?? ''); ?>" required>
</div>

<div class="form-group">
<label for="subject">الموضوع *</label>
<input type="text" id="subject" name="subject" value="<?php echo htmlspecialchars($subject ?? ''); ?>" required>
</div>

<div class="form-group">
<label for="message">الرسالة *</label>
<textarea id="message" name="message" rows="6" required><?php echo htmlspecialchars($contact_message ?? ''); ?></textarea>
</div>

<button type="submit" class="btn btn-primary">إرسال</button>
</form>
</div>

<div class="contact-info">
<h2>معلومات الاتصال</h2>
<p>البريد الإلكتروني: abdsam1243@gmail.com</p>
<p>يتم إدارة هذا الموقع بكل حب ❤️. نرد عادة خلال 24 ساعة.</p>
</section>
</main>
<?php include 'includes/footer_ar.php'; ?>
<script>
document.addEventListener("DOMContentLoaded", () => {
  const heart = document.querySelector(".hart");
  if (heart) {
    setTimeout(() => {
      heart.classList.add("pulse");
    }, 1500);
  }
});
</script>
<script src="js/main.js"></script>

</body>
</html>
