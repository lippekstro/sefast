CREATE DATABASE sefast;

USE sefast;

CREATE TABLE usuarios(
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nome_usuario VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    site_usuario VARCHAR(255),
    foto_usuario LONGBLOB,
    nivel_acesso INT DEFAULT 1
);

CREATE TABLE categorias(
    id_categoria INT PRIMARY KEY AUTO_INCREMENT,
    nome_categoria VARCHAR(255) NOT NULL,
    foto_categoria LONGBLOB
);

CREATE TABLE servicos(
    id_servico INT PRIMARY KEY AUTO_INCREMENT,
    nome_servico VARCHAR(255) NOT NULL,
    descricao TEXT NOT NULL,
    foto_servico LONGBLOB,
    id_categoria INT NOT NULL,
    id_usuario INT NOT NULL,
    FOREIGN KEY (id_categoria) REFERENCES categorias (id_categoria),
    FOREIGN KEY (id_usuario) REFERENCES usuarios (id_usuario)
);

