<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro | WebClinic</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg,rgb(2, 20, 99) 0%,rgb(28, 62, 176) 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        /* Reduce h1 size and remove default p margin inside it */
        h1 {
            color: rgb(2, 20, 99);
            font-weight: 700;
            
        }
        h1 p {
            display: inline;
            margin: 0;
            color: rgb(28, 62, 176);
            
        }

        /* keep class color if needed */
        .faca_login {
            color: rgb(28, 62, 176);
        }

        .login-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 15px 30px rgba(135, 35, 35, 0.2);
            width: 350px;
            padding: 20px; /* reduced from 40px */
            text-align: center;
        }

        /* Slightly smaller heading spacing */
        .login-container h2 {
            color: rgba(95, 95, 95, 1);
            margin-bottom: 18px;
            font-weight: 600;
            font-size: 18px;
        }

        .input-group {
            margin-bottom: 12px; /* reduced space */
            text-align: left;
        }

        .input-group label {
            display: block;
            margin-bottom: 6px;
            color: #555;
            font-size: 13px;
            font-weight: 500;
        }

        .input-group input {
            width: 100%;
            padding: 10px 12px; /* reduced padding */
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            transition: border-color 0.3s;
        }

        .input-group input:focus {
            outline: none;
            border-color: #667eea;
        }

        .login-btn {
            width: 100%;
            padding: 10px; /* reduced */
            background: rgb(2, 20, 99);
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
            margin-top: 8px;
        }

        .login-btn:hover {
            background: rgb(28, 62, 176);
        }

        .error-message {
            color: #e74c3c;
            font-size: 13px;
            margin-top: 5px;
            display: none;
        }

        .login-footer {
            margin-top: 14px; /* reduced */
            font-size: 13px;
            color: #777;
        }

        .login-footer a {
            color: #667eea;
            text-decoration: none;
            font-weight: 500;
        }

        .login-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Crie sua conta <p> Webclinic!</p></h1>
        <br>
        <div class="faca_login">
            <h2>Cadastre-se</h2>
        </div>
        
        <?php if (isset($validation)): ?>
            <div style="background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
                <?= $validation->listErrors() ?>
            </div>
        <?php endif; ?>

        <form method="post" action="<?= base_url('cadastro/salvar'); ?>"> 
            
            <div class="input-group">
                <label for="nome">Nome Completo</label>
                <input name="nome" type="text" id="nome" placeholder="Seu nome" required value="<?= old('nome'); ?>">
            </div>

            <div class="input-group">
                <label for="telefone">Telefone</label>
                <input name="telefone" type="tel" id="telefone" placeholder="(99) 99999-9999" value="<?= old('telefone'); ?>">
            </div>

            <div class="input-group">
                <label for="email">E-mail</label>
                <input name="email" type="email" id="email" placeholder="Seu e-mail" required value="<?= old('email'); ?>">
            </div>
            
            <div class="input-group">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" placeholder="Crie uma senha" required>
            </div>
            
            <div class="input-group">
                <label for="conf_senha">Confirmar Senha</label>
                <input type="password" name="conf_senha" id="conf_senha" placeholder="Repita a senha" required>
            </div>
            
            <button type="submit" class="login-btn">Cadastrar</button>
        </form>
        
        <div class="login-footer">
            <p>Já tem uma conta? <a href="<?= base_url('login'); ?>">Faça login.</a></p>
        </div>
    </div>
</body>
</html>