<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
                <div class="card">
                    <h3>Pacientes</h3>
             <!-- Numero de pacientes -->
                </div>
    </div>

<button id="openBtn">☰ Novo Paciente</button>
            
</body>
<style>
     * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        } 

        body {
            background-color: #ffffff;
            color: #333;
        }

        .container {
            display: flex;
            min-height: 50vh;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .card {
            background: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100vh;
        }

        #openBtn {
        padding: 10px 20px;
        background-color: #007BFF;
        color: white;
        border: none;
        border-radius: 5%;
        cursor: pointer;
        margin: 10px;
        display: flex;
        position: absolute;
        top: 20px;
        }
</style>
<script>

        const openBtn = document.getElementById("openBtn");

        openBtn.onclick = () => {
        window.location.href = "dashboard.html";
    };
</script>
</html>