<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Detalhes do Paciente</title>
</head>
<body>

<?= view('partials/header') ?> 

<div class="detalhes-container">
  <h2>Detalhes do Paciente</h2>
  <table>
    <tr><th>Prontuário:</th><td><?= esc($paciente['id']) ?></td></tr>
    <tr><th>Nome:</th><td><?= ucwords(strtolower(esc($paciente['nome']))) ?></td></tr>
    <tr><th>Data de Nascimento:</th><td><?= date('d/m/Y', strtotime($paciente['data_nascimento'])) ?></td></tr>
    <tr><th>Endereço:</th><td><?= esc($paciente['endereco']) ?></td></tr>
    <tr><th>RG:</th><td><?= esc($paciente['rg']) ?></td></tr>
    <tr><th>CPF:</th><td><?= esc($paciente['cpf']) ?></td></tr>
    <tr><th>Convênio Médico:</th><td><?= esc($paciente['convenio_medico']) ?></td></tr>
    <tr><th>Grupo de Pacientes:</th><td><?= esc($paciente['grupo_pacientes']) ?></td></tr>
    <tr><th>Sexo:</th><td><?= esc($paciente['sexo']) ?></td></tr>
    <tr><th>Médico Solicitante:</th><td><?= esc($paciente['medico_solicitante']) ?></td></tr>
    <tr><th>Laudo:</th><td>
        <?php if($paciente['laudo_url']): ?>
          <a href="<?= base_url($paciente['laudo_url']) ?>" target="_blank">Ver Laudo</a>
        <?php endif; ?>
    </td></tr>
    <tr><th>Observações:</th><td><?= esc($paciente['observacoes']) ?></td></tr>
    <tr><th>Data de Cadastro:</th><td><?= esc($paciente['data_cadastro']) ?></td></tr>
  </table>
  <a href="<?= base_url('pacientes') ?>" class="voltar">← Voltar</a>
</div>
<div class="area">
    <ul class="circles">
      <li></li><li></li><li></li><li></li><li></li>
      <li></li><li></li><li></li><li></li><li></li>
    </ul>
</div>

<style>

body {
    background: linear-gradient(135deg, rgb(2, 20, 99) 0%, rgb(28, 62, 176) 100%);
}
    /* Fundo Animado */

   .area {
  width: 100%;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  z-index: -1;
  overflow: hidden;
  pointer-events: none; 
}

.circles {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
  pointer-events: none; 
}

.circles li {
  position: absolute;
  display: block;
  list-style: none;
  width: 20px;
  height: 20px;
  background: #007bff6b;
  animation: animate 25s linear infinite;
  bottom: -150px;
}

a {
    font-family: Arial, sans-serif;
    text-decoration: none;
}
.circles li:nth-child(1) { left: 25%; width: 80px; height: 80px; animation-delay: 0s; }
.circles li:nth-child(2) { left: 10%; width: 20px; height: 20px; animation-delay: 2s; animation-duration: 12s; }
.circles li:nth-child(3) { left: 70%; width: 20px; height: 20px; animation-delay: 4s; }
.circles li:nth-child(4) { left: 40%; width: 60px; height: 60px; animation-delay: 0s; animation-duration: 18s; }
.circles li:nth-child(5) { left: 65%; width: 20px; height: 20px; animation-delay: 0s; }
.circles li:nth-child(6) { left: 75%; width: 110px; height: 110px; animation-delay: 3s; }
.circles li:nth-child(7) { left: 35%; width: 150px; height: 150px; animation-delay: 7s; }
.circles li:nth-child(8) { left: 50%; width: 25px; height: 25px; animation-delay: 15s; animation-duration: 45s; }
.circles li:nth-child(9) { left: 20%; width: 15px; height: 15px; animation-delay: 2s; animation-duration: 35s; }
.circles li:nth-child(10) { left: 85%; width: 150px; height: 150px; animation-delay: 0s; animation-duration: 11s; }

@keyframes animate {
  0% { transform: translateY(0) rotate(0deg); opacity: 1; border-radius: 0; }
  100% { transform: translateY(-1000px) rotate(720deg); opacity: 0; border-radius: 50%; }
}


    .detalhes-container {
        background-color: #f9f9f9;
        margin: 50px auto;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
        font-family: Arial, sans-serif;
        width: 50%; 
        max-width: 800px;
    }

    .detalhes-container h2 {
        color: #050159;
        margin-bottom: 25px;
        text-align: center;
        font-size: 1.8rem;
    }

    /* Estilo da Tabela em Desktop (Layout de duas colunas) */
    .detalhes-container table {
        width: 100%;
        border-collapse: collapse;
    }

    .detalhes-container tr {
        border-bottom: 1px solid #eee; /* Linha sutil para separar itens */
    }
    .detalhes-container tr:last-child {
        border-bottom: none;
    }

    .detalhes-container th {
        text-align: left;
        color: #050159;
        width: 64%;
        padding: 10px 0;
        vertical-align: top; 
        font-weight: bold;
    }

    .detalhes-container td {
        padding: 10px 0;
    }

    .voltar {
        display: inline-block;
        margin-top: 30px;
        padding: 10px 20px;
        background-color: #050159;
        color: #fff;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
    }
    .voltar:hover {
        background-color: #001686ff;
    }
    
    @media screen and (max-width: 768px) {
    
        .detalhes-container {
            width: 50%;
            margin: 20px auto;
            padding: 15px;
        }
        
        .detalhes-container table,
        .detalhes-container tr {
            display: block;
            width: 100%;
        }

        .detalhes-container tr {
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px dashed #ddd;
        }
        
        .detalhes-container tr:last-child {
            border-bottom: none;
        }

        .detalhes-container th {
            display: block;
            width: 100%;
            text-align: left;
            padding: 0;
            margin-bottom: 5px; /* Espaço entre rótulo e valor */
            font-size: 1rem;
            border-bottom: none;
        }

        .detalhes-container td {
            display: block;
            width: 100%;
            padding: 0;
            font-size: 0.95rem;
            margin-bottom: 15px; /* Espaçamento entre os campos */
        }
    
        .detalhes-container td a {
            color: #007bff;
        }
    }

    @media screen and (min-width: 768px) {
        .detalhes-container {

        }
    }
</style>
</body>
</html>

