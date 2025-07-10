<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

$pageTitle = "Syria - Discover the Rich History and Culture";
$pageDescription = "Explore the rich history, culture, and beauty of one of the world's oldest civilizations.";
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syrië - Ontdek de Rijke Geschiedenis en Cultuur</title>
    <meta name="description" content="Ontdek de fascinerende geschiedenis, rijke cultuur en prachtige landschappen van Syrië. Een complete gids over dit historische land.">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>
<?php include 'includes/header.php'; ?>

<main>
<section class="hero hero-new">
  <div class="overlay">
    <h1> Discover Syria</h1>
    <p class="lead">A journey through history, culture and resilience</p>
    <a href="about-syria.php" class="btn btn-primary">Start Your Journey</a>
  </div>
</section>

<section class="story">
  <div class="container">
    <h2>Why Syria?</h2>
    <p>
      From the bustling souks of Damascus to the timeless ruins of Palmyra,
      Syria is a land where East meets West, and history lives in every street.
      Discover its ancient heritage, colorful culture, and the stories of its resilient people.
    </p>
  </div>
</section>

<section class="highlights-grid">
  <div class="highlight-card">
    <img src="images/palmyra-ruins.jpg" alt="Palmyra">
    <h3>Palmyra</h3>
    <p>The pearl of the desert, a UNESCO World Heritage site.</p>
    <a href="cities.php" class="btn btn-secondary">Read More</a>
  </div>
  <div class="highlight-card">
    <img src="images/aleppo-citadel.jpg" alt="Aleppo Citadel">
    <h3>Aleppo</h3>
    <p>A city of resilience with its iconic citadel and markets.</p>
    <a href="cities.php" class="btn btn-secondary">Read More</a>
  </div>
  <div class="highlight-card">
    <img src="images/damascus-old-city.jpg" alt="Damascus">
    <h3>Damascus</h3>
    <p>The world’s oldest capital, full of stories and traditions.</p>
    <a href="cities.php" class="btn btn-secondary">Read More</a>
  </div>
</section>

<section class="call-to-action">
  <div class="container">
    <h2>Explore All Cities & Provinces</h2>
    <p>See the beauty and diversity of every corner of Syria</p>
    <a href="cities.php" class="btn btn-primary">Explore Map</a>
  </div>
</section>

</main>
<script src="js/main.js"></script>

<?php include 'includes/footer.php'; ?>

