// Main JavaScript for Syria website
document.addEventListener("DOMContentLoaded", function() {
    
    // Mobile menu toggle
    const menuToggle = document.querySelector(".menu-toggle");
    const navMenu = document.querySelector("nav ul");
    
    if (menuToggle && navMenu) {
        menuToggle.addEventListener("click", function() {
            navMenu.classList.toggle("active");
            
            // Animation for hamburger menu
            const spans = menuToggle.querySelectorAll("span");
            spans.forEach((span, index) => {
                if (navMenu.classList.contains("active")) {
                    if (index === 0) span.style.transform = "rotate(45deg) translate(5px, 5px)";
                    if (index === 1) span.style.opacity = "0";
                    if (index === 2) span.style.transform = "rotate(-45deg) translate(7px, -6px)";
                } else {
                    span.style.transform = "none";
                    span.style.opacity = "1";
                }
            });
        });
    }
    
    // Smooth scrolling for anchor links
    const anchorLinks = document.querySelectorAll("a[href^=\"#\"]");
    anchorLinks.forEach(link => {
        link.addEventListener("click", function(e) {
            e.preventDefault();
            const targetId = this.getAttribute("href").substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });
            }
        });
    });
    
    // Fade-in animation for elements on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px"
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("fade-in");
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    // Observe all cards and sections
    const animatedElements = document.querySelectorAll(".card, .grid, section");
    animatedElements.forEach(el => {
        observer.observe(el);
    });
    
    // Form validation
    const forms = document.querySelectorAll("form");
    forms.forEach(form => {
        form.addEventListener("submit", function(e) {
            const requiredFields = form.querySelectorAll("[required]");
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.style.borderColor = "#e74c3c";
                    
                    // Reset border color after input
                    field.addEventListener("input", function() {
                        this.style.borderColor = "";
                    }, { once: true });
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                showNotification("Please fill in all required fields.", "error");
            }
        });
    });
    
    // Notification system
    function showNotification(message, type = "info") {
        // Remove existing notifications
        const existingNotifications = document.querySelectorAll(".notification");
        existingNotifications.forEach(notification => notification.remove());
        
        const notification = document.createElement("div");
        notification.className = `notification notification-${type}`;
        notification.innerHTML = `
            <span>${message}</span>
            <button class="notification-close">&times;</button>
        `;
        
        // Styling for notification
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: ${type === "error" ? "#e74c3c" : type === "success" ? "#27ae60" : "#3498db"};
            color: white;
            padding: 1rem 1.5rem;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            z-index: 10000;
            display: flex;
            align-items: center;
            gap: 1rem;
            max-width: 400px;
            animation: slideInRight 0.3s ease;
        `;
        
        document.body.appendChild(notification);
        
        // Close button functionality
        const closeBtn = notification.querySelector(".notification-close");
        closeBtn.style.cssText = `
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            padding: 0;
            margin-left: auto;
        `;
        
        closeBtn.addEventListener("click", () => {
            notification.remove();
        });
        
        // Auto-remove after 5 seconds
        setTimeout(() => {
            if (notification.parentNode) {
                notification.remove();
            }
        }, 5000);
    }
    
    // Lazy loading for images
    const images = document.querySelectorAll("img[data-src]");
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.removeAttribute("data-src");
                imageObserver.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));
    
    // Search functionality (for articles page)
    const searchInput = document.querySelector("#search-input");
    const searchResults = document.querySelector("#search-results");
    
    if (searchInput && searchResults) {
        let searchTimeout;
        
        searchInput.addEventListener("input", function() {
            clearTimeout(searchTimeout);
            const query = this.value.trim();
            
            if (query.length < 2) {
                searchResults.innerHTML = "";
                return;
            }
            
            searchTimeout = setTimeout(() => {
                performSearch(query);
            }, 300);
        });
    }
    
    function performSearch(query) {
        // AJAX call to search.php
        fetch("search.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
            },
            body: `query=${encodeURIComponent(query)}`
        })
        .then(response => response.json())
        .then(data => {
            displaySearchResults(data);
        })
        .catch(error => {
            console.error("Search error:", error);
        });
    }
    
    function displaySearchResults(results) {
        const searchResults = document.querySelector("#search-results");
        if (!searchResults) return;
        
        if (results.length === 0) {
            searchResults.innerHTML = "<p>No results found.</p>";
            return;
        }
        
        const resultsHTML = results.map(result => `
            <div class="search-result">
                <h4><a href="article.php?id=${result.article_id}">${result.title}</a></h4>
                <p>${result.excerpt}</p>
                <small>Category: ${result.category_name}</small>
            </div>
        `).join("");
        
        searchResults.innerHTML = resultsHTML;
    }
    
    // Back to top button
    const backToTopBtn = document.createElement("button");
    backToTopBtn.innerHTML = "↑";
    backToTopBtn.className = "back-to-top";
    backToTopBtn.style.cssText = `
        position: fixed;
        bottom: 30px;
        right: 30px;
        background: var(--primary-color);
        color: white;
        border: none;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        font-size: 1.5rem;
        cursor: pointer;
        display: none;
        z-index: 1000;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    `;
    
    document.body.appendChild(backToTopBtn);
    
    // Show/hide back to top button
    window.addEventListener("scroll", () => {
        if (window.pageYOffset > 300) {
            backToTopBtn.style.display = "block";
        } else {
            backToTopBtn.style.display = "none";
        }
    });
    
    backToTopBtn.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
    
    // Add CSS animations
    const style = document.createElement("style");
    style.textContent = `
        @keyframes slideInRight {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        
        .search-result {
            padding: 1rem;
            border-bottom: 1px solid var(--border-color);
            transition: background-color 0.3s ease;
        }
        
        .search-result:hover {
            background-color: var(--light-gray);
        }
        
        .search-result h4 {
            margin-bottom: 0.5rem;
        }
        
        .search-result a {
            color: var(--primary-color);
            text-decoration: none;
        }
        
        .search-result a:hover {
            text-decoration: underline;
        }
        
        .back-to-top:hover {
            background: var(--secondary-color) !important;
            transform: translateY(-3px);
        }
    `;
    document.head.appendChild(style);
});
document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('nav-menu');

    toggle.addEventListener('click', () => {
        menu.classList.toggle('show');
    });
});



