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

<div class="area">
    <ul class="circles">
      <li></li><li></li><li></li><li></li><li></li>
      <li></li><li></li><li></li><li></li><li></li>
    </ul>
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
