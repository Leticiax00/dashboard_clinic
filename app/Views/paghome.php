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
    <div class="scroll-container">
        <table>
            <thead>
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Data Nascimento</th>
    <th>Endereço</th>
    <th>RG</th>
    <th>CPF</th>
    <th>Convênio Médico</th>
    <th>Grupo Pacientes</th>
    <th>Sexo</th>
    <th>Médico Solicitante</th>
    <th>Laudo URL</th>
    <th>Observações</th>
    <th>Data </th>
    <th></th>
  </tr>
</thead>

           <tbody>
    <?php foreach ($pacientes as $paciente): ?>
        <tr>
            <td><?= esc($paciente['id']) ?></td>
            <td><?= esc($paciente['nome']) ?></td>
            <td><?= esc($paciente['data_nascimento']) ?></td>
            <td><?= esc($paciente['endereco']) ?></td>
            <td><?= esc($paciente['rg']) ?></td>
            <td><?= esc($paciente['cpf']) ?></td>
            <td><?= esc($paciente['convenio_medico']) ?></td>
            <td><?= esc($paciente['grupo_pacientes']) ?></td>
            <td><?= esc($paciente['sexo']) ?></td>
            <td><?= esc($paciente['medico_solicitante']) ?></td>
            <td><?= esc($paciente['laudo_url']) ?></td>
            <td><?= esc($paciente['observacoes']) ?></td>
            <td><?= esc($paciente['data_cadastro']) ?></td>
            <td>
                <a href="<?= base_url('pacientes/editar/'.$paciente['id']) ?>" class="button-editar" target="_blank">
                    Editar
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</tbody>
            
        </table>
    </div>
<?php else: ?>
    <span class="placeholder">Nenhum paciente cadastrado</span>
<?php endif; ?>

</body>

<script>
  function abrirModal() {
    alert("Cadastrar grupo de pacientes");
  }
</script>
<style>
  .button-editar {
    background: #050159;
    color: #fff;
    padding: 8px 12px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;
  }

  .button-editar:hover {
    background: #001686ff;
  }
</style>
</html>
