--en mi caso utilizo la base de datos ramosme que se creó en el primer ejercicio, igual incluyo la creacion de esta y los insert into para
--poder visualizar los datos dentro de una tabla con el grid

CREATE DATABASE ramosme;

USE ramosme;

CREATE TABLE Productos(
	IDProducto TINYINT NOT NULL AUTO_INCREMENT,
    Nombre VARCHAR(25),
    Cantidad VARCHAR(25),
    Precio DECIMAL,
    PRIMARY KEY(IDProducto)
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

SELECT * FROM Productos