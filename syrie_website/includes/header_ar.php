<?php
$isArabic = strpos(basename($_SERVER['PHP_SELF']), '_ar.php') !== false;
$currentFile = basename($_SERVER['PHP_SELF']);
$englishPage = str_replace('_ar.php', '.php', $currentFile);
$arabicPage = str_replace('.php', '_ar.php', $currentFile);
?>

<header>
    <div class="header-container">
        <a href="<?= BASE_URL ?><?= $isArabic ? 'index_ar.php' : 'index.php' ?>" class="logo">
            <img src="<?= BASE_URL ?>images/syria-new-flag.jpg" alt="Syria Flag" class="flag-icon">
            <?= $isArabic ? 'سوريا' : 'Syria' ?>
        </a>

        <nav>
            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul>
                <li><a href="<?= BASE_URL ?><?= $isArabic ? 'index_ar.php' : 'index.php' ?>"><?= $isArabic ? 'الرئيسية' : 'Home' ?></a></li>
                <li><a href="<?= BASE_URL ?><?= $isArabic ? 'history_ar.php' : 'history.php' ?>"><?= $isArabic ? 'التاريخ' : 'History' ?></a></li>
                <li><a href="<?= BASE_URL ?><?= $isArabic ? 'culture_ar.php' : 'culture.php' ?>"><?= $isArabic ? 'الثقافة' : 'Culture' ?></a></li>
                <li><a href="<?= BASE_URL ?><?= $isArabic ? 'geography_ar.php' : 'geography.php' ?>"><?= $isArabic ? 'الجغرافيا' : 'Geography' ?></a></li>
                <li><a href="<?= BASE_URL ?><?= $isArabic ? 'economy_ar.php' : 'economy.php' ?>"><?= $isArabic ? 'الاقتصاد' : 'Economy' ?></a></li>
                <li><a href="<?= BASE_URL ?><?= $isArabic ? 'gallery_ar.php' : 'gallery.php' ?>"><?= $isArabic ? 'المعرض' : 'Gallery' ?></a></li>
                <li><a href="<?= BASE_URL ?><?= $isArabic ? 'cities_ar.php' : 'cities.php' ?>"><?= $isArabic ? 'المدن والمحافظات' : 'Cities & Provinces' ?></a></li>
                <li><a href="<?= BASE_URL ?><?= $isArabic ? 'contact_ar.php' : 'contact.php' ?>"><?= $isArabic ? 'اتصل بنا' : 'Contact' ?></a></li>

                <!-- 🟥 Nieuwe knop -->
                <li>
                    <a href="<?= BASE_URL ?><?= $isArabic ? 'revolution_ar.php' : 'revolution.php' ?>">
                        <?= $isArabic ? 'ثورة 2011 ' : 'Revolution 2011' ?>
                    </a>
                </li>

                <?php if (isLoggedIn()): ?>
                <li><a href="<?= BASE_URL ?>admin/"><?= $isArabic ? 'لوحة الإدارة' : 'Admin' ?></a></li>
                <?php endif; ?>

                <li>
                    <?php if ($isArabic): ?>
                        <a href="<?= $englishPage ?>">English</a>
                    <?php else: ?>
                        <a href="<?= $arabicPage ?>">العربية</a>
                    <?php endif; ?>
                </li>
            </ul>
        </nav>
    </div>
</header>
