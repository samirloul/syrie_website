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
            <div class="menu-toggle" id="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul id="nav-menu">
                <li><a href="<?= BASE_URL ?><?= $isArabic ? 'index_ar.php' : 'index.php' ?>"><?= $isArabic ? 'الرئيسية' : 'Home' ?></a></li>
                <li><a href="<?= BASE_URL ?><?= $isArabic ? 'history_ar.php' : 'history.php' ?>"><?= $isArabic ? 'التاريخ' : 'History' ?></a></li>
                <li><a href="<?= BASE_URL ?><?= $isArabic ? 'culture_ar.php' : 'culture.php' ?>"><?= $isArabic ? 'الثقافة' : 'Culture' ?></a></li>
                <li><a href="<?= BASE_URL ?><?= $isArabic ? 'geography_ar.php' : 'geography.php' ?>"><?= $isArabic ? 'الجغرافيا' : 'Geography' ?></a></li>
                <li><a href="<?= BASE_URL ?><?= $isArabic ? 'economy_ar.php' : 'economy.php' ?>"><?= $isArabic ? 'الاقتصاد' : 'Economy' ?></a></li>
                <li><a href="<?= BASE_URL ?><?= $isArabic ? 'gallery_ar.php' : 'gallery.php' ?>"><?= $isArabic ? 'المعرض' : 'Gallery' ?></a></li>
                <li><a href="<?= BASE_URL ?><?= $isArabic ? 'cities_ar.php' : 'cities.php' ?>"><?= $isArabic ? 'المدن والمحافظات' : 'Cities & Provinces' ?></a></li>
                <li>
                    <a href="<?= BASE_URL ?><?= $isArabic ? 'revolution_ar.php' : 'revolution.php' ?>">
                        <?= $isArabic ? 'ثورة 2011  ' : 'Revolution 2011' ?>
                    </a>
                </li>   
                             <li><a href="<?= BASE_URL ?><?= $isArabic ? 'contact_ar.php' : 'contact.php' ?>"><?= $isArabic ? 'اتصل بنا' : 'Contact' ?></a></li>

                <?php if (isLoggedIn()): ?>
                <li><a href="<?= BASE_URL ?>admin/"><?= $isArabic ? 'لوحة الإدارة' : 'Admin' ?></a></li>
                <?php endif; ?>

<li>
<?php
$isHomePage = in_array($currentFile, ['index.php', 'index_ar.php']);
if ($isHomePage):
?>
    <a href="<?= $isArabic ? $englishPage : $arabicPage ?>">
        <img src="<?= BASE_URL ?>images/<?= $isArabic ? 'united-kingdom' : 'saudi-arabia' ?>.png" 
             alt="<?= $isArabic ? 'English' : 'العربية' ?>" 
             style="width:24px; height:auto;" 
             title="<?= $isArabic ? 'English' : 'العربية' ?>">
    </a>
<?php else: ?>
    <a href="#" id="language-warning">
        <img src="<?= BASE_URL ?>images/<?= $isArabic ? 'united-kingdom' : 'saudi-arabia' ?>.png" 
             alt="<?= $isArabic ? 'English' : 'العربية' ?>" 
             style="width:24px; height:auto;" 
             title="<?= $isArabic ? 'English' : 'العربية' ?>">
    </a>
<?php endif; ?>
</li>


            </ul>
        </nav>
    </div>
</header>
<div id="languageModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <?php if ($isArabic): ?>
        <h2>تغيير اللغة</h2>
        <p>يمكنك تغيير اللغة فقط من الصفحة الرئيسية. يرجى العودة إلى الصفحة الرئيسية لتحديد اللغة.</p>
        <p style="text-align:center; margin-top:1rem;">
            <a href="<?= BASE_URL ?>index_ar.php" class="btn">الانتقال إلى الصفحة الرئيسية</a>
        </p>
    <?php else: ?>
        <h2>Language Switch</h2>
        <p>You can only change the language from the homepage. Please go back to the homepage to select your language.</p>
        <p style="text-align:center; margin-top:1rem;">
            <a href="<?= BASE_URL ?>index.php" class="btn">Go to Homepage</a>
        </p>
    <?php endif; ?>
  </div>
</div>
<style>
    .modal {
  display: none; 
  position: fixed; 
  z-index: 9999; 
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto; 
  background-color: rgba(0,0,0,0.6);
}

.modal-content {
  background-color: #fff;
  margin: 10% auto;
  padding: 20px;
  border-radius: 10px;
  width: 90%;
  max-width: 400px;
  text-align: center;
  box-shadow: 0 0 10px rgba(0,0,0,0.5);
}

.modal .close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  cursor: pointer;
}

.modal .close:hover {
  color: #000;
}

.modal .btn {
  display: inline-block;
  background-color: #8B4513;
  color: #fff;
  padding: 10px 20px;
  text-decoration: none;
  border-radius: 5px;
}

.modal .btn:hover {
  background-color: #A0522D;
}

</style>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const warningLink = document.getElementById("language-warning");
    const modal = document.getElementById("languageModal");
    const closeBtn = modal.querySelector(".close");

    if (warningLink) {
        warningLink.addEventListener("click", function(e) {
            e.preventDefault();
            modal.style.display = "block";
        });
    }

    closeBtn.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
});
</script>
