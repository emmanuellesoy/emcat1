SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `a5616757_emcat1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `a5616757_emcat1` ;

-- -----------------------------------------------------
-- Table `a5616757_emcat1`.`clientes`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `a5616757_emcat1`.`clientes` (
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
-- Table `a5616757_emcat1`.`productos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `a5616757_emcat1`.`productos` (
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
-- Table `a5616757_emcat1`.`ventas`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `a5616757_emcat1`.`ventas` (
  `id_venta` INT NOT NULL AUTO_INCREMENT ,
  `id_cliente` INT NULL ,
  `fecha_compra` DATE NULL ,
  `monto_compra` VARCHAR(45) NULL ,
  `productos_id_producto` INT NOT NULL ,
  `clientes_id_cliente` INT NOT NULL ,
  PRIMARY KEY (`id_venta`, `productos_id_producto`, `clientes_id_cliente`) ,
  INDEX `fk_ventas_productos1` (`productos_id_producto` ASC) ,
  INDEX `fk_ventas_clientes1` (`clientes_id_cliente` ASC) ,
  CONSTRAINT `fk_ventas_productos1`
    FOREIGN KEY (`productos_id_producto` )
    REFERENCES `a5616757_emcat1`.`productos` (`id_producto` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ventas_clientes1`
    FOREIGN KEY (`clientes_id_cliente` )
    REFERENCES `a5616757_emcat1`.`clientes` (`id_cliente` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `a5616757_emcat1`.`productos_compras`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `a5616757_emcat1`.`productos_compras` (
  `id_producto` INT NOT NULL ,
  `id_venta` INT NULL ,
  `productos_id_producto` INT NOT NULL ,
  `ventas_id_venta` INT NOT NULL ,
  `ventas_productos_id_producto` INT NOT NULL ,
  PRIMARY KEY (`productos_id_producto`, `ventas_id_venta`, `ventas_productos_id_producto`) ,
  INDEX `fk_productos_compras_ventas1` (`ventas_id_venta` ASC, `ventas_productos_id_producto` ASC) ,
  CONSTRAINT `fk_productos_compras_productos1`
    FOREIGN KEY (`productos_id_producto` )
    REFERENCES `a5616757_emcat1`.`productos` (`id_producto` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_productos_compras_ventas1`
    FOREIGN KEY (`ventas_id_venta` , `ventas_productos_id_producto` )
    REFERENCES `a5616757_emcat1`.`ventas` (`id_venta` , `productos_id_producto` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `a5616757_emcat1`.`almacen`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `a5616757_emcat1`.`almacen` (
  `id_producto` INT NOT NULL ,
  `cantidad` INT NULL ,
  `productos_id_producto` INT NOT NULL ,
  PRIMARY KEY (`productos_id_producto`) ,
  CONSTRAINT `fk_almacen_productos`
    FOREIGN KEY (`productos_id_producto` )
    REFERENCES `a5616757_emcat1`.`productos` (`id_producto` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
