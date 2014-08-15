CREATE DATABASE IF NOT EXISTS `equip431_impacto`;

USE `equip431_impacto`;

-- --------------------------------------------------------
-- CRIA TABELA `equip431_impacto`.`usuario`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `equip431_impacto`.`usuario`;

CREATE TABLE IF NOT EXISTS `equip431_impacto`.`usuario` (
  `id`                 INT(11) NOT NULL AUTO_INCREMENT,
  `username`           VARCHAR(30) NOT NULL UNIQUE,
  `nome`               VARCHAR(60) NULL,
  `sobrenome`          VARCHAR(90) NULL,
  `cpf`                CHAR(12) NOT NULL UNIQUE,
  `genero`             CHAR(1) NULL,
  `data_nascimento`    DATETIME NULL,
  `email`              VARCHAR(120) NOT NULL UNIQUE,
  `endereco`           VARCHAR(300) NOT NULL,
  `bairro`             VARCHAR(100) NOT NULL,
  `cidade`             VARCHAR(40) NOT NULL,
  `estado`             CHAR(2) NOT NULL,
  `pais`               VARCHAR(40) NOT NULL DEFAULT 'Brasil',
  `telefone`           CHAR(12) NULL,
  `celular`            CHAR(12) NULL,
  `hash`               CHAR(64) NOT NULL,
  `seed`               CHAR(32) NOT NULL,
  `temp_hash`          CHAR(40) NOT NULL,
  `ativo`              CHAR(1) NOT NULL DEFAULT 'N',
  `data_cadastro`      TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY(`id`)
);

