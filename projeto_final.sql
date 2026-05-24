CREATE DATABASE IF NOT EXISTS projeto_final;
USE projeto_final;

CREATE TABLE IF NOT EXISTS administrador (
    idadministrador INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(45),
    cpf VARCHAR(11) NOT NULL,
    senha VARCHAR(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO administrador (nome, cpf, senha)
VALUES ('Bia', '22222222222', 'bia123');

CREATE TABLE IF NOT EXISTS usuario (
    idusuario INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cpf VARCHAR(11) NOT NULL,
    email VARCHAR(100),
    data_nascimento DATE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO usuario (nome, cpf, email, data_nascimento)
VALUES ('Ana Teste', '12345678900', 'ana@teste.com', '1990-05-10');
