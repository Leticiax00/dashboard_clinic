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

    <style>
    /* Estilos adicionados para centralizar o título dentro da área branca do formulário */
    .formPaciente {
        background: #fff;
        padding: 28px 24px 24px;
        border-radius: 8px;
        max-width: 900px;
        margin: 24px auto;
        box-shadow: 0 6px 18px rgba(0,0,0,0.06);
        position: relative;
    }
    .formPaciente .titulo-paciente {
        text-align: center;
        margin: 0 0 16px;
        font-size: 2rem;
        font-weight: 700;
        color: #222;
    }
    </style>
</head>
<body>

<div class="area">
    <ul class="circles">
      <li></li><li></li><li></li><li></li><li></li>
      <li></li><li></li><li></li><li></li><li></li>
    </ul>
</div>

    <?= view('partials/header') ?>

<form class="formPaciente" action="<?= base_url('pacientes/salvar') ?>" method="post" enctype="multipart/form-data">
    <h1 class="titulo-paciente">Novo Paciente</h1>

    <div class="form-group">
        <label for="nome">Nome Completo</label>
        <input type="text" id="nome" name="nome" placeholder="Digite o nome completo">
    </div>

    <div class="form-group">
        <label for="data_nasc">Data de Nascimento</label>
        <input type="date" id="data_nasc" name="data_nasc" class="date">
    </div>

    <div class="form-group">
        <label for="endereco">Endereço</label>
        <input type="text" id="endereco" name="endereco" placeholder="Rua, número, bairro">
    </div>

    <div class="form-group">
        <label for="rg">RG</label>
        <input type="text" id="rg" name="rg" placeholder="Ex: 99.999.999-9">
    </div>

    <div class="form-group">
        <label for="cpf">CPF</label>
        <input type="text" id="cpf" name="cpf" placeholder="Ex: 999.999.999-99">
    </div>

    <div class="form-group">
        <label for="conv_med">Convênio Médico</label>
        <input type="text" id="conv_med" name="conv_med" placeholder="Nome do convênio">
    </div>

   <div class="form-group">
    <label for="group-pac">Grupo de Pacientes</label>
    <select id="group-pac" name="grupo_pacientes">
        <option value="" disabled selected>Selecione o Grupo</option>
        
        <?php 
        if (isset($grupos_pacientes) && is_array($grupos_pacientes) && !empty($grupos_pacientes)): 
            foreach ($grupos_pacientes as $grupo): 
        ?>
            <option value="<?php echo $grupo['nome_grupo']; ?>">
                <?php echo $grupo['nome_grupo']; ?> 
            </option>
        <?php 
            endforeach;
        endif; 
        ?>
    </select>
</div>

    <div class="form-group">
        <label for="sexo">Sexo</label>
        <select id="sexo" name="sexo">
            <option value="" disabled selected>Selecione o Sexo</option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Outros">Outros</option>
        </select>
    </div>

    <div class="form-group">
        <label for="medico-solicitante">Médico Solicitante</label>
        <input type="text" id="medico-solicitante" name="medico_solicitante" placeholder="Nome do Médico">
    </div>

    <div class="form-group arquivo">
        <label for="arquivo">Anexar Laudo (Opcional)</label>
        <div class="file-upload-container">
            <input type="file" name="arquivo" class="ficheiro" id="arquivo">
            <button type="button" class="upload">Upload</button>
        </div>
    </div>
    
    <p id="mensagem"></p>

    <div class="form-group observacoes">
        <label for="observacoes">Observações</label>
        <textarea id="observacoes" name="observacoes" placeholder="Digite suas observações aqui..." rows="4" maxlength="500"></textarea>
    </div>

    <div class="form-group form-actions" style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: center;">
        <button type="submit" id="button_salva" style="display: flex; flex-direction: row; flex-wrap: nowrap; align-content: flex-start; justify-content: center; align-items: center;">Salvar Cadastro</button>
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
      campo.style.borderBottom = "1px solid red"; // destaca campo vazio
    } else {
      campo.style.border = ""; // remove destaque se preenchido
    }
  });

  if (!todosPreenchidos) {
    e.preventDefault(); // impede envio do formulário
    alert('Por favor, preencha todos os campos antes de salvar');
  } else {
    document.getElementById('mensagem').textContent = 'Enviando...';
    // o form será enviado normalmente
  }
});

</script>

</body>
</html>
