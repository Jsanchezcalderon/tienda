create database tienda;
use tienda;

create table clientes(
  id INT AUTO_INCREMENT PRIMARY KEY,
    cedula int(15) UNIQUE,
    nombre_cliente VARCHAR(40) NOT NULL,
    telefono int(12) NOT NULL,
    email VARCHAR(50) NOT NULL,
    genero char (1) NOT NULL
);

create table camposextras(
id int auto_increment primary key,
realiza_compra char (1),
articulo varchar(50) null,
precio decimal (19,4) null,
metodo_pago varchar (30) null,
no_compra varchar (30) null,
id_externo int
);

alter table camposextras add constraint ´camposextras_clientes´ foreign key (id_externo) references clientes (id);

