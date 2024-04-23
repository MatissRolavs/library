CREATE DATABASE library;
USE library;

CREATE TABLE users (
	id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	username VARCHAR(255) NOT NULL,
	password VARCHAR(255) NOT NULL,
	admin INT NOT NULL
);
CREATE TABLE authors(
	id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	name VARCHAR(255) NOT NULL
)
CREATE TABLE books (
	id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	title VARCHAR(255) NOT NULL,
	author_id INT NOT NULL,
	published DATE NOT NULL,
	available INT,
	FOREIGN KEY (author_id) REFERENCES authors(id)
);

CREATE TABLE borrowed_books (
	id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	name VARCHAR(255) NOT NULL,
	user_id INT NOT NULL,
	book_id INT NOT NULL,
	author_id INT NOT NULL,
	published DATE NOT NULL,
	FOREIGN KEY (user_id) REFERENCES users(id),
	FOREIGN KEY (book_id) REFERENCES books(id),
	FOREIGN KEY (author_id) REFERENCES authors(id)
);

UPDATE users SET admin = 1 WHERE id = 1;

