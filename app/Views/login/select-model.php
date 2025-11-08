<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Escolha o Método</title>
</head>
<body>
    <div class="login-container">
        <h2>Como deseja receber o código?</h2>
        <p>Vamos enviar um código para redefinir sua senha.</p>
        
        <div style="margin-top: 30px;">
            <a href="<?= base_url('senha/enviar-codigo/' . $user_id . '/email'); ?>" class="login-btn" style="display: block; text-align: center; margin-bottom: 15px;">
    E-mail: <?= $maskedEmail ?>
</a>

<?php if ($maskedPhone): ?>
<a href="<?= base_url('senha/enviar-codigo/' . $user_id . '/phone'); ?>" class="login-btn" style="display: block; text-align: center; background-color: #007bff; border-color: #007bff;">
    Celular: <?= $maskedPhone ?>
</a>
            <?php endif; ?>
        </div>
        
        <p style="margin-top: 20px;"><a href="<?= base_url('senha'); ?>">Não recebi o código ou tente outro método</a></p>
    </div>
</body>
</html>