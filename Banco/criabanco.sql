CREATE DATABASE CARROCINHA;
USE CARROCINHA;
CREATE TABLE Cidade(
	id int auto_increment not null primary key,
    nome varchar(50),
    estado varchar(2)
);
CREATE TABLE Pessoa(
	id int auto_increment not null primary key,
    nome varchar(50),
    email varchar(100),
    endereço varchar(100),
    bairro varchar(50),
    id_cidade int,
    cep varchar(9),
    constraint FK_PessoaCidade foreign key(id_cidade,estado) references Cidade(id,estado),
    constraint FK_PessoaCidade foreign key(estado) references Cidade(estado)
    
);
CREATE TABLE Animal(
	id int auto_increment not null primary key,
    nome varchar(50),
    espécie varchar(50),
    raça varchar(50),
    data_nascimento date,
    idade int(3),
    castrado bool,
    id_pessoa int,
    constraint FK_AnimalPessoa foreign key(id_pessoa) references Pessoa(id)
);