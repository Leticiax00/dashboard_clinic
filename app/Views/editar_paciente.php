<<<<<<< HEAD
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Paciente | WebClinic</title>
    <link rel="stylesheet" href="<?= base_url('css/cadastro_pac.css') ?>">
    <script src="<?= base_url('js/cadastro_pac.js') ?>"></script> 
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
</head>
<body>

=======
>>>>>>> 8b77ee2d72a2e04167a97232eb6ef5ed11b6d0b7
<div class="area">
    <ul class="circles">
      <li></li><li></li><li></li><li></li><li></li>
      <li></li><li></li><li></li><li></li><li></li>
    </ul>
<<<<<<< HEAD
</div>

<?= view('partials/header') ?>
<br>

<form class="formPaciente" action="<?= base_url('pacientes/editar/'.$paciente['id']) ?>" method="post" enctype="multipart/form-data">
    
    <h1 class="titulo-paciente">Editar Paciente</h1>

    <div class="prontuario">
        <label for="prontuario">Prontuário: </label>
        <span id="prontuario"><?= '00' . esc($paciente['id']) ?></span>
    </div>
    
    <div class="Nome">
        <div class="form-group">
            <input type="text" name="nome" placeholder="Nome" value="<?= esc($paciente['nome']) ?>"><br><br>
        </div>
    </div>

    <div class="DataNasc">
        <div class="form-group">
            <input type="date" name="data_nasc" class="date" value="<?= esc($paciente['data_nascimento']) ?>"><br><br>
        </div>
    </div>

    <div class="form-group">
        <input type="text" name="endereco" placeholder="Endereço" value="<?= esc($paciente['endereco']) ?>"><br><br>
    </div>

    <div class="form-group">
        <input type="text" name="rg" id="rg" placeholder="RG" value="<?= esc($paciente['rg']) ?>"><br><br>
    </div>

    <div class="form-group">
        <input type="text" name="cpf" id="cpf" placeholder="CPF" value="<?= esc($paciente['cpf']) ?>"><br><br>
    </div>

    <div class="form-group">
        <input type="text" name="conv_med" placeholder="Convênio Médico" value="<?= esc($paciente['convenio_medico']) ?>"><br><br>
    </div>

    <div class="pac">
        <label for="group-pac">Grupo de Pacientes</label> <br>
        <select id="group-pac" name="grupo_pacientes">
            <option value="1" <?= $paciente['grupo_pacientes']=='1'?'selected':'' ?>>Valor 1</option>
            <option value="2" <?= $paciente['grupo_pacientes']=='2'?'selected':'' ?>>Valor 2</option>
            <option value="3" <?= $paciente['grupo_pacientes']=='3'?'selected':'' ?>>Valor 3</option>
        </select>
    </div>

    <div class="sexo">
        <label for="sexo">Sexo</label> <br>
        <select id="sexo" name="sexo">
            <option value="Masculino" <?= $paciente['sexo']=='Masculino'?'selected':'' ?>>Masculino</option>
            <option value="Feminino" <?= $paciente['sexo']=='Feminino'?'selected':'' ?>>Feminino</option>
            <option value="Outros" <?= $paciente['sexo']=='Outros'?'selected':'' ?>>Outros</option>
        </select>
    </div>

    <div class="med_solicitante">
        <label for="medico-solicitante">Médico Solicitante</label> <br>
        <input type="text" name="medico_solicitante" placeholder="Nome do Médico" value="<?= esc($paciente['medico_solicitante']) ?>">
    </div>

    <div class="arquivo" id="UploadForm">
        <label for="arquivo">Anexar Laudo:</label>
        <input type="file" name="arquivo" class="ficheiro"><br>
        <?php if($paciente['laudo_url']): ?>
            <a href="<?= base_url($paciente['laudo_url']) ?>" target="_blank">Arquivo Atual</a>
        <?php endif; ?>
        <br><br>
        <button type="submit" class="upload">Atualizar arquivo</button>
    </div>

    <p id="mensagem"></p>

    <div class="observacoes">
        <label for="observacoes">Observações</label> <br>
        <textarea style="border: 0.5px solid #ccc; width: 100%; border-radius: 14px;" id="observacoes" name="observacoes" rows="4" cols="50" maxlength="500"><?= esc($paciente['observacoes']) ?></textarea><br><br>
    </div>

    <div class="form-group form-actions" style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: center;">
        <button type="submit" id="button_salva" style="display: flex; flex-direction: row; flex-wrap: nowrap; align-content: flex-start; justify-content: center; align-items: center;">Salvar Alterações</button>
    </div>

  <a style= "width: 25%; justify-content: center;" href="<?= base_url('pacientes') ?>" class="voltar">← Voltar</a>
    
    </div>

