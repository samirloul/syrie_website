<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

$pageTitle = "سوريا - اكتشف التاريخ والثقافة الغنية";
$pageDescription = "استكشف التاريخ العريق، الثقافة الغنية، وجمال واحدة من أقدم الحضارات في العالم.";
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>سوريا - اكتشف التاريخ والثقافة الغنية</title>
<meta name="description" content="اكتشف التاريخ الساحر، الثقافة الغنية والمناظر الخلابة في سوريا. دليل كامل عن هذا البلد التاريخي.">
<link rel="stylesheet" href="css/style.css">
<link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>
<?php include 'includes/header.php'; ?>

<main>
<section class="hero hero-new">
  <div class="overlay">
    <h1> اكتشف سوريا</h1>
    <p class="lead">رحلة عبر التاريخ والثقافة والصمود</p>
    <a href="about-syria_ar.php" class="btn btn-primary">ابدأ رحلتك</a>
  </div>
</section>

<section class="story">
  <div class="container">
    <h2>لماذا سوريا؟</h2>
    <p>
      من الأسواق الصاخبة في دمشق إلى أطلال تدمر الخالدة،
      سوريا أرض يلتقي فيها الشرق بالغرب، والتاريخ يعيش في كل شارع.
      اكتشف التراث العريق، الثقافة الزاهية، وقصص شعبها الصامد.
    </p>
  </div>
</section>

<section class="highlights-grid">
  <div class="highlight-card">
    <img src="images/palmyra-ruins.jpg" alt="تدمر">
    <h3>تدمر</h3>
    <p>لؤلؤة الصحراء وموقع تراث عالمي لليونسكو.</p>
    <a href="cities_ar.php" class="btn btn-secondary">اقرأ المزيد</a>
  </div>
  <div class="highlight-card">
    <img src="images/aleppo-citadel.jpg" alt="قلعة حلب">
    <h3>حلب</h3>
    <p>مدينة الصمود بقلعتها الشهيرة وأسواقها.</p>
    <a href="cities_ar.php" class="btn btn-secondary">اقرأ المزيد</a>
  </div>
  <div class="highlight-card">
    <img src="images/damascus-old-city.jpg" alt="دمشق">
    <h3>دمشق</h3>
    <p>أقدم عاصمة في العالم، مليئة بالقصص والتقاليد.</p>
    <a href="cities_ar.php" class="btn btn-secondary">اقرأ المزيد</a>
  </div>
</section>

<section class="call-to-action">
  <div class="container">
    <h2>استكشف كل المدن والمحافظات</h2>
    <p>شاهد جمال وتنوع كل زاوية في سوريا</p>
    <a href="cities_ar.php" class="btn btn-primary">استعرض الخريطة</a>
  </div>
</section>

</main>
<script src="js/main.js"></script>

<?php include 'includes/footer_ar.php'; ?>
