CREATE DATABASE IF NOT EXISTS ramosme;
USE ramosme;		

CREATE TABLE IF NOT EXISTS Productos(
	IDProducto TINYINT NOT NULL AUTO_INCREMENT,
    Nombre VARCHAR(25),
    Cantidad VARCHAR(25),
    Precio DECIMAL,
    PRIMARY KEY(IDProducto)
);

CREATE TABLE IF NOT EXISTS Usuarios(
	id_usuario TINYINT NOT NULL AUTO_INCREMENT,
    Nombre VARCHAR(25) NOT NULL,
    pssw VARCHAR(25) NOT NULL,
    PRIMARY KEY(id_usuario)
);

INSERT INTO productos(Nombre,Cantidad,Precio) VALUES('Lata de atun','5','11');
INSERT INTO productos(Nombre,Cantidad,Precio) VALUES('Manzana','15','7');
INSERT INTO productos(Nombre,Cantidad,Precio) VALUES('Leche','7','15');
INSERT INTO productos(Nombre,Cantidad,Precio) VALUES('Jabón','50','20');
INSERT INTO productos(Nombre,Cantidad,Precio) VALUES('Arroz','30','25');
INSERT INTO productos(Nombre,Cantidad,Precio) VALUES('Piña','25','40');
INSERT INTO productos(Nombre,Cantidad,Precio) VALUES('Barra de pan','60','35');
INSERT INTO productos(Nombre,Cantidad,Precio) VALUES('Jugo de naranja','50','35');
INSERT INTO productos(Nombre,Cantidad,Precio) VALUES('Frijol','70','30');
INSERT INTO productos(Nombre,Cantidad,Precio) VALUES('Aceite de oliva','46','34');

INSERT INTO Usuarios(Nombre,pssw) VALUES('Ivan','Ramos');