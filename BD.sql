create database aula_09;
use aula_09;

create table user(
    id int primary key auto_increment,
    nome varchar(50) not null,
    email varchar(50) not null,
    senha varchar(32) not null
);

insert user values (0, "Serginho", "serginho@email.com", "123456");

create table product(
    cod int primary key auto_increment,
    nome varchar(50) not null,
    preco decimal(6,2) not null,
    figura varchar(250) not null
);