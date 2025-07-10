<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المدن والمحافظات - سوريا</title>
    <meta name="description" content="اكتشف أهم المدن والمحافظات في سوريا، تاريخها، ثقافتها، ووضعها الحالي.">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <main>
        <section class="hero" style="background: linear-gradient(rgba(139, 69, 19, 0.8), rgba(218, 165, 32, 0.8)), url('images/cities-hero.jpg'); background-size: cover; background-position: center;">
            <h1>المدن والمحافظات</h1>
            <p>اكتشف قلب سوريا</p>
        </section>
        
        <section class="cities-overview-section">
            <h2 class="text-center mb-2">أبرز المدن والمحافظات</h2>
            <div class="grid grid-3">
                <div class="card">
                    <img src="images/damascus-old-city.jpg" alt="دمشق" loading="lazy">
                    <h3><a href="content/damascus_ar.php">دمشق</a></h3>
                    <h3><a href="content/damascus_ar.php">اكتشف دمشق</a></h3>
                    <p>العاصمة وإحدى أقدم المدن المأهولة في العالم.</p>
                </div>
                <div class="card">
                    <img src="images/aleppo-citadel.jpg" alt="حلب" loading="lazy">
                    <h3><a href="content/aleppo_ar.php">حلب</a></h3>
                    <h3><a href="content/aleppo_ar.php">اكتشف حلب</a></h3>
                    <p>مركز تجاري تاريخي، معروف بقلعته القديمة وأسواقه التقليدية.</p>
                </div>
                <div class="card">
                    <img src="images/homs-city.jpg" alt="حمص" loading="lazy">
                    <h3><a href="content/homs_ar.php">حمص</a></h3>
                    <h3><a href="content/homs_ar.php"> اكتشف حمص  </a></h3>

                    <p>مدينة صناعية مركزية تقع على نهر العاصي.</p>
                </div>
                <div class="card">
                    <img src="images/idlib-city.jpg" alt="إدلب" loading="lazy">
                    <h3><a href="content/idlib_ar.php">إدلب</a></h3>
                    <h3><a href="content/idlib_ar.php"> اكتشف إدلب</a></h3>
                    <p>عروس الشمال، مدينة الزيتون والصمود</p>
                </div>
                <div class="card">
                    <img src="images/latakia-city.jpg" alt="اللاذقية" loading="lazy">
                    <h3><a href="content/latakia_ar.php">اللاذقية</a></h3>
                    <h3><a href="content/latakia_ar.php">اكتشف اللاذقية</a></h3>
                    <p>المدينة الساحلية الرئيسية لسوريا على البحر المتوسط.</p>
                </div>
                <div class="card">
                    <img src="images/deir-ez-zor-city.jpg" alt="دير الزور" loading="lazy">
                    <h3><a href="content/deir-ez-zor_ar.php">دير الزور</a></h3>
                    <h3><a href="content/deir-ez-zor_ar.php">اكتشف دير الزور</a></h3>
                    <p>مدينة شرق سوريا على الفرات، مشهورة بصناعة النفط.</p>
                </div>
                <div class="card">
                    <img src="images/hama-city.jpg" alt="حماة" loading="lazy">
                    <h3><a href="content/hama_ar.php">حماة</a></h3>
                    <h3><a href="content/hama_ar.php">اكتشف حماة</a></h3>
                    <p>معروفة بنواعيرها القديمة على نهر العاصي.</p>
                </div>
                <div class="card">
                    <img src="images/raqqa-city.jpg" alt="الرقة" loading="lazy">
                    <h3><a href="content/raqqa_ar.php">الرقة</a></h3>
                    <h3><a href="content/raqqa_ar.php"> اكتشف الرقة</a></h3>
                    <p>مدينة شمالية ذات أهمية تاريخية على الفرات.</p>
                </div>
                <div class="card">
                    <img src="images/palmyra-ruins.jpg" alt="تدمر" loading="lazy">
                    <h3><a href="content/palmyra_ar.php">تدمر</a></h3>
                    <h3><a href="content/palmyra_ar.php">اكتشف تدمر</a></h3>
                    <p>مدينة قديمة في الصحراء السورية وموقع تراث عالمي.</p>
                </div>
                <div class="card">
                    <img src="images/Hasakah-ruins.jpg" alt="الحسكة" loading="lazy">
                    <h3><a href="content/al-hasakah_ar.php">الحسكة</a></h3>
                    <h3><a href="content/al-hasakah_ar.php">اكتشف الحسكة</a></h3>
                    <p>المحافظة الخصبة في الشمال الشرقي، غنية بالثقافة والزراعة.</p>
                </div>
                <div class="card">
                    <img src="images/Daraa-ruins.jpg" alt="درعا" loading="lazy">
                    <h3><a href="content/daraa_ar.php">درعا</a></h3>
                    <h3><a href="content/daraa_ar.php">اكتشف درعا</a></h3>
                    <p>مهد الانتفاضة السورية، مليئة بالتاريخ والزراعة.</p>
                </div>
                <div class="card">
                    <img src="images/Quneitra-ruins.jpg" alt="القنيطرة" loading="lazy">
                    <h3><a href="content/quneitra_ar.php">القنيطرة</a></h3>
                    <h3><a href="content/quneitra_ar.php">اكتشف القنيطرة</a></h3>
                    <p>مدينة مدمرة ورمز للصمود والمقاومة.</p>
                </div>
                <div class="card">
                    <img src="images/Tartus-ruins.jpg" alt="طرطوس" loading="lazy">
                    <h3><a href="content/tartus_ar.php">طرطوس</a></h3>
                    <h3><a href="content/tartus_ar.php">اكتشف طرطوس</a></h3>
                    <p>المدينة الساحلية الهادئة على البحر المتوسط.</p>
                </div>
                <div class="card">
                    <img src="images/suwayda-ruins.jpg" alt="السويداء" loading="lazy">
                    <h3><a href="content/suwayda_ar.php">السويداء</a></h3>
                    <h3><a href="content/suwayda_ar.php">اكتشف السويداء</a></h3>
                    <p>مدينة الجبل، موطن التقاليد الدرزية والكروم.</p>
                </div>
            </div>
        </section>
    </main>
    
    <?php include 'includes/footer_ar.php'; ?>
    
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
