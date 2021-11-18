CREATE TABLE aula02;
USE aula02;
CREATE TABLE tb_cursos (
	id_curso INT NOT NULL,
    img_curso VARCHAR(100) NOT NULL,
    nome_curso CHAR(50) NOT NULL,
    resumo TEXT NULL,
    data_cadastro DATETIME NOT NULL,
    ativo BOOLEAN DEFAULT TRUE,
    preco FLOAT(8,2) DEFAULT 0
);
