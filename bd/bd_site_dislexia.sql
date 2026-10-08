create database site_dislexia;
use site_dislexia;

create table formulario (
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR (50) NOT NULL,
	email VARCHAR(50) NOT NULL,
    experiencia VARCHAR(50),
    util VARCHAR(50),
    sugestoes  VARCHAR (200)
);

