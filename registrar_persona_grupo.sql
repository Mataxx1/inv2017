-- MySQL Workbench Synchronization
-- Generated: 2015-04-01 15:44
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: Mataxx

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `consultorio_db`.`grupo` 
ADD COLUMN `lugar` VARCHAR(255) NULL DEFAULT NULL AFTER `horario`;

CREATE TABLE IF NOT EXISTS `consultorio_db`.`asistencia_acomp_grupo` (
  `acompanante_id` INT(11) NOT NULL,
  `grupo_id` INT(11) NOT NULL,
  `asistio` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`acompanante_id`, `grupo_id`),
  INDEX `fk_acompanante_has_grupo_grupo2_idx` (`grupo_id` ASC),
  INDEX `fk_acompanante_has_grupo_acompanante1_idx` (`acompanante_id` ASC),
  CONSTRAINT `fk_acompanante_has_grupo_acompanante1`
    FOREIGN KEY (`acompanante_id`)
    REFERENCES `consultorio_db`.`acompanante` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_acompanante_has_grupo_grupo2`
    FOREIGN KEY (`grupo_id`)
    REFERENCES `consultorio_db`.`grupo` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `consultorio_db`.`persona` (
  `id` INT(11) NOT NULL,
  `nombre` VARCHAR(255) NULL DEFAULT NULL,
  `localidad` VARCHAR(255) NULL DEFAULT NULL,
  `municipio` VARCHAR(100) NULL DEFAULT NULL,
  `estado` VARCHAR(45) NULL DEFAULT NULL,
  `telefono` VARCHAR(45) NULL DEFAULT NULL,
  `acompanante` VARCHAR(255) NULL DEFAULT NULL,
  `problema_fisico` VARCHAR(255) NULL DEFAULT NULL,
  `fecha_nac` DATE NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `consultorio_db`.`grupo_asist_persona` (
  `grupo_id` INT(11) NOT NULL,
  `persona_id` INT(11) NOT NULL,
  PRIMARY KEY (`grupo_id`, `persona_id`),
  INDEX `fk_grupo_has_persona_persona1_idx` (`persona_id` ASC),
  INDEX `fk_grupo_has_persona_grupo1_idx` (`grupo_id` ASC),
  CONSTRAINT `fk_grupo_has_persona_grupo1`
    FOREIGN KEY (`grupo_id`)
    REFERENCES `consultorio_db`.`grupo` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_grupo_has_persona_persona1`
    FOREIGN KEY (`persona_id`)
    REFERENCES `consultorio_db`.`persona` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

DROP TABLE IF EXISTS `consultorio_db`.`asistencia_acomp_grupo` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

--otro
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `consultorio_db`.`persona` 
CHANGE COLUMN `id` `id` INT(11) NOT NULL AUTO_INCREMENT ;
ALTER TABLE `consultorio_db`.`persona` 
ADD COLUMN `domicilio` VARCHAR(255) NULL DEFAULT NULL AFTER `nombre`;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;



--el resto

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `consultorio_db`.`grupo_asist_persona` 
ADD COLUMN `asistio` VARCHAR(45) NULL DEFAULT NULL AFTER `persona_id`;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


//persona 
ALTER TABLE `consultorio_db`.`paciente` 
ADD COLUMN `solicitud` VARCHAR(45) NULL DEFAULT NULL AFTER `peso`,
ADD COLUMN `causa_solicitud` VARCHAR(255) NULL DEFAULT NULL AFTER `solicitud`;