<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

$pageTitle = "About Syria - General Information";
$pageDescription = "Learn all about Syria: location, population, languages, religion, and general information about this fascinating country.";

include 'includes/header.php';
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
<body></body>

<main>
    <section class="hero" style="background: linear-gradient(rgba(139, 69, 19, 0.8), rgba(218, 165, 32, 0.8)), url('images/syria-new-flag.jpg'); background-size: cover; background-position: center;">
        <h1>About Syria</h1>
        <p>Discover basic information about the Syrian Arab Republic</p>
    </section>
    
    <section class="content-section">
        <div class="grid grid-2">
            <div class="content-text">
                <h2>General Information</h2>
                <p><strong>Official Name:</strong> Syrian Arab Republic (الجمهورية العربية السورية)</p>
                <p><strong>Capital:</strong> Damascus (دمشق)</p>
                <p><strong>Area:</strong> 185,180 km²</p>
                <p><strong>Population:</strong> Approximately 18 million inhabitants (pre-2011 figures, current estimates vary significantly due to conflict and displacement)</p>
                <p><strong>Official Language:</strong> Arabic</p>
                <p><strong>Currency:</strong> Syrian Pound (SYP)</p>
                <p><strong>Time Zone:</strong> UTC+2 (EET)</p>
                <p><strong>Form of Government:</strong> Presidential Republic (currently under a transitional government as of July 2025)</p>
            </div>
            <div class="info-image">
                <img src="images/syria-map.jpg" alt="Map of Syria" loading="lazy">
            </div>
        </div>
    </section>
    
    <section class="geography-section">
        <h2 class="text-center mb-2">Geographical Location</h2>
        <div class="card">
            <p>Syria is located in Western Asia and borders several countries:</p>
            <ul style="margin: 1rem 0; padding-left: 2rem;">
                <li><strong>North:</strong> Turkey (822 km border)</li>
                <li><strong>East and Southeast:</strong> Iraq (605 km border)</li>
                <li><strong>South:</strong> Jordan (375 km border)</li>
                <li><strong>Southwest:</strong> Israel and the Golan Heights (76 km border)</li>
                <li><strong>West:</strong> Lebanon (375 km border)</li>
                <li><strong>Northwest:</strong> Mediterranean Sea (193 km coastline)</li>
            </ul>
            <p>The country holds a strategic location at the crossroads of Europe, Asia, and Africa, which has historically made it an important trade route.</p>
        </div>
    </section>
    
    <section class="demographics-section">
        <h2 class="text-center mb-2">Population and Culture</h2>
        <div class="grid grid-3">
            <div class="card">
                <h3>Ethnic Groups</h3>
                <ul style="list-style: none; padding: 0;">
                    <li>🔸 Arabs (90%)</li>
                    <li>🔸 Kurds (9%)</li>
                    <li>🔸 Armenians, Circassians, Turkmens, and others (1%)</li>
                </ul>
            </div>
            
            <div class="card">
                <h3>Religions</h3>
                <ul style="list-style: none; padding: 0;">
                    <li>🕌 Sunnis (74%)</li>
                    <li>🕌 Alawites (12%)</li>
                    <li>✝️ Christians (10%)</li>
                    <li>🕌 Druze and others (4%)</li>
                </ul>
            </div>
            
            <div class="card">
                <h3>Languages</h3>
                <ul style="list-style: none; padding: 0;">
                    <li>🗣️ Arabic (official)</li>
                    <li>🗣️ Kurdish</li>
                    <li>🗣️ Armenian</li>
                    <li>🗣️ Aramaic</li>
                    <li>🗣️ Circassian</li>
                </ul>
            </div>
        </div>
    </section>
    
    <section class="climate-section">
        <h2 class="text-center mb-2">Climate and Landscape</h2>
        <div class="grid grid-2">
            <div class="card">
                <h3>Climate Zones</h3>
                <p><strong>Mediterranean climate:</strong> Along the coast with mild, wet winters and warm, dry summers.</p>
                <p><strong>Continental climate:</strong> Inland with hot summers and cold winters.</p>
                <p><strong>Desert climate:</strong> In the east and south with very little precipitation.</p>
            </div>
            
            <div class="card">
                <h3>Landscapes</h3>
                <p><strong>Coastal area:</strong> Narrow plain along the Mediterranean Sea.</p>
                <p><strong>Mountain ranges:</strong> Alawite Mountains and Anti-Lebanon.</p>
                <p><strong>Plains:</strong> Fertile plains around Damascus and Aleppo.</p>
                <p><strong>Desert:</strong> Syrian Desert in the east.</p>
            </div>
        </div>
    </section>
    
    <section class="cities-section">
        <h2 class="text-center mb-2">Important Cities</h2>
        <div class="grid grid-3">
            <div class="card">
                <img src="images/damascus-old-city.jpg" alt="Damascus" loading="lazy">
                <h3>Damascus</h3>
                <p>The capital and largest city of Syria. One of the oldest continuously inhabited cities in the world with a rich history of over 4000 years. As of July 2025, Damascus is under the control of the transitional government, facing ongoing reconstruction efforts and security challenges.</p>
            </div>
            
            <div class="card">
                <img src="images/aleppo.jpg" alt="Aleppo" loading="lazy">
                <h3>Aleppo</h3>
                <p>Historically Syria's largest city and an important commercial center. Known for its ancient citadel and traditional souks. Aleppo is undergoing significant rebuilding efforts as of July 2025, with residents returning despite continued challenges.</p>
            </div>
            
            <div class="card">
                <img src="images/homs-city.jpg" alt="Homs" loading="lazy">
                <h3>Homs</h3>
                <p>A major industrial city in central Syria, located on the Orontes River. Homs is also in a phase of reconstruction, with some areas showing signs of recovery while others still bear the scars of conflict as of July 2025.</p>
            </div>
        </div>
    </section>
    
    <section class="quick-facts">
        <h2 class="text-center mb-2">Quick Facts</h2>
        <div class="grid grid-2">
            <div class="card">
                <h3>Historical Significance</h3>
                <ul>
                    <li>Cradle of civilization</li>
                    <li>Part of the Silk Road</li>
                    <li>Center of the Umayyad Caliphate</li>
                    <li>UNESCO World Heritage Sites (some currently endangered)</li>
                </ul>
            </div>
            
            <div class="card">
                <h3>Cultural Richness</h3>
                <ul>
                    <li>Diverse religious traditions</li>
                    <li>Rich culinary culture</li>
                    <li>Traditional crafts</li>
                    <li>Music and dance traditions</li>
                </ul>
            </div>
        </div>
    </section>
    
    <section class="cta-section text-center" style="background: linear-gradient(135deg, var(--accent-color), var(--secondary-color)); color: white; padding: 3rem 2rem; border-radius: 15px; margin: 3rem 0;">
        <h2>Discover More</h2>
        <p>Delve deeper into the specific aspects of Syria</p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-top: 2rem;">
            <a href="history.php" class="btn" style="background: white; color: var(--accent-color);">History</a>
            <a href="culture.php" class="btn" style="background: white; color: var(--accent-color);">Culture</a>
            <a href="geography.php" class="btn" style="background: white; color: var(--accent-color);">Geography</a>
            <a href="economy.php" class="btn" style="background: white; color: var(--accent-color);">Economy</a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>

<script src="js/main.js"></script>
</body>
</html>


