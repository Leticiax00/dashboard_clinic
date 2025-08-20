<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes | WebClinic</title>
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

<div class="header">
    <?= view('partials/header') ?>
    <a href="<?= base_url('inicial')?>" class="button_home"> Home</a>
    <a href="<?= base_url('cadastro_pac')?>"> Novo Paciente</a>
    <button onclick="abrirModal()" class="botao_pac">Grupo de Pacientes</button>
</div>
<br>

<h1>Novo Paciente</h1>
<br>

<form class="formPaciente" action="<?= base_url('pacientes/salvar') ?>" method="post" enctype="multipart/form-data">

    <div class="Nome">
        <div class="form-group">
            <input type="text" name="nome" placeholder="Nome"><br><br>
        </div>
    </div>

    <div class="DataNasc">
        <div class="form-group">
            <input type="date" name="data_nasc" class="date"><br><br>
        </div>
    </div>

    <div class="form-group">
        <input type="text" name="endereco" placeholder="Endereço"><br><br>
    </div>

    <div class="form-group">
        <input type="text" name="rg" id="rg" placeholder="RG"><br><br>
    </div>

    <div class="form-group">
        <input type="text" name="cpf" id="cpf" placeholder="CPF"><br><br>
    </div>

    <div class="form-group">
        <input type="text" name="conv_med" placeholder="Convênio Médico"><br><br>
    </div>

    <div class="pac"> <!-- Grupo de pacientes -->
        <label for="group-pac">Grupo de Pacientes</label> <br>
        <select id="group-pac" name="grupo_pacientes">
            <option value="1">Valor 1</option>
            <option value="2">Valor 2</option>
            <option value="3">Valor 3</option>
        </select>
    </div>

    <div class="sexo"> <!-- Opções de sexo de paciente -->
        <label for="sexo">Sexo</label> <br>
        <select id="sexo" name="sexo">
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Outros">Outros</option>
        </select>
    </div>

    <div class="med_solicitante"> <!-- Opções médicos solicitantes -->
        <label for="medico-solicitante">Médico Solicitante</label> <br>
        <select id="medico-solicitante" name="medico_solicitante">
            <option value="valor 1">Valor 1</option>
            <option value="valor 2">Valor 2</option>
            <option value="valor 3">Valor 3</option>
        </select>
    </div>

    <div class="arquivo" id="UploadForm">
        <label for="arquivo">Anexar Laudo:</label>
        <input type="file" name="arquivo" class="ficheiro"><br><br>
        <button type="submit" class="upload">Upload arquivo</button>
    </div>

    <p id="mensagem"></p>

    <div class="observacoes">
        <label for="observacoes">Observações</label> <br>
        <textarea id="observacoes" name="observacoes" placeholder="Digite suas observações aqui..." rows="4" cols="50" maxlength="500"></textarea><br><br>
        <button type="submit" id="button_salva">Salvar</button>
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

// Validação dos campos do formulário ao clicar em "Salvar"
document.getElementById('button_salva').addEventListener('click', function(e) {
  const form = document.querySelector('.formPaciente');
  const campos = form.querySelectorAll('input[type="text"], input[type="date"], select');
  let todosPreenchidos = true;

  campos.forEach(function(campo) {
    if (!campo.value.trim()) {
      todosPreenchidos = false;
    }
  });

  if (!todosPreenchidos) {
    alert('Por favor, preencha todos os campos antes de salvar');
  } else {
    document.getElementById('mensagem').textContent = '';
  }
});
</script>

</body>
</html>
