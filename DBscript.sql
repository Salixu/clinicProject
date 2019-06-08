SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `clinicdb` DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci ;
USE `clinicdb` ;


CREATE TABLE IF NOT EXISTS `clinicdb`.`users` (
  `id_user` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `hash` VARCHAR(256) NULL,
  `email` VARCHAR(45) NULL,
  `phone_number` VARCHAR(45) NULL,
  `role` VARCHAR(15) NULL,
  'status' VARCHAR(15) NULL,
  'lastUpdate' DATE NULL
  PRIMARY KEY (`id_user`));

  CREATE TABLE IF NOT EXISTS `clinicdb`.`contact` (
    `id_contact` INT NOT NULL,
    `email` VARCHAR(256) NULL,
    `adress` VARCHAR(256) NULL,
    `phone_number` VARCHAR(256) NULL,
    PRIMARY KEY (`id_contact`));

    CREATE TABLE IF NOT EXISTS `clinicdb`.`visit`(
      `id_visit` INT NOT NULL AUTO_INCREMENT,
      `id_user`  VARCHAR(45) NULL,
      `id_doctor` VARCHAR(45) NULL,
      `treatment` VARCHAR(256) NULL,
      `dateVisit` DATE NULL,
      `time` TIME NULL,
      `status` VARCHAR(45) NULL,
      PRIMARY KEY (`id_visit`));


    CREATE TABLE IF NOT EXISTS `clinicdb`.`messages` (
      `id_message` INT NOT NULL AUTO_INCREMENT,
      `name` VARCHAR(45) NULL,
      `topic` VARCHAR(45) NULL,
      `email` VARCHAR(45) NULL,
      `message` VARCHAR(1024) NULL,
      PRIMARY KEY (`id_message`))


ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

INSERT INTO contact (email, adress, phone_number)
VALUES ('email', 'adress', 'phone number');

INSERT INTO hours (`10`, `11`, `12`, `13`, `14` ,`15` , `16`, `17`, `18`)
VALUES ('10', '11', '12', '13', '14', '15', '16', '17', '18' );
