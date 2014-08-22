create database if not exists `equip431_impacto`;

use `equip431_impacto`;

-- --------------------------------------------------------
-- CRIA TABELA `equip431_impacto`.`usuario`
-- --------------------------------------------------------
drop table if exists `equip431_impacto`.`usuario`;

create table if not exists `equip431_impacto`.`usuario` (
	`id`				int(11) not null primary key auto_increment,
	`username`			varchar(255) not null unique,
	`email`				varchar(255) not null,
	`nome`				varchar(255) not null,
	`sobrenome`			varchar(255) not null,
	`genero`			char(1) not null,
	`cpf`				varchar(15) not null unique,
	`data_nascimento`	timestamp null,
	`endereco`			varchar(255) null,
	`bairro`			varchar(255) null,
	`cidade`			varchar(255) null,
	`estado`			varchar(255) null,
	`pais`				varchar(255) null,
	`telefone`			varchar(20) null,
	`celular`			varchar(20) null,
	`hash`				varchar(40) null,
	`seed`				varchar(40) null,
	`temp_hash`			varchar(40) null,
	`validated`			char(1) not null default 'N',
	`ativo`				char(1) not null default 'S',
	`data_cadastro`		timestamp not null default CURRENT_TIMESTAMP
);

-- --------------------------------------------------------
-- CRIA TABELA `equip431_impacto`.`curso`
-- --------------------------------------------------------
drop table if exists `equip431_impacto`.`curso`;

create table if not exists `equip431_impacto`.`curso` (
	`id`				int(11) not null primary key auto_increment,
	`nome`				varchar(255) not null,
	`imagem`			varchar(255) not null default 'static/images/produtos/default.jpg',
	`categoria`			int(11) null,
	`descricao`			text null,
	`requisitos`		text null,
	`programacao`		text null,
	`valor`				decimal(10, 2) null,
	`valor_promocional` decimal(10, 2) null,
	`ativo`				char(1) not null default 'S',
	`data_cadastro`		timestamp not null default CURRENT_TIMESTAMP,
	constraint `fk_curso_sub_categoria`
		foreign key(`categoria`) references `categoria`(`id`) 	
);

-- --------------------------------------------------------
-- CRIA TABELA `equip431_impacto`.`curso_condicoes_pagamento`
-- --------------------------------------------------------
drop table if exists `equip431_impacto`.`curso_condicoes_pagamento`;

create table if not exists `equip431_impacto`.`curso_condicoes_pagamento` (
	`curso_id`			int(11) not null,
	`parecelas`			int(11) not null,
	`valor`				decimal(10, 2) null,
	`ativo`				char(1) not null default 'S',
	`data_cadastro`		timestamp not null default CURRENT_TIMESTAMP
	primary key(`curso_id`, `parecelas`),
	constraint `fk_curso_condicoes_pagamento_curso`
		foreign key(`curso_id`) references `curso`(`id`) 	
);

-- --------------------------------------------------------
-- CRIA TABELA `equip431_impacto`.`categoria`
-- --------------------------------------------------------
drop table if exists `equip431_impacto`.`categoria`;

create table if not exists `equip431_impacto`.`categoria` (
	`id`				int(11) not null primary key auto_increment,
	`super`				int(11) null,
	`nome`				varchar(255) not null,
	`imagem`			varchar(255) null,
	`descricao`			text,
	`ativo`				char(1) not null default 'S',
	`data_cadastro`		timestamp not null default CURRENT_TIMESTAMP,
	constraint `fk_categoria_super_categoria`
		foreign key(`super`) references `categoria`(`id`)
);
