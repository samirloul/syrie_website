<?php
if (!isset($city_data)) {
    die("City data not provided.");
}

// config & functies
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/functions.php';

$pageTitle = htmlspecialchars($city_data['title']) . ' - Syria Website';
$pageDescription = htmlspecialchars($city_data['description']);

include '../includes/header.php';
?>

<main class="city-content-section">
    <h1><?= htmlspecialchars($city_data['title']) ?></h1>
    <h2><?= htmlspecialchars($city_data['tagline']) ?></h2>

    <img src="../<?= htmlspecialchars($city_data['hero_image']) ?>" alt="<?= htmlspecialchars($city_data['title']) ?>" class="city-hero-image">

    <p class="city-description"><?= htmlspecialchars($city_data['description']) ?></p>

    <div class="city-main-content">
        <?= $city_data['content'] ?>
    </div>
</main>

<?php include 'footer.php'; ?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syrië - Ontdek de Rijke Geschiedenis en Cultuur</title>
    <meta name="description" content="Ontdek de fascinerende geschiedenis, rijke cultuur en prachtige landschappen van Syrië. Een complete gids over dit historische land.">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
</head>
<body>