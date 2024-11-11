<?php
require_once 'usuario.php';
$usuario = new Usuario();
$usuario->conectar("cadastrousuarioturma33", "localhost", "root", "");

if (isset($_POST['excluir']) && !empty($_POST['id'])) {
    $usuario->excluirUsuario($_POST['id']);
}

if (isset($_POST['editar']) && !empty($_POST['id'])) {
    $usuario->editarUsuario($_POST['id'], $_POST['nome'], $_POST['email'], $_POST['telefone'], $_POST['novo_id']);
}

$dados = $usuario->listarUsuarios();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todos os usuarios</title>
    <link rel="stylesheet" href="areaRestrita.css">
</head>
<body class="body">
    <div class="container">
        <h1 class="title">Usuários Cadastrados</h1>
        <table class="table">
            <thead>
                <tr>
                    <th class="table-header nome">Nome</th>
                    <th class="table-header email">Email</th>
                    <th class="table-header telefone">Telefone</th>
                    <th class="table-header id">ID</th>
                    <th class="table-header editar">Editar</th>
                    <th class="table-header excluir">Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($dados))
                {
                    foreach ($dados as $pessoa):
                ?>
                    <tr class="table-row">
                        <td class="table-cell"><?php echo $pessoa['nome']; ?></td>
                        <td class="table-cell"><?php echo $pessoa['email']; ?></td>
                        <td class="table-cell"><?php echo $pessoa['telefone']; ?></td>
                        <td class="table-cell"><?php echo $pessoa['id_usuario']; ?></td>
                        <td class="table-cell edit-cell">
                            <button onclick="mostrarFormularioEdicao(<?php echo $pessoa['id_usuario']; ?>, '<?php echo $pessoa['nome']; ?>', '<?php echo $pessoa['email']; ?>', '<?php echo $pessoa['telefone']; ?>')" class="btn-editar">Editar</button>
                        </td>
                        <td class="table-cell delete-cell">
                            <form method="POST" action="" class="form-delete">
                                <input type="hidden" name="id" value="<?php echo $pessoa['id_usuario']; ?>">
                                <button type="submit" name="excluir" class="btn-excluir">Excluir</button>
                            </form>
                        </td>
                    </tr>
                <?php 
                    endforeach;
                } 
                else
                {
                    echo "<p class='empty-message'>Nenhum usuário cadastrado.</p>";
                }
                ?>
            </tbody>
        </table>

        <div id="editForm" class="edit-form">
            <form method="POST" action="" class="form-edit">
                <input type="hidden" name="id" id="edit-id">
                <label for="edit-nome">Nome:</label>
                <input type="text" name="nome" id="edit-nome" class="input-edit" required>
                <label for="edit-email">Email:</label>
                <input type="email" name="email" id="edit-email" class="input-edit" required>
                <label for="edit-telefone">Telefone:</label>
                <input type="tel" name="telefone" id="edit-telefone" class="input-edit" required>
                <label for="edit-id">ID:</label>
                <input type="number" name="novo_id" id="edit-novo-id" class="input-edit" required>
                <button type="submit" name="editar" class="btn-salvar">Confirmar Alterações</button>
                <button type="button" onclick="fecharFormularioEdicao()" class="btn-cancelar">Voltar para Informações</button>
            </form>
        </div>
    </div>

    <script>
        function mostrarFormularioEdicao(id, nome, email, telefone) {
            document.getElementById('edit-id').value = id;
            document.getElementById('edit-novo-id').value = id;
            document.getElementById('edit-nome').value = nome;
            document.getElementById('edit-email').value = email;
            document.getElementById('edit-telefone').value = telefone;
            document.getElementById('editForm').style.display = 'block';
        }

        function fecharFormularioEdicao() {
            document.getElementById('editForm').style.display = 'none';
        }
    </script>
</body>
</html>
