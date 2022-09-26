create database writeanything;
use writeanything;
create table usuarios(
idUsers int(11) primary key auto_increment,
username varchar(150),
email varchar(150),
senha varchar(150)
);
insert usuarios values (1,'teste','teste@teste.com','teste123');