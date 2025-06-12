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
├── admin.php           # Admin dashboard page
├── login.php           # Login page for users
├── logout.php          # Ends the user session
├── register.php        # User registration page
├── home.php            # User homepage after login
├── insert.php          # Script to insert new user data into the database
├── edit.php            # Script and form to update user data
├── delete.php          # Script to delete a user record
├── csv.php             # Exports user data to CSV format
├── generate.php        # (Optional) Script to generate test data
├── db.php              # Database connection configuration
├── composer.json       # Composer configuration file
├── composer.lock       # Locked versions of dependencies
├── vendor/             # Composer dependencies (auto-generated)
│   └── autoload.php    # Autoloader for PHP packages
│   └── composer/       # Composer internal files
│       ├── ClassLoader.php
│       ├── autoload_classmap.php
│       ├── autoload_namespaces.php
│       ├── autoload_psr4.php
│       ├── autoload_real.php
│       └── autoload_static.php
└── README.md           # Project documentation file

---

## 🛠️ Installation & Setup

### 1. Clone or Download the Repository

```bash
git clone https://github.com/your-username/php-user-management.git
Or simply download the ZIP.
---
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
---

3. Install Composer Dependencies
If you don't have Composer installed, download it from getcomposer.org.

Then run:

bash
Copy
Edit
composer install
---
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
---
📝 License
This project is released under the MIT License. You are free to use, modify, and distribute it.







