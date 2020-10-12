DROP DATABASE IF EXISTS lojaroupa;

CREATE DATABASE IF NOT EXISTS lojaroupa;

USE lojaroupa;

-- TABELA USUARIO
CREATE TABLE IF NOT EXISTS usuario (
	id_usuario INT not null auto_increment primary key,
    nome_usuario VARCHAR(100) not null,
	email VARCHAR(20) not null,
    senha CHAR(32) not null,
    permissao int not null,
    nome VARCHAR(100) not null,
	sobrenome  VARCHAR(100) not null,
    data_nascimento DATE not null,
    rua VARCHAR(100) not null,
    numero INT not null,
    compl VARCHAR(100),
    bairro VARCHAR(100) not null,
    cidade VARCHAR(100) not null,
    estado CHAR(2) not null,
    telefone VARCHAR(50) not null,
    cep VARCHAR(50) not null,
    cpf CHAR(11) not null,
    rg CHAR(9) not null
);
-- TABELA CATEGORIA
CREATE TABLE IF NOT EXISTS categoria (
    id_categoria INT not null auto_increment primary key,
    tipo VARCHAR(50) not null
);
-- TABELA PRODUTO
CREATE TABLE IF NOT EXISTS produto (
    id_produto INT not null auto_increment primary key,
    nome_produto VARCHAR(50) not null,
    descricao VARCHAR(50) not null,
    peso INT not null,
    tamanho VARCHAR(50) not null,
    cor VARCHAR(50) not null,
    cod_categoria INT not null,
    valor_unitario  FLOAT(6 , 2) not null,
    estoque INT not null,
    FOREIGN KEY (cod_categoria) REFERENCES categoria (id_categoria)
);
-- TABELA CARRINHO
CREATE TABLE IF NOT EXISTS carrinho (
    id_carrinho INT not null auto_increment primary key,
    cod_usuario INT not null,
    FOREIGN KEY (cod_usuario) REFERENCES usuario (id_usuario)
);
-- TABELA CARRINHO_PRODUTO
CREATE TABLE IF NOT EXISTS carrinho_produto (
    cod_produto INT not null,
    qtde INT not null,
    cod_carrinho INT not null,
    primary key (cod_produto, cod_carrinho),
    FOREIGN KEY (cod_produto) REFERENCES produto (id_produto),
	FOREIGN KEY (cod_carrinho) REFERENCES carrinho (id_carrinho)
);
-- TABELA VENDA
CREATE TABLE IF NOT EXISTS venda (
    id_venda INT not null auto_increment primary key,
    cod_carrinho INT not null,
    horario TIME not null,
    data DATE not null,
    status VARCHAR(50) not null,
    valor FLOAT(6 , 2) not null,
	endereco_entrega VARCHAR(100) not null,
    valor_frete FLOAT(6 , 2) not null,
    FOREIGN KEY (cod_carrinho) REFERENCES carrinho (id_carrinho)
);
-- INSERÇÕES

INSERT INTO usuario (id_usuario, nome_usuario, email, senha, permissao, nome, sobrenome, data_nascimento, 
rua, numero, compl, bairro, cidade, estado, telefone, cep, cpf, rg) 
VALUES
(1, 'Visualizador', 'fernando@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, upper('Fernando'), upper(' Wong'), '1955-12-08', 
'Rua da Lapa', 34, NULL,'Mooca', 'São Paulo', 'SP','(11)33445566', '12345-000', '12345604538', '245448345'),
(2, 'Visualizador', 'beluzo@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, upper('Beluzo'), upper(' Leite'), '1972-07-31', 
'Av. Lucas Obes', 74, NULL, 'Centro', 'São Paulo', 'SP', '(11)55779955', '12345-999', '55555333123', '666655555'),
(3, 'Visualizador', 'visualizador@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, upper('André'), upper(' Pereira'), '1969-03-29', 
'Av. Timbira', 35, 'apto 23', 'Mooca', 'São Paulo', 'SP', '(11)33556600', '12345-000', '23232344444', '565656333'),
(4, 'Visualizador', 'editor@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, upper('Jorge'),upper(' Brito'), '1937-11-10', 
'Rua do Horto', 35, 'apto 501', 'Jardins', 'São Paulo', 'SP', '(11)99338822', '12345-500' , '67676788888', '999222111'),
(5,'Admin','ellen@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, upper('Ellen'),upper(' Afonso'), '1990-11-10', 
'Rua Matão', 102, null, 'Jd Adalberto Roxo', 'Araraquara', 'SP',  '(16)33326849', '14810-300' , '11144455555', '123678567' ),
(6,'Admin','sueli@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, upper('Sueli'),upper(' Guandalini'), '1974-02-06', 
'Av Santo Antonio', 200, 'apto 201', 'Vila Xavier', 'Araraquara', 'SP', '(16)33327040', '14810-030', '12399900022', '123666999');

INSERT INTO categoria (id_categoria, tipo)
values
(30, 'Blusa'),
(31, 'Body'),
(32, 'Calça'),
(33, 'Jardineira'),
(34, 'Macacão'),
(35, 'Short'),
(36, 'Vestido');

