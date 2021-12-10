create database db_tarefas;
use db_tarefas;

create table if not exists usuarios (
    id_usuario int not null primary key auto_increment,
    nome varchar(50) not null,
    email varchar(100) not null,
    senha varchar(40) not null
);

create table if not exists situacao(
	id int not null primary key auto_increment,
    status varchar(25) not null
);

insert into situacao(status)values('pendente');
insert into situacao(status)values('realizado');

create table if not exists tarefas(
	id int not null primary key auto_increment,
    id_status int not null default 1,
    foreign key(id_status) references situacao(id),
	tarefa text not null,
    data_cadastro datetime not null default current_timestamp
);

select * from tarefas;

update tarefas set id_status = 2 where id = 9;