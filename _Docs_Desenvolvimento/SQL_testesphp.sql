CREATE DATABASE db_testes_php;

# DROP DATABASE db_testes_php;

USE db_testes_php;

CREATE TABLE tbl_usuario (
	cod_usuario INT UNSIGNED UNIQUE NOT NULL AUTO_INCREMENT,
	usuario VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL
);

SELECT * FROM tbl_usuario;