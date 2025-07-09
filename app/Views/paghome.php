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
                    <h2>Pacientes</h3>
             <!-- Numero de pacientes -->
                </div>
    </div>

<a id="openBtn" href="<?= base_url('cadastro_pac')?>">☰ Novo Paciente</a>
            
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
            min-height: 30vh;
            align-items: center;
            background-color: white;
            border-radius: 1rem; 
            box-shadow:  0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 2rem;  
            flex-direction: column;
            width: 100%;
            max-width: 30rem; 
            margin: 0 auto;
             
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
            text-decoration: none;
        }
</style>
<script>

        const openBtn = document.getElementById("openBtn");

        openBtn.onclick = () => {
        window.location.href = "<?= base_url('cadastro_pac') ?>";
    };
</script>
</html>