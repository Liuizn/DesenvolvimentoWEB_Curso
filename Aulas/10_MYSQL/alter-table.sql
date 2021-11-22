CREATE DATABASE aula03;
USE aula03;
CREATE TABLE tb_cursos (
	id_curso INT NOT NULL,
    img_curso VARCHAR(100) NOT NULL,
    nome_curso CHAR(50) NOT NULL,
    resumo TEXT NULL,
    data_cadastro DATETIME NOT NULL,
    ativo BOOLEAN DEFAULT TRUE,
    preco FLOAT(8,2) DEFAULT 0
);

ALTER TABLE tb_cursos ADD COLUMN carga_horaria INT NOT NULL; #Adiciona
ALTER TABLE tb_cursos CHANGE carga_horaria carga_horaria VARCHAR(5) NOT NULL; #Edita
ALTER TABLE tb_cursos DROP carga_horaria; #Exclui

