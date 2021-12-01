CREATE DATABASE loja_virtual;
USE loja_virtual;

CREATE TABLE produtos(
	id_produto INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    produto VARCHAR(200) NOT NULL,
    valor FLOAT(8,2) NOT NULL 
);

SELECT * FROM produtos;

CREATE TABLE descricoes_tecnicas(
	id_descricao_tecnica INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_produto_fk INT NOT NULL,
    descricao_tecnica TEXT NOT NULL,
    FOREIGN KEY(id_produto_fk) REFERENCES produtos(id_produto)
);

SELECT * FROM descricoes_tecnicas;

INSERT INTO produtos(produto, valor) VALUES ('Notebook Dell Inspiron Ultrafino Intel Core i7, 16GB RAM e 240GB SSD', 3500.00);
INSERT INTO produtos(produto, valor) VALUES ('Smart TV LED 40" Samsung Full HD 2 HDMI 1 USB Wi-Fi Integrado', 1475.54);
INSERT INTO produtos(produto, valor) VALUES ('Smartphone LG K10 Dual Chip Android 7.0 4G Wi-Fi Câmera de 13MP', 629.99);

INSERT INTO descricoes_tecnicas(id_produto_fk, descricao_tecnica) VALUES (1, 'O novo Inspiron Dell oferece um design elegante e tela infinita que amplia seus sentidos, mantendo a sofisticação e medidas compactas...');
INSERT INTO descricoes_tecnicas(id_produto_fk, descricao_tecnica) VALUES (2, 'A smart TV da Samsung possui tela de 40" e oferece resolução Full HD, imagens duas vezes melhores que TVs HDs padrão...');
INSERT INTO descricoes_tecnicas(id_produto_fk, descricao_tecnica) VALUES (3, 'Saia da mesmice. O smartphone LG está mais divertido, rápido, fácil, cheio de selfies e com tela HD de incríveis 5,3"...');

CREATE TABLE imagens(
	id_imagem INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    url_imagem VARCHAR(150) NOT NULL,
    id_produto_fk INT NOT NULL,
    FOREIGN KEY(id_produto_fk) REFERENCES produtos(id_produto)
);

INSERT INTO imagens(id_produto_fk, url_imagem) VALUES (1, 'notebook_1.jpg'), (1, 'notebook_2.jpg'),
(1, 'notebook_3.jpg');

INSERT INTO imagens(id_produto_fk, url_imagem) VALUES (2, 'smarttv_1.jpg'), (2, 'smarttv_2.jpg');

INSERT INTO imagens(id_produto_fk, url_imagem) VALUES (3, 'smartphone_1.jpg');





