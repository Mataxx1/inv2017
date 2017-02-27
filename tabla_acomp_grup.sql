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
COLLATE = utf8_general_ci
