<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الاقتصاد السوري - القطاعات والتنمية</title>
    <meta name="description" content="تعرف على الاقتصاد السوري: الزراعة، الصناعة، التجارة، الموارد الطبيعية، والتحديات الاقتصادية.">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <section class="hero" style="background: linear-gradient(rgba(139, 69, 19, 0.8), rgba(218, 165, 32, 0.8)), url('images/syria-new-flag.jpg'); background-size: cover; background-position: center;">
            <h1>الاقتصاد السوري</h1>
            <p>نظرة عامة على القطاعات الاقتصادية والتطورات</p>
        </section>

        <section class="overview-section">
            <div class="card">
                <h2>نظرة عامة</h2>
                <p>كان الاقتصاد السوري يعتمد تاريخيًا على الزراعة وتصدير النفط والتجارة. بفضل موقعها الاستراتيجي ومواردها الطبيعية وأيديها العاملة الماهرة، حققت سوريا نموًا ملحوظًا قبل عام 2011. إلا أن الحرب والعقوبات ألحقت أضرارًا جسيمة باقتصادها.</p>
            </div>
        </section>

        <section class="history-section">
            <h2 class="text-center mb-2">تطور الاقتصاد عبر التاريخ</h2>

            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-date">1946-1960</div>
                    <div class="timeline-content">
                        <h3>بعد الاستقلال</h3>
                        <p>اعتمد الاقتصاد على الزراعة والتجارة مع بناء أسس الدولة الوطنية.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-date">1960-1980</div>
                    <div class="timeline-content">
                        <h3>الفترة الاشتراكية</h3>
                        <p>تأميم الصناعات والمصارف، التركيز على الصناعة الثقيلة، اكتشاف النفط.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-date">1980-2000</div>
                    <div class="timeline-content">
                        <h3>الانفتاح الاقتصادي</h3>
                        <p>تشجيع الاستثمارات الخاصة والخصخصة الجزئية.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-date">2000-2011</div>
                    <div class="timeline-content">
                        <h3>النمو والتحديث</h3>
                        <p>إصلاحات اقتصادية وتطور في السياحة والخدمات.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-date">2011 - 2025</div>
                    <div class="timeline-content">
                        <h3>الأزمة والبدء بالتعافي</h3>
                        <p>تسببت الحرب بانكماش حاد، إلا أن هناك مؤشرات على تعافٍ بطيء في ظل حكومة انتقالية ودعم دولي جزئي.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="sectors-section">
            <h2 class="text-center mb-2">القطاعات الاقتصادية الرئيسية</h2>

            <div class="grid grid-2">
                <div class="card">
                    <h3>🌾 الزراعة</h3>
                    <p>الحبوب (قمح وشعير)، القطن، الزيتون، الحمضيات، التبغ، الشوندر السكري.</p>
                    <p>التحديات: الجفاف، نقص المياه، ألغام، تهجير المزارعين.</p>
                </div>

                <div class="card">
                    <h3>🏭 الصناعة</h3>
                    <p>الغزل والنسيج، الصناعات الغذائية، الكيميائية، الأسمنت، الأدوية.</p>
                    <p>أبرز المدن الصناعية: دمشق، حلب، حمص، اللاذقية (تضررت بشدة).</p>
                </div>

                <div class="card">
                    <h3>⛽ الطاقة والتعدين</h3>
                    <p>النفط والغاز والفوسفات. معظم الإنتاج تأثر بالحرب.</p>
                </div>

                <div class="card">
                    <h3>🏪 الخدمات والتجارة</h3>
                    <p>التجارة الداخلية والخارجية، السياحة (شبه متوقفة)، النقل، التعليم والصحة.</p>
                </div>
            </div>
        </section>

        <section class="resources-section">
            <h2 class="text-center mb-2">الموارد الطبيعية</h2>

            <div class="grid grid-3">
                <div class="card">
                    <h3>🛢️ النفط</h3>
                    <p>مخزون كبير في الشمال الشرقي، الإنتاج الحالي منخفض ومتنازع عليه.</p>
                </div>

                <div class="card">
                    <h3>💨 الغاز الطبيعي</h3>
                    <p>يستخدم لتوليد الكهرباء والصناعة. قطاع واعد يحتاج إلى استثمارات.</p>
                </div>

                <div class="card">
                    <h3>⚡ الطاقة الكهرومائية</h3>
                    <p>سدود الفرات، تشرين والبعث تدعم الطاقة والري.</p>
                </div>
            </div>
        </section>

        <section class="trade-section">
            <h2 class="text-center mb-2">التجارة الدولية</h2>

            <div class="grid grid-2">
                <div class="card">
                    <h3>📤 الصادرات</h3>
                    <ul>
                        <li>نفط ومنتجاته (انخفضت بشدة)</li>
                        <li>قطن، زيت زيتون، فواكه وخضروات</li>
                    </ul>
                </div>

                <div class="card">
                    <h3>📥 الواردات</h3>
                    <ul>
                        <li>معدات صناعية، أدوية، أغذية، مواد خام</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="tourism-section">
            <h2 class="text-center mb-2">السياحة</h2>

            <div class="grid grid-2">
                <div class="card">
                    <h3>🏛️ السياحة الثقافية</h3>
                    <p>مواقع التراث العالمي، المدن القديمة، المواقع الدينية.</p>
                </div>

                <div class="card">
                    <h3>🏖️ السياحة الساحلية والطبيعية</h3>
                    <p>شواطئ المتوسط، الجبال، المنتزهات الطبيعية.</p>
                </div>
            </div>
        </section>

        <section class="challenges-section">
            <h2 class="text-center mb-2">التحديات الاقتصادية (حتى 2025)</h2>

            <div class="grid grid-2">
                <div class="card">
                    <h3>🌊 تحديات داخلية</h3>
                    <p>دمار البنية التحتية، الفقر، التضخم، الفساد، نقص الأيدي العاملة المؤهلة.</p>
                </div>

                <div class="card">
                    <h3>🌍 عوامل خارجية</h3>
                    <p>عقوبات دولية، اضطرابات إقليمية، تغير المناخ، تراجع الطلب العالمي.</p>
                </div>
            </div>
        </section>

        <section class="future-section">
            <h2 class="text-center mb-2">الآفاق المستقبلية</h2>

            <div class="card">
                <h3>🚀 إمكانات التنمية</h3>
                <p>رأس مال بشري متعلم، موقع استراتيجي، تراث ثقافي وسياحي، قطاع خاص نشيط. مع الاستقرار والدعم الدولي يمكن أن تستعيد سوريا عافيتها الاقتصادية.</p>
            </div>
        </section>
    </main>

    <?php include 'includes/footer_ar.php'; ?>

    <script src="js/main.js"></script>
</body>
</html>
