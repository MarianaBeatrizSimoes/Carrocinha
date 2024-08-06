DROP database IF EXISTS CARROCINHA;
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
    endereco varchar(100),
    bairro varchar(50),
    id_cidade int,
    cep varchar(9),
    constraint FK_PessoaCidade foreign key(id_cidade) references Cidade(id)
);
CREATE TABLE Animal(
	id int auto_increment not null primary key,
    nome varchar(50),
    especie varchar(50),
    raca varchar(50),
    data_nascimento date,
    castrado bool,
    id_pessoa int,
    constraint FK_AnimalPessoa foreign key(id_pessoa) references Pessoa(id)
);