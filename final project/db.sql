SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`User`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`User` (
  `idUser` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(50) NOT NULL,
  `password` VARCHAR(99) NOT NULL,
  `level` INT NOT NULL COMMENT '0-user\n1-admin',
  PRIMARY KEY (`idUser`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`group`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`group` (
  `idtopic` INT NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idtopic`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`discussion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`discussion` (
  `iddiscussion` INT NOT NULL AUTO_INCREMENT,
  `create` DATETIME NOT NULL,
  `groupId` INT NOT NULL,
  `createUserId` INT NOT NULL,
  PRIMARY KEY (`iddiscussion`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`comment`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`comment` (
  `idcomment` INT NOT NULL AUTO_INCREMENT,
  `conten` TEXT NULL,
  `create` DATETIME NOT NULL,
  `discussionId` INT NOT NULL,
  `CreateUserId` INT NOT NULL,
  PRIMARY KEY (`idcomment`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`vote`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`vote` (
  `idvote` INT NOT NULL AUTO_INCREMENT,
  `discussionid` INT NOT NULL,
  `vote` INT NOT NULL COMMENT '0-bad\n1-good',
  PRIMARY KEY (`idvote`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
