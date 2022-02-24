CREATE DATABASE db_boxcontrol;

USE db_boxcontrol;

CREATE TABLE tb_recebimento (
    seq_titulo INTEGER AUTO_INCREMENT NOT NULL,
    desc_titulo VARCHAR(50) NOT NULL,
    valor_titulo DECIMAL(10, 2) NOT NULL,
    data_titulo DATE NOT NULL,
    PRIMARY KEY (seq_titulo)
);

INSERT INTO tb_recebimento (desc_titulo, valor_titulo, data_titulo) VALUES ('Conta de Luz', 150.78, '2022-02-23');

CREATE TABLE tb_pagamento (
    seq_titulo INTEGER AUTO_INCREMENT NOT NULL,
    desc_titulo VARCHAR(50) NOT NULL,
    valor_titulo DECIMAL(10, 2) NOT NULL,
    data_titulo DATE NOT NULL,
    PRIMARY KEY (seq_titulo)
);

INSERT INTO tb_pagamento (desc_titulo, valor_titulo, data_titulo) VALUES ('Conta de Luz', 100, '2022-02-01');