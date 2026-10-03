CREATE DATABASE sistema_brinquedos;
USE sistema_brinquedos;

CREATE TABLE brinquedo(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY UNIQUE ,
    nome VARCHAR(45) NOT NULL,
    categoria VARCHAR(45) NOT NULL,
    idade_minima INT NOT NULL,
    preco FLOAT NOT NULL,
    quantidade_estoque INT NOT NULL
);