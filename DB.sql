CREATE DATABASE defdelacosta;

USE defdelacosta;

CREATE TABLE jugadores (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(255) NOT NULL,
  apellido VARCHAR(255) NOT NULL,
  fecha_nacimiento DATE NOT NULL,
  dni VARCHAR(255) NOT NULL,
  categoria VARCHAR(255) NOT NULL,
  direccion VARCHAR(255) NOT NULL,
  telefono VARCHAR(255) NOT NULL,
  padre_nombre VARCHAR(255) NOT NULL,
  padre_telefono VARCHAR(255) NOT NULL,
  madre_nombre VARCHAR(255) NOT NULL,
  madre_telefono VARCHAR(255) NOT NULL
);


CREATE TABLE pagos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_jugador INT NOT NULL,
  fecha_pago DATE NOT NULL,
  mes VARCHAR(20) NOT NULL,
  anio VARCHAR(4) NOT NULL,
  monto DECIMAL(8,2) NOT NULL,
  FOREIGN KEY (id_jugador) REFERENCES jugadores(id)
);

CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  usuario VARCHAR(50) NOT NULL,
  nombre VARCHAR(50) NOT NULL,
  apellido VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(255) NOT NULL,
  categoria ENUM('administrador', 'moderador', 'delegado') NOT NULL
);

INSERT INTO usuarios (usuario, nombre, apellido, email, password, categoria) VALUES ('cellcom', 'Gabriel', 'Brach', 'webmster@cellcomweb.com.ar', 'cellcom538@', 'administrador');

GRANT SELECT, INSERT, DELETE ON defdelacosta.* TO 'admin'@'localhost' IDENTIFIED BY 'password';

GRANT SELECT, INSERT ON defdelacosta.* TO 'moderador'@'localhost' IDENTIFIED BY 'password';

GRANT SELECT ON defdelacosta.* TO 'delegado'@'localhost' IDENTIFIED BY 'password'
