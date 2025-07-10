<?php
// Database configuration
$host = "localhost";
$dbname = "syrie_think";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Website configuration
define("SITE_NAME", "Syria - Discover its Rich History and Culture");
define("SITE_URL", "http://localhost/syrie_website");
define("ADMIN_EMAIL", "admin@syria-website.local");

// Upload directories
define("UPLOAD_DIR", "uploads/");
define("IMAGE_DIR", "images/");

// Start session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Set timezone
date_default_timezone_set("Europe/Amsterdam"); // Or a more relevant timezone for Syria if preferred

// Error reporting (for development)
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Function for safe output
function escape($string) {
    return htmlspecialchars($string, ENT_QUOTES, "UTF-8");
}
define('BASE_URL', '/syrie/syrie_website/');
define('BASE_PATH', dirname(__DIR__));

?>