INSERT INTO produto (id_produto, nome_produto, descricao, peso, tamanho, cor, cod_categoria, valor_unitario, estoque)
values
(40, 'Blusa Copacabana', 'tecido em organza com forro bege', 80,' M', 'amarela', 30, '35.50', 50),
(41, 'Blusa Inovation', 'tecido em malha com babados', 82,' G', 'rosa', 30,'25.50', 50),
(42, 'Calça Staroup', 'jeans com lycra desbotada', 135,' M', 'jeans', 32,'60.00', 50),
(43, 'Calça Trend', 'tecido de brim com lycra', 130,' M', 'preta', 32, '35.50', 50),
(44, 'Body Bruna', 'tecido de poliamida em lycra', 92,' P','rosa', 31, '40.50', 50),
(45, 'Body Station', 'tecido em malha com lycra e marga curta', 93,' GG', 'preto', 31, '35.50', 50),
(46, 'Vestido Sabrina', 'tecido em organza com forro bege', 100,' M','preto', 36, '55.50', 50),
(47, 'Vestido Origem', 'tecido em algodão com forro bege', 110,' P', 'amarelo', 36, '57.50', 50),
(48, 'Short Adidas', 'tecido em brim com detalhes de lantejoulas', 80, 'cinza',' M', 35, '41.00', 50),
(49, 'Short Love', 'tecido em organza com forro bege', 130,' M', 'vinho', 35, '38.50', 50),
(50, 'Macacão Blumenau', 'tecido em jeans com lycra', 140,' M', 'jeans', 34, '65.00', 50),
(51, 'Jardineira Paloma', 'tecido em brim desbotado', 100, 'azul',' XG', 33, '50.50', 50),
(52, 'Body Bruna', 'tecido de poliamida em lycra', 96,' M','rosa', 31, '40.50', 50),
(53, 'Macacão Blumenau', 'tecido em jeans com lycra', 160,' GG', 'jeans', 34, '65.00', 50),
(54, 'Blusa Inovation', 'tecido em malha com babados', 82,' XG', 'cinza', 30, '25.50', 50);

select * from categoria;


drop view if exists view_produto;
CREATE VIEW view_produto As
SELECT produto.id_produto 'id_produto', 
		produto.nome_produto 'nome',
        produto.descricao 'descricao', 
        produto.peso 'peso',
		produto.tamanho 'tamanho',
		produto.cor 'cor', 
		categoria.tipo 'tipo', 
		produto.valor_unitario 'valor_unitario',
		produto.estoque 'estoque' 
FROM produto INNER JOIN categoria ON produto.cod_categoria = categoria.id_categoria;
select * from view_produto;

INSERT INTO carrinho (id_carrinho, cod_usuario)
values
(1, 1),
(2, 2),
(3, 3);

drop view if exists view_carrinho;
CREATE VIEW view_carrinho As
SELECT carrinho.id_carrinho 'id_carrinho', 
		usuario.nome 'nome',
        usuario.sobrenome 'sobrenome', 
        usuario.cpf 'cpf'
FROM carrinho INNER JOIN usuario ON carrinho.cod_usuario = usuario.id_usuario;
select * from view_carrinho;


INSERT INTO carrinho_produto (cod_produto, qtde, cod_carrinho)
values
(40, 1, 1),
(41, 1, 2),
(42, 2, 3);

drop view if exists view_carrinho_produto;
CREATE VIEW view_carrinho_produto As
SELECT 
		usuario.nome 'nome',
        usuario.sobrenome 'sobrenome', 
        usuario.cpf 'cpf',
		produto.nome_produto 'nome_produto',
		produto.descricao 'descricao', 
        produto.peso 'peso',
		produto.tamanho 'tamanho',
		produto.cor 'cor',
        c.qtde 'quantidade',
		produto.valor_unitario 'valor_unitario'
FROM ((carrinho_produto c
	INNER JOIN produto ON c.cod_produto = produto.id_produto)
	INNER JOIN carrinho ON c.cod_carrinho = carrinho.id_carrinho
		INNER JOIN usuario ON  carrinho.cod_usuario = usuario.id_usuario);
select * from view_carrinho_produto;


INSERT INTO venda (id_venda, cod_carrinho, horario, data, status, valor, endereco_entrega, valor_frete)
values
(1, 1, '10:30:00', '2020-10-08','finalizada', '35.50','Rua da Lapa, 34 - São Paulo / SP', 15.00),
(2, 2, '12:30:00', '2020-10-04','cancelada', '25.50','Av. Lucas Obes, 74 - São Paulo / SP', 15.00),
(3, 3, '09:30:00', '2020-08-02','nova', '120.00','Av. Timbira, 35 - apto 23 - São Paulo / SP', 15.00);

drop view if exists view_venda;
CREATE VIEW view_venda As
SELECT  
		usuario.nome 'nome',
        usuario.sobrenome 'sobrenome', 
		usuario.cpf 'cpf',
		venda.id_venda 'id_venda', 
		venda.horario 'horario',
        venda.data 'data', 
        venda.status 'status',
		venda.valor'valor',
		venda.endereco_entrega 'endereco de Entrega', 
		venda.valor_frete 'valor do frete'
FROM (venda 
    INNER JOIN carrinho ON venda.cod_carrinho = carrinho.id_carrinho
		INNER JOIN usuario ON  carrinho.cod_usuario = usuario.id_usuario);
select * from view_venda;



/*
--- Renata a atualização de estoque não esta funcionando ---
--- Se o status da venda =finalizada o estoque será atualizado ---
drop trigger if exists after_venda_insert;
create
	trigger after_venda
after insert on venda for each row 
	begin  when status= 'Finalizado' 
    update produto set estoque = estoque - new.qtde 
    where
		id_produto = new.id_produto end;
        
show triggers;
select * from estoque;
*/
