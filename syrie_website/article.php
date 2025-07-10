<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

// Get article ID
$article_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if (!$article_id) {
    header('Location: articles.php');
    exit;
}

// Get article
$article = getArticleById($article_id);

if (!$article) {
    header('Location: articles.php');
    exit;
}

// Get related articles
$related_articles = getRecentArticles(3);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($article['title']); ?> - Syria</title>
    <meta name="description" content="<?php echo htmlspecialchars(substr(strip_tags($article['content']), 0, 160)); ?>">
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo htmlspecialchars($article['title']); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars(substr(strip_tags($article['content']), 0, 160)); ?>">
    <meta property="og:type" content="article">
    <meta property="og:url" content="<?php echo SITE_URL . '/article.php?id=' . $article_id; ?>">
    <?php if ($article['image_url']): ?>
    <meta property="og:image" content="<?php echo SITE_URL . '/' . $article['image_url']; ?>">
    <?php endif; ?>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <main>
        <article class="article-content">
            <!-- Article Header -->
            <header class="article-header">
                <?php if ($article['image_url']): ?>
                <div class="article-image">
                    <img src="<?php echo htmlspecialchars($article['image_url']); ?>" alt="<?php echo htmlspecialchars($article['title']); ?>">
                </div>
                <?php endif; ?>
                
                <div class="article-meta">
                    <nav class="breadcrumb">
                        <a href="index.php">Home</a> &raquo; 
                        <a href="articles.php">Articles</a> &raquo; 
                        <span><?php echo htmlspecialchars($article['title']); ?></span>
                    </nav>
                    
                    <div class="article-info">
                        <span class="category"><?php echo htmlspecialchars($article['category_name']); ?></span>
                        <span class="date">Published on <?php echo date('d F Y', strtotime($article['created_at'])); ?></span>
                        <?php if ($article['updated_at'] != $article['created_at']): ?>
                        <span class="updated">Last updated on <?php echo date('d F Y', strtotime($article['updated_at'])); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
                
                <h1><?php echo htmlspecialchars($article['title']); ?></h1>
            </header>
            
            <!-- Article Body -->
            <div class="article-body">
                <?php echo nl2br(htmlspecialchars($article['content'])); ?>
            </div>
            
            <!-- Article Footer -->
            <footer class="article-footer">
                <div class="share-buttons">
                    <h4>Share this article:</h4>
                    <div class="social-share">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(SITE_URL . '/article.php?id=' . $article_id); ?>" target="_blank" class="btn btn-facebook">Facebook</a>
                        <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(SITE_URL . '/article.php?id=' . $article_id); ?>&text=<?php echo urlencode($article['title']); ?>" target="_blank" class="btn btn-twitter">Twitter</a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(SITE_URL . '/article.php?id=' . $article_id); ?>" target="_blank" class="btn btn-linkedin">LinkedIn</a>
                        <button onclick="copyToClipboard()" class="btn btn-copy">Copy Link</button>
                    </div>
                </div>
                
                <div class="article-navigation">
                    <a href="articles.php" class="btn">← Back to articles</a>
                </div>
            </footer>
        </article>
        
        <!-- Related Articles -->
        <?php if (!empty($related_articles)): ?>
        <section class="related-articles">
            <h2>Related Articles</h2>
            <div class="grid grid-3">
                <?php foreach ($related_articles as $related): ?>
                    <?php if ($related['article_id'] != $article_id): ?>
                    <article class="card">
                        <?php if ($related['image_url']): ?>
                        <img src="<?php echo htmlspecialchars($related['image_url']); ?>" alt="<?php echo htmlspecialchars($related['title']); ?>" loading="lazy">
                        <?php endif; ?>
                        <h3><?php echo htmlspecialchars($related['title']); ?></h3>
                        <p><?php echo htmlspecialchars(substr(strip_tags($related['content']), 0, 100)) . '...'; ?></p>
                        <a href="article.php?id=<?php echo $related['article_id']; ?>" class="btn">Read more</a>
                    </article>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </section>
        <?php endif; ?>
    </main>
    
    <?php include 'includes/footer.php'; ?>
    
    <script src="js/main.js"></script>
    <script>
        function copyToClipboard() {
            const url = window.location.href;
            navigator.clipboard.writeText(url).then(function() {
                alert('Link copied to clipboard!');
            }, function(err) {
                console.error('Could not copy link: ', err);
            });
        }
    </script>
    
    <style>
        .article-content {
            max-width: 800px;
            margin: 2rem auto;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--shadow);
        }
        
        .article-image img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }
        
        .article-meta {
            padding: 2rem 2rem 1rem;
        }
        
        .breadcrumb {
            margin-bottom: 1rem;
            color: var(--text-light);
        }
        
        .breadcrumb a {
            color: var(--primary-color);
            text-decoration: none;
        }
        
        .breadcrumb a:hover {
            text-decoration: underline;
        }
        
        .article-info {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            margin-bottom: 1rem;
        }
        
        .category {
            background: var(--accent-color);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: bold;
        }
        
        .date, .updated {
            color: var(--text-light);
            font-size: 0.9rem;
        }
        
        .article-content h1 {
            padding: 0 2rem;
            margin-bottom: 2rem;
            color: var(--primary-color);
            font-size: 2.5rem;
            line-height: 1.2;
        }
        
        .article-body {
            padding: 0 2rem 2rem;
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-dark);
        }
        
        .article-footer {
            padding: 2rem;
            border-top: 1px solid var(--border-color);
            background: var(--light-gray);
        }
        
        .share-buttons h4 {
            margin-bottom: 1rem;
            color: var(--primary-color);
        }
        
        .social-share {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            margin-bottom: 2rem;
        }
        
        .btn-facebook { background: #3b5998; }
        .btn-twitter { background: #1da1f2; }
        .btn-linkedin { background: #0077b5; }
        .btn-copy { background: var(--text-light); }
        
        .related-articles {
            margin: 3rem auto;
            max-width: 1200px;
            padding: 0 2rem;
        }
        
        .related-articles h2 {
            text-align: center;
            margin-bottom: 2rem;
            color: var(--primary-color);
        }
        
        @media (max-width: 768px) {
            .article-content {
                margin: 1rem;
            }
            
            .article-content h1 {
                font-size: 2rem;
                padding: 0 1rem;
            }
            
            .article-meta,
            .article-body,
            .article-footer {
                padding-left: 1rem;
                padding-right: 1rem;
            }
            
            .social-share {
                flex-direction: column;
            }
            
            .social-share .btn {
                text-align: center;
            }
        }
    </style>
</body>
</html>


