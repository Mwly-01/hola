-- Active: 1753105799790@@127.0.0.1@3306@php_pdo


-- Database commands

CREATE DATABASE IF NOT EXISTS php_pdo;

USE php_pdo;

SHOW TABLES;

SELECT * FROM products

-- Drops

DROP TABLE IF EXISTS products;

-- Tables

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(80) NOT NULL,
    price DECIMAL(10,2) NOT NULL
);

-- Inserts



INSERT INTO products(name, price)
VALUES('esponja', 4000),
('pan de queso', 2000);

DROP TABLE IF EXISTS campers;

CREATE TABLE campers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    edad INT NOT NULL,
    documento VARCHAR(30) UNIQUE NOT NULL,
    tipo_documento VARCHAR(20) NOT NULL,
    nivel_ingles TINYINT DEFAULT 0,
    nivel_programacion TINYINT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO campers (nombre, edad, documento, tipo_documento, nivel_ingles, nivel_programacion)
VALUES 
('Ana María Ríos', 19, '1001234567', 'Cedula', 4, 3),
('Luis Alberto Peña', 22, '1002234568', 'Cedula', 3, 4),
('Camila Torres', 20, '1003234569', 'Cedula', 5, 5),
('Carlos Mendez', 18, '1004234570', 'TI', 2, 1),
('Laura Galvis', 21, '1005234571', 'Cedula', 3, 3),
('Diego Suárez', 24, '1006234572', 'Cedula', 1, 2),
('Valentina López', 20, '1007234573', 'Cedula', 4, 4),
('Andres Gómez', 23, '1008234574', 'Pasaporte', 2, 3),
('María Fernanda Ruiz', 25, '1009234575', 'Cedula', 5, 5),
('Jhonatan Páez', 19, '1010234576', 'Cedula', 3, 2);
DROP TABLE IF EXISTS users;

CREATE TABLE `users`
(
    `id`     int          NOT NULL AUTO_INCREMENT,
    `nombre` varchar(100) NOT NULL DEFAULT '',
    `email`  varchar(100) NOT NULL,
    `password`  varchar(255) NOT NULL,
    `rol`  enum('admin', 'user') NOT NULL DEFAULT 'user',
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    UNIQUE KEY `email` (`email`)
);