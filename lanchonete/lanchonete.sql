DROP DATABASE IF EXISTS lanchonete;

CREATE DATABASE IF NOT EXISTS lanchonete;

USE lanchonete;

-- TABELA lanche
CREATE TABLE IF NOT EXISTS lanche (
    id_lanche INT NOT NULL primary key auto_increment,
    nome_lanche VARCHAR(20) NOT NULL,
    descricao_lanche VARCHAR(100) NOT NULL,
    preco_lanche FLOAT NOT NULL
);

--- TABELA bebida
CREATE TABLE IF NOT EXISTS bebida (
    id_bebida INT NOT NULL primary key auto_increment,
    nome_bebida VARCHAR(20) NOT NULL,
    descricao_bebida VARCHAR(100) NOT NULL,
    preco_bebida FLOAT NOT NULL
);

-- TABELA acompanhamento
CREATE TABLE IF NOT EXISTS acompanhamento (
    id_acompanhamento INT NOT NULL primary key auto_increment,
    nome_acompanhamento VARCHAR(20) NOT NULL,
    descricao_acompanhamento VARCHAR(100) NOT NULL,
    preco_acompanhamento FLOAT NOT NULL
);

-- TABELA combo
CREATE TABLE IF NOT EXISTS combo (
    id_combo INT NOT NULL primary key auto_increment,
    nome_combo VARCHAR(20) NOT NULL,
    desconto_combo float not null,
    cod_lanche int not null,
    cod_bebida int not null,
    cod_acompanhamento int not null,
    foreign key (cod_lanche)
		references lanche (id_lanche),
    foreign key (cod_bebida)
		references bebida (id_bebida),
	foreign key (cod_acompanhamento)
		references acompanhamento (id_acompanhamento)
);


