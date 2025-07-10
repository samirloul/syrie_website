<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Syrian Revolution: The Full Story</title>
<meta name="description" content="An exhaustive chronicle of the Syrian Revolution, its heroes, tragedies, and the enduring scars of Saydnaya Prison.">
<link rel="stylesheet" href="css/style.css">
<style>
body { font-family: Arial, sans-serif; line-height: 1.8; }
.hero {
    background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)), url('images/revolution-banner.jpg');
    color: #fff;
    text-align: center;
    padding: 3rem 1rem;
    background-size: cover;
    background-position: center;
}
section { margin: 3rem 0; }
.card {
    background: #fafafa;
    padding: 1rem;
    margin: 1rem 0;
    border-left: 5px solid #8B0000;
}
img.responsive {
    max-width: 60%;
    height: auto;
    margin: 1rem 0;
    border-radius: 8px;
}
blockquote {
    background: #eee;
    padding: 1rem;
    font-style: italic;
    border-left: 4px solid #555;
}
h2 { color: #8B0000; }
img {
    max-width: 40%;         /* maak de foto's wat kleiner dan volle breedte */
    height: auto;           /* behoudt de juiste verhoudingen */
    display: block;         /* zorgt dat marges goed werken */
    margin: 1rem auto;      /* centreren en wat ruimte erboven/onder */
    border-radius: 8px;     /* afgeronde hoeken */
    box-shadow: 0 4px 8px rgba(0,0,0,0.2); /* zachte schaduw */
    transition: transform 0.3s ease; /* mooie hover animatie */
}

img:hover {
    transform: scale(1.03); /* een kleine zoom bij hover */
}
</style>
</head>
<body>

<?php include 'includes/header.php'; ?>

<main>
<section class="hero">
    <h1>Syrian Revolution: The Full Story</h1>
    <p>A detailed journey through Syria’s darkest and bravest years — and its unbreakable spirit.</p>
</section>

<section>
<div class="card">
<h2>Hafez al-Assad and the Architecture of Fear</h2>
<img src="images/hafez.jpg" alt="Hafez al-Assad" class="responsive">
<p>Hafez al-Assad ruled Syria with an iron fist for 30 years. A former air force commander who seized power in 1970, he crafted a political system based on fear and absolute control. He established a vast intelligence apparatus that monitored every street, school, and home. Any dissent was brutally crushed: from the crushing of Kurdish protests to the 1982 Hama massacre, which left up to 30,000 dead, Hafez ensured that the Syrian people learned silence.  
His rule institutionalized corruption and sectarian favoritism, rewarding the loyal and punishing the rest. For many Syrians, political activism became synonymous with disappearance into prisons like Palmyra and Saydnaya, where unimaginable horrors awaited. The culture of fear Hafez created permeated every level of Syrian life, turning neighbor against neighbor in a web of surveillance and betrayal.</p>
</div>
</section>

<section>
<div class="card">
<h2>Bashar al-Assad’s Rise: The Doctor Who Became Dictator</h2>
<img src="images/bashar.jpg" alt="Bashar al-Assad" class="responsive">
<p>When Hafez al-Assad died in 2000, his son Bashar — a London-trained ophthalmologist — was thrust into power. Many Syrians hoped his Western education and mild manner would usher in reform. The so-called “Damascus Spring” of 2001 saw intellectuals call for freedoms and political openness.  
But Bashar quickly proved to be his father’s son. Dissidents were jailed, newspapers shuttered, and the mukhabarat strengthened. The dream of reform turned to dust as Bashar’s regime consolidated its power through the same tactics of fear, torture, and repression that Syrians knew too well. By the time of the 2011 uprising, Bashar had fully embraced the ruthless playbook of his father — but with even greater brutality.</p>
</div>
</section>

<section>
<div class="card">
<h2>The Ba’ath Party’s Ideology and Its Grip on Syrian Society</h2>
<p>The Ba’ath Party, founded on the ideals of Arab nationalism and socialism, came to dominate Syria after the 1963 coup. Its slogan — “Unity, Freedom, Socialism” — masked the reality of a one-party dictatorship. The party infiltrated schools, workplaces, and unions, making party membership almost mandatory for advancement in life.  
Over decades, the Ba’ath became less an ideology than a patronage network, rewarding loyalty and punishing opposition. In exchange for loyalty, Syrians received jobs, ration cards, and a modicum of security. In return, they gave up their voices, their freedom of thought, and often their dignity. By 2011, the Ba’ath’s grip was absolute — but brittle, ready to crack under the weight of its own corruption and oppression.</p>
</div>
</section>

<section>
<div class="card">
<h2>Saydnaya Prison: Syria’s Silent Executioner</h2>
<img src="images/saydnaya-dark.jpg" alt="Saydnaya Prison" class="responsive">
<p>Saydnaya Prison sits atop a mountain north of Damascus, shrouded in fog and fear. Since the 1980s, it has served as one of Syria’s most notorious detention centers. After 2011, it became a central hub in the regime’s campaign of terror. Thousands were tortured and executed in Saydnaya — often hanged in secret in the dead of night. Amnesty International called it a “human slaughterhouse.”  
Prisoners were stripped of identity and dignity: blindfolded for months, beaten daily, starved on a spoonful of rice. The screams from the lower floors haunted those above. Mass graves near Qutayfah and Tadmur bear silent witness to its horrors. Survivors recount it as “a place where humanity ended.” Saydnaya became a symbol of the regime’s willingness to destroy lives to preserve its power.</p>
</div>
</section>

<section>
<div class="card">
<h2>The 1982 Hama Massacre: Prelude to Brutality</h2>
<img src="images/hama-1982.jpg" alt="Hama Massacre" class="responsive">
<p>In February 1982, Hafez al-Assad ordered his brother Rifaat to crush a Muslim Brotherhood-led uprising in the city of Hama. Over three weeks, the Syrian army shelled the city indiscriminately, leveling entire neighborhoods. Tanks and bulldozers buried thousands of bodies in mass graves. Estimates of the dead range from 10,000 to 30,000.  
The massacre sent an unmistakable message: rebellion against the Assads would mean annihilation. Hama’s streets, once bustling with life, became silent. Survivors learned to never speak of those days aloud. The memory of Hama lingered for decades, fueling both fear and a simmering desire for justice — which would finally explode in 2011.</p>
</div>
</section>


<section>
<div class="card">
<h2>The Intelligence Apparatus: Mukhabarat and the Surveillance State</h2>
<p>The Mukhabarat — Syria’s feared intelligence service — became synonymous with terror. With multiple branches (Military Intelligence, Air Force Intelligence, Political Security), they infiltrated every layer of society. Every neighborhood, mosque, and even family had informants. Citizens learned to speak in whispers, never knowing who was listening. Dissenters faced arbitrary arrest, torture, or disappearance. The Mukhabarat created a suffocating climate of suspicion, where silence became the only form of survival. In the uprising, they became the regime’s first line of brutal response — crushing protests with bullets, mass arrests, and torture chambers.</p>
</div>
</section>

<section>
<div class="card">
<h2>The Cult of the Leader: Personality Politics in Assad’s Syria</h2>
<p>Every classroom, office, and square in Syria bore portraits of Hafez or Bashar al-Assad. Children learned songs glorifying the “father of the nation,” while state TV showed endless footage of staged rallies and tearful citizens pledging loyalty. The Assad cult was not just propaganda — it was a survival mechanism, forcing citizens to publicly declare devotion even as they privately despaired. The 2011 revolution shattered this façade, as millions tore down posters, burned pictures, and chanted “The people want the fall of the regime!”</p>
</div>
</section>

<section>
<div class="card">
<h2>The Alawite Question: Sectarianism and Power</h2>
<p>The Assad family belongs to the Alawite sect, a religious minority that makes up around 10–12% of Syria. Over decades, the regime built its power base by privileging Alawites in the army and security forces, while alienating the Sunni majority. This sectarian favoritism sowed deep resentment, which the regime weaponized during the uprising by portraying it as a Sunni Islamist threat against minorities. Communities that had once lived side by side fractured under the weight of propaganda and violence, leaving a bitter legacy of mistrust.</p>
</div>
</section>

<section>
<div class="card">
<h2>Damascus: Heart of a Broken Nation</h2>
<img src="images/damascus.jpg" alt="Damascus" class="responsive">
<p>Damascus, the world’s oldest continuously inhabited capital, became a city of two realities. In the center, life continued — cafes, government offices, and soldiers patrolling the streets. In the suburbs like Ghouta, Daraya, and Douma, it was a different world: bombardment, starvation sieges, and chemical attacks. The contrast between the relative calm of Assad-held areas and the horror at the edges symbolized the deep wound in Syrian society — a capital at once alive and dead.</p>
</div>
</section>

<section>
<div class="card">
<h2>Homs: Capital of the Revolution and City of Martyrs</h2>
<img src="images/homs.jpg" alt="Homs" class="responsive">
<p>Homs earned the nickname “The Capital of the Revolution” for its early and massive protests. Tens of thousands filled its squares demanding freedom. Baba Amr, a Sunni neighborhood, became a rebel stronghold — and was besieged and destroyed by the regime. Journalists smuggled into Homs documented the carnage as tanks flattened streets and snipers picked off civilians. The siege of Homs became a global symbol of Assad’s ruthlessness and the resilience of the Syrian people. To this day, the ruins of Homs stand as a testament to sacrifice and defiance.</p>
</div>
</section>
<section>
<div class="card">
<h2>Aleppo’s Fall: From Prosperity to Rubble</h2>
<img src="images/aleppo.jpg" alt="Aleppo" class="responsive">
<p>Aleppo, Syria’s economic hub and its most populous city, joined the revolution in 2012. Initially hesitant, its eastern districts soon erupted with protests and armed rebellion. What followed was a years-long battle that turned Aleppo into a hellscape of rubble. Barrel bombs rained down, hospitals and bakeries were bombed, and starvation set in. In December 2016, after a brutal siege and international outcry, Aleppo fell back to regime control. The city’s destruction symbolized the human and cultural loss of the Syrian war, with neighborhoods reduced to dust and thousands buried beneath the ruins.</p>
</div>
</section>

<section>
<div class="card">
<h2>Eastern Ghouta: Starvation, Siege, and Sarin</h2>
<p>Eastern Ghouta, a green belt of orchards around Damascus, became a symbol of both resistance and suffering. From 2013 to 2018, it endured a suffocating siege: no food, no medicine, no escape. Children died of malnutrition while markets sold handfuls of rice at impossible prices. In August 2013, the world watched in horror as sarin gas killed over 1,400 people in Ghouta — one of the deadliest chemical attacks of the century. Yet, for years, the residents continued to dig tunnels, grow vegetables on rooftops, and hold on — until the final assault in 2018 forced their surrender and displacement.</p>
</div>
</section>

<section>
<div class="card">
<h2>Palmyra: A Cultural Heritage Destroyed in War</h2>
<img src="images/palmyra-ruins.jpg" alt="Palmyra ruins" class="responsive">
<p>The ancient city of Palmyra, a UNESCO World Heritage site, stood for millennia as a testament to Syria’s rich history. In 2015, it fell to ISIS, who blew up its grand arch, temples, and statues, claiming them to be “idolatrous.” The regime’s subsequent reconquest brought its own share of devastation, as the area was militarized and scarred by mass graves and executions. Palmyra became a metaphor for Syria itself — a proud civilization reduced to ruins, and a victim of barbarism from all sides.</p>
</div>
</section>

<section>
<div class="card">
<h2>The Syrian Social Fabric: Fractured Identities and Communities</h2>
<p>Syria was long seen as a mosaic of ethnic and religious communities: Sunnis, Alawites, Christians, Druze, Kurds, Armenians, and more. The revolution tore at this fabric. Sectarian propaganda and massacres deepened mistrust, while displacement and violence scattered families across the globe. Neighbors who once shared bread turned into enemies under pressure and fear. Yet, amid the ruins, stories of solidarity emerged: Alawite activists aiding Sunnis, Christians sheltering Muslims, Kurds opening their towns to Arab refugees. These glimmers of unity are a fragile but precious hope for Syria’s future.</p>
</div>
</section>

<section>
<div class="card">
<h2>Women of the Revolution: Silent Strength and Public Defiance</h2>
<p>From the very first days in Daraa and Damascus, women stood at the forefront of protests. They organized underground schools, documented massacres, and smuggled aid through checkpoints. Many became symbols of courage — like Razan Zaitouneh, a lawyer and activist who documented atrocities before being abducted. In besieged areas, women bore the weight of keeping families alive under shelling and starvation. Despite the suffering, Syrian women defied cultural barriers and proved indispensable to the revolution, embodying its resilience and hope.</p>
</div>
</section>
<section>
<div class="card">
<h2>Children of War: Syria’s Lost Generation</h2>
<img src="images/children-war.jpg" alt="Syrian children of war" class="responsive">
<p>More than half of Syria’s population are children — and they have borne the brunt of the war. Over 2.5 million Syrian children live as refugees; millions more remain displaced inside Syria. They have grown up under bombs, in tents, without schools or healthcare. Many have been orphaned, forced into child labor, or recruited into militias. Yet even amid devastation, Syrian children paint murals, fly kites, and write poems about peace. Theirs is a generation scarred but not entirely broken — a generation whose healing will take decades but whose resilience inspires.</p>
</div>
</section>

<section>
<div class="card">
<h2>The Refugee Tide: Six Million Lives in Exile</h2>
<p>Since 2011, more than six million Syrians have fled the country, creating the largest refugee crisis since World War II. Families crossed deserts and seas to reach safety in Turkey, Lebanon, Jordan, Europe, and beyond. Camps like Zaatari in Jordan became sprawling cities of tents. Refugees faced not only hardship and hunger, but also xenophobia, exploitation, and shattered dreams. Yet they also carried their culture with them: opening Syrian bakeries in Berlin, teaching their children Arabic in Istanbul, telling their stories in Paris. The refugee tide reminds the world of Syria’s pain — and its humanity.</p>
</div>
</section>

<section>
<div class="card">
<h2>Voices from the Diaspora: Memory and Resistance Abroad</h2>
<p>The Syrian diaspora — from doctors in Canada to students in Sweden — has become a powerful voice for justice. Exiled activists document war crimes, organize protests, and lobby governments to hold Assad accountable. Writers, filmmakers, and musicians tell Syria’s story to global audiences, preserving memory against the regime’s denial. In exile, Syrians also grapple with guilt, longing, and the challenge of rebuilding lives while never forgetting home. Their resilience abroad keeps the flame of the revolution alive and honors those who fell.</p>
</div>
</section>

<section>
<div class="card">
<h2>The White Helmets: Civil Defense Amid Bombs and Rubble</h2>
<p>When bombs rained down, they ran in — unarmed, wearing only white helmets. Syria’s Civil Defense, known as the White Helmets, emerged as a beacon of humanity in a dark war. These volunteer rescuers dug survivors from rubble, evacuated civilians, and recorded attacks for the world to see. Over 250 White Helmets have been killed on duty. They won international acclaim — and the Nobel Peace Prize nomination — but also became targets of smear campaigns. Their bravery became one of the revolution’s proudest symbols: ordinary Syrians choosing to save lives despite impossible odds.</p>
</div>
</section>

<section>
<div class="card">
<h2>Alsaroot: The Footballer Who Sang for Freedom</h2>
<img src="images/alsaroot.jpg" alt="Abdul Baset Alsaroot" class="responsive">
<p>Abdul Baset Alsaroot, a goalkeeper for Syria’s national youth team, became one of the revolution’s most beloved figures. When the uprising began in his hometown of Homs, he traded his jersey for a megaphone and his gloves for a Kalashnikov. Alsaroot led protests with his chants and his defiance inspired thousands. Even after losing his family to shelling, he refused to surrender. In 2019, he was killed in battle during the defense of Idlib. To many, Alsaroot remains a hero — a symbol of the revolution’s courage, sacrifice, and unwavering hope for a free Syria.</p>
</div>
</section>
<section>
<div class="card">
<h2>Citizen Journalists: Truth-Tellers Under Fire</h2>
<p>When the regime banned foreign media and censored the press, ordinary Syrians became the world’s eyes and ears. Armed with nothing more than smartphones and courage, citizen journalists in Homs, Aleppo, Idlib, and Ghouta documented protests, airstrikes, massacres, and chemical attacks. Many paid with their lives — targeted by snipers, bombs, or torture for exposing the truth. Their videos, streamed to the world, broke the regime’s monopoly on narrative. Even today, their testimony remains a vital archive of the revolution’s reality and the regime’s crimes.</p>
</div>
</section>

<section>
<div class="card">
<h2>ISIS and the Syrian War: How Extremism Filled the Void</h2>
<p>As the revolution descended into chaos, a darker force emerged: ISIS (Daesh). Exploiting power vacuums and sectarian tensions, ISIS seized vast swathes of territory in eastern Syria by 2014. In Raqqa and Deir Ezzor, it imposed a reign of terror: public executions, forced veiling, and destruction of heritage sites like Palmyra. The group’s rise tainted the revolution’s image and gave the regime a pretext to portray all opposition as “terrorists.” Defeating ISIS required a separate, brutal campaign — but its scars remain, and some cells still operate in Syria’s deserts.</p>
</div>
</section>

<section>
<div class="card">
<h2>The Kurds and Rojava: Autonomy and Betrayal</h2>
<p>In Syria’s north, the Kurdish-led forces established an autonomous region known as Rojava. Promoting gender equality, grassroots democracy, and secularism, Rojava became a rare glimmer of hope amid the war. Kurdish forces played a key role in defeating ISIS — winning Western support — but also clashed with rebel factions and faced hostility from Turkey. In 2019, Turkish forces invaded parts of Rojava, displacing tens of thousands. The Kurds, long persecuted in Syria, found themselves once again abandoned by allies and caught between regional powers.</p>
</div>
</section>

<section>
<div class="card">
<h2>The Fall of Idlib: Last Rebel Enclave</h2>
<img src="images/idlib.jpg" alt="Idlib under siege" class="responsive">
<p>By 2020, Idlib province became the last major rebel stronghold. Home to millions of displaced Syrians, it endured relentless bombardment by Assad and his Russian allies. Hospitals, markets, and schools became targets in what the UN called a “humanitarian catastrophe.” Hundreds of thousands fled toward the Turkish border, trapped in freezing camps. Despite ceasefires and fragile truces, Idlib remains a powder keg — a tragic symbol of the revolution’s resilience and its unending suffering.</p>
</div>
</section>

<section>
<div class="card">
<h2>Chemical Weapons in Syria: Red Lines and Broken Promises</h2>
<img src="images/chemical-weapons.jpg" alt="Chemical attacks" class="responsive">
<p>On August 21, 2013, the Assad regime launched a sarin gas attack on Eastern Ghouta, killing over 1,400 civilians — many of them children — in their sleep. Despite global outrage and Barack Obama’s infamous “red line,” no meaningful consequences followed beyond a negotiated removal of part of Syria’s chemical arsenal. Since then, dozens more chemical attacks have been documented, proving the regime retained and continued to use these banned weapons. For many Syrians, the world’s failure to act on chemical weapons symbolized its betrayal and indifference to their plight.</p>
</div>
</section>
<section>
<div class="card">
<h2>Barrel Bombs and the War on Civilians</h2>
<img src="images/barrel-bombs.jpg" alt="Barrel bombs in Syria" class="responsive">
<p>One of the most feared weapons in Assad’s arsenal was the crude but devastating barrel bomb: oil drums packed with explosives and shrapnel, dropped from helicopters onto civilian areas. Cities like Aleppo, Daraya, and Homs were reduced to rubble. Markets, schools, and mosques became targets, killing thousands indiscriminately. The tactic was designed not only to kill but to terrorize and depopulate opposition-held areas. Despite international condemnation, the regime dropped tens of thousands of barrel bombs throughout the conflict, a chilling symbol of its disregard for civilian life.</p>
</div>
</section>

<section>
<div class="card">
<h2>Prisoner Testimonies: Torture, Disappearances, and Death</h2>
<p>Hundreds of thousands of Syrians passed through the regime’s network of prisons and detention centers. Survivors tell of torture chambers, starvation, and executions. The infamous “Caesar” photos smuggled out of Syria in 2014 showed thousands of bodies of detainees, emaciated and brutalized, a grim testament to systematic killing. Families of the missing still search for answers, their loved ones swallowed by the regime’s black holes. For many Syrians, the fear of arrest became as potent as the fear of bombs.</p>
</div>
</section>

<section>
<div class="card">
<h2>Cultural Resilience: Art, Music, and Graffiti in the Revolution</h2>
<p>Even in the darkest days, Syrians found ways to resist through culture. Artists painted revolutionary murals on the walls of Homs and Damascus. Poets recited verses of freedom. Singers like Ibrahim Qashoush composed anthems of defiance — until he was murdered and his vocal cords cut. In exile, Syrians staged plays, published books, and created documentaries to preserve the memory of the uprising. Culture became a weapon against oblivion, a way to affirm humanity amid horror.</p>
</div>
</section>

<section>
<div class="card">
<h2>The Siege Economy: How Syrians Survived Blockades</h2>
<p>In places like Eastern Ghouta, Madaya, and Yarmouk, the regime imposed medieval-style sieges, cutting off food, medicine, and electricity to force surrender. Civilians survived by eating grass, leaves, even cats and dogs. Black markets flourished, and a single bag of rice could cost a month’s salary. Despite unimaginable suffering, communities shared what little they had, organized underground schools and clinics, and kept the spirit of resistance alive. The resilience of Syrians under siege remains one of the most heartbreaking yet inspiring chapters of the revolution.</p>
</div>
</section>

<section>
<div class="card">
<h2>International Inaction: The Failure of the World to Stop Atrocities</h2>
<p>From the start of the uprising, Syrians appealed to the world for help. But despite red lines crossed, chemical weapons, and mass killings, the international community failed to stop the atrocities. The UN was paralyzed by Russian and Chinese vetoes. Western powers vacillated between threats and inaction. Aid convoys were blocked, resolutions ignored, and promises broken. For many Syrians, the world’s silence was as painful as the regime’s violence — a bitter lesson that justice and protection were nowhere to be found.</p>
</div>
</section>
<section>
<div class="card">
<h2>Iran and Hezbollah: Allies in Assad’s Survival</h2>
<p>From the earliest days of the uprising, Iran and its Lebanese proxy Hezbollah threw their full support behind Assad. Tehran viewed Syria as a vital link in its “Axis of Resistance” against Israel and the West. Hezbollah fighters flooded into Syria, defending strategic areas like Qusayr and Aleppo. Iranian Revolutionary Guards trained and funded militias, while Shiite fighters from Iraq and Afghanistan joined the fight. Their involvement helped tip the balance of power back in Assad’s favor, but deepened Syria’s sectarian wounds.</p>
</div>
</section>

<section>
<div class="card">
<h2>Russia’s Intervention: From Ally to Occupier</h2>
<p>In September 2015, Russia launched a full-scale military intervention to save the Assad regime from collapse. Russian airstrikes devastated rebel-held areas, targeting hospitals, schools, and markets under the guise of fighting terrorism. The Russian military presence turned Moscow into the dominant power broker in Syria, sidelining Western efforts and cementing Assad’s survival. For many Syrians, Russian planes became synonymous with destruction — but also marked the end of any realistic hope for Assad’s fall.</p>
</div>
</section>

<section>
<div class="card">
<h2>Turkey’s Role: Borders, Rebels, and Buffer Zones</h2>
<p>Turkey initially welcomed Syrian refugees and supported rebel factions, hosting the Syrian opposition in Istanbul. Over time, however, Ankara’s policy became increasingly focused on countering Kurdish forces along its border. Turkey launched multiple incursions into northern Syria, carving out buffer zones and resettling refugees there. Its complicated relationship with jihadist factions and its own domestic politics left Syrians ambivalent: Turkey was both a refuge and another player pursuing its own agenda.</p>
</div>
</section>

<section>
<div class="card">
<h2>American Policy in Syria: Confusion, Retreat, and Missed Opportunities</h2>
<p>The United States spoke loudly but carried a light stick in Syria. Obama’s infamous “red line” on chemical weapons was crossed without real consequences, emboldening Assad and his allies. US support to rebels was piecemeal and inconsistent, and Washington later shifted focus almost entirely to fighting ISIS. Under Trump, US forces withdrew from parts of northern Syria, abandoning Kurdish allies to Turkish attacks. For Syrians, America’s role became a story of broken promises and strategic retreat.</p>
</div>
</section>

<section>
<div class="card">
<h2>The Geneva Talks and the Illusion of Peace</h2>
<p>Since 2012, the UN has convened multiple rounds of peace talks in Geneva, attempting to broker a political solution. Yet these negotiations have yielded little more than words. Assad’s intransigence, opposition disunity, and foreign interference doomed the process. Ceasefires were announced and broken. Constitutional committees met and stalled. For ordinary Syrians, Geneva became a symbol of the world’s impotence — a distant theater where their suffering was debated but never resolved.</p>
</div>
</section>

<section>
<div class="card">
<h2>Sectarianism and Coexistence: The Shattered Mosaic of Syrian Society</h2>
<p>Syria once prided itself on its diversity: Sunnis, Alawites, Christians, Druze, Kurds, and others living side by side. But decades of Assad rule manipulated sectarian fears to divide and rule. The revolution exposed and deepened these divisions, with massacres and displacement fueling mistrust. Yet even amid war, many Syrians rejected sectarian narratives, marching under the slogan: <em>“The Syrian people are one.”</em> Rebuilding this fragile mosaic remains one of Syria’s greatest challenges — and hopes.</p>
</div>
</section>

<section>
<div class="card">
<h2>Memory and Justice: The Struggle to Document Crimes</h2>
<img src="images/justice.jpg" alt="Justice for Syria" class="responsive">
<p>For survivors, memory is both a burden and a weapon. Activists and NGOs have worked tirelessly to document atrocities: mass graves, torture photos, names of the disappeared. The Caesar photos smuggled out by a military defector shocked the world. International courts have begun prosecuting low-level perpetrators in Europe, but justice for the architects of Syria’s horrors remains elusive. For Syrians, remembering is a form of resistance, and a promise: these crimes will not be forgotten.</p>
</div>
</section>

<section>
<div class="card">
<h2>Syria’s Demographic Engineering: Forced Displacement and Settlement</h2>
<img src="images/demographics.jpg" alt="Forced displacement" class="responsive">
<p>The war radically altered Syria’s demographics. Millions of Sunnis were displaced from strategic areas, replaced by loyalist populations or foreign fighters’ families. Neighborhoods in Damascus suburbs, Homs, and Aleppo were emptied and “redeveloped,” often under the guise of reconstruction. For many, this was not just war but social engineering — a deliberate attempt to reshape the country’s sectarian balance to ensure the regime’s survival.</p>
</div>
</section>

<section>
<div class="card">
<h2>The Psychological Wounds: Trauma and Survival in a Scarred Nation</h2>
<p>The human cost of Syria’s war is incalculable. Beyond the dead and displaced are millions living with invisible wounds: PTSD, depression, survivor’s guilt. Children draw bombs and blood instead of flowers and suns. Women bear the scars of sexual violence and loss. Entire communities are marked by the collective trauma of siege, chemical attack, and betrayal. Healing these wounds will take generations — but Syrians’ resilience remains extraordinary.</p>
</div>
</section>

<section>
<div class="card">
<h2>Rebuilding or Remembering: Syria’s Future Between Hope and Ruin</h2>
<img src="images/future.jpg" alt="Future of Syria" class="responsive">
<p>Syria stands at a crossroads: rebuild under the same regime that caused so much pain, or dare to envision something new? Cities lie in ruins, yet some streets bustle again. Refugees dream of return, yet fear persecution. Young Syrians talk of justice and freedom, yet many despair. The question lingers: can Syria rise from its ashes? Its future depends on whether its people — and the world — choose memory over amnesia, justice over impunity, and hope over despair.</p>
</div>
</section>

</main>
<script src="js/main.js"></script>
</body>
</html>
<?php include 'includes/footer.php'; ?>
