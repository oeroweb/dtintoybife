CREATE DATABASE oedb2020;
use oedb2020;

CREATE TABLE tabla_usuarios(
	id int(5) not null auto_increment,	
	nombre varchar(250) not null,	
	email values(250) not null,
)ENGINE=InnoDb;

-- TABLA BLOG 
CREATE TABLE tabla_reservas(
	id int(5) not null auto_increment,
	sede int(2) not null,
	nombre varchar(250) null,	
	email varchar(200) null,
	telefono varchar(250) null,
	dia DATE NULL,
	fecha DATE NOT NULL,
	hora varchar(250) null,
	cantidad int(5) null,
	comentario text(2500) null,
	estado int(1) default 1,
)ENGINE=InnoDb;
-----

INSERT INTO tabla_reservas (id, nombre, email, telefono, fecha, hora, cantidad, comentario, estado) values
(null, 'Nuevo Cliente', 'correo@correo.com', '999999999', '2024-04-22', '18:00', 4, 'Silla para bebe', 1);
------

CREATE TABLE tabla_estados(
	id int(2) not null auto_increment,	
	nombre varchar(50) not null,	
)ENGINE=InnoDb;

INSERT INTO tabla_estados (id, nombre) values 
(null, Pendiente),
(null, Confirmado),
(null, Cancelado);

CREATE TABLE tabla_descansoSemanal(
	id int(2) not null auto_increment,	
	nombre varchar(50) not null,	
)ENGINE=InnoDb;

CREATE TABLE tabla_horasBloqueadas(
	id int(5) not null auto_increment,
	dia int(2) not null,
	horaInicio int(5) not null,
	minutoInicio int(5) not null,
	horaFin int(5) null,
	minutoFin int(5) null,
	cantidad int(2) null,
)ENGINE=InnoDb;


CREATE TABLE oedb_webmail(
	id int(10) not null auto_increment,	
	nombres varchar(200) not null,	
	asunto varchar(250) not null,	
	email varchar(120) not null,	
	telefono varchar(20) null,	
	plan varchar(60) null,	
	mensaje text(2500) null,	
	fechacreacion DATETIME NOT NULL,
	estado int(1) default 1,
	CONSTRAINT pk_webmail PRIMARY KEY(id)	
)ENGINE=InnoDb;