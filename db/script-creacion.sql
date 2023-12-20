
-- -----------------------------------------------------
-- Base de Datos Sistema_Escolar_DB
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Sistema_Escolar_DB` DEFAULT CHARACTER SET utf8 ;
USE `Sistema_Escolar_DB` ;

-- -----------------------------------------------------
-- Tabla `Sistema_Escolar_DB`.`alumnos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Sistema_Escolar_DB`.`alumnos` (
  `id_alumno` INT(11) NOT NULL AUTO_INCREMENT,
  `nombres` VARCHAR(120) NOT NULL,
  `apellidos` VARCHAR(120) NOT NULL,
  `edad` INT(11) NOT NULL,
  `status` ENUM('pagado', 'adeudo') NOT NULL,
  PRIMARY KEY (`id_alumno`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Tabla `Sistema_Escolar_DB`.`aulas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Sistema_Escolar_DB`.`aulas` (
  `id_aula` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(120) NOT NULL,
  `tipo` VARCHAR(120) NOT NULL,
  PRIMARY KEY (`id_aula`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Tabla `Sistema_Escolar_DB`.`semestres`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Sistema_Escolar_DB`.`semestres` (
  `id_semestre` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `total_creditos` INT(11) NOT NULL,
  PRIMARY KEY (`id_semestre`))
ENGINE = InnoDB;



-- -----------------------------------------------------
-- Tabla `Sistema_Escolar_DB`.`docentes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Sistema_Escolar_DB`.`docentes` (
  `id_docente` INT NOT NULL AUTO_INCREMENT,
  `nombres` VARCHAR(120) NOT NULL,
  `apellidos` VARCHAR(120) NOT NULL,
  `edad` INT(11) NOT NULL,
  `profesion` VARCHAR(120) NOT NULL,
  PRIMARY KEY (`id_docente`)) 
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Tabla `Sistema_Escolar_DB`.`admin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Sistema_Escolar_DB`.`admin` (
  `id_admin` INT(11) NOT NULL AUTO_INCREMENT,
  `nombres` VARCHAR(120) NOT NULL,
  `apellidos` VARCHAR(120) NOT NULL,
  `edad` INT(11) NOT NULL,
  PRIMARY KEY (`id_admin`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Tabla `Sistema_Escolar_DB`.`registro_usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Sistema_Escolar_DB`.`registro_usuarios` (
  `id_registro` INT(11) NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(120) NOT NULL,
  `constraseña` VARCHAR(120) NOT NULL,
  `admin_id` INT(11) NULL DEFAULT NULL,
  `docente_id` INT(11) NULL DEFAULT NULL,
  `alumno_id` INT(11) NULL DEFAULT NULL,
  `telefono` VARCHAR(20) NOT NULL,
  `correo` VARCHAR(120) NOT NULL,
  `rol` ENUM('admin', 'docente', 'alumno') NOT NULL,
  PRIMARY KEY (`id_registro`),
  CONSTRAINT `FK_Registro_Admin`
    FOREIGN KEY (`admin_id`)
    REFERENCES `Sistema_Escolar_DB`.`admin` (`id_admin`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `FK_Registro_Docentes`
    FOREIGN KEY (`docente_id`)
    REFERENCES `Sistema_Escolar_DB`.`docentes` (`id_docente`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `FK_Registro_Alumnos`
    FOREIGN KEY (`alumno_id`)
    REFERENCES `Sistema_Escolar_DB`.`alumnos` (`id_alumno`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Tabla `Sistema_Escolar_DB`.`inscripciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Sistema_Escolar_DB`.`inscripciones` (
  `id_inscripcion` INT NOT NULL AUTO_INCREMENT,
  `alumno_id` INT(11) NOT NULL,
  `semestre_id` INT(11) NOT NULL,
  PRIMARY KEY (`id_inscripcion`),
  CONSTRAINT `FK_Inscripcion_Alumnos`
    FOREIGN KEY (`alumno_id`)
    REFERENCES `Sistema_Escolar_DB`.`alumnos` (`id_alumno`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `FK_Inscripcion_Semestres`
    FOREIGN KEY (`semestre_id`)
    REFERENCES `Sistema_Escolar_DB`.`semestres` (`id_semestre`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Tabla `Sistema_Escolar_DB`.`materias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Sistema_Escolar_DB`.`materias` (
  `id_materia` INT(11) NOT NULL AUTO_INCREMENT,
  `materia` VARCHAR(40) NOT NULL,
  `docente_id` INT(11) NOT NULL,
  `semestre_id` INT(11) NOT NULL,
  `creditos` INT(11) NOT NULL,
  PRIMARY KEY (`id_materia`),
  CONSTRAINT `FK_Materias_Docente`
    FOREIGN KEY (`docente_id`)
    REFERENCES `Sistema_Escolar_DB`.`docentes` (`id_docente`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `FK_Materias_Semestre`
    FOREIGN KEY (`semestre_id`)
    REFERENCES `Sistema_Escolar_DB`.`semestres` (`id_semestre`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;



-- -----------------------------------------------------
-- Tabla `Sistema_Escolar_DB`.`horarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Sistema_Escolar_DB`.`horarios` (
  `id_horario` INT(11) NOT NULL AUTO_INCREMENT,
  `dia` VARCHAR(20) NOT NULL,
  `hora_inicio` TIME NOT NULL,
  `hora_final` TIME NOT NULL,
  `aula_id` INT(11) NOT NULL,
  `materia_id` INT(11) NOT NULL,
  PRIMARY KEY (`id_horario`),
  CONSTRAINT `FK_Horarios_Materia`
    FOREIGN KEY (`materia_id`)
    REFERENCES `Sistema_Escolar_DB`.`materias` (`id_materia`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `FK_Horarios_Aula`
    FOREIGN KEY (`aula_id`)
    REFERENCES `Sistema_Escolar_DB`.`aulas` (`id_aula`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Tabla `Sistema_Escolar_DB`.`cursos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Sistema_Escolar_DB`.`cursos` (
  `id_calificacion` INT NOT NULL AUTO_INCREMENT,
  `alumno_id` INT(11) NOT NULL,
  `materia_id` INT(11) NOT NULL,
  `calificacion` DECIMAL(4,2) NULL,
  PRIMARY KEY (`id_calificacion`),
  CONSTRAINT `FK_Calificaciones_Alumnos`
    FOREIGN KEY (`alumno_id`)
    REFERENCES `Sistema_Escolar_DB`.`alumnos` (`id_alumno`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `FK_Calificaciones_Materias`
    FOREIGN KEY (`materia_id`)
    REFERENCES `Sistema_Escolar_DB`.`materias` (`id_materia`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;

