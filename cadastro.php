<?php
    require_once 'usuario.php';
    $usuario = new Usuario();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Cadastro</title>
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>

    <div class="cadastro-container">
        <div class="cadastro-image">
            <img src="img/cadastro.svg" alt="">
        </div>

        <div class="cadastro-section">
            <h1>Olá, seja bem-vindo!</h1>
            <h2>Preencha os campos abaixos para cadastrar sua conta.</h2>
            <form method="post" class="form-box">
                <label>Nome</label>
                <input type="text" name="nome" id="nome" class="nome" placeholder="Informe seu nome" required>

                <label>E-mail</label>
                <input type="email" name="email" id="email" class="email" placeholder="Digite seu email" required>

                <label>Telefone</label>
                <input type="text" name="telefone" id="telefone" class="telefone" placeholder="Digite seu número de telefone "required>

                <label>Senha</label>
                <input type="password" name="senha" id="senha" class="senha" placeholder="Digite uma senha senha" required>

                <label>Confirme sua senha</label>
                <input type="password" name="confSenha" id="confSenha" class="confSenha" placeholder="Confirme sua senha" required>

                <button class="btnCadastrar">Cadastrar</button>
                <p class="infos"><a href="login.php" class="login">Acessar minha conta</a></p>
            </form>
        </div>
    </div>

    <?php
    if(isset($_POST['nome']))
    {
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $confSenha = addslashes($_POST['confSenha']);

        if(!empty($nome) && !empty($email) && !empty($telefone) && !empty($senha) && !empty($confSenha))
        {
            $usuario->conectar("cadastrousuarioturma33", "localhost", "root", "");
            if($usuario->msgErro == "")
            {
                if($senha == $confSenha)
                {
                    if($usuario->cadastrar($nome, $telefone, $email, $senha))
                    {
                        ?>
                            <!-- bloco de html -->
                            <div class="msg-sucesso">
                                <p>Cadastrado com sucesso!</p>
                                <p>Clique <a href="login.php">aqui</a> para logar</p>
                            </div>
                        <?php
                    }
                    else
                    {
                        ?>
                            <div class="msg-erro-email">
                                <p>O email inserido já está cadastrado.</p>
                                <p>Tente novamente utilizando outro email.</p>
                            </div>
                        <?php
                    }
                }
                else
                {
                    ?>
                        <div class="msg-erro-senha">
                            <p>As senhas digitadas são diferentes...</p>
                        </div>
                    <?php
                }
            }
            else
            {
                ?>
                    <div class="msg-erro">
                        <?php echo "Erro: ".$usuario->msgErro;?>
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