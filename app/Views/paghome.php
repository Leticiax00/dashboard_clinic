<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pacientes</title>
  <link rel="stylesheet" href="<?= base_url('css/paghome.css') ?>" />
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
    <a href="<?= base_url('inicial')?>" class="home_pac">Home</a>
    <a href="<?= base_url('cadastro_pac')?>"> Novo Paciente</a>
    <button onclick="abrirModal()" class="botao_pac">Grupo de Pacientes</button>
  </div>

  <?php if (!empty($pacientes)): ?>
    <ul>
        <?php foreach ($pacientes as $paciente): ?>
            <li><?= esc($paciente['nome']) ?> - <?= esc($paciente['telefone']) ?></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <span class="placeholder">Nenhum paciente cadastrado</span>
<?php endif; ?>

  
</body>

<script>
  function abrirModal() {
    alert("Cadastrar grupo de pacientes");
  }
</script>
</html>
