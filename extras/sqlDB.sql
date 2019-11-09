-- MySQL Script generated by MySQL Workbench
-- Fri Nov  8 18:38:59 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema ciranda
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ciranda
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ciranda` DEFAULT CHARACTER SET utf8 ;
USE `ciranda` ;

-- -----------------------------------------------------
-- Table `ciranda`.`setor`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ciranda`.`setor` ;

CREATE TABLE IF NOT EXISTS `ciranda`.`setor` (
  `setor_id` INT NOT NULL AUTO_INCREMENT,
  `setor_nome` VARCHAR(40) NOT NULL,
  PRIMARY KEY (`setor_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ciranda`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ciranda`.`user` ;

CREATE TABLE IF NOT EXISTS `ciranda`.`user` (
  `user_id` INT NOT NULL AUTO_INCREMENT,
  `user_name` VARCHAR(100) NOT NULL,
  `user_email` VARCHAR(100) NOT NULL,
  `user_cpf` VARCHAR(11) NOT NULL,
  `user_contato` VARCHAR(11) NOT NULL,
  `user_num_inscricao` VARCHAR(100) NOT NULL,
  `user_nivel` VARCHAR(1) NULL DEFAULT '2' COMMENT '0 - Admin\n1- Visualiza e altera status\n2 - Visualiza',
  `setor_setor_id` INT NOT NULL,
  PRIMARY KEY (`user_id`),
  INDEX `fk_user_setor_idx` (`setor_setor_id` ASC),
  CONSTRAINT `fk_user_setor`
    FOREIGN KEY (`setor_setor_id`)
    REFERENCES `ciranda`.`setor` (`setor_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ciranda`.`rede`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ciranda`.`rede` ;

CREATE TABLE IF NOT EXISTS `ciranda`.`rede` (
  `rede_id` INT NOT NULL AUTO_INCREMENT,
  `rede_nome` VARCHAR(40) NOT NULL,
  PRIMARY KEY (`rede_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ciranda`.`categoria`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ciranda`.`categoria` ;

CREATE TABLE IF NOT EXISTS `ciranda`.`categoria` (
  `categoria_id` INT NOT NULL AUTO_INCREMENT,
  `categoria_nome` VARCHAR(40) NOT NULL,
  PRIMARY KEY (`categoria_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ciranda`.`status`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ciranda`.`status` ;

CREATE TABLE IF NOT EXISTS `ciranda`.`status` (
  `status_id` INT NOT NULL AUTO_INCREMENT,
  `status_nome` VARCHAR(40) NOT NULL,
  PRIMARY KEY (`status_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ciranda`.`intituicoes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ciranda`.`intituicoes` ;

CREATE TABLE IF NOT EXISTS `ciranda`.`intituicoes` (
  `intituicoes_id` INT NOT NULL AUTO_INCREMENT,
  `intituicoes_nome` VARCHAR(100) NOT NULL,
  `intituicoes_endereco` VARCHAR(100) NOT NULL,
  `intituicoes_bairro` VARCHAR(45) NULL,
  `intituicoes_respnsavel` VARCHAR(100) NOT NULL,
  `intituicoes_num_contato` VARCHAR(15) NOT NULL,
  `rede_rede_id` INT NOT NULL,
  `categoria_categoria_id` INT NOT NULL,
  `status_status_id` INT NOT NULL,
  `user_user_id` INT NOT NULL,
  `intituicoes_geolocalizacao` VARCHAR(100) NULL,
  `intituicoes_geolocalizacao_longetude` VARCHAR(100) NULL,
  PRIMARY KEY (`intituicoes_id`, `rede_rede_id`, `categoria_categoria_id`, `status_status_id`, `user_user_id`),
  INDEX `fk_intituicoes_rede1_idx` (`rede_rede_id` ASC),
  INDEX `fk_intituicoes_categoria1_idx` (`categoria_categoria_id` ASC),
  INDEX `fk_intituicoes_status1_idx` (`status_status_id` ASC),
  INDEX `fk_intituicoes_user1_idx` (`user_user_id` ASC),
  CONSTRAINT `fk_intituicoes_rede1`
    FOREIGN KEY (`rede_rede_id`)
    REFERENCES `ciranda`.`rede` (`rede_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_intituicoes_categoria1`
    FOREIGN KEY (`categoria_categoria_id`)
    REFERENCES `ciranda`.`categoria` (`categoria_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_intituicoes_status1`
    FOREIGN KEY (`status_status_id`)
    REFERENCES `ciranda`.`status` (`status_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_intituicoes_user1`
    FOREIGN KEY (`user_user_id`)
    REFERENCES `ciranda`.`user` (`user_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;