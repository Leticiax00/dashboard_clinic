<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Cadastro</title>
</head>

<body>
  <div class="header">
    <?= view('partials/header') ?>
    <a href="<?= base_url('cadastro_pac')?>"> Novo Paciente</a>
    <a href="<?= base_url('group_pac')?>"> Grupo de pacientes</a>
  </div>

  <div class="card">
    <div class="container">
      <h2>Pacientes</h2>
      <!-- Número de pacientes -->
    </div>
  </div>
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

  .header {
    display: flex;
    gap: 20px;              /* espaço entre os links */
    margin: 30px 0 0 30px; 
    
  }

  .header a {
    color: #ffffff;
    text-decoration: none;
    padding: 8px 16px;
    border: none;
    border-radius: 4px;
    background-color: #007BFF;
  }

  .header a:hover {
    background-color: #024d9d;
    color: white;
  }

  .card {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 50vh;
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
    max-width: 30rem; /* Largura do card */
    margin: 0 auto; /* Posição */
  }
</style>
</html>
