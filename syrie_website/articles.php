<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

// Pagination
$page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
$per_page = 9;
$category_id = isset($_GET['category']) ? intval($_GET['category']) : null;

// Fetch articles and categories
$articles = getArticles($page, $per_page, $category_id);
$total_articles = getTotalArticles($category_id);
$categories = getCategories();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles - Syria</title>
    <meta name="description" content="Read all articles about Syria: history, culture, current events, and more.">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <main>
        <section class="hero" style="background: linear-gradient(rgba(139, 69, 19, 0.8), rgba(218, 165, 32, 0.8)), url('images/articles-hero.jpg'); background-size: cover; background-position: center;">
            <h1>Articles</h1>
            <p>Discover stories, history, and insights about Syria</p>
        </section>
        
        <!-- Search and Filter Section -->
        <section class="search-filter-section">
            <div class="grid grid-2">
                <div class="search-box">
                    <h3>Search</h3>
                    <input type="text" id="search-input" placeholder="Search articles..." style="width: 100%; padding: 0.8rem; border: 2px solid var(--border-color); border-radius: 8px;">
                    <div id="search-results" style="margin-top: 1rem;"></div>
                </div>
                
                <div class="filter-box">
                    <h3>Filter by Category</h3>
                    <select onchange="filterByCategory(this.value)" style="width: 100%; padding: 0.8rem; border: 2px solid var(--border-color); border-radius: 8px;">
                        <option value="">All Categories</option>
                        <?php foreach ($categories as $category): ?>
                        <option value="<?php echo $category['category_id']; ?>" <?php echo ($category_id == $category['category_id']) ? 'selected' : ''; ?>>
                            <?php echo htmlspecialchars($category['category_name']); ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </section>
        
        <!-- Articles Grid -->
        <section class="articles-section">
            <?php if (!empty($articles)): ?>
            <div class="grid grid-3">
                <?php foreach ($articles as $article): ?>
                <article class="card">
                    <?php if ($article['image_url']): ?>
                    <img src="<?php echo htmlspecialchars($article['image_url']); ?>" alt="<?php echo htmlspecialchars($article['title']); ?>" loading="lazy">
                    <?php endif; ?>
                    
                    <div class="article-meta">
                        <small style="color: var(--accent-color); font-weight: bold;">
                            <?php echo htmlspecialchars($article['category_name']); ?>
                        </small>
                        <small style="float: right; color: var(--text-light);">
                            <?php echo date('d-m-Y', strtotime($article['created_at'])); ?>
                        </small>
                    </div>
                    
                    <h3><?php echo htmlspecialchars($article['title']); ?></h3>
                    <p><?php echo htmlspecialchars(substr(strip_tags($article['content']), 0, 150)) . '...'; ?></p>
                    
                    <div style="margin-top: auto; padding-top: 1rem;">
                        <a href="article.php?id=<?php echo $article['article_id']; ?>" class="btn">Read more</a>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
            
            <!-- Pagination -->
            <div class="pagination-section text-center mt-2">
                <?php echo generatePagination($page, $total_articles, $per_page, 'artikelen.php' . ($category_id ? '?category=' . $category_id : '')); ?>
            </div>
            
            <?php else: ?>
            <div class="no-articles text-center">
                <h3>No articles found</h3>
                <p>There are currently no articles available in this category.</p>
                <a href="artikelen.php" class="btn">View all articles</a>
            </div>
            <?php endif; ?>
        </section>
        
        <!-- Categories Overview -->
        <section class="categories-overview">
            <h2 class="text-center mb-2">Categories</h2>
            <div class="grid grid-3">
                <?php foreach ($categories as $category): ?>
                <div class="card text-center">
                    <h4><?php echo htmlspecialchars($category['category_name']); ?></h4>
                    <?php if ($category['description']): ?>
                    <p><?php echo htmlspecialchars($category['description']); ?></p>
                    <?php endif; ?>
                    <a href="artikelen.php?category=<?php echo $category['category_id']; ?>" class="btn">View articles</a>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
    
    <?php include 'includes/footer.php'; ?>
    
    <script src="js/main.js"></script>
    <script>
        function filterByCategory(categoryId) {
            const url = new URL(window.location);
            if (categoryId) {
                url.searchParams.set('category', categoryId);
            } else {
                url.searchParams.delete('category');
            }
            url.searchParams.delete('page'); // Reset to page 1
            window.location.href = url.toString();
        }
    </script>
    
    <style>
        .pagination {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
            margin: 2rem 0;
        }
        
        .pagination .btn {
            padding: 0.5rem 1rem;
            text-decoration: none;
            border: 1px solid var(--border-color);
            background: white;
            color: var(--primary-color);
        }
        
        .pagination .current-page {
            background: var(--primary-color);
            color: white;
        }
        
        .article-meta {
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid var(--border-color);
            overflow: hidden;
        }
        
        .search-filter-section {
            background: white;
            padding: 2rem;
            margin: 2rem 0;
            border-radius: 15px;
            box-shadow: var(--shadow);
        }
    </style>
</body>
</html>


