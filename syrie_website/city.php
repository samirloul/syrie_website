<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

$city_name = isset($_GET['name']) ? strtolower(trim($_GET['name'])) : '';

if (empty($city_name)) {
    header('Location: cities.php');
    exit;
}

$content_file = 'content/' . $city_name . '.php';

if (!file_exists($content_file)) {
    // Fallback or error handling if content file not found
    header('Location: cities.php'); // Redirect back to cities overview
    exit;
}

// Include the content file to get city-specific data
include $content_file;

// Ensure required variables are set by the content file
if (!isset($city_data) || !is_array($city_data)) {
    header('Location: cities.php');
    exit;
}

$page_title = $city_data['title'] . ' - Syria';
$page_description = $city_data['description'];
$hero_image = isset($city_data['hero_image']) ? $city_data['hero_image'] : 'images/cities-hero.jpg';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <main>
        <section class="hero" style="background: linear-gradient(rgba(139, 69, 19, 0.8), rgba(218, 165, 32, 0.8)), url('<?php echo htmlspecialchars($hero_image); ?>'); background-size: cover; background-position: center;">
            <h1><?php echo htmlspecialchars($city_data['title']); ?></h1>
            <p><?php echo htmlspecialchars($city_data['tagline']); ?></p>
        </section>
        
        <section class="city-content-section">
            <div class="container">
                <?php echo $city_data['content']; // This will contain the HTML content for the city ?>
            </div>
        </section>
    </main>
    
    <?php include 'includes/footer.php'; ?>
    
    <script src="js/main.js"></script>
</body>
</html>


