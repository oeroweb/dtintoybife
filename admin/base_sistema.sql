CREATE DATABASE dtinto;
use dtinto;


CREATE TABLE tabla_reservas(
	id int(5) not null auto_increment,
	sede int(2) not null,
	nombre varchar(250) null,	
	email varchar(200) null,
	telefono varchar(250) null,
	dia int(2) NULL,
	fecha DATE NOT NULL,
	hora varchar(250) null,
	cantidad int(5) null,
	comentario text(2500) null,
	estado int(1) default 1,
	CONSTRAINT pk_reservas PRIMARY KEY(id)
)ENGINE=InnoDb;

INSERT INTO tabla_reservas (id, sede, nombre, email, telefono, dia, fecha, hora, cantidad, comentario, estado) values
(null, 1, 'Nuevo Cliente', 'correo@correo.com', '999999999', 22, '2024-04-22', '18:00', 4, 'Silla para bebe', 1);

CREATE TABLE tabla_estados(
	id int(2) not null auto_increment,	
	nombre varchar(50) not null,
	CONSTRAINT pk_estados PRIMARY KEY(id)
)ENGINE=InnoDb;

INSERT INTO tabla_estados (id, nombre) values 
(null, "Pendiente"),
(null, "Confirmado"),
(null, "Cancelado");

CREATE TABLE tabla_descansoSemanal(
	id int(2) not null auto_increment,	
	dia int(2) not null,
	CONSTRAINT pk_semanal PRIMARY KEY(id)
)ENGINE=InnoDb;

INSERT INTO `tabla_descansosemanal` (`id`, `dia`) VALUES (NULL, 2)

CREATE TABLE tabla_horasBloqueadas(
	id int(5) not null auto_increment,
	fecha DATE not null,
	horaInicio TIME null,
	horaFin TIME null,
	cantidad int(2) null,
	fechaRegistro DATETIME,
	CONSTRAINT pk_horasbloqueadas PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE tabla_usuarios(
	id int(5) not null auto_increment,	
	nombre varchar(250) not null,	
	email values(250) not null,
)ENGINE=InnoDb;
