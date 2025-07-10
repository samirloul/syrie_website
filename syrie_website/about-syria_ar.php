<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

$pageTitle = "عن سوريا - معلومات عامة";
$pageDescription = "تعرف على سوريا: الموقع، السكان، اللغات، الديانات، ومعلومات عامة عن هذا البلد المثير.";

include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سوريا - اكتشف التاريخ الغني والثقافة</title>
    <meta name="description" content="اكتشف التاريخ الغني، الثقافة المتنوعة، والمناظر الطبيعية الخلابة في سوريا. دليل شامل عن هذا البلد التاريخي.">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>

<main>
    <section class="hero" style="background: linear-gradient(rgba(139, 69, 19, 0.8), rgba(218, 165, 32, 0.8)), url('images/syria-new-flag.jpg'); background-size: cover; background-position: center;">
        <h1>عن سوريا</h1>
        <p>اكتشف المعلومات الأساسية عن الجمهورية العربية السورية</p>
    </section>
    
    <section class="content-section">
        <div class="grid grid-2">
            <div class="content-text">
                <h2>معلومات عامة</h2>
                <p><strong>الاسم الرسمي:</strong> الجمهورية العربية السورية</p>
                <p><strong>العاصمة:</strong> دمشق</p>
                <p><strong>المساحة:</strong> 185,180 كم²</p>
                <p><strong>عدد السكان:</strong> حوالي 18 مليون نسمة (قبل 2011، التقديرات الحالية تختلف بسبب الحرب والنزوح)</p>
                <p><strong>اللغة الرسمية:</strong> العربية</p>
                <p><strong>العملة:</strong> الليرة السورية</p>
                <p><strong>المنطقة الزمنية:</strong> +2 (توقيت شرق أوروبا)</p>
                <p><strong>نظام الحكم:</strong> جمهوري رئاسي (حاليًا تحت حكومة انتقالية حتى يوليو 2025)</p>
            </div>
            <div class="info-image">
                <img src="images/syria-map.jpg" alt="خريطة سوريا" loading="lazy">
            </div>
        </div>
    </section>
    
    <section class="geography-section">
        <h2 class="text-center mb-2">الموقع الجغرافي</h2>
        <div class="card">
            <p>تقع سوريا في غرب آسيا وتحدها عدة دول:</p>
            <ul style="margin: 1rem 0; padding-right: 2rem;">
                <li><strong>شمالًا:</strong> تركيا (822 كم)</li>
                <li><strong>شرقًا وجنوب شرق:</strong> العراق (605 كم)</li>
                <li><strong>جنوبًا:</strong> الأردن (375 كم)</li>
                <li><strong>جنوب غرب:</strong> إسرائيل والجولان (76 كم)</li>
                <li><strong>غربًا:</strong> لبنان (375 كم)</li>
                <li><strong>شمال غرب:</strong> البحر المتوسط (193 كم ساحل)</li>
            </ul>
            <p>تتمتع بموقع استراتيجي عند ملتقى أوروبا وآسيا وأفريقيا، ما جعلها منذ القدم طريقًا تجاريًا هامًا.</p>
        </div>
    </section>
    
    <section class="demographics-section">
        <h2 class="text-center mb-2">السكان والثقافة</h2>
        <div class="grid grid-3">
            <div class="card">
                <h3>المجموعات العرقية</h3>
                <ul style="list-style: none; padding: 0;">
                    <li>🔸 العرب (90%)</li>
                    <li>🔸 الأكراد (9%)</li>
                    <li>🔸 الأرمن، الشركس، التركمان وغيرهم (1%)</li>
                </ul>
            </div>
            
            <div class="card">
                <h3>الديانات</h3>
                <ul style="list-style: none; padding: 0;">
                    <li>🕌 السنة (74%)</li>
                    <li>🕌 العلويون (12%)</li>
                    <li>✝️ المسيحيون (10%)</li>
                    <li>🕌 الدروز وغيرهم (4%)</li>
                </ul>
            </div>
            
            <div class="card">
                <h3>اللغات</h3>
                <ul style="list-style: none; padding: 0;">
                    <li>🗣️ العربية (رسمية)</li>
                    <li>🗣️ الكردية</li>
                    <li>🗣️ الأرمنية</li>
                    <li>🗣️ الآرامية</li>
                    <li>🗣️ الشركسية</li>
                </ul>
            </div>
        </div>
    </section>
    
    <section class="climate-section">
        <h2 class="text-center mb-2">المناخ والطبيعة</h2>
        <div class="grid grid-2">
            <div class="card">
                <h3>أنواع المناخ</h3>
                <p><strong>مناخ متوسطي:</strong> على الساحل، شتاء معتدل ممطر وصيف حار جاف.</p>
                <p><strong>مناخ قاري:</strong> في الداخل، صيف حار وشتاء بارد.</p>
                <p><strong>مناخ صحراوي:</strong> في الشرق والجنوب، قليل الأمطار.</p>
            </div>
            
            <div class="card">
                <h3>المناظر الطبيعية</h3>
                <p><strong>الساحل:</strong> سهول ضيقة على البحر المتوسط.</p>
                <p><strong>الجبال:</strong> جبال العلويين وجبال لبنان الشرقية.</p>
                <p><strong>السهول:</strong> سهول خصبة حول دمشق وحلب.</p>
                <p><strong>الصحراء:</strong> البادية السورية شرقًا.</p>
            </div>
        </div>
    </section>
    
    <section class="cities-section">
        <h2 class="text-center mb-2">أهم المدن</h2>
        <div class="grid grid-3">
            <div class="card">
                <img src="images/damascus-city.jpg" alt="دمشق" loading="lazy">
                <h3>دمشق</h3>
                <p>العاصمة وأكبر مدن سوريا. من أقدم المدن المأهولة في العالم بتاريخ يزيد عن 4000 عام. حتى يوليو 2025، تخضع لسيطرة الحكومة الانتقالية وتشهد جهود إعادة إعمار مستمرة وتحديات أمنية.</p>
            </div>
            
            <div class="card">
                <img src="images/aleppo-city.jpg" alt="حلب" loading="lazy">
                <h3>حلب</h3>
                <p>أكبر مدن سوريا سابقًا ومركز تجاري هام. مشهورة بقلعتها القديمة وأسواقها التقليدية. تشهد جهود إعادة إعمار واسعة مع عودة السكان رغم التحديات.</p>
            </div>
            
            <div class="card">
                <img src="images/homs-city.jpg" alt="حمص" loading="lazy">
                <h3>حمص</h3>
                <p>مدينة صناعية كبرى وسط سوريا على نهر العاصي. في مرحلة إعادة إعمار، حيث تظهر بعض المناطق علامات تعافٍ بينما لا تزال أخرى تحمل آثار الحرب.</p>
            </div>
        </div>
    </section>
    
    <section class="quick-facts">
        <h2 class="text-center mb-2">حقائق سريعة</h2>
        <div class="grid grid-2">
            <div class="card">
                <h3>الأهمية التاريخية</h3>
                <ul>
                    <li>مهد الحضارات</li>
                    <li>جزء من طريق الحرير</li>
                    <li>مركز الخلافة الأموية</li>
                    <li>مواقع تراث عالمي (بعضها مهدد)</li>
                </ul>
            </div>
            
            <div class="card">
                <h3>الغنى الثقافي</h3>
                <ul>
                    <li>تقاليد دينية متنوعة</li>
                    <li>مطبخ غني</li>
                    <li>حرف تقليدية</li>
                    <li>موسيقى ورقصات شعبية</li>
                </ul>
            </div>
        </div>
    </section>
    
    <section class="cta-section text-center" style="background: linear-gradient(135deg, var(--accent-color), var(--secondary-color)); color: white; padding: 3rem 2rem; border-radius: 15px; margin: 3rem 0;">
        <h2>اكتشف المزيد</h2>
        <p>تعمق في الجوانب المختلفة لسوريا</p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-top: 2rem;">
            <a href="history_ar.php" class="btn" style="background: white; color: var(--accent-color);">التاريخ</a>
            <a href="culture_ar.php" class="btn" style="background: white; color: var(--accent-color);">الثقافة</a>
            <a href="geography_ar.php" class="btn" style="background: white; color: var(--accent-color);">الجغرافيا</a>
            <a href="economy_ar.php" class="btn" style="background: white; color: var(--accent-color);">الاقتصاد</a>
        </div>
    </section>
</main>

<?php include 'includes/footer_ar.php'; ?>

<script src="js/main.js"></script>
</body>
</html>