</form>

<script>
$('#rg').mask('000.000.000');
$('#cpf').mask('000.000.000-00');

document.querySelector('.upload').addEventListener('click', function(e) {
  const fileInput = document.querySelector('.ficheiro');
  if (!fileInput.value) {
    e.preventDefault();
    alert('Por favor, selecione um arquivo antes de fazer o upload.');
    return;
  }
});

document.getElementById('button_salva').addEventListener('click', function(e) {
  const form = document.querySelector('.formPaciente');
  const campos = form.querySelectorAll('input[type="text"], input[type="date"], select');
  let todosPreenchidos = true;

  campos.forEach(function(campo) {
    if (!campo.value.trim()) {
      todosPreenchidos = false;
      campo.style.borderBottom = "1px solid red";
    } else {
      campo.style.border = "";
    }
  });

  if (!todosPreenchidos) {
    e.preventDefault();
    alert('Por favor, preencha todos os campos antes de salvar');
  } else {
    document.getElementById('mensagem').textContent = 'Enviando...';
  }
});
</script>

</body>
</html>
=======
  </div>

<h2>Editar Paciente</h2>
<div class="form-container">
<form action="<?= base_url('pacientes/atualizar/'.$paciente['id']) ?>" method="post">
    <label>Nome:</label>
    <input type="text" name="nome" value="<?= esc($paciente['nome']) ?>"><br>

    <label>Data de Nascimento:</label>
    <input type="date" name="data_nascimento" value="<?= esc($paciente['data_nascimento']) ?>"><br>

    <label>Endereço:</label>
    <input type="text" name="endereco" value="<?= esc($paciente['endereco']) ?>"><br>

    <label>RG:</label>
    <input type="text" name="rg" value="<?= esc($paciente['rg']) ?>"><br>

    <label>CPF:</label>
    <input type="text" name="cpf" value="<?= esc($paciente['cpf']) ?>"><br>

    <label>Convênio Médico:</label>
    <input type="text" name="convenio_medico" value="<?= esc($paciente['convenio_medico']) ?>"><br>

    <label>Grupo Pacientes:</label>
    <input type="text" name="grupo_pacientes" value="<?= esc($paciente['grupo_pacientes']) ?>"><br>

    <label>Sexo:</label>
    <input type="text" name="sexo" value="<?= esc($paciente['sexo']) ?>"><br>

    <label>Médico Solicitante:</label>
    <input type="text" name="medico_solicitante" value="<?= esc($paciente['medico_solicitante']) ?>"><br>

    <label>Laudo URL:</label>
    <input type="text" name="laudo_url" value="<?= esc($paciente['laudo_url']) ?>"><br>

    <label>Observações:</label>
    <textarea name="observacoes"><?= esc($paciente['observacoes']) ?></textarea><br>

    <button type="submit">Salvar</button>
</form>
</div>

<style> 
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }

    .form-container {
        max-width: 600px;
        margin: auto;
        color: white;
        justify-content: center;
    }

    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    
  }
  @property --rotate {
  syntax: "<angle>";
  initial-value: 132deg;
  inherits: false;
}

@import url('https://fonts.googleapis.com/css?family=Exo:400,700');


:root {
  --card-height: 20vh; 
  --card-width: 50vh;
}

.area {
  width: 100%;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 0; /* Fica atrás de tudo */
  overflow: hidden;
  pointer-events: none; /* Não bloqueia cliques */
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

    form {
        background: #000b38ff;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="date"],
    textarea {
        width: 10%;
        padding: 8px;
        margin-bottom: 10px;
        border-bottom: 1px solid #717171ff;
        border-left: none;
        border-right: none;
        border-top: none;
        border-radius: 4px;
    }

    button {
        background: #050159;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background: #001686ff;
    }

</style>
>>>>>>> 8b77ee2d72a2e04167a97232eb6ef5ed11b6d0b7
