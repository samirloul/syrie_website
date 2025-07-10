<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Economy of Syria - Sectors and Development</title>
    <meta name="description" content="Discover the economy of Syria: agriculture, industry, trade, natural resources, and economic challenges.">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <main>
        <section class="hero" style="background: linear-gradient(rgba(139, 69, 19, 0.8), rgba(218, 165, 32, 0.8)), url('images/syria-new-flag.jpg'); background-size: cover; background-position: center;">
            <h1>Economy of Syria</h1>
            <p>An overview of economic sectors and developments</p>
        </section>
        
        <!-- Economic Overview -->
        <section class="overview-section">
            <div class="card">
                <h2>Economic Overview</h2>
                <p>Historically, the Syrian economy was based on agriculture, oil exports, and trade. As a crossroads between Europe, Asia, and Africa, Syria has always played an important role in international trade. The country has a mixed economy with both state-owned enterprises and private businesses.</p>
                <p>Before 2011, Syria was a middle-income country with a growing economy. Its strategic location, natural resources, and skilled population formed the basis for economic development. However, the civil war and subsequent international sanctions severely impacted its economy.</p>
            </div>
        </section>
        
        <!-- Historical Economic Development -->
        <section class="history-section">
            <h2 class="text-center mb-2">Historical Economic Development</h2>
            
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-date">1946-1960</div>
                    <div class="timeline-content">
                        <h3>Post-Independence</h3>
                        <p>After gaining independence, Syria focused on building a national economy. Agriculture and trade formed the basis of the economy.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-date">1960-1980</div>
                    <div class="timeline-content">
                        <h3>Socialist Period</h3>
                        <p>Nationalization of major industries and banks. Focus on heavy industry and state-led development. Discovery of oil reserves.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-date">1980-2000</div>
                    <div class="timeline-content">
                        <h3>Economic Liberalization</h3>
                        <p>Gradual opening to market economy. Privatization of state-owned enterprises and promotion of private investments.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-date">2000-2011</div>
                    <div class="timeline-content">
                        <h3>Modernization and Growth</h3>
                        <p>Further economic reforms, growth of the service sector, increase in foreign investments and tourism. This period saw significant economic progress.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-date">2011 - Present (July 2025)</div>
                    <div class="timeline-content">
                        <h3>Conflict and Economic Decline, Towards Recovery</h3>
                        <p>The Syrian Civil War led to a severe economic downturn, massive destruction of infrastructure, and widespread displacement. International sanctions further exacerbated the crisis. However, as of July 2025, there are signs of a cautious recovery. The World Bank projects a modest 1% GDP growth for Syria in 2025, following a contraction in 2024. Some international sanctions have been revoked, and there is a renewed focus on reconstruction and economic stabilization under the transitional government.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Economic Sectors -->
        <section class="sectors-section">
            <h2 class="text-center mb-2">Key Economic Sectors</h2>
            
            <div class="grid grid-2">
                <div class="card">
                    <h3>🌾 Agriculture</h3>
                    <p><strong>Share in GDP:</strong> ~20% (historical, significantly impacted by conflict)</p>
                    <p><strong>Employment:</strong> ~25% of the workforce (historical, now higher due to displacement from other sectors)</p>
                    
                    <p><strong>Main products:</strong></p>
                    <ul>
                        <li>Wheat and barley (staple crops)</li>
                        <li>Cotton (important export product historically)</li>
                        <li>Olives and olive oil</li>
                        <li>Citrus fruits</li>
                        <li>Tobacco</li>
                        <li>Sugar beets</li>
                    </ul>
                    
                    <p><strong>Challenges:</strong> Drought, water scarcity, damaged irrigation systems, landmines, displacement of farmers.</p>
                </div>
                
                <div class="card">
                    <h3>🏭 Industry</h3>
                    <p><strong>Share in GDP:</strong> ~30% (historical, severely impacted)</p>
                    <p><strong>Employment:</strong> ~20% of the workforce (historical)</p>
                    
                    <p><strong>Main sectors:</strong></p>
                    <ul>
                        <li>Textile industry (cotton processing)</li>
                        <li>Food processing industry</li>
                        <li>Chemical industry</li>
                        <li>Cement production</li>
                        <li>Steel industry</li>
                        <li>Pharmaceutical industry</li>
                    </ul>
                    
                    <p><strong>Industrial centers:</strong> Damascus, Aleppo, Homs, Latakia (many suffered significant damage).</p>
                </div>
                
                <div class="card">
                    <h3>⛽ Energy and Mining</h3>
                    <p><strong>Share in GDP:</strong> ~15% (historical, production severely disrupted)</p>
                    
                    <p><strong>Energy sources:</strong></p>
                    <ul>
                        <li>Petroleum (mainly northeast, control disputed)</li>
                        <li>Natural Gas (growing sector, but infrastructure damaged)</li>
                        <li>Hydropower (Euphrates dams, capacity reduced)</li>
                        <li>Renewable energy (potential, but limited investment)</li>
                    </ul>
                    
                    <p><strong>Minerals:</strong></p>
                    <ul>
                        <li>Phosphate (important export, but production affected)</li>
                        <li>Salt</li>
                        <li>Gypsum</li>
                        <li>Marble</li>
                    </ul>
                </div>
                
                <div class="card">
                    <h3>🏪 Services and Trade</h3>
                    <p><strong>Share in GDP:</strong> ~35% (historical, heavily impacted)</p>
                    <p><strong>Employment:</strong> ~40% of the workforce (historical)</p>
                    
                    <p><strong>Main sectors:</strong></p>
                    <ul>
                        <li>Trade (historically strong, but disrupted)</li>
                        <li>Transport and logistics (infrastructure damaged)</li>
                        <li>Financial services (limited due to sanctions)</li>
                        <li>Tourism (historically important, now minimal)</li>
                        <li>Telecommunications (damaged infrastructure)</li>
                        <li>Education and healthcare (strained by crisis)</li>
                    </ul>
                    
                    <p><strong>Trade centers:</strong> Damascus, Aleppo (traditional souks, many destroyed).</p>
                </div>
            </div>
        </section>
        
        <!-- Natural Resources -->
        <section class="resources-section">
            <h2 class="text-center mb-2">Natural Resources</h2>
            
            <div class="grid grid-3">
                <div class="card">
                    <h3>🛢️ Petroleum</h3>
                    <p><strong>Reserves:</strong> Estimated at 2.5 billion barrels (pre-conflict)</p>
                    <p><strong>Production:</strong> ~400,000 barrels/day (pre-2011). Current production is significantly lower and largely outside government control.</p>
                    <p><strong>Locations:</strong> Northeast (Hasaka, Deir ez-Zor)</p>
                    <p><strong>Export:</strong> Historically a major source of foreign currency.</p>
                </div>
                
                <div class="card">
                    <h3>💨 Natural Gas</h3>
                    <p><strong>Reserves:</strong> ~240 billion cubic meters (pre-conflict)</p>
                    <p><strong>Usage:</strong> Electricity generation, industry</p>
                    <p><strong>Potential:</strong> Growing sector for export, but requires significant investment in infrastructure.</p>
                    <p><strong>Infrastructure:</strong> Pipelines to neighboring countries (many damaged).</p>
                </div>
                
                <div class="card">
                    <h3>⚡ Hydropower</h3>
                    <p><strong>Capacity:</strong> ~1,500 MW (pre-2011)</p>
                    <p><strong>Main dams:</strong></p>
                    <ul style="font-size: 0.9rem;">
                        <li>Tabqa Dam (Euphrates)</li>
                        <li>Tishrin Dam (Euphrates)</li>
                        <li>Baath Dam (Euphrates)</li>
                    </ul>
                    <p><strong>Benefits:</strong> Clean energy, irrigation (impacted by conflict and drought).</p>
                </div>
            </div>
        </section>
        
        <!-- Trade and Export -->
        <section class="trade-section">
            <h2 class="text-center mb-2">International Trade</h2>
            
            <div class="grid grid-2">
                <div class="card">
                    <h3>📤 Key Export Products</h3>
                    <p><strong>Energy products:</strong></p>
                    <ul>
                        <li>Crude oil and petroleum products (severely reduced)</li>
                        <li>Natural gas (limited)</li>
                    </ul>
                    
                    <p><strong>Agricultural products:</strong></p>
                    <ul>
                        <li>Cotton and textiles (reduced)</li>
                        <li>Olive oil</li>
                        <li>Fruits and vegetables</li>
                        <li>Tobacco</li>
                    </ul>
                    
                    <p><strong>Industrial products:</strong></p>
                    <ul>
                        <li>Phosphate and chemicals (reduced)</li>
                        <li>Textile products</li>
                        <li>Food products</li>
                    </ul>
                </div>
                
                <div class="card">
                    <h3>📥 Key Import Products</h3>
                    <p><strong>Machinery and equipment:</strong></p>
                    <ul>
                        <li>Industrial machinery</li>
                        <li>Transport equipment</li>
                        <li>Electronics</li>
                    </ul>
                    
                    <p><strong>Raw materials:</strong></p>
                    <ul>
                        <li>Metals and alloys</li>
                        <li>Chemical raw materials</li>
                        <li>Wood and paper</li>
                    </ul>
                    
                    <p><strong>Consumer goods:</strong></p>
                    <ul>
                        <li>Food products</li>
                        <li>Medicines</li>
                        <li>Clothing</li>
                    </ul>
                </div>
            </div>
            
            <div class="card">
                <h3>🌍 Trading Partners</h3>
                <p><strong>Traditional export markets:</strong> EU countries, Arab countries, Turkey, China (many now restricted by sanctions).</p>
                <p><strong>Main import sources:</strong> China, Turkey, EU, Russia, Iran.</p>
                <p><strong>Regional trade:</strong> Historically strong economic ties with Lebanon, Jordan, and Iraq, now impacted by border closures and instability.</p>
            </div>
        </section>
        
        <!-- Tourism -->
        <section class="tourism-section">
            <h2 class="text-center mb-2">Tourism</h2>
            
            <div class="grid grid-2">
                <div class="card">
                    <img src="images/palmyra-ruins.jpg" alt="Palmyra tourism" loading="lazy">
                    <h3>🏛️ Cultural Tourism</h3>
                    <p>Syria was a major tourist destination due to its rich history:</p>
                    <ul>
                        <li>UNESCO World Heritage Sites (many damaged or endangered)</li>
                        <li>Historic cities (Damascus, Aleppo)</li>
                        <li>Archaeological sites (Palmyra, Bosra)</li>
                        <li>Religious sites</li>
                    </ul>
                    <p><strong>Visitors (2010):</strong> ~8.5 million tourists. Tourism has drastically declined since 2011, with limited recovery as of July 2025.</p>
                </div>
                
                <div class="card">
                    <h3>🏖️ Other Tourism Sectors</h3>
                    <p><strong>Coastal tourism:</strong> Mediterranean beaches</p>
                    <p><strong>Ecotourism:</strong> Nature parks and mountainous regions</p>
                    <p><strong>Religious tourism:</strong> Christian and Islamic sites</p>
                    <p><strong>Medical tourism:</strong> Healthcare services</p>
                    
                    <p><strong>Economic impact:</strong></p>
                    <ul>
                        <li>~12% of GDP (pre-2011)</li>
                        <li>Employment for 1+ million people (pre-2011)</li>
                        <li>Important source of foreign currency (pre-2011)</li>
                    </ul>
                </div>
            </div>
        </section>
        
        <!-- Financial System -->
        <section class="finance-section">
            <h2 class="text-center mb-2">Financial System</h2>
            
            <div class="grid grid-3">
                <div class="card">
                    <h3>🏦 Banking</h3>
                    <p><strong>Central Bank:</strong> Central Bank of Syria</p>
                    <p><strong>Commercial banks:</strong> Mix of state-owned and private banks (many impacted by sanctions and conflict)</p>
                    <p><strong>Islamic banks:</strong> Growing sector</p>
                    <p><strong>Foreign banks:</strong> Limited presence due to sanctions.</p>
                </div>
                
                <div class="card">
                    <h3>💱 Currency and Exchange Rate</h3>
                    <p><strong>Currency:</strong> Syrian Pound (SYP)</p>
                    <p><strong>Exchange Rate:</strong> Highly volatile and depreciated significantly since 2011.</p>
                    <p><strong>Foreign Reserves:</strong> Severely depleted.</p>
                    <p><strong>International trade:</strong> USD, EUR used, but transactions complicated by sanctions.</p>
                </div>
                
                <div class="card">
                    <h3>📊 Capital Markets</h3>
                    <p><strong>Damascus Securities Exchange:</strong> Established in 2009, but trading volume is low.</p>
                    <p><strong>Listed companies:</strong> Limited number.</p>
                    <p><strong>Bond market:</strong> Primarily government bonds.</p>
                    <p><strong>Insurance:</strong> Growing sector, but limited coverage.</p>
                </div>
            </div>
        </section>
        
        <!-- Infrastructure -->
        <section class="infrastructure-section">
            <h2 class="text-center mb-2">Economic Infrastructure</h2>
            
            <div class="grid grid-2">
                <div class="card">
                    <h3>🚛 Transport</h3>
                    <p><strong>Roads:</strong> ~70,000 km (43,500 mi) road network (many damaged)</p>
                    <p><strong>Railways:</strong> ~2,750 km (1,700 mi) railway lines (largely non-operational)</p>
                    <p><strong>Ports:</strong> Latakia, Tartus (main seaports, operational but capacity reduced)</p>
                    <p><strong>Airports:</strong> Damascus, Aleppo (international, limited flights)</p>
                    <p><strong>Pipelines:</strong> Oil and gas to neighboring countries (many damaged or under dispute).</p>
                </div>
                
                <div class="card">
                    <h3>⚡ Energy and Communication</h3>
                    <p><strong>Electricity:</strong> ~12,000 MW capacity (pre-2011), current supply is intermittent and insufficient.</p>
                    <p><strong>Telecommunications:</strong> Modern networks (damaged and unreliable).</p>
                    <p><strong>Internet:</strong> Growing penetration (but often slow and expensive).</p>
                    <p><strong>Mobile telephony:</strong> High coverage (but service quality varies).</p>
                    <p><strong>Water supply:</strong> Urban and rural networks (many damaged, leading to water shortages).</p>
                </div>
            </div>
        </section>
        
        <!-- Economic Challenges -->
        <section class="challenges-section">
            <h2 class="text-center mb-2">Economic Challenges (as of July 2025)</h2>
            
            <div class="grid grid-2">
                <div class="card">
                    <h3>🌊 Internal Challenges</h3>
                    <ul>
                        <li><strong>Infrastructure destruction:</strong> Widespread damage to housing, factories, roads, and utilities.</li>
                        <li><strong>Humanitarian crisis:</strong> Large-scale displacement, food insecurity, and poverty.</li>
                        <li><strong>Brain drain:</strong> Loss of skilled labor due to emigration.</li>
                        <li><strong>Inflation and currency depreciation:</strong> Eroding purchasing power.</li>
                        <li><strong>Corruption:</strong> Persistent issue hindering recovery.</li>
                    </ul>
                </div>
                
                <div class="card">
                    <h3>🌍 External Factors</h3>
                    <ul>
                        <li><strong>International sanctions:</strong> Continue to limit access to global markets and finance, though some have been lifted.</li>
                        <li><strong>Regional instability:</strong> Ongoing conflicts in neighboring countries impact trade and investment.</li>
                        <li><strong>Foreign interference:</strong> Various external actors with competing interests.</li>
                        <li><strong>Climate change:</strong> Exacerbating water scarcity and agricultural challenges.</li>
                        <li><strong>Global economic slowdown:</strong> Affecting demand for Syrian exports.</li>
                    </ul>
                </div>
            </div>
        </section>
        
        <!-- Future Prospects -->
        <section class="future-section">
            <h2 class="text-center mb-2">Economic Potential and Future</h2>
            
            <div class="card">
                <h3>🚀 Development Potential</h3>
                <p>Despite the challenges, Syria possesses significant economic potential:</p>
                
                <div class="grid grid-3" style="margin-top: 1.5rem;">
                    <div>
                        <h4>🎓 Human Capital</h4>
                        <ul>
                            <li>Highly educated population (historically)</li>
                            <li>Strong educational tradition</li>
                            <li>Technical skills</li>
                            <li>Entrepreneurial spirit</li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4>🌍 Strategic Location</h4>
                        <ul>
                            <li>Crossroads of continents</li>
                            <li>Access to sea</li>
                            <li>Historical trade routes</li>
                            <li>Potential regional hub</li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4>🏛️ Cultural Heritage</h4>
                        <ul>
                            <li>Significant tourism potential (post-stabilization)</li>
                            <li>Cultural industry</li>
                            <li>Traditional crafts</li>
                            <li>International interest</li>
                        </ul>
                    </div>
                </div>
                
                <p style="margin-top: 1.5rem;"><strong>Reconstruction and development:</strong> With sustained peace and stability, Syria can rebuild and modernize its economy, leveraging its natural advantages and human resources. International support and investment will be crucial for a full recovery.</p>
            </div>
        </section>
    </main>
    
    <?php include 'includes/footer.php'; ?>
    
    <script src="js/main.js"></script>
    
    <style>
        .timeline {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem 0;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 4px;
            background: var(--primary-color);
            transform: translateX(-50%);
        }
        
        .timeline-item {
            position: relative;
            margin: 2rem 0;
            width: 50%;
        }
        
        .timeline-item:nth-child(odd) {
            left: 0;
            padding-right: 2rem;
        }
        
        .timeline-item:nth-child(even) {
            left: 50%;
            padding-left: 2rem;
        }
        
        .timeline-item::before {
            content: '';
            position: absolute;
            top: 20px;
            width: 20px;
            height: 20px;
            background: var(--secondary-color);
            border: 4px solid var(--primary-color);
            border-radius: 50%;
        }
        
        .timeline-item:nth-child(odd)::before {
            right: -12px;
        }
        
        .timeline-item:nth-child(even)::before {
            left: -12px;
        }
        
        .timeline-date {
            background: var(--accent-color);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: bold;
            display: inline-block;
            margin-bottom: 1rem;
        }
        
        .timeline-content {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: var(--shadow);
        }
        
        .timeline-content h3 {
            color: var(--primary-color);
            margin-bottom: 1rem;
        }
        
        .sectors-section ul,
        .trade-section ul,
        .tourism-section ul,
        .challenges-section ul,
        .future-section ul {
            margin: 0.5rem 0;
            padding-left: 1.5rem;
        }
        
        .sectors-section li,
        .trade-section li,
        .tourism-section li,
        .challenges-section li,
        .future-section li {
            margin: 0.3rem 0;
        }
        
        .future-section h4 {
            color: var(--primary-color);
            margin-bottom: 0.5rem;
            font-size: 1.1rem;
        }
        
        @media (max-width: 768px) {
            .timeline::before {
                left: 20px;
            }
            
            .timeline-item {
                width: 100%;
                left: 0 !important;
                padding-left: 3rem !important;
                padding-right: 0 !important;
            }
            
            .timeline-item::before {
                left: 10px !important;
                right: auto !important;
            }
        }
    </style>
</body>
</html>


