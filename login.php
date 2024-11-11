<?php
    require_once 'usuario.php';
    $usuario = new Usuario();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <div class="login-image">
            <img src="img/login.svg" alt="">
        </div>

        <div class="login-section">
            <h1>Bem-vindo de volta!</h1>
            <h2>Preencha os campos abaixos para acessar sua conta.</h2>
            <form method="POST" class="form-box">
                <label>E-mail</label>
                <input type="email" name="email" id="email" class="email" placeholder="Digite seu email" required>

                <label>Senha</label>
                <input type="password" name="senha" id="senha" class="senha" placeholder="Digite sua senha" required>

                <button class="btnEntrar">Entrar</button>
                <p class="infos"><a href="recuperarSenha.html" class="recuperarSenha">Esqueci minha senha</a> ⎯⎯⎯⎯ <a href="cadastro.php" class="cadastro">Cadastre uma conta</a></p>
             </form>
        </div>
    </div>

    <?php
        if(isset($_POST['email']))
        {
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);

            if(!empty($email) && !empty($senha))
            {
                $usuario->conectar("cadastrousuarioturma33", "localhost", "root", "");
                if($usuario->msgErro == "")
                {
                    if($usuario->logar($email, $senha))
                    {
                        header("location: areaRestrita.php");
                    }
                    else
                    {
                        ?>
                            <div class="msg-erro-senha">
                                <p>Email e/ou senha incorretos.</p>
                            </div>
                        <?php
                    }
                }
                else
                {
                    ?>
                        <div class="msg-erro">
                            <?php echo "Erro: ".$usuario->msgErro; ?>
                        </div>
                    <?php
                }
            }
            else
            {
                ?> 
                    <div class="msg-erro-campos">
                        <p>Preencha todos os campos corretamente.</p>
                    </div>
                <?php
            }
        }
    ?>

</body>
</html>