Banco de dados MySQL

Criar banco de dados:

CREATE DATABASE login;
USE login;

CREATE TABLE `login`.`usuario` (
  `usuario_id` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(200) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`usuario_id`));




INSERT INTO `usuario` (`usuario`,`senha`) VALUES ('paulo','202cb962ac59075b964b07152d234b70');

senha com Criptografia MD5
               
Usuários/senha:

paulo / 123
