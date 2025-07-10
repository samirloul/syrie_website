<?php
require_once 'includes/config.php';

$basename = basename($_SERVER['SCRIPT_NAME']); // bijv. damascus.php
$stmt = $pdo->prepare("SELECT * FROM cities_provinces WHERE content_file = ?");
$stmt->execute([$basename]);
$city = $stmt->fetch();

if (!$city) {
    http_response_code(404);
    die("City not found.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?= escape($city['name']) ?> - <?= SITE_NAME ?></title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <h1><?= escape($city['name']) ?></h1>
    <h2><?= escape($city['tagline']) ?></h2>
</header>
<main>
    <img src="<?= IMAGE_DIR . escape($city['hero_image']) ?>" alt="<?= escape($city['name']) ?>">
    <p><?= nl2br(escape($city['description'])) ?></p>
</main>
</body>
</html>
