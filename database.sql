CREATE DATABASE empresa;

USE empresa;

CREATE TABLE clientes(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombres VARCHAR(50) NOT NULL,
    direccion VARCHAR(70) NOT NULL,
    compras INT
);