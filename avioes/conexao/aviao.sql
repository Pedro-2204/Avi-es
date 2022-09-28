create database aviao;

use aviao;


create table aviao(
id int not null auto_increment primary key,
modelo varchar(50)  not null,
prefixo int not null,
marca varchar(50) not null,
classificacao varchar(10) not null,
capacidade int not null
);
