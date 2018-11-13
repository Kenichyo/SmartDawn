create database proyectosd;

use proyectosd;

create table usuario(
		id int(8) primary key not null,
    nombre varchar(50) not null,
    apellido varchar(50) not null,
    pass varchar(8) not null,
    email varchar(50) not null
);

create table adaptador(
		sn int primary key not null,
    id_user int(8) not null,
    nombre varchar(50),
    hora1 int(2),
    minuto1 int(2),
    hora2 int(2),
    minuto2 int(2),
    hora3 int(2),
    minuto3 int(2),
    FOREIGN KEY (id_user) REFERENCES usuario(id)
);
