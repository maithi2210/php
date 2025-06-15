# PHP User Management System

A simple PHP-based user management system with login, registration, CRUD operations, and CSV generation. The project uses Composer for dependency management and is structured to support further enhancements.


## 🚀 Features

- ✅ User Registration & Login
- ✅ Session Management
- ✅ Admin Dashboard
- ✅ Add/Edit/Delete Users
- ✅ CSV Export of User Data
- ✅ Secure Database Handling with `mysqli`
- ✅ Composer Support


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


## 🛠️ Installation & Setup

### 1. Clone or Download the Repository

```bash
git clone https://github.com/your-username/php-user-management.git
```
Or simply download the ZIP.

### 2. Configure the Database
Create a MySQL database (e.g., user_management).

Import your SQL schema (if available).

Update your db.php file with proper credentials:

```
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'user_management';
```

### 3. Install Composer Dependencies
If you don't have Composer installed, download it from getcomposer.org.

Then run:

```bash
composer install
```

### 4. Run the Project
Move the project to your web server root (htdocs/ for XAMPP).

Start Apache and MySQL using XAMPP.

Open your browser and go to:

arduino
```
http://localhost/project/login.php
```

### 📦 Dependencies
PHP 7.4+

MySQL or MariaDB

Composer (for managing vendor packages)

📄 .gitignore (Recommended)
If using version control:

```bash
vendor/
*.log
.env
*.tmp
*.bak
.DS_Store
.idea/
.vscode/
```
### 🧪 Sample User Flow
```
Register via register.php

Log in via login.php

View dashboard on home.php

Admin functions via admin.php

Add/Edit/Delete users

Export user data using csv.php
```
### Screenshots

1. Register Form
![image](https://github.com/user-attachments/assets/4f271ed5-813d-4be7-85b4-de8a2c7d732c)

2. Login Form
![image](https://github.com/user-attachments/assets/68abfa61-dd5f-4245-965e-9d52325bf46d)

3. Product Management
![image](https://github.com/user-attachments/assets/37062237-55a4-461a-aa4e-9e3ad5f1533b)

4. Insert Product
![image](https://github.com/user-attachments/assets/90a9bb7b-8344-48da-82dc-7f6a50468f71)

5. Edit Product
![image](https://github.com/user-attachments/assets/47806409-9983-468d-8581-58f26865a7a9)

6. Delete Product
![image](https://github.com/user-attachments/assets/257442b2-6c15-45e7-bd64-abe53727d425)

```
If login through admin, then Admin Panel will open
```
7. Admin Panel
![image](https://github.com/user-attachments/assets/b81cbdd8-063d-4a4c-a0df-1b4d443ddfd4)

8. Product.csv
![image](https://github.com/user-attachments/assets/644a3b65-000e-4477-a3ab-e0d67da7e263)

9. Product.pdf
![image](https://github.com/user-attachments/assets/008ae913-656c-461b-ba95-1e8c56777f2f)
   
### 📝 License
This project is released under the MIT License. You are free to use, modify, and distribute it.







