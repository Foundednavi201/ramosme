CREATE DATABASE ramosmed

USE ramosmed

CREATE TABLE USUARIOS(
	Id_Usuario TINYINT NOT NULL AUTO_INCREMENT,
    Usuario VARCHAR(25) NOT NULL,
    Pssw VARCHAR(25) NOT NULL,
    PRIMARY KEY(Id_Usuario)
);

INSERT INTO USUARIOS VALUES(1,'Ivan','Ramos')

SELECT * FROM USUARIOS