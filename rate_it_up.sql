CREATE DATABASE rate_it_up;
USE rate_it_up;

-- User table
CREATE TABLE user (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100),
  email VARCHAR(100) UNIQUE,
  password VARCHAR(255)
);

-- Admin table
CREATE TABLE admin (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50),
  password VARCHAR(255)
);

-- Review table
CREATE TABLE review (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  tempat VARCHAR(150),
  review TEXT,
  waktu TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES user(id)
);

-- Komentar table
CREATE TABLE komentar (
  id INT AUTO_INCREMENT PRIMARY KEY,
  review_id INT,
  user_id INT,
  isi TEXT,
  status ENUM('pending','approved','rejected') DEFAULT 'pending',
  waktu TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (review_id) REFERENCES review(id),
  FOREIGN KEY (user_id) REFERENCES user(id)
);
