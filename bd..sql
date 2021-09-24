USE videoclub;
DROP DATABASE IF EXISTS videoclub;
CREATE DATABASE videoclub;


CREATE TABLE peliculas (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  titulo VARCHAR(45) NOT NULL,
  genero VARCHAR(45) NOT NULL,
  pais VARCHAR(45) NOT NULL,
  anyo VARCHAR(45) NOT NULL,
  cartel VARCHAR(2000) NOT NULL
);

CREATE TABLE personas (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(45) NOT NULL,
  apellido1 VARCHAR(45) NOT NULL,
  apellido2 VARCHAR(45),
  fotografia VARCHAR(2000) NOT NULL
);


CREATE TABLE actuan (

  id_actuacion INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  cod_pelicula INT UNSIGNED UNIQUE,
  cod_persona INT UNSIGNED UNIQUE,
  FOREIGN KEY(cod_pelicula) REFERENCES peliculas(cod_pelicula),
  FOREIGN KEY(cod_persona) REFERENCES personas(cod_persona)
);