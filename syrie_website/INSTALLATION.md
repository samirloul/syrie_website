# Installation Guide - Syria Website

## Quick Start Guide

This guide will help you set up the Syria website on your WAMP server in just a few steps.

## Prerequisites

Before you begin, make sure you have:
- **WAMP Server** (XAMPP, WampServer, or MAMP)
- **PHP 7.4+** (included with WAMP)
- **MySQL 5.7+** (included with WAMP)
- **Web Browser** (Chrome, Firefox, Safari, or Edge)

## Step-by-Step Installation

### Step 1: Install WAMP Server

1. **Download WAMP Server**:
   - **XAMPP**: https://www.apachefriends.org/download.html
   - **WampServer**: https://www.wampserver.com/en/
   - **MAMP** (for Mac): https://www.mamp.info/en/downloads/

2. **Install and Start Services**:
   - Run the installer and follow the setup wizard
   - Start Apache and MySQL services
   - Verify installation by visiting `http://localhost`

### Step 2: Deploy Website Files

1. **Locate your WAMP directory**:
   - **XAMPP**: `C:\xampp\htdocs\`
   - **WampServer**: `C:\wamp64\www\`
   - **MAMP**: `/Applications/MAMP/htdocs/`

2. **Extract website files**:
   - Create a folder named `syrie_website` in your WAMP directory
   - Extract all website files into this folder
   - Your structure should look like: `C:\wamp64\www\syrie_website\`

### Step 3: Setup Database

1. **Access phpMyAdmin**:
   - Open your browser and go to: `http://localhost/phpmyadmin`
   - Login (usually no password required for local development)

2. **Create Database**:
   - Click "New" in the left sidebar
   - Enter database name: `syrie_think`
   - Select collation: `utf8mb4_unicode_ci`
   - Click "Create"

3. **Import Database Schema**:
   - Select the `syrie_think` database
   - Click the "Import" tab
   - Choose file: `syrie_think.sql` (from your website folder)
   - Click "Go" to import

4. **Import Sample Data**:
   - Still in the "Import" tab
   - Choose file: `sample_data.sql`
   - Click "Go" to import sample content

### Step 4: Configure Database Connection

The website should work with default WAMP settings, but if needed:

1. **Edit configuration file**:
   - Open `includes/config.php` in a text editor
   - Verify these settings match your WAMP setup:

```php
<?php
// Database configuration
$host = "localhost";
$dbname = "syrie_think";
$username = "root";
$password = "";  // Usually empty for local WAMP
```

### Step 5: Test Your Installation

1. **Access the website**:
   - Open your browser
   - Go to: `http://localhost/syrie_website/`
   - You should see the Syria website homepage

2. **Test admin panel**:
   - Go to: `http://localhost/syrie_website/admin/login.php`
   - Login with:
     - **Username**: `admin`
     - **Password**: `admin123`

## Troubleshooting

### Common Issues and Solutions

#### "Database connection failed"
- **Check WAMP services**: Ensure Apache and MySQL are running
- **Verify database name**: Make sure `syrie_think` database exists
- **Check credentials**: Verify username/password in `config.php`

#### "Page not found" or 404 errors
- **Check file path**: Ensure files are in the correct WAMP directory
- **Verify URL**: Make sure you're using `http://localhost/syrie_website/`
- **Check Apache**: Ensure Apache service is running

#### Images not displaying
- **Check image paths**: Verify images are in the `images/` folder
- **File permissions**: Ensure proper read permissions on image files
- **Upload directory**: Make sure `uploads/` folder exists and is writable

#### Admin panel login issues
- **Database import**: Ensure `sample_data.sql` was imported correctly
- **Password**: Use `admin123` (case-sensitive)
- **Clear browser cache**: Try clearing cookies and cache

### Advanced Configuration

#### Changing Database Password
If your MySQL has a password:

1. Edit `includes/config.php`
2. Update the `$password` variable
3. Save the file

#### Custom Domain Setup
To use a custom domain like `syria.local`:

1. **Edit hosts file**:
   - Windows: `C:\Windows\System32\drivers\etc\hosts`
   - Mac/Linux: `/etc/hosts`
   - Add line: `127.0.0.1 syria.local`

2. **Configure virtual host** in your WAMP server
3. Access via: `http://syria.local`

#### SSL/HTTPS Setup
For HTTPS (optional for local development):

1. Generate SSL certificate in WAMP
2. Configure virtual host for SSL
3. Update website URLs to use HTTPS

## File Permissions

Ensure these directories are writable:
- `uploads/` - For file uploads
- `images/` - For image management
- `admin/` - For admin functionality

## Security Considerations

### For Production Deployment

If deploying to a live server:

1. **Change admin password**:
   - Login to admin panel
   - Change default password from `admin123`

2. **Update database credentials**:
   - Use strong database password
   - Consider creating dedicated database user

3. **File permissions**:
   - Set appropriate file permissions (644 for files, 755 for directories)
   - Restrict access to sensitive files

4. **Remove development files**:
   - Delete any test files or development tools

## Backup and Maintenance

### Creating Backups

1. **Database backup**:
   - Use phpMyAdmin export feature
   - Export `syrie_think` database regularly

2. **File backup**:
   - Copy entire `syrie_website` folder
   - Include uploaded images and content

### Regular Maintenance

- **Update content** through admin panel
- **Monitor database size** and optimize if needed
- **Check for PHP/MySQL updates**
- **Review security logs** if available

## Getting Help

### Resources
- **PHP Documentation**: https://www.php.net/docs.php
- **MySQL Documentation**: https://dev.mysql.com/doc/
- **XAMPP Support**: https://www.apachefriends.org/faq.html

### Common Commands

**Restart WAMP services**:
- Stop and start Apache/MySQL from WAMP control panel

**Check PHP version**:
- Create file with `<?php phpinfo(); ?>` and view in browser

**MySQL command line**:
- Access via WAMP control panel or command prompt

## Success Checklist

✅ WAMP server installed and running  
✅ Website files extracted to correct directory  
✅ Database `syrie_think` created  
✅ Schema and sample data imported  
✅ Website accessible at `http://localhost/syrie_website/`  
✅ Admin panel login working  
✅ Images displaying correctly  
✅ Navigation working between pages  

Congratulations! Your Syria website is now ready to use.

