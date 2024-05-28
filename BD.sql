create database sale_panel;
use sale_panel;

create table user(
    id int primary key auto_increment,
    nome varchar(50) not null,
    email varchar(50) not null,
    senha varchar(32) not null
);

insert user values (0, "Admin", "admin@email.com", "123456");

create table product(
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
    venda_cod int,
    produto_cod int,
    foreign key (venda_cod) references venda(cod),
    foreign key (produto_cod) references product(cod) 
);