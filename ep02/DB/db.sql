-- criando o banco
CREATE DATABASE phptips;
-- selecionano o banco
USE phptips;
-- criando table de users
CREATE TABLE users (
    idusers INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    genre VARCHAR(10),
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);
-- criando tabela de adresses
CREATE TABLE addresses (
	idaddresses INT PRIMARY KEY AUTO_INCREMENT,
    id_users INT,
    street VARCHAR(150),
    number VARCHAR(10)
);
-- criando a foreign key
ALTER TABLE addresses ADD CONSTRAINT FK_ADRESSES_USERS
FOREIGN KEY(id_users) REFERENCES users(idusers);
-- inserindo dados na tabela de USERS
INSERT INTO users (first_name, last_name, genre) VALUES("Bhrandon", "Borges", "M");
INSERT INTO users (first_name, last_name, genre) VALUES("Matheus", "Natividade", "M");
INSERT INTO users (first_name, last_name, genre) VALUES("Camila", "Santos", "F");
-- inserindo dados na tabela ADDRESSES e relacionando com a tabela USERS
INSERT INTO addresses VALUES(NULL, 1, "endereço teste 1", "2019");
INSERT INTO addresses VALUES(NULL, 2, "endereço teste 2", "2020");
INSERT INTO addresses VALUES(NULL, 3, "endereço teste 3", "2021");