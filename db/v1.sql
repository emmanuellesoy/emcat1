SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';


-- -----------------------------------------------------
-- Table `emcat1`.`clientes`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `emcat1`.`clientes` (
  `id_cliente` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NULL ,
  `apellido_p` VARCHAR(45) NULL ,
  `apellido_m` VARCHAR(45) NULL ,
  `calle_numero` VARCHAR(45) NULL ,
  `colonia` VARCHAR(45) NULL ,
  `delegacion_municipio` VARCHAR(45) NULL ,
  `codigo_postal` VARCHAR(45) NULL ,
  `telefono_p` VARCHAR(45) NULL ,
  `telefono_m` VARCHAR(45) NULL ,
  `correo_e` VARCHAR(45) NULL ,
  `rfc` VARCHAR(45) NULL ,
  PRIMARY KEY (`id_cliente`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `emcat1`.`productos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `emcat1`.`productos` (
  `id_producto` INT NOT NULL AUTO_INCREMENT ,
  `upc` VARCHAR(45) NULL ,
  `laboratorio` VARCHAR(45) NULL ,
  `nombre` VARCHAR(45) NULL ,
  `principio_activo` VARCHAR(45) NULL ,
  `forma_f` VARCHAR(45) NULL ,
  `precio_p` DOUBLE NULL ,
  `precio_t` DOUBLE NULL ,
  PRIMARY KEY (`id_producto`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `emcat1`.`ventas`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `emcat1`.`ventas` (
  `id_venta` INT NOT NULL AUTO_INCREMENT ,
  `id_cliente` INT NULL ,
  `fecha_compra` DATE NULL ,
  `monto_compra` VARCHAR(45) NULL ,
  PRIMARY KEY (`id_venta`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `emcat1`.`productos_compras`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `emcat1`.`productos_compras` (
  `id_producto` INT NOT NULL ,
  `id_venta` INT NULL )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `emcat1`.`almacen`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `emcat1`.`almacen` (
  `id_producto` INT NOT NULL ,
  `cantidad` INT NULL )
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
