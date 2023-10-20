CREATE DATABASE IF NOT EXISTS `db_rental_motor`;
USE `db_rental_motor`;

CREATE TABLE IF NOT EXISTS `motor` (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipe VARCHAR(50),
    harga INT(50)
);

INSERT INTO `motor` (tipe, harga) VALUES ('Scoopy', 70000),
                                         ('Beat', 67000),
                                         ('Vario', 73000),
                                         ('Mio', 60000),
                                         ('Aerox', 74000),
                                         ('S1000RR', 210000),
                                         ('RSV4', 180000);
