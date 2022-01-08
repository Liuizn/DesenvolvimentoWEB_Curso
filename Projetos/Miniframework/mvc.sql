create database mvc;
use mvc;

create table if not exists tb_produtos (
	id int not null primary key auto_increment,
	descricao varchar(200) not null,
	preco float(8,2) not null
);

insert into tb_produtos(descricao, preco)values('Sofá', 1250.75);
insert into tb_produtos(descricao, preco)values('Cadeira', 378.99);
insert into tb_produtos(descricao, preco)values('Cama', 870.75);
insert into tb_produtos(descricao, preco)values('Notebook', 1752.49);
insert into tb_produtos(descricao, preco)values('Smartphone', 999.99);

create table tb_info (
	id int not null primary key auto_increment,
	titulo varchar(200) not null,
	descricao text not null
);

insert into tb_info(titulo, descricao)values('Missão', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.');
insert into tb_info(titulo, descricao)values('Visão', 'Morbi faucibus elit nec nibh elementum, a ultrices ante condimentum.');
insert into tb_info(titulo, descricao)values('Valores', 'Pellentesque faucibus egestas justo sed malesuada. Etiam convallis tortor diam, scelerisque sodales nibh consequat quis. Nullam sodales nunc neque, eu placerat ex ultrices a. Nulla sed sapien eu orci egestas imperdiet fringilla ut massa.');