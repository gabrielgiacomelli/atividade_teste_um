-- Cria um banco de dados chamado sistema_simples_m1
CREATE DATABASE sistema_simples_m1;

-- Seleciona o banco que será utilizado
USE sistema_simples_m1;

-- Cria uma tabela chamada usuarios
CREATE TABLE usuarios (

    -- Campo id
    -- INT = número inteiro
    -- AUTO_INCREMENT = aumenta automaticamente (1, 2, 3...)
    -- PRIMARY KEY = chave primária (identificador único)
    id INT AUTO_INCREMENT PRIMARY KEY,

    -- Campo usuario
    -- VARCHAR(87) = texto de até 87 caracteres
    -- NOT NULL = obrigatório
    usuario VARCHAR(87) NOT NULL,

    -- Campo senha
    -- VARCHAR(255) = texto de até 255 caracteres
    -- NOT NULL = obrigatório
    senha VARCHAR(255) NOT NULL
);

-- Insere um registro na tabela
INSERT INTO usuarios (usuario, senha)
VALUES ('admin', '123');