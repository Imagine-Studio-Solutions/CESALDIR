-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema CESALDIR
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema CESALDIR
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `CESALDIR` DEFAULT CHARACTER SET utf8 ;
USE `CESALDIR` ;

-- -----------------------------------------------------
-- Table `CESALDIR`.`caracteristica_institucion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CESALDIR`.`caracteristica_institucion` (
  `idCaracteristicaInstitucion` INT(11) NOT NULL AUTO_INCREMENT,
  `nombreCaracteristica` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`idCaracteristicaInstitucion`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `CESALDIR`.`tipo_institucion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CESALDIR`.`tipo_institucion` (
  `idTipo_Institucion` INT(11) NOT NULL AUTO_INCREMENT,
  `nombreTipoInstitucion` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`idTipo_Institucion`),
  UNIQUE INDEX `idTipo_Institucion_UNIQUE` (`idTipo_Institucion` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `CESALDIR`.`institucion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CESALDIR`.`institucion` (
  `idInstitucion` INT(11) NOT NULL AUTO_INCREMENT,
  `nombreInstitucion` VARCHAR(100) NULL DEFAULT NULL,
  `descripcionInstitucion` VARCHAR(500) NULL DEFAULT NULL,
  `numeroVisitas` INT(11) NULL DEFAULT NULL,
  `urlFacebook` VARCHAR(100) NULL DEFAULT NULL,
  `urlInstagram` VARCHAR(100) NULL DEFAULT NULL,
  `urlTwitter` VARCHAR(100) NULL DEFAULT NULL,
  `urlGooglePlus` VARCHAR(100) NULL DEFAULT NULL,
  `correoInstitucion` VARCHAR(100) NULL DEFAULT NULL,
  `urlPagWeb` VARCHAR(100) NULL DEFAULT NULL,
  `direccionInstitucion` VARCHAR(150) NULL DEFAULT NULL,
  `telefonoDireccion` CHAR(8) NULL DEFAULT NULL,
  `latitudInstitucion` VARCHAR(20) NULL DEFAULT NULL,
  `longitudInstitucion` VARCHAR(20) NULL DEFAULT NULL,
  `urlBanner` VARCHAR(100) NULL DEFAULT NULL,
  `urlGaleriaFotos` VARCHAR(100) NULL DEFAULT NULL,
  `urlWaze` VARCHAR(100) NULL DEFAULT NULL,
  `idTipoInstitucion` INT(11) NULL DEFAULT NULL,
  `idServicioInstitucionXInstitucion` INT(11) NULL DEFAULT NULL,
  `idCaracteristicaInstitucionXInstitucion` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`idInstitucion`),
  UNIQUE INDEX `idINSTITUCION_UNIQUE` (`idInstitucion` ASC),
  UNIQUE INDEX `urlFacebook_UNIQUE` (`urlFacebook` ASC),
  UNIQUE INDEX `urlInstagram_UNIQUE` (`urlInstagram` ASC),
  UNIQUE INDEX `urlTwitter_UNIQUE` (`urlTwitter` ASC),
  UNIQUE INDEX `urlGooglePlus_UNIQUE` (`urlGooglePlus` ASC),
  UNIQUE INDEX `correoInstitucion_UNIQUE` (`correoInstitucion` ASC),
  UNIQUE INDEX `urlPagWeb_UNIQUE` (`urlPagWeb` ASC),
  UNIQUE INDEX `urlWaze_UNIQUE` (`urlWaze` ASC),
  INDEX `idTipoInstitucion_idx` (`idTipoInstitucion` ASC),
  CONSTRAINT `idTipoInstitucion`
    FOREIGN KEY (`idTipoInstitucion`)
    REFERENCES `CESALDIR`.`tipo_institucion` (`idTipo_Institucion`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `CESALDIR`.`caracteristicainstitucion_x_institucion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CESALDIR`.`caracteristicainstitucion_x_institucion` (
  `idCaracteristicaInstitucionXInstitucion` INT(11) NOT NULL AUTO_INCREMENT,
  `idCaracteristicaInstitucion` INT(11) NULL DEFAULT NULL,
  `idInstitucion` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`idCaracteristicaInstitucionXInstitucion`),
  INDEX `idCaracteristicaInstitucion_idx` (`idCaracteristicaInstitucion` ASC),
  INDEX `idInstitucion_idx` (`idInstitucion` ASC),
  CONSTRAINT `FKidCaracteristicaInstitucion_Institucion`
    FOREIGN KEY (`idCaracteristicaInstitucion`)
    REFERENCES `CESALDIR`.`caracteristica_institucion` (`idCaracteristicaInstitucion`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `FKidInstitucion_`
    FOREIGN KEY (`idInstitucion`)
    REFERENCES `CESALDIR`.`institucion` (`idInstitucion`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `CESALDIR`.`categoria_institucion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CESALDIR`.`categoria_institucion` (
  `idCategoriaInstitucion` INT(11) NOT NULL AUTO_INCREMENT,
  `nombreCategoriaInstitucion` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`idCategoriaInstitucion`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `CESALDIR`.`categoriainstitucion_x_institucion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CESALDIR`.`categoriainstitucion_x_institucion` (
  `idCategoriaInstitucionXInstitucion` INT(11) NOT NULL AUTO_INCREMENT,
  `idCategoriaInstitucion` INT(11) NULL DEFAULT NULL,
  `idInstitucion` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`idCategoriaInstitucionXInstitucion`),
  INDEX `idCategoriaInstitucion_idx` (`idCategoriaInstitucion` ASC),
  INDEX `idInstitucion_idx` (`idInstitucion` ASC),
  CONSTRAINT `FKidCategoriaInstitucion`
    FOREIGN KEY (`idCategoriaInstitucion`)
    REFERENCES `CESALDIR`.`categoria_institucion` (`idCategoriaInstitucion`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `FKidInstitucion`
    FOREIGN KEY (`idInstitucion`)
    REFERENCES `CESALDIR`.`institucion` (`idInstitucion`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `CESALDIR`.`directorio_medico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CESALDIR`.`directorio_medico` (
  `idDirectorioMedico` INT(11) NOT NULL AUTO_INCREMENT,
  `nombreMedico` VARCHAR(200) NULL DEFAULT NULL,
  `direccionMedico` VARCHAR(250) NULL DEFAULT NULL,
  `jvpnNumber` INT(11) NULL DEFAULT NULL,
  `telefonoMedico` CHAR(8) NULL DEFAULT NULL,
  `fotoUrlMedico` VARCHAR(100) NULL DEFAULT NULL,
  `urlPagWebMed` VARCHAR(150) NULL DEFAULT NULL,
  `correoMedico` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`idDirectorioMedico`),
  UNIQUE INDEX `jvpnNumber_UNIQUE` (`jvpnNumber` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `CESALDIR`.`empresa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CESALDIR`.`empresa` (
  `idEmpresa` INT(11) NOT NULL AUTO_INCREMENT,
  `nombreEmpresa` VARCHAR(100) NULL DEFAULT NULL,
  `visionEmpresa` VARCHAR(500) NULL DEFAULT NULL,
  `misionEmpresa` VARCHAR(500) NULL DEFAULT NULL,
  `valoresEmpresa` VARCHAR(500) NULL DEFAULT NULL,
  `descripcionEmpresa` VARCHAR(500) NULL DEFAULT NULL,
  PRIMARY KEY (`idEmpresa`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `CESALDIR`.`especialidad_medico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CESALDIR`.`especialidad_medico` (
  `idEspecialidadMedico` INT(11) NOT NULL AUTO_INCREMENT,
  `nombreEspecialidadMedico` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`idEspecialidadMedico`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `CESALDIR`.`especialidadmedico_x_directoriomedico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CESALDIR`.`especialidadmedico_x_directoriomedico` (
  `idEspecialidadXDirectorioMedico` INT(11) NOT NULL AUTO_INCREMENT,
  `idDirectorioMedico` INT(11) NULL DEFAULT NULL,
  `idEspecialidadMedico` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`idEspecialidadXDirectorioMedico`),
  INDEX `idEspecialidadMedico_idx` (`idEspecialidadMedico` ASC),
  INDEX `idDirectorioMedico_idx` (`idDirectorioMedico` ASC),
  CONSTRAINT `idDirectorioMedico`
    FOREIGN KEY (`idDirectorioMedico`)
    REFERENCES `CESALDIR`.`directorio_medico` (`idDirectorioMedico`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `idEspecialidadMedico`
    FOREIGN KEY (`idEspecialidadMedico`)
    REFERENCES `CESALDIR`.`especialidad_medico` (`idEspecialidadMedico`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `CESALDIR`.`servicio_empresa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CESALDIR`.`servicio_empresa` (
  `idServicioEmpresa` INT(11) NOT NULL AUTO_INCREMENT,
  `nombreServicioEmpresa` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`idServicioEmpresa`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `CESALDIR`.`servicio_institucion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CESALDIR`.`servicio_institucion` (
  `idServicioInstitucion` INT(11) NOT NULL AUTO_INCREMENT,
  `nombreServicio` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`idServicioInstitucion`),
  UNIQUE INDEX `idServicioInstitucion_UNIQUE` (`idServicioInstitucion` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `CESALDIR`.`servicio_x_institucion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CESALDIR`.`servicio_x_institucion` (
  `idServicioXInstitucion` INT(11) NOT NULL AUTO_INCREMENT,
  `idServicioInstitucion` INT(11) NULL DEFAULT NULL,
  `idInstitucion` INT(11) NULL DEFAULT NULL,
  `horarioServicio` VARCHAR(100) NULL DEFAULT NULL,
  `comentarioServicio` VARCHAR(500) NULL DEFAULT NULL,
  PRIMARY KEY (`idServicioXInstitucion`),
  INDEX `idServicioInstitucion_idx` (`idServicioInstitucion` ASC),
  INDEX `idInstitucion_idx` (`idInstitucion` ASC),
  CONSTRAINT `idInstitucion`
    FOREIGN KEY (`idInstitucion`)
    REFERENCES `CESALDIR`.`institucion` (`idInstitucion`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `idServicioInstitucion`
    FOREIGN KEY (`idServicioInstitucion`)
    REFERENCES `CESALDIR`.`servicio_institucion` (`idServicioInstitucion`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `CESALDIR`.`servicioempresa_x_empresa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CESALDIR`.`servicioempresa_x_empresa` (
  `idServicioEmpresaXEmpresa` INT(11) NOT NULL AUTO_INCREMENT,
  `idServicioEmpresa` INT(11) NULL DEFAULT NULL,
  `idEmpresa` INT(11) NULL DEFAULT NULL,
  `descripcionServicioEmpresa` VARCHAR(500) NULL DEFAULT NULL,
  `urlBanner` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`idServicioEmpresaXEmpresa`),
  INDEX `idServicioEmpresa_idx` (`idServicioEmpresa` ASC),
  INDEX `idEmpresa_idx` (`idEmpresa` ASC),
  CONSTRAINT `idEmpresa`
    FOREIGN KEY (`idEmpresa`)
    REFERENCES `CESALDIR`.`empresa` (`idEmpresa`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `idServicioEmpresa`
    FOREIGN KEY (`idServicioEmpresa`)
    REFERENCES `CESALDIR`.`servicio_empresa` (`idServicioEmpresa`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `CESALDIR`.`usuario_blog`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CESALDIR`.`usuario_blog` (
  `idUsuarioBlog` INT(11) NOT NULL AUTO_INCREMENT,
  `nombreCompleto` VARCHAR(200) NULL DEFAULT NULL,
  `correoUsuario` VARCHAR(150) NULL DEFAULT NULL,
  PRIMARY KEY (`idUsuarioBlog`),
  UNIQUE INDEX `correoUsuario_UNIQUE` (`correoUsuario` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;