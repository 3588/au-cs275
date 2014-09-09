SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `restaurants` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `restaurants` ;

-- -----------------------------------------------------
-- Table `restaurants`.`Customers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `restaurants`.`Customers` (
  `idCustomers` INT NOT NULL,
  `FirstName` VARCHAR(45) NOT NULL,
  `LastName` VARCHAR(45) NOT NULL,
  `Address` TEXT NULL,
  `FavoriteCuisine` VARCHAR(45) NULL,
  PRIMARY KEY (`idCustomers`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `restaurants`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `restaurants`.`user` (
  `username` VARCHAR(16) NOT NULL,
  `email` VARCHAR(255) NULL,
  `password` VARCHAR(32) NOT NULL,
  `create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP);


-- -----------------------------------------------------
-- Table `restaurants`.`Restaurant`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `restaurants`.`Restaurant` (
  `idRestaurant` INT NOT NULL,
  `Name` TEXT NOT NULL,
  `Type` VARCHAR(45) NOT NULL,
  `SpecificDishes` VARCHAR(70) NULL,
  PRIMARY KEY (`idRestaurant`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `restaurants`.`Dish`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `restaurants`.`Dish` (
  `idDish` INT NOT NULL,
  `name` TEXT NOT NULL,
  PRIMARY KEY (`idDish`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `restaurants`.`Dish_Rating`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `restaurants`.`Dish_Rating` (
  `idRating` INT NOT NULL,
  `idDish` INT NULL,
  `rating` INT NOT NULL,
  PRIMARY KEY (`idRating`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `restaurants`.`Price`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `restaurants`.`Price` (
  `idPrice` INT NOT NULL,
  `idDish` INT NOT NULL,
  `idCustomers` INT NOT NULL,
  `price` DOUBLE NOT NULL,
  PRIMARY KEY (`idPrice`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `restaurants`.`Dish_Reviews`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `restaurants`.`Dish_Reviews` (
  `idReviews` INT NOT NULL,
  `idCustomer` INT NULL,
  `idDish` INT NULL,
  `content` TEXT NOT NULL,
  PRIMARY KEY (`idReviews`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `restaurants`.`Restaurant_Reviews`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `restaurants`.`Restaurant_Reviews` (
  `idReviews` INT NOT NULL,
  `idCustomer` INT NULL,
  `idRestaurant` INT NULL,
  `content` TEXT NOT NULL,
  PRIMARY KEY (`idReviews`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `restaurants`.`Restaurant_Rating`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `restaurants`.`Restaurant_Rating` (
  `idRating` INT NOT NULL,
  `idRestaurant` INT NULL,
  `rating` INT NOT NULL,
  PRIMARY KEY (`idRating`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
