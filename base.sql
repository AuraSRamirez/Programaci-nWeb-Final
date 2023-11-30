drop database if exists proyecto_;
create database if not exists proyecto_;
use proyecto_;
create table usuarios(id int not null auto_increment primary key,
						nombre varchar(50) not null,
                        usuario varchar(50) not null,
                        contra varchar(20) not null, 
                        tel varchar(12), 
                        email varchar(50),
                        direccion varchar(100), 
                        registro datetime not null default current_timestamp, 
                        permisos varchar(11) not null default '1');

insert into usuarios (nombre, usuario, contra, tel, email, direccion, permisos) values('Aura Santiago', 'auraaa', '1234', '5515627198', 'auraaa@correo.com','direccion de prueba','1'); 