<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Culture of Syria - Traditions, Art, and Heritage</title>
    <meta name="description" content="Discover the rich cultural traditions of Syria: art, music, dance, literature, crafts, and culinary heritage.">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <main>
        <section class="hero" style="background: linear-gradient(rgba(139, 69, 19, 0.8), rgba(218, 165, 32, 0.8)), url('images/syria-new-flag.jpg'); background-size: cover; background-position: center;">
            <h1>Culture of Syria</h1>
            <p>A rich tapestry of traditions, art, and heritage</p>
        </section>
        
        <!-- Introduction -->
        <section class="intro-section">
            <div class="card">
                <h2>Cultural Richness</h2>
                <p>Syrian culture is a fascinating blend of various influences that have evolved over thousands of years. As a crossroads between East and West, Syria has absorbed elements from Arab, Persian, Turkish, Kurdish, and European cultures, leading to a unique and rich cultural identity.</p>
                <p>From the ancient traditions of artisans in the souks of Damascus and Aleppo to refined poetry and music, from colorful folk dances to world-renowned cuisine – Syrian culture reflects the diversity and creativity of its people.</p>
            </div>
        </section>
        
        <!-- Languages and Literature -->
        <section class="language-section">
            <h2 class="text-center mb-2">Languages and Literature</h2>
            
            <div class="grid grid-2">
                <div class="card">
                    <h3>🗣️ Linguistic Diversity</h3>
                    <p><strong>Arabic</strong> is the official language and is spoken by the majority. The Syrian dialect has its own unique characteristics and is considered by many Arabs to be one of the most beautiful dialects.</p>
                    <p><strong>Kurdish</strong> is spoken by the Kurdish minority, primarily in the northeast.</p>
                    <p><strong>Aramaic</strong>, the language of Jesus, is still spoken in some Christian communities.</p>
                    <p><strong>Armenian</strong> and <strong>Circassian</strong> are spoken by respective minorities.</p>
                </div>
                
                <div class="card">
                    <h3>📚 Literary Tradition</h3>
                    <p>Syria has a rich literary tradition dating back to antiquity. Modern Syrian literature has made significant contributions to Arabic literature.</p>
                    <p><strong>Notable authors:</strong></p>
                    <ul>
                        <li>Nizar Qabbani - Famous poet</li>
                        <li>Adonis (Ali Ahmad Said) - Modernist poet</li>
                        <li>Hanna Mina - Novelist</li>
                        <li>Ghada al-Samman - Feminist writer</li>
                    </ul>
                </div>
            </div>
        </section>
        
        <!-- Music and Dance -->
        <section class="music-section">
            <h2 class="text-center mb-2">Music and Dance</h2>
            
            <div class="grid grid-3">
                <div class="card">
                    <h3>🎵 Traditional Music</h3>
                    <p>Syrian music combines Arab maqam traditions with local influences. Instruments such as the oud, qanun, nay, and darbuka are essential.</p>
                    <p>The <strong>Muwashshah</strong> is a classical Syrian musical form that originated in Al-Andalus and developed in Aleppo.</p>
                </div>
                
                <div class="card">
                    <h3>💃 Folk Dances</h3>
                    <p>The <strong>Dabke</strong> is the most well-known Syrian folk dance, performed in a line with linked arms.</p>
                    <p>Other traditional dances include the <strong>Samah</strong> and regional dances such as the Kurdish <strong>Halay</strong>.</p>
                </div>
                
                <div class="card">
                    <h3>🎤 Modern Music</h3>
                    <p>Syria has produced famous singers such as Fairuz (Lebanese-Syrian), Sabah Fakhri, and Lena Chamamyan.</p>
                    <p>The city of Aleppo is known for its musical heritage and is often called the "musical capital" of the Arab world.</p>
                </div>
            </div>
        </section>
        
        <!-- Crafts and Art -->
        <section class="crafts-section">
            <h2 class="text-center mb-2">Traditional Crafts</h2>
            
            <div class="grid grid-2">
                <div class="card">
                    <h3>🏺 Damascene Steel</h3>
                    <p>Damascus is world-renowned for its steelwork. Damascene steel was famous for its quality and was used for swords and knives. Although the original technique has been lost, the tradition continues in modern crafts.</p>
                </div>
                
                <div class="card">
                    <h3>🪵 Wood Inlay (Marquetry)</h3>
                    <p>Syrian artisans are masters in inlaying wood with mother-of-pearl, ivory, and various types of wood. This technique is used for furniture, boxes, and decorative objects.</p>
                </div>
                
                <div class="card">
                    <h3>🧵 Textiles and Embroidery</h3>
                    <p>Traditional Syrian embroidery is known for its intricate patterns and vibrant colors. Aleppo was historically an important center for silk production.</p>
                </div>
                
                <div class="card">
                    <h3>🧼 Aleppo Soap</h3>
                    <p>The famous Aleppo soap, made from olive oil and laurel oil, has been produced for over 1000 years using traditional methods.</p>
                </div>
            </div>
        </section>
        
        <!-- Architecture -->
        <section class="architecture-section">
            <h2 class="text-center mb-2">Architecture</h2>
            
            <div class="grid grid-2">
                <div class="card">
                    <img src="images/umayyad-mosque.jpg" alt="Umayyad Mosque" loading="lazy">
                    <h3>Islamic Architecture</h3>
                    <p>The Umayyad Mosque in Damascus is a masterpiece of early Islamic architecture. The mosque combines Byzantine and Islamic elements and features beautiful mosaics.</p>
                    <p>Other examples include the Great Mosque of Aleppo and numerous madrasas (religious schools) throughout the country.</p>
                </div>
                
                <div class="card">
                    <img src="images/damascus-old-city.jpg" alt="Traditional Damascene house" loading="lazy">
                    <h3>Traditional Houses</h3>
                    <p>Traditional Syrian houses are built around a central courtyard with a fountain. This architecture provides privacy and cooling in the warm climate.</p>
                    <p>Features include <strong>mashrabiya</strong> (wooden screens), <strong>iwan</strong> (vaulted niches), and beautiful tile mosaics.</p>
                </div>
            </div>
        </section>
        
        <!-- Culinary Culture -->
        <section class="cuisine-section">
            <h2 class="text-center mb-2">Culinary Culture</h2>
            
            <div class="intro-text text-center mb-2">
                <p>Syrian cuisine is considered one of the richest and most diverse in the Middle East. It combines influences from Levantine, Turkish, and Persian cuisines.</p>
            </div>
            
            <div class="grid grid-3">
                <div class="card">
                    <h3>🥙 Main Dishes</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li>🍖 <strong>Kebab</strong> - Grilled meat in many variations</li>
                        <li>🍲 <strong>Mansaf</strong> - Lamb with yogurt sauce</li>
                        <li>🥘 <strong>Maqluba</strong> - Rice dish with meat and vegetables</li>
                        <li>🌯 <strong>Shawarma</strong> - Roasted meat in bread</li>
                    </ul>
                </div>
                
                <div class="card">
                    <h3>🥗 Mezze and Appetizers</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li>🧄 <strong>Hummus</strong> - Chickpea spread</li>
                        <li>🍆 <strong>Baba Ganoush</strong> - Eggplant spread</li>
                        <li>🥬 <strong>Tabbouleh</strong> - Parsley salad</li>
                        <li>🫒 <strong>Fattoush</strong> - Mixed salad with bread</li>
                    </ul>
                </div>
                
                <div class="card">
                    <h3>🍰 Desserts</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li>🥜 <strong>Baklava</strong> - Phyllo pastry with nuts</li>
                        <li>🍮 <strong>Muhallabia</strong> - Milk pudding</li>
                        <li>🧁 <strong>Ma'amoul</strong> - Filled cookies</li>
                        <li>🍯 <strong>Halva</strong> - Sesame confectionery</li>
                    </ul>
                </div>
            </div>
            
            <div class="card mt-2">
                <h3>☕ Beverages and Social Rituals</h3>
                <p><strong>Tea</strong> is the national drink and is consumed throughout the day. <strong>Arabic coffee</strong> is served on special occasions.</p>
                <p>Sharing meals is an important social ritual. Hospitality is a core value, and guests are always extensively welcomed with food and drink.</p>
            </div>
        </section>
        
        <!-- Religious Diversity -->
        <section class="religion-section">
            <h2 class="text-center mb-2">Religious Diversity</h2>
            
            <div class="grid grid-2">
                <div class="card">
                    <h3>🕌 Islam</h3>
                    <p>The majority of Syrians are Muslim, divided into various branches:</p>
                    <ul>
                        <li><strong>Sunnis</strong> (74%) - The largest group</li>
                        <li><strong>Alawites</strong> (12%) - A Shiite branch</li>
                        <li><strong>Druze</strong> (3%) - A unique religious community</li>
                        <li><strong>Ismailis</strong> - A small Shiite community</li>
                    </ul>
                </div>
                
                <div class="card">
                    <h3>✝️ Christianity</h3>
                    <p>Christians constitute approximately 10% of the population and belong to various churches:</p>
                    <ul>
                        <li><strong>Greek Orthodox</strong> - The largest Christian group</li>
                        <li><strong>Armenian Apostolic</strong></li>
                        <li><strong>Syriac Orthodox</strong></li>
                        <li><strong>Maronite Churches</strong></li>
                        <li><strong>Catholic Churches</strong></li>
                    </ul>
                </div>
            </div>
            
            <div class="card">
                <h3>🤝 Religious Tolerance</h3>
                <p>Historically, Syria has a tradition of religious tolerance. Various religious communities have coexisted peacefully for centuries, each with their own traditions, festivals, and sacred places.</p>
                <p>Important religious sites include the Umayyad Mosque (where John the Baptist is believed to be buried), the Mar Musa monastery, and the Damascus synagogue.</p>
            </div>
        </section>
        
        <!-- Festivals and Traditions -->
        <section class="festivals-section">
            <h2 class="text-center mb-2">Festivals and Traditions</h2>
            
            <div class="grid grid-3">
                <div class="card">
                    <h3>🌙 Islamic Festivals</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li>🎉 <strong>Eid al-Fitr</strong> - End of Ramadan</li>
                        <li>🐑 <strong>Eid al-Adha</strong> - Feast of Sacrifice</li>
                        <li>🌟 <strong>Mawlid</strong> - Prophet's Birthday</li>
                        <li>🌙 <strong>Ramadan</strong> - Month of fasting</li>
                    </ul>
                </div>
                
                <div class="card">
                    <h3>✝️ Christian Festivals</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li>🎄 <strong>Christmas</strong> - December 25</li>
                        <li>🐣 <strong>Easter</strong> - According to various calendars</li>
                        <li>💧 <strong>Epiphany</strong> - Three Kings' Day</li>
                        <li>✨ <strong>Local saint days</strong></li>
                    </ul>
                </div>
                
                <div class="card">
                    <h3>🎭 Cultural Events</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li>🎵 <strong>Damascus Festival</strong> - Music and art</li>
                        <li>🎬 <strong>Film Festivals</strong> - International cinema</li>
                        <li>📚 <strong>Book Fairs</strong> - Literary events</li>
                        <li>🎨 <strong>Craft Fairs</strong> - Traditional arts</li>
                    </ul>
                </div>
            </div>
        </section>
        
        <!-- Modern Culture -->
        <section class="modern-culture-section">
            <h2 class="text-center mb-2">Modern Cultural Expressions</h2>
            
            <div class="grid grid-2">
                <div class="card">
                    <h3>🎬 Film and Theater</h3>
                    <p>Syria has a vibrant film and theater tradition. Damascus and Aleppo have historical theaters and cinemas. Syrian films and TV series are popular throughout the Arab world.</p>
                    <p>Notable directors include Mohammad Malas and Ossama Mohammed.</p>
                </div>
                
                <div class="card">
                    <h3>🎨 Visual Arts</h3>
                    <p>Modern Syrian artists combine traditional techniques with contemporary themes. Galleries in Damascus and Aleppo showcase works by local and international artists.</p>
                    <p>Notable artists include Fateh Moudarres and Marwan Kassab-Bachi.</p>
                </div>
            </div>
        </section>
        
        <!-- Cultural Heritage -->
        <section class="heritage-section">
            <h2 class="text-center mb-2">Preservation of Cultural Heritage</h2>
            
            <div class="card">
                <h3>🏛️ Museums and Cultural Institutions</h3>
                <p>Syria has several important museums that preserve its cultural heritage:</p>
                <ul style="margin: 1rem 0; padding-left: 2rem;">
                    <li><strong>National Museum of Damascus</strong> - Archaeological treasures</li>
                    <li><strong>Museum of Aleppo</strong> - Local history and culture</li>
                    <li><strong>Azem Palace</strong> - Ottoman architecture and art</li>
                    <li><strong>Traditional houses</strong> - Converted into cultural centers</li>
                </ul>
                <p>These institutions play a crucial role in preserving and transmitting the rich Syrian culture to future generations.</p>
            </div>
        </section>
    </main>
    
    <?php include 'includes/footer.php'; ?>
    
    <script src="js/main.js"></script>
    
    <style>
        .cuisine-section .intro-text {
            background: var(--light-gray);
            padding: 2rem;
            border-radius: 10px;
            margin-bottom: 2rem;
        }
        
        .cuisine-section ul li {
            margin: 0.5rem 0;
            padding: 0.3rem 0;
        }
        
        .religion-section ul,
        .festivals-section ul {
            margin: 1rem 0;
        }
        
        .religion-section ul li,
        .festivals-section ul li {
            margin: 0.5rem 0;
            padding: 0.3rem 0;
        }
        
        .heritage-section ul {
            list-style-type: none;
        }
        
        .heritage-section li {
            margin: 0.5rem 0;
            padding-left: 1rem;
            position: relative;
        }
        
        .heritage-section li::before {
            content: '🏛️';
            position: absolute;
            left: 0;
        }
        
        .language-section ul,
        .modern-culture-section ul {
            margin: 1rem 0;
            padding-left: 1.5rem;
        }
        
        .language-section li,
        .modern-culture-section li {
            margin: 0.3rem 0;
        }
    </style>
</body>
</html>


