CREATE DATABASE rtsolution;
use rtsolution;

CREATE TABLE usuarios(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(100) NOT NULL,
);

insert into usuarios (nome, email, cargo, senha) VALUES ('admin', 'admin', 'adm','admin123');