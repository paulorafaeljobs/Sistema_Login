<h2>Sistema de Login com Integração com Banco de Dados Mysql</h2>

Linguagens Utilizadas:
<ul>
  <li>HTML</li>
  <li>PHP</li>
  <li>SQL</li>
</ul>


<h3>Banco de dados MySQL  </h3>

Criar banco de dados:

<blockquote>
CREATE DATABASE login;
</blockquote>

Usar a base dados recém-criada:

<blockquote>
USE login;
</blockquote>

Estrutura do Banco de dados:

<blockquote>

CREATE TABLE `login`.`usuario` (                 </br>
  `usuario_id` INT NOT NULL AUTO_INCREMENT,      </br>
  `usuario` VARCHAR(200) NOT NULL,               </br>
  `senha` VARCHAR(32) NOT NULL,                  </br>
  PRIMARY KEY (`usuario_id`));                   </br>
                                                 </br>
</blockquote>

Inserts:

<blockquote>
INSERT INTO `usuario` (`usuario`,`senha`) VALUES ('paulo','202cb962ac59075b964b07152d234b70');
</blockquote>

Usuários/senha:

<blockquote>
  paulo / 123
</blockquote>
