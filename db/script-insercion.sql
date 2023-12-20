USE sistema_escolar_db;

-- -----------------------------------------------------
-- Tabla `Sistema_Escolar_DB`.`alumnos`
-- -----------------------------------------------------
INSERT INTO alumnos (id_alumno, nombres, apellidos, edad, status) VALUES 
(201651,'Francisco', 'Martinez Suarez', '21', 'adeudo'), 
(201652,'Ana', 'Díaz Herrera', '22', 'adeudo'),
(201653,'Paula', 'Ramírez Medina', '17', 'pagado'),
(201654, 'Alejandro', 'Flores Vargas', '19', 'adeudo'),
(201655, 'Sandra Berenice', 'Hernandez Lopez', '21', 'pagado'),
(201656, 'Patricia', 'Ortiz Guzmán', '24', 'pagado'),
(201657, 'Carlos', 'Martínez García', '22', 'pagado'),
(201658, 'Sergio', 'López Castro', '24', 'adeudo'),
(201659, 'Juan', 'Pérez Gómez', '18', 'pagado'),
(201660, 'Daniel', 'Herrera Silva', '18', 'pagado'),
(201661, 'Oscar', 'Chavez Peña', '21', 'pagado'),
(201662, 'Aldo', 'Conrado Rafael', '22', 'pagado'),
(201663, 'María', 'Rodríguez López', '25', 'adeudo'),
(201664, 'Javier', 'González Torres', '23', 'pagado'),
(201665, 'Laura', 'Sánchez Ruiz', '21', 'pagado');


-- -----------------------------------------------------
-- Tabla `Sistema_Escolar_DB`.`docentes`
-- -----------------------------------------------------
INSERT INTO docentes (nombres, apellidos, edad, profesion) VALUES 
(1201, 'Juan', 'Pérez Gómez', '32', 'Ingeniería Industrial'),
(1202, 'María', 'Rodríguez García', '29', 'Licenciatura en Letras Hispánicas'),
(1203, 'Andrés', 'Martínez López', '30', 'Licenciatura en Bioquímica'),
(1204, 'Laura', 'Díaz Fernández', '35', 'Licenciatura en Historia'),
(1205, 'Carlos', 'Sánchez Ramírez', '29', 'Licenciatura en Ciencias del Deporte');


-- -----------------------------------------------------
-- Tabla `Sistema_Escolar_DB`.`admin`
-- -----------------------------------------------------
INSERT INTO admin (id_admin, nombres, apellidos, edad) VALUES 
(101, 'Aldo', 'Conrado Rafael', '22');
# Usuario administrador para elaborar las materias, inscripciones y horarios de cada semestre 
INSERT INTO registro_usuarios(usuario, contraseña, admin_id, docente_id, alumno_id, telefono, correo, rol)
VALUES('aldocnr37','admin123', 101, NULL, NULL, 7293495829, 'aldoconrado37@mail.com', 'admin');
SELECT * FROM registro_usuarios;

-- -----------------------------------------------------
-- Tabla `Sistema_Escolar_DB`.`semestres`
-- -----------------------------------------------------
INSERT INTO semestres (nombre, total_creditos) VALUES 
('Primero', '17'), 
('Segundo', '17'),
('Tercero', '17'),
('Cuarto', '17'),
('Quinto', '17'),
('Sexto', '17');

-- -----------------------------------------------------
-- Tabla `Sistema_Escolar_DB`.`aulas`
-- -----------------------------------------------------
INSERT INTO aulas (nombre, tipo) VALUES 
('Aula 01', 'Aula Regular'),
('Aula 02', 'Gimnasio'),
('Aula 03', 'Aula Regular'),
('Aula 04', 'Laboratorio de Ciencias'),
('Aula 05', 'Gimnasio'),
('Aula 06', 'Laboratorio de Cómputo'),
('Aula 07', 'Aula Regular');



/*
-- -------------------------------------
-- Datos demo materias primer semestre (materia, docente, creditos)
-- -------------------------------------
Matemáticas I	Juan Pérez Gómez	5	 
Español I	María Rodríguez García	4	 
Ciencias Naturales I	Andrés Martínez López	3	 
Historia Universal	Laura Díaz Fernández	3	 
Educación Física I	Carlos Sánchez Ramírez	2


-- -------------------------------------
-- Datos demo materias segundo semestre
-- -------------------------------------
Matemáticas II	Juan Pérez Gómez	5	 
Español II	María Rodríguez García	4	 
Ciencias Naturales II	Andrés Martínez López	3	 
Historia de México	Laura Díaz Fernández	3	 
Educación Física II	Carlos Sánchez Ramírez	2



-- -------------------------------------
-- Datos demo horarios
-- -------------------------------------
Lunes	08:30:00	10:30:00	Aula 01 - Aula Regular	Matemáticas I	 
Lunes	08:30:00	10:30:00	Aula 07 - Aula Regular	Español II	 
Lunes	10:30:00	12:30:00	Aula 07 - Aula Regular	Español I	 
Martes	09:00:00	11:00:00	Aula 04 - Laboratorio de Ciencias	Ciencias Naturales I	 
Martes	11:00:00	13:00:00	Aula 01 - Aula Regular	Historia Universal	 
Miercoles	08:15:00	10:15:00	Aula 07 - Aula Regular	Matemáticas I	 
Miercoles	10:15:00	12:15:00	Aula 05 - Gimnasio	Educación Física I	 
Jueves	09:30:00	11:30:00	Aula 03 - Aula Regular	Español I	 
Jueves	11:30:00	13:30:00	Aula 04 - Laboratorio de Ciencias	Ciencias Naturales I	 
Viernes	08:45:00	10:45:00	Aula 07 - Aula Regular	Historia Universal	 
Viernes	10:45:00	12:45:00	Aula 02 - Gimnasio	Educación Física I
*/
