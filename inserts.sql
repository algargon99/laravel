use laravel;

--TENER EN CUENTA LOS IDS DE LOS INSERTS CON LOS DE LA BASE DE DATOS

-- Insertar datos de prueba para la tabla "personas"
INSERT INTO personas (id, nombre, apellidos, edad) VALUES
(1,"Juan", "Pérez", 35),
(2,"María", "Gómez", 28),
(3,"Luis", "Hernández", 42),
(4,"Ana", "Rodríguez", 25);

-- Insertar datos de prueba para la tabla "trabajadores"
INSERT INTO trabajadors (id, telefonos, idPersona) VALUES
(1,"1234567890", 1),
(2,"2345678901", 2),
(3,"3456789012", 3),
(4,"4567890123", 4);

-- Insertar datos de prueba para la tabla "gerentes"
INSERT INTO gerentes (id, salario, idTrabajador) VALUES
(1,5000.00, 1),
(2,4500.00, 4);

-- Insertar datos de prueba para la tabla "empleados"
INSERT INTO empleados (id, horasTrabajadas, precioPorHora, idTrabajador) VALUES
(1,40, 25.00, 2),
(2,35, 20.00, 3);