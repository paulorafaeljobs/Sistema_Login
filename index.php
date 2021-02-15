<?php
session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <title>Login</title>
</head>

<body>
    <section><center>
        <h2 >Login</h2>
            <?php
            if(isset($_SESSION['nao_autenticado'])):
            ?>
            <div>
                <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                        <?php
                        endif;
                        unset($_SESSION['nao_autenticado']);
                        ?>
                    <div>
                        <form action="login.php" method="POST">
                            <div>
                                <div>
                                    <input name="usuario" name="text" class="input is-large" placeholder="Usuario" autofocus="">
                                </div>
                            </div>
                        <div>
                                <div>
                                    <input name="senha" class="input is-large" type="password" placeholder="Senha"> <br/>
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                        </form>
                        <h4><a href="/login/cadastro.php">Cadastrar</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>