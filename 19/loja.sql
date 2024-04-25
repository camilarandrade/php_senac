-- Criar Banco de Dados
create database if not exists loja;

-- Usar o Banco de Dados
use loja;

-- Criar Tabela Produto
create table if not exists produto (
	id int auto_increment primary key,
	nome varchar(100) not null,
	descricao text,
	preco decimal (10, 2) not null
);

-- Inserir alguns produtos
insert into produto (nome, descricao, preco) values
('Camiseta', 'Camiseta preta de algodão', 29.99),
('Calça Jeans', 'Calça jeans azul', 59.99),
('Tenis', 'Tenis esportivo preto', 99.99);

-- Criar a Tabela Pedido
create table if not exists pedido (
	id int auto_increment primary key,
	data_pedido date not null,
	status enum('pendente', 'em_andamento', 'concluido') not null
);

-- Inserir pedidos
insert into pedido (data_pedido , status) values 
	('2024-04-24', 'pendente'),
	('2024-04-23', 'concluido');

-- Criar Tabela Produto_Pedido
create table produto_pedido (
	id int auto_increment primary key,
	produto_id int not null,
	pedido_id int not null,
	quantidade int not null,
	foreign key (produto_id) references produto(id),
	foreign key (pedido_id) references pedido(id)
);

-- Inserir alguns itens nos pedidos de exemplo
insert into produto_pedido (produto_id, pedido_id, quantidade) values
	(1, 1, 2),
	(2, 1, 5),
	(3, 2, 8);