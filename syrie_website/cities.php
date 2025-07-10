<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cities & Provinces - Syria</title>
    <meta name="description" content="Explore the major cities and provinces of Syria, their history, culture, and current situation.">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
<main>
    <section class="hero">
        <div class="hero-text">
            <h1>Cities & Provinces</h1>
            <p>Discover the heart of Syria</p>
        </div>
        <div class="hero-image">
            <img src="images/cities-hero.jpg" alt="Cities of Syria"> 
<style>
            .hero {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    background: linear-gradient(120deg, #8B4513, #DAA520);
    padding: 2rem;
    color: white;
}

.hero-text {
    max-width: 50%;
}

.hero-text h1 {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.hero-text p {
    font-size: 1.2rem;
}

.hero-image img {
    max-width: 500px;
    width: 100%;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
}
@media (max-width: 768px) {
    .hero {
        flex-direction: column;
        text-align: center;
    }

    .hero-text, .hero-image {
        max-width: 100%;
    }
}

</style>
        </div>
    </section>
        
        <section class="cities-overview-section">
            <h2 class="text-center mb-2">Major Cities and Provinces</h2>
            <div class="grid grid-3">
                <div class="card">
                    <img src="images/damascus-old-city.jpg" alt="Damascus" loading="lazy">
                    <h3><a href="city.php?name=damascus">Damascus</a></h3>
                    <h3><a href="city.php?name=damascus">Explore Damascus</a></h3>
                    <p>The capital and one of the oldest continuously inhabited cities in the world.</p>
                </div>
                <div class="card">
                    <img src="images/aleppo-citadel.jpg" alt="Aleppo" loading="lazy">
                    <h3><a href="city.php?name=aleppo">Aleppo</a></h3>
                    <h3><a href="city.php?name=aleppo">Explore Aleppo</a></h3>
                    <p>A historic commercial center, known for its ancient citadel and souks.</p>
                </div>
                <div class="card">
                    <img src="images/homs-city.jpg" alt="Homs" loading="lazy">
                    <h3><a href="city.php?name=homs">Homs</a></h3>
                    <h3><a href="city.php?name=homs">Explore Homs</a></h3>
                    <p>A central city and industrial hub, strategically located.</p>
                </div>
                <div class="card">
                    <img src="images/idlib-city.jpg" alt="Idlib" loading="lazy">
                    <h3><a href="city.php?name=idlib">Idlib</a></h3>
                    <h3><a href="city.php?name=idlib">Explore Idlib</a></h3>
                    <p>A province in northwestern Syria, currently a major center for displaced persons.</p>
                </div>
                <div class="card">
                    <img src="images/latakia-city.jpg" alt="Latakia" loading="lazy">
                    <h3><a href="city.php?name=latakia">Latakia</a></h3>
                    <h3><a href="city.php?name=latakia">Explore Latakia</a></h3>
                    <p>Syria's main port city on the Mediterranean coast.</p>
                </div>
                <div class="card">
                    <img src="images/deir-ez-zor-city.jpg" alt="Deir ez-Zor" loading="lazy">
                    <h3><a href="city.php?name=deirez-zor">Deir ez-Zor</a></h3>
                    <h3><a href="city.php?name=deirez-zor">Explore Deir</a></h3>
                    <p>A city in eastern Syria, located on the Euphrates River, known for its oil industry.</p>
                </div>
                <div class="card">
                    <img src="images/hama-city.jpg" alt="Hama" loading="lazy">
                    <h3><a href="city.php?name=hama">Hama</a></h3>
                    <h3><a href="city.php?name=hama">Explore Hama</a></h3>
                    <p>Famous for its ancient norias (waterwheels) on the Orontes River.</p>
                </div>
                <div class="card">
                    <img src="images/raqqa-city.jpg" alt="Raqqa" loading="lazy">
                    <h3><a href="city.php?name=raqqa">Raqqa</a></h3>
                    <h3><a href="city.php?name=raqqa">Explore Raqqa</a></h3>
                    <p>A city in northern Syria, historically significant and located on the Euphrates.</p>
                </div>
                <div class="card">
                    <img src="images/palmyra-ruins.jpg" alt="Palmyra" loading="lazy">
                    <h3><a href="city.php?name=palmyra">Palmyra</a></h3>
                    <h3><a href="city.php?name=palmyra">Explore Palmyra</a></h3>
                    <p>An ancient city in the Syrian Desert, a UNESCO World Heritage site.</p>
                </div>
                <div class="card">
                    <img src="images/Hasakah-ruins.jpg" alt="hasakah.php" loading="lazy">
                    <h3><a href="city.php?name=hasakah">Hasakah</a></h3>
                    <h3><a href="city.php?name=hasakah">Explore Hasakah</a></h3>
                    <p>The fertile northeastern province, rich in culture and agriculture.</p>
                </div>
                    <div class="card">
                    <img src="images/Daraa-ruins.jpg" alt="Daraa" loading="lazy">
                    <h3><a href="city.php?name=daraa">Daraa</a></h3>
                    <h3><a href="city.php?name=daraa">Explore Daraa</a></h3>
                    <p>The cradle of the Syrian uprising, steeped in history and agriculture.</p>
                </div>
                <div class="card">
                    <img src="images/Quneitra-ruins.jpg" alt="Quneitra" loading="lazy">
                    <h3><a href="city.php?name=quneitra">Quneitra</a></h3>
                    <h3><a href="city.php?name=quneitra">Explore Quneitra</a></h3>
                    <p>The cradle of the Syrian uprising, steeped in history and agriculture.</p>
                </div>
                <div class="card">
                    <img src="images/Tartus-ruins.jpg" alt="Tartus" loading="lazy">
                    <h3><a href="city.php?name=tartus">Tartus</a></h3>
                    <h3><a href="city.php?name=tartus">Explore Tartus</a></h3>
                    <p>The serene Mediterranean port city.</p>
                </div>
                <div class="card">
                    <img src="images/suwayda-ruins.jpg" alt="suwayda" loading="lazy">
                    <h3><a href="city.php?name=suwayda">Suwayda</a></h3>
                    <h3><a href="city.php?name=suwayda">Explore Suwayda</a></h3>
                    <p>The mountain city, home of Druze traditions and vineyards.</p>
                    </div>
            </div>
            
            </div>
            

            
        </section>
    </main>
    
    <?php include 'includes/footer.php'; ?>
    
    <script src="js/main.js"></script>
    
    <style>
        .cities-overview-section .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 1rem;
        }
        .cities-overview-section .card h3 a {
            color: var(--primary-color);
            text-decoration: none;
        }
        .cities-overview-section .card h3 a:hover {
            text-decoration: underline;
        }
    </style>
</body>
</html>

 
