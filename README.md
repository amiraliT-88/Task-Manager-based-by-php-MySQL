Task Manager

Description

Task Manager is a simple PHP-based task management system that allows users to create, edit, and manage their tasks. It uses MySQL for database storage and follows a modular structure for better maintainability.

Features

User authentication (login & registration)

Task management (add, edit, view tasks)

Secure database handling using PDO

Modular structure for easy expansion


Installation

Prerequisites

PHP 7.4 or higher

MySQL database

Apache or any other compatible web server


Steps

1. Clone the repository:

clone https://github.com/amiraliT-88/Task-Manager-based-by-php-MySQL.git


2. Navigate to the project folder:

cd task-manager


3. Configure the database connection in config/config.php:

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'your_db_username');
define('DB_PASSWORD', 'your_db_password');
define('DB_NAME', 'task_manager');


4. Import the database.sql file (if provided) into your MySQL database.


5. Start your web server and access the project .



Project Structure

/task-manager
│
├── /assets
│   ├── /css
│   └── /js
│
├── /config
│   └── config.php
│
├── /includes
│   ├── db.php
│   ├── auth.php
│   └── functions.php
│
├── /pages
│   ├── index.php
│   ├── login.php
│   ├── register.php
│   ├── dashboard.php
│   ├── tasks.php
│   ├── add-task.php
│   └── edit-task.php
│
└── /templates
    ├── header.php
    └── footer.php

Usage

Open login.php to log in to the system.

Register a new user if needed (register.php).

After logging in, go to the dashboard.php to view tasks.

Use add-task.php to create new tasks.

Edit tasks via edit-task.php.


License

This project is open-source and free to use. You can modify and distribute it under the MIT license.

Contributions

Feel free to fork this repository, submit issues, or create pull requests to improve the project.

Contact

For any questions or issues, contact [your email or GitHub profile].

