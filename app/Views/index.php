<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg,rgb(2, 20, 99) 0%,rgb(28, 62, 176) 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        h1 {
            color: rgb(2, 20, 99)
        }
        p{
            color: rgb(28, 62, 176);
        }

        .faca_login {
            color: rgb(28, 62, 176);
        }

        .login-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 15px 30px rgba(135, 35, 35, 0.2);
            width: 350px;
            padding: 40px;
            text-align: center;
        }

        .login-container h2 {
            color: rgba(95, 95, 95, 1);
            margin-bottom: 30px;
            font-weight: 600;
        }

        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-size: 14px;
            font-weight: 500;
        }

        .input-group input {
            width: 100%;
            padding: 12px 15px;
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
            padding: 12px;
            background:rgb(2, 20, 99);
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
            margin-top: 10px;
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
            margin-top: 20px;
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
        <h1>Bem-Vindo ao <p> Webclinic!</p></h1>
        <br>
        <div class="faca_login">
        <h2>Faça seu login</h2>
        </div>
        <form id="loginForm">
            <div class="input-group">
                <label for="username">E-mail</label>
                <input name = "username" type="email" id="username" placeholder="Digite seu e-mail" autocomplete="username" required>

                <div class="error-message" id="usernameError"></div>
            </div>
            
            <div class="input-group">
                <label for="password">Senha</label>
                <input type="password" name = "password" id="password" placeholder="Digite sua senha" autocomplete="current-password" required>

                <div class="error-message" id="passwordError"></div>
            </div>
            
            <button type="submit" class="login-btn">Entrar</button>
        </form>
        
        <div class="login-footer">
            <p><a href="/senha">Esqueceu sua senha?</a></p>
        </div>
    </div>

    <script>
    // Credenciais válidas
    const VALID_USER = 'admin@jaira';
    const VALID_PASS = 'senha123';

    document.getElementById('loginForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const username = document.getElementById('username').value.trim();
        const password = document.getElementById('password').value.trim();
        let isValid = true;
        
        // Clear previous errors
        document.getElementById('usernameError').style.display = 'none';
        document.getElementById('passwordError').style.display = 'none';
        
        // Validate username is valid email
        if (username !== VALID_USER) {
            document.getElementById('usernameError').textContent = 'Usuário incorreto';
            document.getElementById('usernameError').style.display = 'block';
            isValid = false;
        }
        
        // Validate password matches
        if (password !== VALID_PASS) {
            document.getElementById('passwordError').textContent = 'Senha incorreta';
            document.getElementById('passwordError').style.display = 'block';
            isValid = false;
        }
        
        if (isValid) {
            // Após login bem-sucedido, altere o h2 para mostrar o nome do usuário
            // Salva o usuário no localStorage para usar em outras páginas
            localStorage.setItem('usuarioLogado', username);
            // Se quiser redirecionar, descomente a linha abaixo:
            window.location.href = '/inicial';
        } else {
            alert('Usuário ou senha incorretos!');
        }
    });

    // Add focus effect to inputs
    const inputs = document.querySelectorAll('.input-group input');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.querySelector('label').style.color = '#667eea';
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.querySelector('label').style.color = '#555';
        });
    });
</script>
</body>
</html>
