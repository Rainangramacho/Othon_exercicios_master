CREATE DATABASE `av1othon` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE av1othon;


CREATE TABLE IF NOT EXISTS `av1othon`.`cidade` (
  `idcidade` INT NOT NULL,
  `nome` VARCHAR(70) NULL,
  PRIMARY KEY (`idcidade`));
    
CREATE TABLE IF NOT EXISTS `av1othon`.`bairro` (
  `idbairro` INT NOT NULL,
  `nome` VARCHAR(70) NULL,
  `cidade_idcidade` INT NOT NULL,
  PRIMARY KEY (`idbairro`, `cidade_idcidade`),
  INDEX `fk_bairro_cidade1_idx` (`cidade_idcidade` ASC),
  CONSTRAINT `fk_bairro_cidade1`
    FOREIGN KEY (`cidade_idcidade`)
    REFERENCES `av1othon`.`cidade` (`idcidade`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE IF NOT EXISTS `av1othon`.`contato` (
  `idcontato` INT NOT NULL,
  `celular` VARCHAR(12) NULL,
  PRIMARY KEY (`idcontato`));
    
CREATE TABLE IF NOT EXISTS `av1othon`.`operador` (
  `idoperadores` INT NOT NULL,
  `nome` VARCHAR(30) NULL,
  `nomecompleto` VARCHAR(150) NULL,
  `cpf` VARCHAR(15) NULL,
  `rg` VARCHAR(15) NULL,
  `datanasc` DATE NULL,
  `endereco` VARCHAR(150) NULL,
  `numero` VARCHAR(5) NULL,
  `complemento` VARCHAR(45) NULL,
  `opimg` BLOB,
  `bairro_idbairro` INT NOT NULL,
  `bairro_cidade_idcidade` INT NOT NULL,
  `contato_idcontato` INT NOT NULL,
  PRIMARY KEY (`idoperadores`, `bairro_idbairro`, `bairro_cidade_idcidade`, `contato_idcontato`),
  INDEX `fk_operador_bairro1_idx` (`bairro_idbairro` ASC, `bairro_cidade_idcidade` ASC),
  INDEX `fk_operador_contato1_idx` (`contato_idcontato` ASC),
  CONSTRAINT `fk_operador_bairro1`
    FOREIGN KEY (`bairro_idbairro` , `bairro_cidade_idcidade`)
    REFERENCES `av1othon`.`bairro` (`idbairro` , `cidade_idcidade`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_operador_contato1`
    FOREIGN KEY (`contato_idcontato`)
    REFERENCES `av1othon`.`contato` (`idcontato`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE IF NOT EXISTS `av1othon`.`cliente` (
  `idcliente` INT NOT NULL,
  `nome` VARCHAR(30) NULL,
  `nomecompleto` VARCHAR(150) NULL,
  `cpf` VARCHAR(15) NULL,
  `rg` VARCHAR(15) NULL,
  `datanasc` DATE NULL,
  `endereco` VARCHAR(150) NULL,
  `numero` VARCHAR(5) NULL,
  `complemento` VARCHAR(45) NULL,
  `contato_idcontato` INT NOT NULL,
  `bairro_idbairro` INT NOT NULL,
  `bairro_cidade_idcidade` INT NOT NULL,
  PRIMARY KEY (`idcliente`, `contato_idcontato`, `bairro_idbairro`, `bairro_cidade_idcidade`),
  INDEX `fk_cliente_contato1_idx` (`contato_idcontato` ASC),
  INDEX `fk_cliente_bairro1_idx` (`bairro_idbairro` ASC, `bairro_cidade_idcidade` ASC),
  CONSTRAINT `fk_cliente_contato1`
    FOREIGN KEY (`contato_idcontato`)
    REFERENCES `av1othon`.`contato` (`idcontato`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cliente_bairro1`
    FOREIGN KEY (`bairro_idbairro` , `bairro_cidade_idcidade`)
    REFERENCES `av1othon`.`bairro` (`idbairro` , `cidade_idcidade`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE IF NOT EXISTS `av1othon`.`fornecedor` (
  `idfornecedor` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(60) NULL,
  PRIMARY KEY (`idfornecedor`));
 
CREATE TABLE IF NOT EXISTS `av1othon`.`bairro_has_fornecedor` (
  `bairro_idbairro` INT NOT NULL,
  `bairro_cidade_idcidade` INT NOT NULL,
  `fornecedor_idfornecedor` INT NOT NULL,
  PRIMARY KEY (`bairro_idbairro`, `bairro_cidade_idcidade`, `fornecedor_idfornecedor`),
  INDEX `fk_bairro_has_fornecedor_fornecedor1_idx` (`fornecedor_idfornecedor` ASC),
  INDEX `fk_bairro_has_fornecedor_bairro1_idx` (`bairro_idbairro` ASC, `bairro_cidade_idcidade` ASC),
  CONSTRAINT `fk_bairro_has_fornecedor_bairro1`
    FOREIGN KEY (`bairro_idbairro` , `bairro_cidade_idcidade`)
    REFERENCES `av1othon`.`bairro` (`idbairro` , `cidade_idcidade`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_bairro_has_fornecedor_fornecedor1`
    FOREIGN KEY (`fornecedor_idfornecedor`)
    REFERENCES `av1othon`.`fornecedor` (`idfornecedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE IF NOT EXISTS `av1othon`.`produto` (
  `idcodigo` INT NOT NULL,
  `nome` VARCHAR(70) NULL,
  `descricao` VARCHAR(350) NULL,
  `datavalidade` DATE NULL,
  `precovenda` INT NULL,
  `qntcomprada` INT NULL,
  `produtoimg` MEDIUMBLOB NOT NULL,
  PRIMARY KEY (`idcodigo`));
 
CREATE TABLE IF NOT EXISTS `av1othon`.`produto_has_fornecedor` (
  `produto_idcodigo` INT NOT NULL,
  `fornecedor_idfornecedor` INT NOT NULL,
  PRIMARY KEY (`produto_idcodigo`, `fornecedor_idfornecedor`),
  INDEX `fk_produto_has_fornecedor_fornecedor1_idx` (`fornecedor_idfornecedor` ASC),
  INDEX `fk_produto_has_fornecedor_produto1_idx` (`produto_idcodigo` ASC),
  CONSTRAINT `fk_produto_has_fornecedor_produto1`
    FOREIGN KEY (`produto_idcodigo`)
    REFERENCES `av1othon`.`produto` (`idcodigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_produto_has_fornecedor_fornecedor1`
    FOREIGN KEY (`fornecedor_idfornecedor`)
    REFERENCES `av1othon`.`fornecedor` (`idfornecedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);