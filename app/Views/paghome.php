<<<<<<< HEAD
<?php $dataSelecionada = $_GET['data'] ?? null; ?>

=======
>>>>>>> 8b77ee2d72a2e04167a97232eb6ef5ed11b6d0b7
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<<<<<<< HEAD
  <title>Pacientes | Web Clinic</title>
=======
  <title>Pacientes</title>
>>>>>>> 8b77ee2d72a2e04167a97232eb6ef5ed11b6d0b7
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

<<<<<<< HEAD
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


=======
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

>>>>>>> 8b77ee2d72a2e04167a97232eb6ef5ed11b6d0b7
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

<<<<<<< HEAD
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

=======
>>>>>>> 8b77ee2d72a2e04167a97232eb6ef5ed11b6d0b7
  .button-editar:hover {
    background: #001686ff;
  }
</style>
</html>
