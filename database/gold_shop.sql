CREATE DATABASE gold_shop CHARACTER SET utf8 COLLATE utf8_general_ci;
USE gold_shop;

-- faizullah firozi wardak 0780002528 


CREATE TABLE customer (
                customer_id         INT PRIMARY KEY AUTO_INCREMENT,
                first_name          VARCHAR(128) NOT NULL,
                last_name           VARCHAR(128) ,
				father_name         VARCHAR(128) ,
                phone               CHAR(10)  UNIQUE,
                date_save           DATE
);

CREATE TABLE sales(
				sale_id			 INT PRIMARY KEY AUTO_INCREMENT,
				customer_id 	 INT,
				sample_id 		 INT,
				sr_no			 VARCHAR(128),
				gold_weight		 FLOAT NOT NULL,
				gold_percentage  FLOAT NOT NULL,
				gold_carat 		 FLOAT NOT NULL,
				date_year		 INT NOT NULL,
				date_month	     TINYINT NOT NULL,
				date_day		 TINYINT NOT NULL,
				date_hijri		 DATE NOT NULL,
				price 			 FLOAT DEFAULT NULL,
CONSTRAINT sales_customer_fk FOREIGN KEY (customer_id) REFERENCES customer(customer_id) ON DELETE NO ACTION ON UPDATE CASCADE,
CONSTRAINT sales_gold_sample_fk FOREIGN KEY (sample_id) REFERENCES gold_sample(sample_id) ON DELETE NO ACTION ON UPDATE CASCADE
);


CREATE TABLE gold_sample(
				sample_id			 INT PRIMARY KEY AUTO_INCREMENT,
				sample_name			 VARCHAR(128) NOT NULL UNIQUE
);


CREATE TABLE users (
                user_id            INT PRIMARY KEY AUTO_INCREMENT,
                full_name          VARCHAR(255) NOT NULL UNIQUE,
                username           VARCHAR(128),
                password           VARCHAR(255) NOT NULL
);


INSERT INTO users (user_id, full_name, username, password) VALUES
(1, 'Faizullah firozi', 'admin', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad');

