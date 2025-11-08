<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Nova Senha</title>
</head>
<body>
    <div class="login-container">
        <h2>Definir Nova Senha</h2>

        <?php if(isset($success)):?>
            <div style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
                <?= $success ?>
            </div>
        <?php endif;?>

        <?php if(session()->getFlashdata('error')):?>
            <div style="background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif;?>

        <form method="post" action="<?= base_url('senha/atualizar'); ?>">
            <input type="hidden" name="user_id" value="<?= $user_id ?>">

            <div class="input-group">
                <label for="token">Código de Verificação</label>
                <input name="token" type="text" id="token" placeholder="Insira o código enviado" required>
            </div>

            <div class="input-group">
                <label for="nova_senha">Nova Senha</label>
                <input type="password" name="nova_senha" id="nova_senha" placeholder="Mínimo 8 caracteres" required>
            </div>
            
            <div class="input-group">
                <label for="conf_senha">Confirmar Nova Senha</label>
                <input type="password" name="conf_senha" id="conf_senha" placeholder="Repita a nova senha" required>
            </div>
            
            <button type="submit" class="login-btn">Redefinir Senha</button>
        </form>
    </div>
</body>
</html>