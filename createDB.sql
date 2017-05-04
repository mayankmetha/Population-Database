CREATE DATABASE project;
CREATE TABLE `project`.`detailtable` (
  `UID` INT(3) NOT NULL AUTO_INCREMENT,
  `NAME` VARCHAR(45) NOT NULL,
  `GENDER` VARCHAR(6) NOT NULL,
  `DOB` VARCHAR(10) NOT NULL,
  `RELIGION` VARCHAR(15) NOT NULL,
  `MOTHER_TONGUE` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`UID`),
  UNIQUE INDEX `UID_UNIQUE` (`UID` ASC));
  
  CREATE TABLE `project`.`idtable` (
  `UID` INT(3) NOT NULL AUTO_INCREMENT,
  `ID_NUMBER` VARCHAR(30) NOT NULL,
  `ID_TYPE` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`UID`, `ID_TYPE`),
  CONSTRAINT `FK1_UID`
    FOREIGN KEY (`UID`)
    REFERENCES `project`.`detailtable` (`UID`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION);

CREATE TABLE `project`.`addresstable` (
  `UID` INT(3) NOT NULL AUTO_INCREMENT,
  `PINCODE` INT(6) NOT NULL,
  `ADDRESS` VARCHAR(120) NOT NULL,
  PRIMARY KEY (`UID`, `ADDRESS`),
  CONSTRAINT `FK2_UID`
    FOREIGN KEY (`UID`)
    REFERENCES `project`.`detailtable` (`UID`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION);

CREATE TABLE `project`.`educationtable` (
  `UID` INT(3) NOT NULL AUTO_INCREMENT,
  `TEN` INT(1) NOT NULL DEFAULT 0,
  `TWE` INT(1) NOT NULL DEFAULT 0,
  `UG` INT(1) NOT NULL DEFAULT 0,
  `PG` INT(1) NOT NULL DEFAULT 0,
  `DR` INT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`UID`),
  CONSTRAINT `FK3_UID`
    FOREIGN KEY (`UID`)
    REFERENCES `project`.`detailtable` (`UID`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION);

CREATE TABLE `project`.`worktable` (
  `UID` INT(3) NOT NULL AUTO_INCREMENT,
  `WORK_TYPE` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`UID`, `WORK_TYPE`),
  CONSTRAINT `FK4_UID`
    FOREIGN KEY (`UID`)
    REFERENCES `project`.`detailtable` (`UID`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION);

