create database sale_panel;
use sale_panel;

create table usuario(
    id int primary key auto_increment,
    nome varchar(50) not null,
    email varchar(50) not null,
    senha varchar(32) not null
);

insert usuario values (0, "Admin", "admin@email.com", "123456");

create table produto(
    cod int primary key auto_increment,
    nome varchar(50) not null,
    preco decimal(6,2) not null,
    qtd int not null,
    figura varchar(250) not null
);

create table venda(
    cod int primary key auto_increment,
    preco decimal(6,2) not null,
    data date not null
);

create table produto_venda(
    cod int primary key auto_increment,
    cod_venda int,
    cod_produto int,
    qtd int,
    foreign key (cod_venda) references venda(cod),
    foreign key (cod_produto) references produto(cod) 
);