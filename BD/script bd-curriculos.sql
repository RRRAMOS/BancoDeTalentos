CREATE database bd_curriculos;

use bd_curriculos;

CREATE TABLE `usuario`(
  `idUsuario` int(11) NOT NULL auto_increment,
  `nome` varchar (150) NULL default NULL,
  `cpf` varchar (11) NOT NULL,
  `dataNascimento` DATE NULL default NULL,
  `email` varchar (150) NULL default NULL,
  `senha` varchar (45) NULL default NULL,
  PRIMARY KEY (`idUsuario`)) ;

CREATE TABLE `formacaoAcademica` (
  `idFormacaoAcademica` INT(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` INT(11) NOT NULL,
  `inicio` DATE NULL,
  `fim` DATE NULL DEFAULT NULL,
  `descricao` VARCHAR(150) NULL DEFAULT NULL,
  PRIMARY KEY (`idFormacaoAcademica`),
  INDEX `idUsuario_idx` (`idUsuario` ASC),
  CONSTRAINT `fk_idUsuario`
    FOREIGN KEY (`idUsuario`)
    REFERENCES `bd_curriculo`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE `outrasFormacoes` (
  `idoutrasformacoes` INT(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` INT(11) NOT NULL,
  `inicio` DATE NULL DEFAULT NULL,
  `fim` DATE NULL DEFAULT NULL,
  `descricao` VARCHAR(150) NULL DEFAULT NULL,
  PRIMARY KEY (`idoutrasformacoes`),
  INDEX `idusuario_idx` (`idusuario` ASC),
  CONSTRAINT `fk_idUsuario`
    FOREIGN KEY (`idusuario`)
    REFERENCES `bd_curriculo`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE `experienciaProfissional` (
  `idExperienciaProfissional` INT(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` INT(11) NOT NULL,
  `inicio` DATE NULL DEFAULT NULL,
  `fim` DATE NULL DEFAULT NULL,
  `empresa` VARCHAR(150) NULL DEFAULT NULL,
  `descricao` VARCHAR(150) NULL DEFAULT NULL,
  PRIMARY KEY (`idExperienciaProfissional`),
  INDEX `idusuario_idx` (`idusuario` ASC),
  CONSTRAINT `fk_idUsuario`
    FOREIGN KEY (`idusuario`)
    REFERENCES `bd_curriculo`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);