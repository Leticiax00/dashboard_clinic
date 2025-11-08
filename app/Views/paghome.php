<?php $dataSelecionada = $_GET['data'] ?? null; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pacientes | Web Clinic</title>
  <link rel="stylesheet" href="<?= base_url('css/paghome.css') ?>" />
</head>

<body>
  <div class="area">
    <ul class="circles">
      <li></li><li></li><li></li><li></li><li></li>
      <li></li><li></li><li></li><li></li><li></li>
    </ul>
  </div>
  
    <?= view('partials/header') ?> 

<?php
// Captura a data selecionada, se vier da tela do calendário
$dataSelecionada = $_GET['data'] ?? null;
?>

<?php if ($dataSelecionada): ?>
<?php else: ?>
  <h2>Lista de Pacientes</h2>
<?php endif; ?>

<?php if (!empty($pacientes)): ?>
  <div class="scroll-container table-responsive">
    <table>
      <thead>
        <tr>
          <th>Prontuário</th>
          <th>Nome</th>
          <th>CPF</th>
          <th>Data de Nascimento</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($pacientes as $paciente): ?>
          <tr>
            <td><?= '00' . esc($paciente['id']) ?></td>
            <td><?= ucwords(strtolower(esc($paciente['nome']))) ?></td>
            <td><?= esc($paciente['cpf']) ?></td>
            <td><?= date('d/m/Y', strtotime($paciente['data_nascimento'])) ?></td>
            <td class="buttons_actions">
              <div id="buttons_action">
                <a href="<?= base_url('pacientes/detalhes/'.$paciente['id']) ?>" class="button-detalhes">Ver Detalhes</a>
                <a href="<?= base_url('pacientes/editar/'.$paciente['id']) ?>" class="button-editar">Editar</a>
                <a href="<?= base_url('pacientes/excluir/'.$paciente['id']) ?>" class="button-excluir" onclick="return confirm('Deseja realmente excluir este paciente?');">Excluir</a>

                <!-- Adicionar consulta com data selecionada -->
                <?php if ($dataSelecionada): ?>
                  <a href="<?= base_url('consultas/criar/'.$paciente['id'].'?data='.$dataSelecionada) ?>" class="button-consulta">
                    Adicionar à consulta (<?= date('d/m/Y', strtotime($dataSelecionada)) ?>)
                  </a>
                <?php else: ?>
                  <a href="#" class="button-consulta" onclick="alert('Selecione um dia no calendário antes de adicionar a consulta.')">
                    Adicionar à consulta
                  </a>
                <?php endif; ?>
              </div> 
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

  .buttons_actions {
    color: #fff;
    padding: 8px 12px;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;
    font-size: 0.85rem;
  }

  #buttons_action {
    padding: 8px 12px;
    font-size: 0.85rem;
  }

  .button-editar:hover {
    background: #001686ff;
  }
</style>
</html>
