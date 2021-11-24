CREATE DATABASE aula12;
use aula12;

CREATE TABLE tb_alunos (
  id_aluno int,
  nome varchar(255) default NULL,
  idade int default NULL,
  interesse varchar(255) default NULL,
  email varchar(255) default NULL,
  estado varchar(255) default NULL
);

CREATE TABLE tb_cursos (
  id_curso INT(11) NOT NULL,
  imagem_curso VARCHAR(100) NOT NULL,
  nome_curso CHAR(50) NOT NULL,
  resumo TEXT NULL,
  data_cadastro DATETIME NOT NULL,
  ativo BOOLEAN DEFAULT 1,
  investimento FLOAT(8,2) DEFAULT 0,
  carga_horaria INT(5) NULL  
);

TRUNCATE tb_cursos;

INSERT INTO tb_cursos(id_curso, imagem_curso, nome_curso, resumo, data_cadastro, ativo, investimento, carga_horaria) VALUES 
	(1, 'curso_node.jpg', 'Curso Completo do Desenvolvedor NodeJS e MongoDB', 'Resumo do curso de NodeJS', '2018-01-01', 1, 159.99, 15), 
	(2, 'curso_react_native.jpg', 'Multiplataforma Android/IOS com React e Redux', 'Resumo do curso de React Native', '2018-02-01', 1, 204.99, 37), 
	(3, 'angular.jpg', 'Desenvolvimento WEB com ES6, TypeScript e Angular', 'Resumo do curso de ES6, TypeScript e Angular', '2018-03-01', 1, 579.99, 31), 
	(4, 'web_completo_2.jpg', 'Web Completo 2.0', 'Resumo do curso de Web Completo 2.0', '2018-04-01', 1, 579.99, 59), 
	(5, 'linux.jpg', 'Introdução ao GNU/Linux', 'Resumo do curso de GNU/Linux', '2018-05-01', 0, 0, 1)
;

SELECT * FROM tb_cursos;

SELECT MIN(investimento) FROM tb_cursos;

SELECT MIN(investimento) FROM tb_cursos WHERE ativo = true;

SELECT MAX(investimento) FROM tb_cursos;

SELECT AVG(investimento) FROM tb_cursos WHERE ativo = true; 

