# PHP User Management System

A simple PHP-based user management system with login, registration, CRUD operations, and CSV generation. The project uses Composer for dependency management and is structured to support further enhancements.

---

## 🚀 Features

- ✅ User Registration & Login
- ✅ Session Management
- ✅ Admin Dashboard
- ✅ Add/Edit/Delete Users
- ✅ CSV Export of User Data
- ✅ Secure Database Handling with `mysqli`
- ✅ Composer Support

---

## 📁 Project Structure

Phpproject/
└── project/
    ├── admin.php              # Admin dashboard
    ├── login.php              # User login page
    ├── logout.php             # Logs out the user and ends session
    ├── register.php           # User registration form
    ├── home.php               # Home page after login
    ├── insert.php             # Inserts new user data into DB
    ├── edit.php               # Edits existing user details
    ├── delete.php             # Deletes a user from DB
    ├── csv.php                # Exports user data to CSV
    ├── generate.php           # (Optional) Generates sample data
    ├── db.php                 # Database connection setup
    ├── composer.json          # Composer config for dependencies
    ├── composer.lock          # Exact versions of installed packages
    └── vendor/                # Auto-generated folder for Composer packages
        └── autoload.php       # Autoloader for dependencies
        └── composer/
            ├── autoload_classmap.php
            ├── autoload_namespaces.php
            ├── autoload_psr4.php
            ├── autoload_real.php
            ├── autoload_static.php
            └── ClassLoader.php


yaml
Copy
Edit

---

## 🛠️ Installation & Setup

### 1. Clone or Download the Repository

```bash
git clone https://github.com/your-username/php-user-management.git
Or simply download the ZIP.

2. Configure the Database
Create a MySQL database (e.g., user_management).

Import your SQL schema (if available).

Update your db.php file with proper credentials:

php
Copy
Edit
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'user_management';
3. Install Composer Dependencies
If you don't have Composer installed, download it from getcomposer.org.

Then run:

bash
Copy
Edit
composer install
4. Run the Project
Move the project to your web server root (htdocs/ for XAMPP).

Start Apache and MySQL using XAMPP.

Open your browser and go to:

arduino
Copy
Edit
http://localhost/project/login.php
📦 Dependencies
PHP 7.4+

MySQL or MariaDB

Composer (for managing vendor packages)

📄 .gitignore (Recommended)
If using version control:

bash
Copy
Edit
vendor/
*.log
.env
*.tmp
*.bak
.DS_Store
.idea/
.vscode/
🧪 Sample User Flow
Register via register.php

Log in via login.php

View dashboard on home.php

Admin functions via admin.php

Add/Edit/Delete users

Export user data using csv.php

📝 License
This project is released under the MIT License. You are free to use, modify, and distribute it.







