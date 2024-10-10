create database if not exists `boletoerp`;

create table `boletoerp`.`loja`
(
    id int not null auto_increment primary key,
    nome varchar(100) not null,
    tipoPessoa varchar(1)   not null,
    documento varchar(20)  not null,
    email varchar(100) not null,
    createdAt timestamp not null default current_timestamp(),
    updatetedAt timestamp not null default current_timestamp()
);

create table `boletoerp`.`endereco`
(
    id          int not null auto_increment primary key,
    logradouro  varchar(100) not null,
    numero      varchar(100) not null,
    complemento varchar(100),
    bairro      varchar(100) not null,
    municipio   varchar(100) not null,
    uf          varchar(2) not null,
    cep         varchar(9) not null,
    createdAt timestamp not null default current_timestamp(),
    updatetedAt timestamp not null default current_timestamp()
);

create table `boletoerp`.`loja_endereco`
(
    idLoja int not null references `boletoerp`.`loja`(id),
    idendereco int not null references `boletoerp`.`endereco`(id)
);

create table `boletoerp`.`cliente`
(
    id          int not null auto_increment primary key,
    nome        varchar(100) not null,
    tipoPessoa  varchar(1)   not null,
    razaoSocial varchar(100),
    nome_fantasia varchar(100),
    documento   varchar(20)  not null,
    email       varchar(100) not null,
    createdAt timestamp not null default current_timestamp(),
    updatetedAt timestamp not null default current_timestamp()
);

create table `boletoerp`.`cliente_endereco`
(
    idCliente int not null references `boletoerp`.`cliente`(id),
    idEndereco int not null references `boletoerp`.`endereco`(id)
);
