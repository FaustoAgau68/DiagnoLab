CREATE DATABASE diagnoLabDB;
USE diagnoLabDB;


CREATE TABLE users(
user_id INT AUTO_INCREMENT PRIMARY KEY,
user_name VARCHAR(255),
user_email VARCHAR(255),
user_password VARCHAR(255)
);

CREATE TABLE contactus(
contact_id INT AUTO_INCREMENT PRIMARY KEY,
contact_name VARCHAR(255),
contact_email VARCHAR(255),
contact_subject VARCHAR(255),
contact_message VARCHAR(500)
);