CREATE DATABASE loja;
USE loja;

CREATE TABLE IF NOT EXISTS clientes(
	id_cliente INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    idade INT NOT NULL
);

CREATE TABLE IF NOT EXISTS produtos(
	id_produto INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    produto VARCHAR(200) NOT NULL,
    valor FLOAT NOT NULL
);

CREATE TABLE IF NOT EXISTS descricao_tecnica(
	id_descricao INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	id_produto INT NOT NULL,
    descricao_tecnica TEXT NOT NULL,
	FOREIGN KEY(id_produto) REFERENCES produtos(id_produto)
);

CREATE TABLE IF NOT EXISTS pedidos(
	id_pedido INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_cliente INT NOT NULL,
    data_hora DATETIME DEFAULT CURRENT_TIMESTAMP,
	FOREIGN KEY(id_cliente) REFERENCES clientes(id_cliente)
);

CREATE TABLE IF NOT EXISTS imagens(
	id_imagem INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_produto INT NOT NULL,
    url_imagem VARCHAR(40) NOT NULL,
    FOREIGN KEY(id_produto) REFERENCES produtos(id_produto)
);

CREATE TABLE IF NOT EXISTS pedidos_produtos(
	id_pedido INT NOT NULL,
    id_produto INT NOT NULL,
	FOREIGN KEY(id_pedido) REFERENCES pedidos(id_pedido),
    FOREIGN KEY(id_produto) REFERENCES produtos(id_produto)
);



INSERT INTO clientes(nome, idade) VALUES
	('luiz', 18),
	('Bruno',24),
    ('Bruno H',15),
    ('Júlia',5),
    ('Maurício', 30),
    ('Guilherme Maconha', 29),
    ('Marília', 16),
    ('Ragnar', 18),
    ('Amanda', 21),
    ('Gabriel', 18)
;

SELECT * FROM clientes WHERE idade >= 29;

ALTER TABLE clientes ADD COLUMN sexo CHAR(1) NOT NULL;

ALTER TABLE clientes ADD COLUMN endereco VARCHAR(150); 

UPDATE clientes SET sexo = 'M' WHERE id_cliente IN (1,2,3,6,7);

UPDATE clientes SET sexo = 'F' WHERE id_cliente IN (4,5,8,9,10);

INSERT INTO produtos(produto, valor) VALUES ('Notebook Dell Inspiron Ultrafino Intel Core i7, 16GB RAM e 240GB SSD', 3500.00);
INSERT INTO produtos(produto, valor) VALUES ('Smart TV LED 40" Samsung Full HD 2 HDMI 1 USB Wi-Fi Integrado', 1475.54);
INSERT INTO produtos(produto, valor) VALUES ('Smartphone LG K10 Dual Chip Android 7.0 4G Wi-Fi Câmera de 13MP', 629.99);

INSERT INTO descricao_tecnica(id_produto, descricao_tecnica) VALUES (1, 'O novo Inspiron Dell oferece um design elegante e tela infinita que amplia seus sentidos, mantendo a sofisticação e medidas compactas...');
INSERT INTO descricao_tecnica(id_produto, descricao_tecnica) VALUES (2, 'A smart TV da Samsung possui tela de 40" e oferece resolução Full HD, imagens duas vezes melhores que TVs HDs padrão...');
INSERT INTO descricao_tecnica(id_produto, descricao_tecnica) VALUES (3, 'Saia da mesmice. O smartphone LG está mais divertido, rápido, fácil, cheio de selfies e com tela HD de incríveis 5,3"...');

INSERT INTO pedidos(id_cliente) VALUES (1);

SELECT * FROM pedidos;

INSERT INTO pedidos_produtos(id_pedido, id_produto) VALUES (1, 3);
INSERT INTO pedidos_produtos(id_pedido, id_produto) VALUES (1, 2);

SELECT * FROM pedidos_produtos;

show tables;

SELECT c.id_cliente, c.nome, c.idade, prods.produto, prods.valor FROM 
clientes AS c INNER JOIN pedidos AS p ON (c.id_cliente = p.id_cliente)
INNER JOIN pedidos_produtos AS pp  ON (p.id_pedido = pp.id_pedido)
LEFT JOIN produtos AS prods ON (pp.id_produto = prods.id_produto);