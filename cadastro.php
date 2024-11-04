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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
    <h2>CADASTRO DE USUÁRIO</h2><br>
        <form action="" method="post">
            <label id="formLabel">Nome:</label><br>
            <input type="text" name="nome" id="formCaixa" placeholder = "Nome Completo."><br>
            <label id="formLabel">Email:</label><br>
            <input type="email" name="email" id="formCaixa" placeholder = "Digite o email."><br>
            <label id="formLabel">Telefone:</label><br>
            <input type="tel" name="telefone" id="formCaixa" placeholder = "Telefone completo."><br>
            <label id="formLabel">Senha:</label><br>
            <input type="password" name="senha" id="formCaixa" placeholder = "Digite sua senha."><br>
            <label id="formLabel">Confirmar Senha:</label><br>
            <input type="password" name="confSenha" id="formCaixa" placeholder = "Confirme sua senha."><br><br>
            
            <input type="submit" value="CADASTRAR" id="botao">
        </form>
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