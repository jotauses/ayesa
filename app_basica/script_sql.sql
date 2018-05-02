CREATE TABLE usuario (
	id INTEGER(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(50) NOT NULL,
	password VARCHAR(50) NOT NULL,
	firstname VARCHAR(50) NOT NULL,
	lastname VARCHAR(50) NOT NULL,
	email VARCHAR(50) NOT NULL,
	reg_date DATETIME
);

CREATE TABLE car (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	brand VARCHAR(30) NOT NULL,
	model VARCHAR(30) NOT NULL,
	description TEXT NOT NULL,
	price FLOAT NOT NULL,
	reg_date TIMESTAMP NOT NULL
);

INSERT INTO car (brand, model,description,price,reg_date) VALUES ('Seat','600','Vendo Seat 600',12000,NOW());
INSERT INTO car (brand, model,description,price,reg_date) VALUES ('Mercedes','CLS65 AMG','Vendo Mercedes CLS65 AMG',120000,NOW());
INSERT INTO car (brand, model,description,price,reg_date) VALUES ('BMW','Serie 6 540i','Vendo BMW Serie 6 540i',80000,NOW());
INSERT INTO car (brand, model,description,price,reg_date) VALUES ('Audi','RS7 S-Line','Vendo Audi RS7 S-Line',100000,NOW());