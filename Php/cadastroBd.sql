create database ideal;
use ideal;
create table cliente(
	id int primary key auto_increment,
    nome varchar(50),
    telefone varchar(50),
    endereco varchar(50),
	email varchar(50)
    ) ;

select * from cliente;'