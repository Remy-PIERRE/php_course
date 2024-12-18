CREATE DATABASE tp_fruits CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE tp_fruits;

CREATE TABLE fruit (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    price INT UNSIGNED NOT NULL,
    CONSTRAINT pk_fruit PRIMARY KEY (id)
) ENGINE=InnoDB;

CREATE TABLE invoice (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    quantity INT UNSIGNED NOT NULL,
    fruit_id INT UNSIGNED NOT NULL,
    CONSTRAINT pk_invoice PRIMARY KEY (id)

) ENGINE=InnoDB;

ALTER TABLE invoice ADD
CONSTRAINT fk_invoice_fruit FOREIGN KEY (fruit_id) REFERENCES fruit(id);

INSERT INTO fruit (name, price) VALUES
	("pomme", 1),
    ("poire", 2),
    ("cerise", 1),
    ("avocat", 4),
    ("orange", 3),
    ("melon", 4);

INSERT INTO invoice (quantity, fruit_id) VALUES
    (14, 3),
    (10, 1);