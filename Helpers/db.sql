CREATE DATABASE db_boxcontrol;

USE db_boxcontrol;

CREATE TABLE tb_recebimento (
    seq_titulo INTEGER AUTO_INCREMENT NOT NULL,
    num_titulo INTEGER(50) NOT NULL,
    desc_titulo VARCHAR(50) NOT NULL,
    valor_titulo DECIMAL(10, 2) NOT NULL,
    tipo_titulo VARCHAR(1) DEFAULT 'R' NOT NULL,
    data_titulo DATE NOT NULL,
    datahora_alteracao DATETIME NOT NULL,
    PRIMARY KEY (seq_titulo)
);

CREATE TABLE tb_pagamento (
    seq_titulo INTEGER AUTO_INCREMENT NOT NULL,
    num_titulo INTEGER(50) NOT NULL,
    desc_titulo VARCHAR(50) NOT NULL,
    valor_titulo DECIMAL(10, 2) NOT NULL,
    tipo_titulo VARCHAR(1) DEFAULT 'P' NOT NULL,
    data_titulo DATE NOT NULL,
    datahora_alteracao DATETIME NOT NULL,
    PRIMARY KEY (seq_titulo)
);

CREATE TABLE tb_usuario (
	id_usuario SMALLINT AUTO_INCREMENT NOT NULL,
    nome_usuario VARCHAR(50) NOT NULL,
    email_usuario VARCHAR(100) NOT NULL,
    pass_usuario VARCHAR(50) NOT NULL,
    data_alteracao DATETIME,
    PRIMARY KEY (id_usuario)
);

/* View de Pagamentos */
CREATE VIEW titulo_consultarpagamentos AS
SELECT seq_titulo,
	   num_titulo AS numeroTitulo,
	   desc_titulo AS descricaoTitulo,
       FORMAT(valor_titulo, 2, 'de_DE') AS valorTitulo,
       tipo_titulo AS tipoTitulo,
       data_titulo AS dataTitulo,
       datahora_alteracao
FROM tb_pagamento
ORDER BY seq_titulo;

/* View de Recebimentos */
CREATE VIEW titulo_consultarrecebimentos AS
SELECT seq_titulo,
	   num_titulo AS numeroTitulo,
	   desc_titulo AS descricaoTitulo,
       FORMAT(valor_titulo, 2, 'de_DE') AS valorTitulo,
       tipo_titulo AS tipoTitulo,
       data_titulo AS dataTitulo,
       datahora_alteracao
FROM tb_recebimento
ORDER BY seq_titulo;