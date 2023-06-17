CREATE DATABASE FulboBlog;
USE FulboBlog;

CREATE TABLE Usuario (
  id int(11) AUTO_INCREMENT NOT NULL,
  nombre varchar(50) NOT NULL,
  email varchar(100) NOT NULL,
  pass varchar(255) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

CREATE TABLE Entrada (
  id int(11) AUTO_INCREMENT NOT NULL,
  usuario_id int(11) NOT NULL,
  titulo varchar(255) NOT NULL,
  resumen text NOT NULL,
  texto text NOT NULL,
  imagen varchar(255) NOT NULL,
  fecha datetime DEFAULT current_timestamp()
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;