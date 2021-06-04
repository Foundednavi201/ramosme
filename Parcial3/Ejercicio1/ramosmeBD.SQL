CREATE DATABASE ramosme;

USE ramosme;

CREATE TABLE Productos(
    IDProducto TINYINT NOT NULL AUTO_INCREMENT,
    Nombre VARCHAR(25) NOT NULL,
    Cantidad INT NOT NULL,
    Precio DECIMAL NOT NULL,
    PRIMARY KEY(IDProducto)
);

INSERT INTO Productos VALUES(1,'Lata de atun',5,10.5);
INSERT INTO Productos VALUES(2,'Manzana',15,7);
INSERT INTO Productos VALUES(3,'Leche',7,15);

SELECT * FROM Productos;