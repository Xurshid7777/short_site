CREATE TABLE `short_loc`.`short` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NULL DEFAULT NULL , `user` VARCHAR(20) NOT NULL , `url` VARCHAR(255) NOT NULL , `link` VARCHAR(255) NOT NULL , `view` INT(11) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;