# Syria Website - Complete PHP/MySQL Project

## Overview

This is a comprehensive, professional website about Syria featuring updated information, the correct flag, English content, and detailed pages for major cities and provinces. The website is built with PHP and MySQL and designed to be deployed on a WAMP server.

## Features

### Core Features
- **Modern Responsive Design**: Professional layout that works on all devices
- **Updated Content**: All information current as of July 7, 2025
- **Correct Syrian Flag**: Features the current flag with green, white, and black stripes with red stars
- **English Language**: All content translated to English
- **Database-Driven**: Dynamic content management with MySQL

### Pages and Sections
1. **Homepage**: Welcome page with overview and highlights
2. **History**: Comprehensive historical information
3. **Culture**: Syrian cultural traditions, arts, and heritage
4. **Geography**: Detailed geographical information
5. **Economy**: Current economic situation and developments
6. **Articles**: Dynamic article system with search functionality
7. **Gallery**: Photo gallery with filtering options
8. **Cities & Provinces**: Detailed pages for major cities including:
   - Damascus (Capital)
   - Aleppo (Historic commercial center)
   - Idlib (Northwestern province)
   - Homs (Central industrial hub)
   - Latakia (Mediterranean port city)
   - Deir ez-Zor (Eastern oil city)
   - Hama (City of waterwheels)
   - Raqqa (Euphrates city)
   - Palmyra (Ancient UNESCO site)
9. **Contact**: Contact form and information

### Technical Features
- **PHP Backend**: Secure, modern PHP code with prepared statements
- **MySQL Database**: Comprehensive database schema with proper relationships
- **Admin Panel**: Full content management system with authentication
- **Search Functionality**: Advanced search across articles and content
- **SEO Optimized**: Meta tags, semantic HTML, and clean URLs
- **Security**: CSRF protection, input validation, and secure authentication

## Database Schema

The website uses a MySQL database named `syrie_think` with the following tables:

- `categories`: Article categories
- `articles`: Dynamic articles with content management
- `gallery_items`: Photo and media gallery
- `users`: Admin user management
- `cities_provinces`: City and province information

## Installation Instructions

### Prerequisites
- WAMP Server (XAMPP, WampServer, or similar)
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web browser

### Setup Steps

1. **Install WAMP Server**
   - Download and install XAMPP or WampServer
   - Start Apache and MySQL services

2. **Deploy Website Files**
   - Extract the website files to your WAMP www directory
   - Example: `C:\wamp64\www\syrie_website\`

3. **Setup Database**
   - Open phpMyAdmin (usually at http://localhost/phpmyadmin)
   - Import the database schema: `syrie_think.sql`
   - Import sample data: `sample_data.sql`

4. **Configure Database Connection**
   - The database configuration is in `includes/config.php`
   - Default settings:
     ```php
     $host = "localhost";
     $dbname = "syrie_think";
     $username = "root";
     $password = "";
     ```

5. **Access the Website**
   - Open your browser and go to: `http://localhost/syrie_website/`

### Admin Panel Access
- URL: `http://localhost/syrie_website/admin/login.php`
- Username: `admin`
- Password: `admin123`

## File Structure

```
syrie_website/
├── admin/                  # Admin panel files
│   ├── index.php          # Admin dashboard
│   ├── login.php          # Admin login
│   ├── sidebar.php        # Admin navigation
│   └── admin.css          # Admin styling
├── content/               # City/province content files
│   ├── damascus.php       # Damascus content
│   ├── aleppo.php         # Aleppo content
│   ├── idlib.php          # Idlib content
│   └── ...                # Other city files
├── css/                   # Stylesheets
│   └── style.css          # Main stylesheet
├── images/                # Image assets
├── includes/              # PHP includes
│   ├── config.php         # Database configuration
│   ├── functions.php      # PHP functions
│   ├── header.php         # Site header
│   └── footer.php         # Site footer
├── js/                    # JavaScript files
│   └── main.js            # Main JavaScript
├── uploads/               # Upload directory
├── index.php              # Homepage
├── history.php            # History page
├── culture.php            # Culture page
├── geography.php          # Geography page
├── economy.php            # Economy page
├── articles.php           # Articles listing
├── article.php            # Individual article
├── gallery.php            # Photo gallery
├── cities.php             # Cities overview
├── city.php               # Individual city page
├── contact.php            # Contact form
├── search.php             # Search functionality
├── syrie_think.sql        # Database schema
└── sample_data.sql        # Sample data
```

## Key Updates and Improvements

### Content Updates (July 2025)
- **Current Syrian Flag**: Updated to the correct flag design
- **Recent Information**: All content reflects the situation as of July 2025
- **City-Specific Pages**: Detailed information for major Syrian cities and provinces
- **English Translation**: Complete translation from Dutch to English

### Technical Improvements
- **Enhanced Security**: CSRF protection and input validation
- **Better Database Design**: Added cities_provinces table for structured city data
- **Improved Navigation**: Better internal linking and user experience
- **Responsive Design**: Mobile-friendly layout and interactions
- **Search Functionality**: Advanced search across all content

### New Features
- **Cities & Provinces Section**: Dedicated pages for major Syrian locations
- **Dynamic Content Loading**: City pages load content dynamically
- **Enhanced Gallery**: Better image management and display
- **Admin Dashboard**: Comprehensive content management system

## Maintenance and Updates

### Adding New Cities
1. Create a new content file in the `content/` directory
2. Add the city to the `cities_provinces` database table
3. Follow the existing format for consistency

### Managing Content
- Use the admin panel to add/edit articles and gallery items
- Database backups are recommended before major changes
- Regular security updates should be applied

### Customization
- Modify `css/style.css` for design changes
- Update `includes/config.php` for database settings
- Customize content in the respective PHP files

## Support and Documentation

For technical support or questions about the website:
- Check the database connection settings in `includes/config.php`
- Ensure all required PHP extensions are installed
- Verify file permissions for the uploads directory
- Check Apache and MySQL logs for error messages

## Credits

This website was developed as a comprehensive educational resource about Syria, featuring:
- Historical and cultural information
- Current situation updates (as of July 2025)
- Professional web development practices
- Modern responsive design
- Secure coding standards

The website serves as both an informational resource and a demonstration of full-stack web development capabilities.

