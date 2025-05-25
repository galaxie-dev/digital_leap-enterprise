CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100) UNIQUE,
  phone VARCHAR(20),
  password VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  survey_completed TINYINT(1) DEFAULT 0
);
ALTER TABLE users
ADD COLUMN profile_picture VARCHAR(255) DEFAULT NULL;



CREATE TABLE user_surveys (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  dob DATE,
  program VARCHAR(100),
  skill_level VARCHAR(50),
  goals TEXT,
  referral VARCHAR(100),
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);
