-- Create Database
CREATE DATABASE IF NOT EXISTS message_db;
USE message_db;

-- Users Table
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    avatar_color VARCHAR(7),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Conversations Table
CREATE TABLE conversations (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user1_id INT NOT NULL,
    user2_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user1_id) REFERENCES users(id),
    FOREIGN KEY (user2_id) REFERENCES users(id)
);

-- Messages Table
CREATE TABLE messages (
    id INT PRIMARY KEY AUTO_INCREMENT,
    conversation_id INT NOT NULL,
    sender_id INT NOT NULL,
    content TEXT NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (conversation_id) REFERENCES users(id),
    FOREIGN KEY (sender_id) REFERENCES users(id)
);

-- Sample Data
INSERT INTO users (name, phone, avatar_color) VALUES
('312', '2348012345678', '#e91e63'),
('MTNN', '2347987654321', '#2196f3'),
('MTN N', '2346543210987', '#ff9800');

INSERT INTO conversations (user1_id, user2_id) VALUES
(1, 2),
(1, 3);

INSERT INTO messages (conversation_id, sender_id, content, timestamp) VALUES
(1, 2, 'REMINDER! Your 7GB 2-Days Plan will not renew when it expires on a coming date', NOW() - INTERVAL 48 MINUTE),
(1, 1, 'Thanks for the reminder', NOW() - INTERVAL 45 MINUTE);
