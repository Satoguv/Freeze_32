CREATE DATABASE freeze;

USE freeze;

CREATE TABLE contato
(
id int primary key AUTO_INCREMENT,
nome varchar(100),
email varchar(100),
assunto varchar(50),
mensagem varchar(200)
);

CREATE TABLE produto
(
descricao varchar(50) primary key
);

CREATE TABLE forma_pagamento
(
descricao varchar(50) primary key
);

CREATE TABLE encomenda
(
id int primary key AUTO_INCREMENT,
nome varchar(100),
telefone varchar(100),
quantidade varchar(50),
forma_pagamento varchar(50),
endereco_entrega varchar(100),
produto varchar(50) references produto(descricao),
pagamento varchar(50) references forma_pagamento(descricao)
);

CREATE TABLE usuario
(
login_usuario varchar(30) primary key,
senha_usuario text
);

-- SENHA: 123456
INSERT INTO usuario(login_usuario,senha_usuario)
VALUES('admin','$2y$10$zCOQfIU7EWWM7PS/6xzQyONUvnxLyGT6pWyy4ylohanA.7vkoYJ9K');


INSERT INTO produto(descricao)
VALUES ('Picolé de ninho trufado'),('Picolé de ameixa'),
('Sorvete de amora'),('Sorvete de chocolate'),
('Sorvete de framboesa'),('Sorvete de maracujá'),
('Sorvete de morango'),('Sorvete de doce de leite'),
('Picolé de coco'),('Picolé de limão');

INSERT INTO forma_pagamento(descricao)
VALUES ('Pagamento com dinheiro'),('Pagamento com cartão de débito'),
('Pagamento com cartão de crédito'),('Pagamento com cheque');