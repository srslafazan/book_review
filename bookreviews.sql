-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema bookreviews
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema bookreviews
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bookreviews` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `bookreviews` ;

-- -----------------------------------------------------
-- Table `bookreviews`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bookreviews`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(75) NULL,
  `alias` VARCHAR(75) NULL,
  `email` VARCHAR(255) NULL,
  `password` VARCHAR(50) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bookreviews`.`books`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bookreviews`.`books` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(75) NULL,
  `author` VARCHAR(75) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bookreviews`.`reviews`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bookreviews`.`reviews` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `review` TEXT NULL,
  `rating` VARCHAR(45) NULL,
  `user_id` INT NULL,
  `book_id` INT NULL,
  `created_at` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
