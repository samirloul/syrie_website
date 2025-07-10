<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ثقافة سوريا - التقاليد والفنون والتراث</title>
<meta name="description" content="اكتشف التقاليد الثقافية الغنية في سوريا: الفن والموسيقى والرقص والأدب والحرف والتراث الغذائي.">
<link rel="stylesheet" href="css/style.css">
<style>
.hero h1, .hero p {
    text-shadow: 1px 1px 3px rgba(0,0,0,0.6);
}
.section-icon {
    margin-left: 0.5rem;
    font-size: 1.2em;
}
</style>
</head>
<body>
<?php include 'includes/header.php'; ?>

<main>

<section class="hero" style="background: linear-gradient(rgba(139,69,19,0.8), rgba(218,165,32,0.8)), url('images/syria-new-flag.jpg'); background-size: cover; background-position: center;">
<h1>ثقافة سوريا</h1>
<p>نسيج غني من التقاليد والفنون والتراث</p>
</section>

<section class="intro-section">
<div class="card">
<h2>أرض غنية بالثقافة <span class="section-icon">🌏</span></h2>
<p>الثقافة السورية مزيج رائع من تأثيرات متعددة تطورت عبر آلاف السنين. كمفترق طرق بين الشرق والغرب، استوعبت سوريا عناصر من الثقافات العربية والفارسية والتركية والكردية والأوروبية، مما شكل هوية ثقافية فريدة وغنية.</p>
<p>من تقاليد الحرفيين في أسواق دمشق وحلب القديمة إلى الشعر والموسيقى الراقية، ومن الرقصات الشعبية الملونة إلى المطبخ المشهور عالمياً - تعكس الثقافة السورية تنوع وإبداع شعبها.</p>
</div>
</section>

<section class="language-section">
<h2 class="text-center mb-2">اللغات والأدب <span class="section-icon">📚</span></h2>

<div class="grid grid-2">
<div class="card">
<h3>🗣️ التنوع اللغوي</h3>
<p><strong>العربية</strong> هي اللغة الرسمية ويتحدث بها الغالبية بلهجة سورية مميزة.</p>
<p><strong>الكردية</strong> يتحدث بها الأكراد في الشمال الشرقي.</p>
<p><strong>الآرامية</strong> ما زالت مستخدمة في بعض القرى المسيحية.</p>
<p><strong>الأرمنية</strong> و<strong>الشركسية</strong> بين أقلياتها.</p>
</div>

<div class="card">
<h3>✒️ الأدب والشعر</h3>
<p>لسوريا تقليد أدبي عريق منذ العصور القديمة وأدبها الحديث أغنى الأدب العربي.</p>
<ul>
<li>نزار قباني</li>
<li>أدونيس</li>
<li>حنّا مينه</li>
<li>غادة السمان</li>
</ul>
</div>
</div>
</section>

<section class="music-section">
<h2 class="text-center mb-2">الموسيقى والرقص <span class="section-icon">🎶</span></h2>

<div class="grid grid-3">
<div class="card">
<h3>🎵 الموسيقى التقليدية</h3>
<p>الموسيقى السورية تجمع المقامات العربية بتأثيرات محلية. الموشح الحلبي شكل موسيقي مميز.</p>
</div>

<div class="card">
<h3>💃 الرقصات الشعبية</h3>
<p><strong>الدبكة</strong> أشهر رقصة شعبية سورية، إلى جانب السماح والهالاي الكردية.</p>
</div>

<div class="card">
<h3>🎤 الموسيقى الحديثة</h3>
<p>أصوات خالدة مثل صباح فخري ولينا شماميان. حلب معروفة بعاصمة الموسيقى العربية.</p>
</div>
</div>
</section>

<section class="crafts-section">
<h2 class="text-center mb-2">الحرف التقليدية <span class="section-icon">🪡</span></h2>

<div class="grid grid-2">
<div class="card">🏺 الفولاذ الدمشقي</div>
<div class="card">🪵 التطعيم بالصدف</div>
<div class="card">🧵 التطريز والمنسوجات</div>
<div class="card">🧼 صابون حلب</div>
</div>
</section>

<section class="art-section">
<h2 class="text-center mb-2">الفنون التشكيلية والسينما <span class="section-icon">🎨</span></h2>

<div class="grid grid-2">
<div class="card">
<h3>🎨 الفنون التشكيلية</h3>
<p>من رواد الفن السوري الحديث: فاتح المدرس، لؤي كيالي، يوسف عبدلكي.</p>
</div>

<div class="card">
<h3>🎬 السينما والمسرح</h3>
<p>المسرح الدمشقي والمهرجانات السينمائية غنية. دريد لحام رمز المسرح والكوميديا.</p>
</div>
</div>
</section>

<section class="architecture-section">
<h2 class="text-center mb-2">العمارة <span class="section-icon">🏛️</span></h2>

<div class="grid grid-2">
<div class="card">
<img src="images/umayyad-mosque.jpg" alt="الجامع الأموي">
<h3>العمارة الإسلامية</h3>
<p>الجامع الأموي تحفة معمارية دمجت الطرازين البيزنطي والإسلامي.</p>
</div>

<div class="card">
<img src="images/damascus-old-city.jpg" alt="بيت دمشقي">
<h3>البيوت الدمشقية</h3>
<p>بيوت تقليدية حول باحة مزينة بالنوافير والمشربيات.</p>
</div>
</div>
</section>

<section class="cuisine-section">
<h2 class="text-center mb-2">الثقافة الغذائية <span class="section-icon">🍲</span></h2>

<div class="grid grid-3">
<div class="card">🥙 كباب، منسف، مقلوبة، شاورما</div>
<div class="card">🥗 تبولة، حمص، متبل، فتوش</div>
<div class="card">🍰 بقلاوة، معمول، مهلبية، حلاوة</div>
</div>
</section>

<section class="religion-section">
<h2 class="text-center mb-2">التنوع الديني <span class="section-icon">🕌</span></h2>

<div class="grid grid-2">
<div class="card">
<h3>الإسلام</h3>
<ul><li>السنة</li><li>العلويون</li><li>الدروز</li><li>الإسماعيليون</li></ul>
</div>

<div class="card">
<h3>✝️ المسيحية</h3>
<ul><li>الأرثوذكس</li><li>السريان</li><li>الأرمن</li><li>الكاثوليك</li></ul>
</div>
</div>
</section>

<section class="intangible-heritage-section">
<h2 class="text-center mb-2">التراث غير المادي <span class="section-icon">🧭</span></h2>

<div class="card">
<p>يشمل التراث غير المادي: الحكايات الشعبية، الأمثال، القهوة العربية، العطوات العشائرية، الأهازيج والاحتفالات التقليدية التي تعكس روح المجتمع السوري.</p>
</div>
</section>

<section class="festivals-section">
<h2 class="text-center mb-2">الأعياد والمهرجانات <span class="section-icon">🎉</span></h2>

<div class="grid grid-3">
<div class="card">🌙 الفطر، الأضحى، المولد النبوي</div>
<div class="card">✝️ الميلاد، الفصح، الغطاس</div>
<div class="card">🎭 مهرجان دمشق، مهرجانات موسيقية وفنية</div>
</div>
</section>

<section class="heritage-section">
<h2 class="text-center mb-2">الحفاظ على التراث <span class="section-icon">🏺</span></h2>

<div class="card">
<ul>
<li>المتحف الوطني بدمشق</li>
<li>متحف حلب</li>
<li>قصر العظم</li>
</ul>
</div>
</section>

</main>

<?php include 'includes/footer_ar.php'; ?>

<script src="js/main.js"></script>
</body>
</html>
