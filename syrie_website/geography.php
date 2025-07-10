<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geography of Syria - Landscapes and Cities</title>
    <meta name="description" content="Discover the diverse geography of Syria: from the Mediterranean coast to the desert, from mountain ranges to fertile plains.">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <main>
        <section class="hero" style="background: linear-gradient(rgba(139, 69, 19, 0.8), rgba(218, 165, 32, 0.8)), url('images/syria-new-flag.jpg'); background-size: cover; background-position: center;">
            <h1>Geography of Syria</h1>
            <p>Discover the diverse landscapes of this fascinating country</p>
        </section>
        
        <!-- General Geography -->
        <section class="overview-section">
            <div class="grid grid-2">
                <div class="card">
                    <h2>Geographical Overview</h2>
                    <p><strong>Area:</strong> 185,180 km² (approximately 71,498 sq mi)</p>
                    <p><strong>Location:</strong> Western Asia, on the eastern coast of the Mediterranean Sea</p>
                    <p><strong>Coordinates:</strong> 35°00'N, 38°00'E</p>
                    <p><strong>Highest point:</strong> Mount Hermon (2,814 m / 9,232 ft)</p>
                    <p><strong>Lowest point:</strong> Sea of Galilee (-200 m / -656 ft)</p>
                    <p><strong>Coastline:</strong> 193 km (120 mi) along the Mediterranean Sea</p>
                </div>
                
                <div class="card">
                    <h2>Borders</h2>
                    <p>Syria borders five countries and holds a strategic location:</p>
                    <ul>
                        <li><strong>North:</strong> Turkey (822 km / 511 mi)</li>
                        <li><strong>East:</strong> Iraq (605 km / 376 mi)</li>
                        <li><strong>South:</strong> Jordan (375 km / 233 mi)</li>
                        <li><strong>Southwest:</strong> Israel (76 km / 47 mi)</li>
                        <li><strong>West:</strong> Lebanon (375 km / 233 mi)</li>
                        <li><strong>Northwest:</strong> Mediterranean Sea (193 km / 120 mi)</li>
                    </ul>
                </div>
            </div>
        </section>
        
        <!-- Landscapes -->
        <section class="landscapes-section">
            <h2 class="text-center mb-2">Diverse Landscapes</h2>
            
            <div class="grid grid-2">
                <div class="card">
                    <h3>🏖️ Coastal Area</h3>
                    <p>The narrow coastal strip along the Mediterranean Sea is approximately 15-30 km (9-19 mi) wide. This area has a Mediterranean climate with mild winters and warm summers.</p>
                    <p><strong>Important cities:</strong> Latakia, Tartus, Baniyas</p>
                    <p><strong>Characteristics:</strong> Sandy beaches, citrus plantations, tobacco fields</p>
                </div>
                
                <div class="card">
                    <h3>⛰️ Mountain Ranges</h3>
                    <p>Two major mountain ranges dominate western Syria:</p>
                    <p><strong>Alawite Mountains:</strong> Runs parallel to the coast, highest point 1,562 m (5,125 ft)</p>
                    <p><strong>Anti-Lebanon:</strong> Forms the border with Lebanon, including Mount Hermon</p>
                    <p><strong>Characteristics:</strong> Dense forests, cool temperatures, snow in winter</p>
                </div>
                
                <div class="card">
                    <h3>🌾 Fertile Plains</h3>
                    <p>Between the mountain ranges lie fertile plains that constitute Syria's agricultural areas.</p>
                    <p><strong>Ghab Plain:</strong> Between the mountain ranges, important for agriculture</p>
                    <p><strong>Hauran Plain:</strong> In the south, known for wheat cultivation</p>
                    <p><strong>Characteristics:</strong> Rich soil, irrigation, primary food production</p>
                </div>
                
                <div class="card">
                    <h3>🏜️ Desert Regions</h3>
                    <p>The eastern part of Syria is dominated by the Syrian Desert.</p>
                    <p><strong>Syrian Desert:</strong> Part of the Arabian Desert</p>
                    <p><strong>Palmyra Desert:</strong> Historically important trade area</p>
                    <p><strong>Characteristics:</strong> Arid climate, oases, nomadic traditions</p>
                </div>
            </div>
        </section>
        
        <!-- Rivers and Water Bodies -->
        <section class="water-section">
            <h2 class="text-center mb-2">Rivers and Water Bodies</h2>
            
            <div class="grid grid-3">
                <div class="card">
                    <h3>🌊 Euphrates</h3>
                    <p>The most important river in Syria, flowing from northwest to southeast through the country.</p>
                    <p><strong>Length in Syria:</strong> ~675 km (419 mi)</p>
                    <p><strong>Significance:</strong> Irrigation, electricity, transport</p>
                    <p><strong>Cities:</strong> Raqqa, Deir ez-Zor</p>
                </div>
                
                <div class="card">
                    <h3>🏞️ Orontes</h3>
                    <p>Flows northward through Western Syria to Turkey and the Mediterranean Sea.</p>
                    <p><strong>Length:</strong> ~571 km (355 mi) total</p>
                    <p><strong>Significance:</strong> Agriculture in the Ghab Plain</p>
                    <p><strong>Cities:</strong> Homs, Hama</p>
                </div>
                
                <div class="card">
                    <h3>💧 Other Water Bodies</h3>
                    <p><strong>Khabur:</strong> Tributary of the Euphrates</p>
                    <p><strong>Barada:</strong> River near Damascus</p>
                    <p><strong>Lake Assad:</strong> Artificial lake behind the Tabqa Dam</p>
                    <p><strong>Sea of Galilee:</strong> Shared with Israel</p>
                </div>
            </div>
        </section>
        
        <!-- Climate -->
        <section class="climate-section">
            <h2 class="text-center mb-2">Climate</h2>
            
            <div class="grid grid-2">
                <div class="card">
                    <h3>🌤️ Climate Zones</h3>
                    <p><strong>Mediterranean climate (West):</strong></p>
                    <ul>
                        <li>Mild, wet winters (10-15°C / 50-59°F)</li>
                        <li>Warm, dry summers (25-30°C / 77-86°F)</li>
                        <li>Precipitation: 600-1000 mm/year (24-39 in/year)</li>
                    </ul>
                    
                    <p><strong>Continental climate (Inland):</strong></p>
                    <ul>
                        <li>Cold winters (0-10°C / 32-50°F)</li>
                        <li>Hot summers (30-40°C / 86-104°F)</li>
                        <li>Precipitation: 200-600 mm/year (8-24 in/year)</li>
                    </ul>
                    
                    <p><strong>Desert climate (East):</strong></p>
                    <ul>
                        <li>Very hot summers (40-50°C / 104-122°F)</li>
                        <li>Cool winters (5-15°C / 41-59°F)</li>
                        <li>Precipitation: <200 mm/year (<8 in/year)</li>
                    </ul>
                </div>
                
                <div class="card">
                    <h3>🌧️ Seasons</h3>
                    <p><strong>Winter (December-February):</strong></p>
                    <p>Rainy season, snow in the mountains, cool temperatures</p>
                    
                    <p><strong>Spring (March-May):</strong></p>
                    <p>Mild temperatures, blooming landscapes, ideal weather</p>
                    
                    <p><strong>Summer (June-August):</strong></p>
                    <p>Hot and dry, especially in the interior and desert</p>
                    
                    <p><strong>Autumn (September-November):</strong></p>
                    <p>Cooling down, beginning of the rainy season, pleasant temperatures</p>
                </div>
            </div>
        </section>
        
        <!-- Important Cities -->
        <section class="cities-section">
            <h2 class="text-center mb-2">Important Cities and Provinces</h2>
            
            <div class="grid grid-3">
                <div class="card">
                    <img src="images/damascus-old-city.jpg" alt="Damascus" loading="lazy">
                    <h3>Damascus</h3>
                    <p><strong>Population:</strong> ~2.5 million (current estimates vary)</p>
                    <p><strong>Location:</strong> Southwest, at the foot of the Anti-Lebanon mountains</p>
                    <p><strong>Characteristics:</strong> Capital, political center, Old City (UNESCO World Heritage). As of July 2025, Damascus is under the control of the transitional government, facing ongoing reconstruction efforts and security challenges, including recent attacks.</p>
                </div>
                
                <div class="card">
                    <img src="images/aleppo-citadel.jpg" alt="Aleppo" loading="lazy">
                    <h3>Aleppo</h3>
                    <p><strong>Population:</strong> ~2.1 million (pre-2011, current figures significantly lower due to conflict)</p>
                    <p><strong>Location:</strong> Northwest, on historical trade routes</p>
                    <p><strong>Characteristics:</strong> Commercial center, citadel, Old City (UNESCO World Heritage). Aleppo is undergoing significant rebuilding efforts as of July 2025, with residents returning despite continued challenges and the scars of conflict.</p>
                </div>
                
                <div class="card">
                    <img src="images/homs-city.jpg" alt="Homs" loading="lazy">
                    <h3>Homs</h3>
                    <p><strong>Population:</strong> ~1.3 million (current estimates vary)</p>
                    <p><strong>Location:</strong> Central, on the Orontes River</p>
                    <p><strong>Characteristics:</strong> Industrial center, crossroads. Homs is also in a phase of reconstruction, with some areas showing signs of recovery while others still bear the scars of conflict as of July 2025.</p>
                </div>
                
                <div class="card">
                    <img src="images/latakia-city.jpg" alt="Latakia" loading="lazy">
                    <h3>Latakia</h3>
                    <p><strong>Population:</strong> ~650,000 (current estimates vary)</p>
                    <p><strong>Location:</strong> Coastal, main port city</p>
                    <p><strong>Characteristics:</strong> Seaport, tourism, tobacco industry. As of July 2025, Latakia has been affected by significant wildfires, posing environmental and humanitarian challenges.</p>
                </div>
                
                <div class="card">
                    <img src="images/idlib-city.jpg" alt="Idlib" loading="lazy">
                    <h3>Idlib</h3>
                    <p><strong>Population:</strong> ~1.2 million (pre-2011, current figures significantly higher due to displacement)</p>
                    <p><strong>Location:</strong> Northwest, near the Turkish border</p>
                    <p><strong>Characteristics:</strong> Major center for displaced persons, complex humanitarian situation. As of July 2025, Idlib remains a highly contested area with ongoing humanitarian concerns and a large internally displaced population.</p>
                </div>
                
                <div class="card">
                    <img src="images/deir-ez-zor-city.jpg" alt="Deir ez-Zor" loading="lazy">
                    <h3>Deir ez-Zor</h3>
                    <p><strong>Population:</strong> ~400,000 (pre-2011, current figures vary)</p>
                    <p><strong>Location:</strong> East, on the Euphrates River</p>
                    <p><strong>Characteristics:</strong> Oil industry, agriculture. As of July 2025, Deir ez-Zor faces ongoing security challenges, including arrests related to Iranian forces and issues with unexploded ordnance, impacting returning residents.</p>
                </div>
            </div>
        </section>
        
        <!-- Natural Resources -->
        <section class="resources-section">
            <h2 class="text-center mb-2">Natural Resources</h2>
            
            <div class="grid grid-2">
                <div class="card">
                    <h3>⛽ Energy Sources</h3>
                    <p><strong>Petroleum:</strong> Primarily in the northeast and east</p>
                    <p><strong>Natural Gas:</strong> Reserves in various regions</p>
                    <p><strong>Hydropower:</strong> Dams on the Euphrates and Orontes</p>
                    <p><strong>Solar Energy:</strong> Great potential due to abundant sunlight</p>
                </div>
                
                <div class="card">
                    <h3>🏭 Minerals</h3>
                    <p><strong>Phosphate:</strong> Important export, especially from Palmyra area</p>
                    <p><strong>Salt:</strong> From salt lakes and salt pans</p>
                    <p><strong>Gypsum:</strong> For building materials</p>
                    <p><strong>Marble:</strong> From the mountainous regions</p>
                </div>
            </div>
        </section>
        
        <!-- Agriculture and Ecosystems -->
        <section class="agriculture-section">
            <h2 class="text-center mb-2">Agriculture and Ecosystems</h2>
            
            <div class="grid grid-3">
                <div class="card">
                    <h3>🌾 Agricultural Products</h3>
                    <p><strong>Grains:</strong> Wheat, barley, corn</p>
                    <p><strong>Fruits:</strong> Olives, citrus, grapes</p>
                    <p><strong>Vegetables:</strong> Tomatoes, cucumbers, onions</p>
                    <p><strong>Cotton:</strong> Important export product</p>
                </div>
                
                <div class="card">
                    <h3>🌳 Vegetation</h3>
                    <p><strong>Mediterranean vegetation:</strong> Along the coast</p>
                    <p><strong>Mountain forests:</strong> Oaks, pines, cedars</p>
                    <p><strong>Steppe:</strong> In the interior</p>
                    <p><strong>Desert vegetation:</strong> In the east</p>
                </div>
                
                <div class="card">
                    <h3>🦎 Fauna</h3>
                    <p><strong>Mammals:</strong> Gazelles, wild boars, jackals</p>
                    <p><strong>Birds:</strong> Birds of prey, migratory birds, waterfowl</p>
                    <p><strong>Reptiles:</strong> Lizards, snakes</p>
                    <p><strong>Endangered species:</strong> Syrian brown bear, Arabian oryx</p>
                </div>
            </div>
        </section>
        
        <!-- Environmental Challenges -->
        <section class="environment-section">
            <h2 class="text-center mb-2">Environmental Challenges</h2>
            
            <div class="grid grid-2">
                <div class="card">
                    <h3>💧 Water Scarcity</h3>
                    <p>Syria faces increasing water scarcity due to:</p>
                    <ul>
                        <li>Climate change and drought</li>
                        <li>Over-exploitation of groundwater</li>
                        <li>Pollution of water bodies</li>
                        <li>Dams in neighboring countries (Turkey)</li>
                    </ul>
                </div>
                
                <div class="card">
                    <h3>🌍 Other Challenges</h3>
                    <p><strong>Desertification:</strong> Expansion of desert areas</p>
                    <p><strong>Deforestation:</strong> Loss of mountain forests</p>
                    <p><strong>Air Pollution:</strong> In major cities</p>
                    <p><strong>Soil Erosion:</strong> Due to overgrazing and agriculture</p>
                </div>
            </div>
        </section>
        
        <!-- Protected Areas -->
        <section class="protected-areas-section">
            <h2 class="text-center mb-2">Protected Areas and Nature Parks</h2>
            
            <div class="card">
                <h3>🏞️ National Parks and Reserves</h3>
                <p>Syria has several protected areas to preserve its natural biodiversity:</p>
                <ul style="margin: 1rem 0; padding-left: 2rem;">
                    <li><strong>Al-Shouf Cedar Reserve</strong> (Lebanon, but relevant for regional context) - Protection of cedar forests</li>
                    <li><strong>Palmyra Reserve</strong> - Desert ecosystem around the historical site</li>
                    <li><strong>Coastal reserves</strong> - Protection of coastal ecosystems</li>
                    <li><strong>Wetland reserves</strong> - Important stopovers for migratory birds</li>
                </ul>
                <p>These areas are crucial for preserving Syria's unique flora and fauna and offer protection against further environmental degradation.</p>
            </div>
        </section>
    </main>
    
    <?php include 'includes/footer.php'; ?>
    
    <script src="js/main.js"></script>
    
    <style>
        .climate-section ul {
            margin: 0.5rem 0;
            padding-left: 1.5rem;
        }
        
        .climate-section li {
            margin: 0.2rem 0;
        }
        
        .resources-section p,
        .agriculture-section p {
            margin: 0.5rem 0;
        }
        
        .environment-section ul {
            margin: 1rem 0;
            padding-left: 1.5rem;
        }
        
        .environment-section li {
            margin: 0.3rem 0;
        }
        
        .protected-areas-section ul {
            list-style-type: none;
        }
        
        .protected-areas-section li {
            margin: 0.5rem 0;
            padding-left: 1rem;
            position: relative;
        }
        
        .protected-areas-section li::before {
            content: '🌲';
            position: absolute;
            left: 0;
        }
        
        .cities-section .card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 1rem;
        }
        
        .cities-section .card p {
            margin: 0.3rem 0;
            font-size: 0.9rem;
        }
        
        .cities-section .card h3 {
            color: var(--primary-color);
            margin-bottom: 1rem;
        }
    </style>
</body>
</html>


