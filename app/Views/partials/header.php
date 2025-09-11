<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>
    

<div class="header" id="style_header">
<header>
    <a href="<?= base_url('inicial')?>" class="button_home">
        <i class="fas fa-house"></i> Home
    </a>

    <a href="<?= base_url('paghome')?>" class="home_pac">
        <i class="fas fa-users"></i> Pacientes Cadastrados
    </a>

    <a href="<?= base_url('cadastro_pac')?>">
        <i class="fas fa-user-plus"></i> Novo Paciente
    </a>

    <button id="abrirModal" class="botao_pac">
        <i class="fas fa-user-group"></i> Adicionar Grupo de Clientes
    </button>
</header>
</div>
    
<style>
header {
    position: fixed;        
    top: 0;                
    left: 50%;              
    transform: translateX(-50%); 
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    gap: 5px;           
    padding: 15px 20px;
    z-index: 1000;     
    background-color: #19025eff;
}

a:hover {
    background-color: #007BFF;
}
  .botao_pac {
    background-color: #007BFF;
    color: white;
    border: none;
    padding: 8px 16px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
  }

  .button_home {
    background-color: #007BFF;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 50px;
    cursor: pointer;
    font-size: 16px;
    margin-right: 10px;
  }

  .botao_pac:hover {
    background-color: #0056b3;
  }

body {
    margin: 0;
    padding-top: 70px;  
}
</style>
</body>
</html>