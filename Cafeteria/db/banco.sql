CREATE DATABASE IF NOT EXISTS cafeteria;

USE cafeteria;

CREATE TABLE IF NOT EXISTS complementos (
  id int NOT NULL AUTO_INCREMENT,
  nome varchar(100) DEFAULT NULL,
  tipo varchar(100) DEFAULT NULL,
  preco varchar(50) DEFAULT NULL,
  img varchar(200) DEFAULT NULL,
  PRIMARY KEY (id)
);

INSERT INTO complementos (id, nome, tipo, preco, img) VALUES
(5, 'Brownie', 'Gourmet', '13', 'https://img.freepik.com/fotos-gratis/uma-fatia-de-brownie-do-chocolate-com-gelado-da-noz-e-da-baunilha_114579-778.jpg?t=st=1718375143~exp=1718378743~hmac=57cabf101fc7dfa96e52b557ed87693573640a45cbc211'),
(6, 'Bolo', 'Morango & Chocolate', '22', 'https://img.freepik.com/fotos-gratis/bolo-de-morango-na-mesa-de-madeira_176474-2525.jpg?t=st=1718375215~exp=1718378815~hmac=acb3f2414c2a6c15ed5ef39311485c17292bd5f913b17b2346d233947f67c5ab&w=826');

CREATE TABLE IF NOT EXISTS produtos (
  id int NOT NULL AUTO_INCREMENT,
  nome varchar(100) DEFAULT NULL,
  tipo varchar(200) DEFAULT NULL,
  preco varchar(15) DEFAULT NULL,
  img varchar(300) DEFAULT NULL,
  PRIMARY KEY (id)
);

INSERT INTO produtos (id, nome, tipo, preco, img) VALUES
(31, 'Café', 'Ao Leite', '10', 'https://img.freepik.com/fotos-gratis/close-up-xicara-cafe-leite-com-checkered-fundo_23-2148251669.jpg?t=st=1718375080~exp=1718378680~hmac=d26b3480e7bb96ae9c99eb98fb8601058b63c818ff69e7452bb16294ac0cb522&w=826'),
(30, 'Café', 'Preto', '8', 'https://img.freepik.com/fotos-premium/americano-isolado_421632-28446.jpg?w=826'),
(29, 'Cappuccino', 'Light', '12', 'https://img.freepik.com/fotos-premium/uma-xicara-de-cafe-com-uma-folha-e-graos-de-cafe-na-mesa_577418-997.jpg?w=826');

CREATE TABLE IF NOT EXISTS usuario (
  id int NOT NULL AUTO_INCREMENT,
  email varchar(100) DEFAULT NULL,
  senha varchar(50) DEFAULT NULL,
  PRIMARY KEY (id)
);

INSERT INTO usuario (id, email, senha) VALUES
(19, 'antonio@gmail.com', 'antonio'),
(18, 'davi@gmail.com', 'davi'),
(17, 'gabreu@gmail.com', 'gabreu'),
(16, 'gusta@gmail.com', 'gustavo');