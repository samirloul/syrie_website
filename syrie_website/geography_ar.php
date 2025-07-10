<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>الجغرافيا في سوريا - مناظر طبيعية، موارد، مدن، وتحديات</title>
<meta name="description" content="اكتشف الجغرافيا المتنوعة لسوريا: الساحل، الجبال، الصحارى، السهول، والأنهار، مع نظرة على المدن الرئيسية، الموارد الطبيعية، المناطق المحمية، والتحديات البيئية.">
<link rel="stylesheet" href="css/style.css">
<style>
body {
    direction: rtl;
    text-align: right;
}
img.map {
    width: 100%;
    max-width: 600px;
    margin: 1rem auto;
    display: block;
    border-radius: 8px;
}
</style>
</head>
<body>

<?php include 'includes/header.php'; ?>

<main>

<section class="hero" style="background: linear-gradient(rgba(139, 69, 19, 0.8), rgba(218, 165, 32, 0.8)), url('images/syria-map.jpg'); background-size: cover; background-position: center;">
    <h1>الجغرافيا في سوريا</h1>
    <p>اكتشف المناظر الطبيعية المتنوعة والموارد الغنية والتحديات البيئية</p>
</section>

<img src="images/cities-hero.jpg" alt="خريطة سوريا" class="map">

<section class="overview-section">
<div class="grid grid-2">
<div class="card">
    <h2>نظرة عامة جغرافية</h2>
    <p><strong>المساحة:</strong> 185,180 كم²</p>
    <p><strong>الموقع:</strong> غرب آسيا، على الساحل الشرقي للبحر الأبيض المتوسط</p>
    <p><strong>الإحداثيات:</strong> ٣٥° شمالاً، ٣٨° شرقاً</p>
    <p><strong>أعلى نقطة:</strong> جبل حرمون (٢٨١٤ م)</p>
    <p><strong>أدنى نقطة:</strong> بحيرة طبريا (-٢٠٠ م)</p>
    <p><strong>الساحل:</strong> ١٩٣ كم</p>
</div>

<div class="card">
    <h2>الحدود</h2>
    <ul>
        <li><strong>شمالاً:</strong> تركيا</li>
        <li><strong>شرقاً:</strong> العراق</li>
        <li><strong>جنوباً:</strong> الأردن</li>
        <li><strong>جنوب غرب:</strong> فلسطين/إسرائيل</li>
        <li><strong>غرباً:</strong> لبنان</li>
    </ul>
</div>
</div>
</section>

<section class="regions-section">
<h2 class="text-center mb-2">الأقاليم الجغرافية</h2>
<div class="grid grid-2">
<div class="card">
<h3>🏖️ الساحل السوري</h3>
<p>يمتد بمحاذاة البحر الأبيض المتوسط، معتدل ورطب، غني بالغابات.</p>
</div>
<div class="card">
<h3>⛰️ جبال سوريا</h3>
<p>جبال العلويين، جبال لبنان الشرقية، وجبل الشيخ، تمنح البلاد تضاريس وعرة.</p>
</div>
<div class="card">
<h3>🌾 الجزيرة السورية</h3>
<p>شمال شرق البلاد، أرض خصبة للزراعة ومصدر رئيسي للقمح.</p>
</div>
<div class="card">
<h3>🏜️ البادية السورية</h3>
<p>وسط وشرق سوريا، صحراء واسعة قليلة السكان.</p>
</div>
</div>
</section>

<section class="water-section">
<h2 class="text-center mb-2">الأنهار والمسطحات المائية</h2>
<div class="grid grid-3">
<div class="card">
<h3>🌊 الفرات</h3>
<p>أطول وأهم نهر، مع بحيرة الأسد وسد الطبقة.</p>
</div>
<div class="card">
<h3>🏞️ العاصي</h3>
<p>ينبع من لبنان ويعبر حمص وحماة إلى تركيا.</p>
</div>
<div class="card">
<h3>💧 أنهار أخرى</h3>
<p>الخابور، بردى، اليرموك، بحيرة قطينة، الينابيع الكثيرة على الساحل.</p>
</div>
</div>
</section>

<section class="climate-section">
<h2 class="text-center mb-2">المناخ</h2>
<div class="grid grid-2">
<div class="card">
<h3>☀️ أنماط المناخ</h3>
<ul>
<li>متوسطي ساحلي</li>
<li>قاري داخلي</li>
<li>صحراوي في الشرق</li>
</ul>
</div>
<div class="card">
<h3>🌦️ الفصول</h3>
<p>شتاء معتدل إلى بارد مع أمطار، صيف حار جاف، ربيع وخريف قصيران ومعتدلان.</p>
</div>
</div>
</section>

<section class="cities-section">
<h2 class="text-center mb-2">المدن والمحافظات الرئيسية</h2>
<div class="grid grid-3">
<div class="card">
<img src="images/damascus-old-city.jpg" alt="دمشق">
<h3>دمشق</h3>
<p>العاصمة وأقدم مدينة مأهولة بالعالم.</p>
</div>
<div class="card">
<img src="images/aleppo-citadel.jpg" alt="حلب">
<h3>حلب</h3>
<p>العاصمة الاقتصادية والتاريخية الشمالية.</p>
</div>
<div class="card">
<img src="images/homs-city.jpg" alt="حمص">
<h3>حمص</h3>
<p>مركز صناعي وزراعي هام في الوسط.</p>
</div>
</div>
</section>

<section class="resources-section">
<h2 class="text-center mb-2">الموارد الطبيعية والبيئية</h2>
<div class="grid grid-2">
<div class="card">
<h3>⛽ الطاقة</h3>
<p>نفط، غاز طبيعي، كهرباء مائية، وطاقة شمسية.</p>
</div>
<div class="card">
<h3>🏭 المعادن</h3>
<p>فوسفات، ملح، رخام، جبس.</p>
</div>
</div>
</section>

<section class="agriculture-section">
<h2 class="text-center mb-2">الزراعة والغطاء النباتي</h2>
<div class="grid grid-3">
<div class="card">
<h3>🌾 محاصيل</h3>
<p>قمح، شعير، زيتون، قطن، خضروات وفواكه.</p>
</div>
<div class="card">
<h3>🌳 الغابات</h3>
<p>الصنوبر، السرو، الزيتون البري على الساحل والجبال.</p>
</div>
<div class="card">
<h3>🐪 الحياة البرية</h3>
<p>غزلان، طيور، زواحف، ثعالب صحراوية.</p>
</div>
</div>
</section>

<section class="environment-section">
<h2 class="text-center mb-2">التحديات البيئية</h2>
<div class="grid grid-2">
<div class="card">
<h3>💧 ندرة المياه</h3>
<p>بسبب الجفاف وتراجع مصادر المياه الجوفية.</p>
</div>
<div class="card">
<h3>🌍 مشاكل أخرى</h3>
<p>التصحر، تآكل التربة، تلوث الهواء والمياه.</p>
</div>
</div>
</section>

<section class="protected-areas-section">
<h2 class="text-center mb-2">المناطق المحمية</h2>
<div class="card">
<h3>🏞️ المحميات الطبيعية</h3>
<p>تضم سوريا عدة محميات مثل محمية الشوح والأرز ومحمية البلعاس الصحراوية، لحماية التنوع الحيوي والتوازن البيئي.</p>
</div>
</section>

</main>

<?php include 'includes/footer_ar.php'; ?>

<script src="js/main.js"></script>
</body>
</html>
