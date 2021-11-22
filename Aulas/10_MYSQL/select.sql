CREATE DATABASE aula05;
USE aula05;
CREATE TABLE tb_cursos (
	id_curso INT NOT NULL,
    img_curso VARCHAR(100) NOT NULL,
    nome_curso CHAR(50) NOT NULL,
    resumo TEXT NULL,
    data_cadastro DATETIME NOT NULL,
    ativo BOOLEAN DEFAULT TRUE,
    preco FLOAT(8,2) DEFAULT 0
);

INSERT INTO tb_cursos(id_curso, img_curso, nome_curso, resumo, data_cadastro, ativo, preco) values (1,'curso_teste.jpg','Curso teste','Um resumo sobre o teste curso','2021-11-22 17:05:05',1,4999.99); 


SELECT * FROM tb_cursos; # seleciona tudo
SELECT nome_curso FROM tb_cursos; # seleciona especifica