/*
Navicat MySQL Data Transfer

Source Server         : Banco_Local
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : ppi

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2015-06-22 16:20:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `camiseta`
-- ----------------------------
DROP TABLE IF EXISTS `camiseta`;
CREATE TABLE `camiseta` (
  `cod_camiseta` int(11) NOT NULL AUTO_INCREMENT,
  `cod_doacao` int(11) DEFAULT NULL,
  `tamanho_camiseta` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_camiseta`),
  KEY `cod_doacao` (`cod_doacao`),
  CONSTRAINT `camiseta_ibfk_1` FOREIGN KEY (`cod_doacao`) REFERENCES `doacao` (`cod_doacao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of camiseta
-- ----------------------------

-- ----------------------------
-- Table structure for `doacao`
-- ----------------------------
DROP TABLE IF EXISTS `doacao`;
CREATE TABLE `doacao` (
  `cod_doacao` int(11) NOT NULL AUTO_INCREMENT,
  `cod_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_doacao`),
  KEY `cod_usuario` (`cod_usuario`),
  CONSTRAINT `doacao_ibfk_1` FOREIGN KEY (`cod_usuario`) REFERENCES `usuario` (`cod_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of doacao
-- ----------------------------

-- ----------------------------
-- Table structure for `usuario`
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `cod_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(40) DEFAULT NULL,
  `e_mail` varchar(30) DEFAULT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(8) NOT NULL,
  PRIMARY KEY (`cod_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES ('8', 'web', 'teste@teste.com.br', 'webjhon', '123456');
INSERT INTO `usuario` VALUES ('9', 'É Tésté não', null, '', '');
INSERT INTO `usuario` VALUES ('10', 'JoÃ£o Carlos', 'colorado.santos@gmail.com', 'webjhon', '123');
INSERT INTO `usuario` VALUES ('11', 'JoÃ£o Carlos', 'colorado.santos@gmail.com', 'webjhon', '123');
INSERT INTO `usuario` VALUES ('12', 'JoÃ£o Carlos', 'colorado.santos@gmail.com', 'webjhon', '123');
INSERT INTO `usuario` VALUES ('13', 'JoÃ£o Carlos', 'colorado.santos@gmail.com', 'webjhon', '123');
INSERT INTO `usuario` VALUES ('14', 'João Carlos', 'colorado.santos@gmail.com', 'webjhon', '123');
INSERT INTO `usuario` VALUES ('15', 'João Carlos', 'colorado.santos@gmail.com', 'webjhon', '123');
INSERT INTO `usuario` VALUES ('16', 'paçóquinha', 'teste@teste.com.br', 'web', '123456');
INSERT INTO `usuario` VALUES ('17', 'Maçiel Antúnes', 'maciel@antunes.com.br', 'maciel', '123456');
INSERT INTO `usuario` VALUES ('18', 'André Prado', 'andre@brunning.com.br', 'andre', 'andre');
