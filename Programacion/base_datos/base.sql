CREATE DATABASE usuarios;
USE usuarios;

CREATE TABLE usuario (
	nombre VARCHAR(10),
	contrasenia VARCHAR(10),
	ingreso VARCHAR(20),
	activo boolean,
	primary key (ingreso)
);

insert into usuario values("admin","12345","20/03/22 - 12:25:15");
insert into usuario values("admin","12345","28/02/22 - 12:02:40");

