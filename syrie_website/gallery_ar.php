<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

// Pagination
$page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
$per_page = 12;

// Fetch gallery items
$gallery_items = getAllGalleryItems($page, $per_page);
$total_items = getTotalGalleryItems();
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>معرض الصور والفيديو - سوريا</title>
<meta name="description" content="شاهد أجمل الصور ومقاطع الفيديو لسوريا: المعالم التاريخية، والمناظر الطبيعية، والمعالم الثقافية.">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'includes/header.php'; ?>

<main>
<section class="hero" style="background: linear-gradient(rgba(139, 69, 19, 0.8), rgba(218, 165, 32, 0.8)), url('images/gallery-hero.jpg'); background-size: cover; background-position: center;">
    <h1>المعرض</h1>
    <p>اكتشف جمال سوريا من خلال الصور</p>
</section>

<!-- Filter Buttons -->
<section class="filter-section text-center">
    <div class="filter-buttons">
        <button class="btn filter-btn active" data-filter="all">الكل</button>
        <button class="btn filter-btn" data-filter="image">صور</button>
        <button class="btn filter-btn" data-filter="video">فيديوهات</button>
    </div>
</section>

<!-- Gallery Grid -->
<section class="gallery-section">
<?php if (!empty($gallery_items)): ?>
<div class="gallery-grid">
<?php foreach ($gallery_items as $item): ?>
<div class="gallery-item" data-type="<?php echo $item['media_type']; ?>">
<?php if ($item['media_type'] == 'image'): ?>
<div class="image-container">
    <img src="<?php echo htmlspecialchars($item['media_url']); ?>" 
         alt="<?php echo htmlspecialchars($item['title']); ?>" 
         loading="lazy"
         onclick="openLightbox('<?php echo htmlspecialchars($item['media_url']); ?>', '<?php echo htmlspecialchars($item['title']); ?>', '<?php echo htmlspecialchars($item['description']); ?>')">
    <div class="overlay">
        <h4><?php echo htmlspecialchars($item['title']); ?></h4>
        <?php if ($item['description']): ?>
        <p><?php echo htmlspecialchars(substr($item['description'], 0, 100)) . '...'; ?></p>
        <?php endif; ?>
    </div>
</div>
<?php else: ?>
<div class="video-container">
    <video controls poster="<?php echo str_replace('.mp4', '-thumb.jpg', $item['media_url']); ?>">
        <source src="<?php echo htmlspecialchars($item['media_url']); ?>" type="video/mp4">
        متصفحك لا يدعم عرض الفيديو.
    </video>
    <div class="video-info">
        <h4><?php echo htmlspecialchars($item['title']); ?></h4>
        <?php if ($item['description']): ?>
        <p><?php echo htmlspecialchars($item['description']); ?></p>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>
</div>
<?php endforeach; ?>
</div>

<!-- Pagination -->
<div class="pagination-section text-center mt-2">
<?php echo generatePagination($page, $total_items, $per_page, 'gallery_ar.php'); ?>
</div>

<?php else: ?>
<div class="no-items text-center">
    <h3>لا توجد عناصر</h3>
    <p>حالياً لا يوجد أي عناصر في المعرض.</p>
</div>
<?php endif; ?>

</section>
</main>

<script src="js/main.js"></script>
    <script>
        // Filter functionality
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const galleryItems = document.querySelectorAll('.gallery-item');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Update active button
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                    
                    const filter = this.getAttribute('data-filter');
                    
                    // Filter items
                    galleryItems.forEach(item => {
                        if (filter === 'all' || item.getAttribute('data-type') === filter) {
                            item.style.display = 'block';
                            item.style.animation = 'fadeIn 0.5s ease';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        });
        
        // Lightbox functionality
        function openLightbox(src, title, description) {
            const lightbox = document.getElementById('lightbox');
            const image = document.getElementById('lightbox-image');
            const titleEl = document.getElementById('lightbox-title');
            const descEl = document.getElementById('lightbox-description');
            
            image.src = src;
            image.alt = title;
            titleEl.textContent = title;
            descEl.textContent = description;
            
            lightbox.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }
        
        function closeLightbox() {
            const lightbox = document.getElementById('lightbox');
            lightbox.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
        
        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeLightbox();
            }
        });
    </script>
    
    <style>
        .filter-section {
            padding: 2rem 0;
            background: white;
            margin: 2rem 0;
        }
        
        .filter-buttons {
            display: flex;
            justify-content: center;
            gap: 1rem;
            flex-wrap: wrap;
        }
        
        .filter-btn {
            background: var(--light-gray);
            color: var(--text-dark);
            border: 2px solid var(--border-color);
        }
        
        .filter-btn.active,
        .filter-btn:hover {
            background: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }
        
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
            padding: 2rem;
        }
        
        .gallery-item {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: transform 0.3s ease;
        }
        
        .gallery-item:hover {
            transform: translateY(-5px);
        }
        
        .image-container {
            position: relative;
            cursor: pointer;
        }
        
        .image-container img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        
        .image-container:hover img {
            transform: scale(1.05);
        }
        
        .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0,0,0,0.8));
            color: white;
            padding: 2rem 1rem 1rem;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }
        
        .image-container:hover .overlay {
            transform: translateY(0);
        }
        
        .video-container video {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        
        .video-info {
            padding: 1rem;
            background: white;
        }
        
        .video-info h4 {
            margin-bottom: 0.5rem;
            color: var(--primary-color);
        }
        
        /* Lightbox styles */
        .lightbox {
            display: none;
            position: fixed;
            z-index: 10000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.9);
            justify-content: center;
            align-items: center;
        }
        
        .lightbox-content {
            position: relative;
            max-width: 90%;
            max-height: 90%;
            background: white;
            border-radius: 15px;
            overflow: hidden;
        }
        
        .lightbox-content img {
            width: 100%;
            max-height: 70vh;
            object-fit: contain;
        }
        
        .lightbox-info {
            padding: 1rem;
        }
        
        .lightbox-info h3 {
            margin-bottom: 0.5rem;
            color: var(--primary-color);
        }
        
        .close {
            position: absolute;
            top: 10px;
            right: 20px;
            color: white;
            font-size: 2rem;
            font-weight: bold;
            cursor: pointer;
            z-index: 10001;
            background: rgba(0,0,0,0.5);
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .close:hover {
            background: rgba(0,0,0,0.8);
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }
        
        @media (max-width: 768px) {
            .gallery-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                gap: 1rem;
                padding: 1rem;
            }
            
            .filter-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .lightbox-content {
                max-width: 95%;
                max-height: 95%;
            }
        }
    </style>
</body>
</html>

<?php include 'includes/footer_ar.php'; ?>

</body>
</html>
