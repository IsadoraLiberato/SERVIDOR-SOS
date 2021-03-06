CREATE SCHEMA IF NOT EXISTS `sosexpress` DEFAULT CHARACTER SET utf8 ;
USE `sosexpress` ;
CREATE TABLE IF NOT EXISTS `sosexpress`.`oficinas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `rua` VARCHAR(45) NOT NULL,
  `numero` INT NOT NULL,
  `bairro` VARCHAR(45) NOT NULL,
  `cep` INT NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `cnpj` INT NOT NULL,
  `telefone` INT NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `sosexpress`.`clientes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `telefone` INT NOT NULL,
  `cpf` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `sosexpress`.`registro` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `placa` VARCHAR(45) NOT NULL,
  `modelo` VARCHAR(45) NOT NULL,
  `descricao` VARCHAR(500) NOT NULL,
  `id_oficina` INT NOT NULL,
  `id_usuario` INT NOT NULL,
  `tipo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_registro_oficinas_idx` (`id_oficina` ASC),
  INDEX `fk_registro_clientes1_idx` (`id_usuario` ASC),
  CONSTRAINT `fk_registro_oficinas`
    FOREIGN KEY (`id_oficina`)
    REFERENCES `sosexpress`.`oficinas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_registro_clientes1`
    FOREIGN KEY (`id_usuario`)
    REFERENCES `sosexpress`.`clientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;