DROP DATABASE IF EXISTS Login;

CREATE DATABASE Login COLLATE utf8mb4_spanish_ci;

USE Login;

CREATE TABLE users (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    user VARCHAR(25) NOT NULL,
    password VARCHAR(255) NOT NULL
);

    -- usuarios----------
INSERT INTO users(user, password) VALUES ("jose", md5("211099"));
INSERT INTO users(user, password) VALUES ("inma", md5("1234"));
INSERT INTO users(user, password) VALUES ("alberto", md5("1234"));