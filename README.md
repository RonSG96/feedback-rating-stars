Para la base de datos, este es el script

-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS 'nombre_bd;
USE 'nombre_bd;

-- Crear la tabla de respuestas
CREATE TABLE IF NOT EXISTS 'nombre_tabla (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    experiencia_compra INT(1),
    experiencia_comentario TEXT,
    soporte INT(1),
    soporte_comentario TEXT,
    productos INT(1),
    productos_comentario TEXT,
    sugerencias TEXT,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
