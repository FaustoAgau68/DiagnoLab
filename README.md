# DiagnoLab

DiagnoLab is a simple web-based diagnostic tool that helps users analyze basic blood test results. The system allows users to register, log in, and input blood test values to receive automatic diagnostic feedback based on standard blood ranges.

The application uses PHP for authentication, MySQL for data storage, and JavaScript for client-side diagnostics and user feedback.


--------------------------------------------------
FEATURES
--------------------------------------------------

1. User Authentication
- User registration and login system using PHP
- User data stored securely in MySQL database

2. Blood Diagnostic Tool
Users can input:
- White Blood Cell (WBC)
- Hemoglobin
- Platelets

The JavaScript diagnostic tool automatically checks whether the values are:
- Normal
- Low
- High

The system then displays possible health condition indications.

3. Contact Form
- Users can send messages through the contact page
- Messages are stored in the database

4. User Feedback System
- Displays success messages for registration and login
- Shows error messages for invalid login attempts
- Notifications automatically hide after a few seconds


--------------------------------------------------
TECH STACK
--------------------------------------------------

Frontend:
- HTML
- CSS
- JavaScript

Backend:
- PHP

Database:
- MySQL


--------------------------------------------------
DATABASE STRUCTURE
--------------------------------------------------

Database Name:
diagnoLabDB


Table: users

user_id INT AUTO_INCREMENT PRIMARY KEY
user_name VARCHAR(255)
user_email VARCHAR(255)
user_password VARCHAR(255)


Table: contactus

contact_id INT AUTO_INCREMENT PRIMARY KEY
contact_name VARCHAR(255)
contact_email VARCHAR(255)
contact_subject VARCHAR(255)
contact_message VARCHAR(500)


--------------------------------------------------
DIAGNOSTIC LOGIC
--------------------------------------------------

The diagnostic system compares user input values with predefined normal ranges.

WBC Normal Range: 4 - 11
Hemoglobin Normal Range: 12 - 18
Platelets Normal Range: 150 - 450

Based on these ranges, the system determines whether the blood test values are normal, low, or high and provides possible health condition indications.


--------------------------------------------------
HOW TO RUN THE PROJECT
--------------------------------------------------

1. Clone the repository

git clone https://github.com/yourusername/diagnolab.git


2. Create the database in MySQL

CREATE DATABASE diagnoLabDB;


3. Import the SQL tables into the database.


4. Place the project folder inside your local server directory

For XAMPP:
htdocs

For Laragon:
www


5. Start Apache and MySQL.


6. Open the project in your browser

http://localhost/diagnolab


--------------------------------------------------
FUTURE IMPROVEMENTS
--------------------------------------------------

- Improve diagnostic accuracy
- Add more blood test parameters
- Implement password hashing for better security
- Add an admin dashboard
- Store user diagnostic history