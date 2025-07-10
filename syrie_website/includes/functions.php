<?php

require_once 'config.php';

// Function to fetch recent articles
function getRecentArticles($limit = 5) {
    global $pdo;
    
    try {
        $stmt = $pdo->prepare("
            SELECT a.*, c.category_name 
            FROM articles a 
            LEFT JOIN categories c ON a.category_id = c.category_id 
            ORDER BY a.created_at DESC 
            LIMIT :limit
        ");
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch(PDOException $e) {
        error_log("Error fetching recent articles: " . $e->getMessage());
        return [];
    }
}

// Function to fetch article by ID
function getArticleById($id) {
    global $pdo;
    
    try {
        $stmt = $pdo->prepare("
            SELECT a.*, c.category_name 
            FROM articles a 
            LEFT JOIN categories c ON a.category_id = c.category_id 
            WHERE a.article_id = :id
        ");
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    } catch(PDOException $e) {
        error_log("Error fetching article: " . $e->getMessage());
        return false;
    }
}

// Function to fetch all articles with pagination
function getArticles($page = 1, $per_page = 10, $category_id = null) {
    global $pdo;
    
    $offset = ($page - 1) * $per_page;
    
    try {
        $where_clause = "";
        $params = [':limit' => $per_page, ':offset' => $offset];
        
        if ($category_id) {
            $where_clause = "WHERE a.category_id = :category_id";
            $params[':category_id'] = $category_id;
        }
        
        $stmt = $pdo->prepare("
            SELECT a.*, c.category_name 
            FROM articles a 
            LEFT JOIN categories c ON a.category_id = c.category_id 
            $where_clause
            ORDER BY a.created_at DESC 
            LIMIT :limit OFFSET :offset
        ");
        
        foreach ($params as $key => $value) {
            $stmt->bindValue($key, $value, is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR);
        }
        
        $stmt->execute();
        return $stmt->fetchAll();
    } catch(PDOException $e) {
        error_log("Error fetching articles: " . $e->getMessage());
        return [];
    }
}

// Function to count total articles
function getTotalArticles($category_id = null) {
    global $pdo;
    
    try {
        $where_clause = "";
        $params = [];
        
        if ($category_id) {
            $where_clause = "WHERE category_id = :category_id";
            $params[':category_id'] = $category_id;
        }
        
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM articles $where_clause");
        
        foreach ($params as $key => $value) {
            $stmt->bindValue($key, $value, PDO::PARAM_INT);
        }
        
        $stmt->execute();
        return $stmt->fetchColumn();
    } catch(PDOException $e) {
        error_log("Error counting articles: " . $e->getMessage());
        return 0;
    }
}

// Function to fetch all categories
function getCategories() {
    global $pdo;
    
    try {
        $stmt = $pdo->query("SELECT * FROM categories ORDER BY category_name");
        return $stmt->fetchAll();
    } catch(PDOException $e) {
        error_log("Error fetching categories: " . $e->getMessage());
        return [];
    }
}

// Function to fetch featured gallery items
function getFeaturedGalleryItems($limit = 6) {
    global $pdo;
    
    try {
        $stmt = $pdo->prepare("
            SELECT * FROM gallery_items 
            ORDER BY uploaded_at DESC 
            LIMIT :limit
        ");
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch(PDOException $e) {
        error_log("Error fetching gallery items: " . $e->getMessage());
        return [];
    }
}

// Function to fetch all gallery items
function getAllGalleryItems($page = 1, $per_page = 12) {
    global $pdo;
    
    $offset = ($page - 1) * $per_page;
    
    try {
        $stmt = $pdo->prepare("
            SELECT * FROM gallery_items 
            ORDER BY uploaded_at DESC 
            LIMIT :limit OFFSET :offset
        ");
        $stmt->bindValue(':limit', $per_page, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch(PDOException $e) {
        error_log("Error fetching all gallery items: " . $e->getMessage());
        return [];
    }
}

// Function to count total gallery items
function getTotalGalleryItems() {
    global $pdo;
    
    try {
        $stmt = $pdo->query("SELECT COUNT(*) FROM gallery_items");
        return $stmt->fetchColumn();
    } catch(PDOException $e) {
        error_log("Error counting gallery items: " . $e->getMessage());
        return 0;
    }
}

// Function to search articles
function searchArticles($query) {
    global $pdo;
    
    try {
        $search_term = "%$query%";
        $stmt = $pdo->prepare("
            SELECT a.*, c.category_name,
                   SUBSTRING(a.content, 1, 200) as excerpt
            FROM articles a 
            LEFT JOIN categories c ON a.category_id = c.category_id 
            WHERE a.title LIKE :query OR a.content LIKE :query
            ORDER BY a.created_at DESC 
            LIMIT 10
        ");
        $stmt->bindValue(':query', $search_term, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch(PDOException $e) {
        error_log("Error searching articles: " . $e->getMessage());
        return [];
    }
}

// Function to generate pagination links
function generatePagination($current_page, $total_items, $per_page, $base_url) {
    $total_pages = ceil($total_items / $per_page);
    
    if ($total_pages <= 1) {
        return '';
    }
    
    $pagination = '<div class="pagination">';
    
    // Previous page
    if ($current_page > 1) {
        $prev_page = $current_page - 1;
        $pagination .= "<a href=\"{$base_url}?page={$prev_page}\" class=\"btn\">&laquo; Previous</a>";
    }
    
    // Page numbers
    $start = max(1, $current_page - 2);
    $end = min($total_pages, $current_page + 2);
    
    for ($i = $start; $i <= $end; $i++) {
        if ($i == $current_page) {
            $pagination .= "<span class=\"btn current-page\">{$i}</span>";
        } else {
            $pagination .= "<a href=\"{$base_url}?page={$i}\" class=\"btn\">{$i}</a>";
        }
    }
    
    // Next page
    if ($current_page < $total_pages) {
        $next_page = $current_page + 1;
        $pagination .= "<a href=\"{$base_url}?page={$next_page}\" class=\"btn\">Next &raquo;</a>";
    }
    
    $pagination .= '</div>';
    
    return $pagination;
}

// Function to handle file upload
function handleFileUpload($file, $upload_dir = UPLOAD_DIR) {
    if (!isset($file['error']) || is_array($file['error'])) {
        throw new RuntimeException('Invalid parameters.');
    }
    
    switch ($file['error']) {
        case UPLOAD_ERR_OK:
            break;
        case UPLOAD_ERR_NO_FILE:
            throw new RuntimeException('No file sent.');
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            throw new RuntimeException('Exceeded filesize limit.');
        default:
            throw new RuntimeException('Unknown errors.');
    }
    
    if ($file['size'] > 5000000) { // 5MB limit
        throw new RuntimeException('Exceeded filesize limit.');
    }
    
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $mime_type = $finfo->file($file['tmp_name']);
    
    $allowed_types = [
        'image/jpeg',
        'image/png',
        'image/gif',
        'image/webp',
        'video/mp4',
        'video/webm'
    ];
    
    if (!in_array($mime_type, $allowed_types)) {
        throw new RuntimeException('Invalid file format.');
    }
    
    $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
    $filename = sprintf('%s.%s', sha1_file($file['tmp_name']), $extension);
    $destination = $upload_dir . $filename;
    
    if (!move_uploaded_file($file['tmp_name'], $destination)) {
        throw new RuntimeException('Failed to move uploaded file.');
    }
    
    return $destination;
}

// Function to authenticate user
function authenticateUser($username, $password) {
    global $pdo;
    
    try {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindValue(':username', $username, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch();
        
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        
        return false;
    } catch(PDOException $e) {
        error_log("Error authenticating user: " . $e->getMessage());
        return false;
    }
}

// Function to check if user is logged in
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

// Function to check for admin rights
function isAdmin() {
    return isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin';
}

// Function to require login
function requireLogin() {
    if (!isLoggedIn()) {
        header('Location: admin/login.php');
        exit;
    }
}

// Function to require admin rights
function requireAdmin() {
    requireLogin();
    if (!isAdmin()) {
        header('Location: index.php');
        exit;
    }
}

// Function to generate CSRF token
function generateCSRFToken() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function verifyCSRFToken($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}


// Function to get a city/province by name
function getCityProvinceByName($name) {
    global $pdo;
    try {
        $stmt = $pdo->prepare("SELECT * FROM cities_provinces WHERE name = :name");
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    } catch (PDOException $e) {
        error_log("Error fetching city/province by name: " . $e->getMessage());
        return false;
    }
}

// Function to get all cities/provinces
function getAllCitiesProvinces() {
    global $pdo;
    try {
        $stmt = $pdo->query("SELECT * FROM cities_provinces ORDER BY name");
        return $stmt->fetchAll();
    } catch (PDOException $e) {
        error_log("Error fetching all cities/provinces: " . $e->getMessage());
        return [];
    }
}

?>

