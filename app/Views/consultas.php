<<<<<<< HEAD
<h2>Consultas Agendadas</h2>

<?php if (session()->getFlashdata('sucesso')): ?>
    <p style="color: green;"><?= session()->getFlashdata('sucesso') ?></p>
<?php endif; ?>

<?php if (!empty($consultas)): ?>
<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>Paciente</th>
            <th>Data</th>
            <th>Hora</th>
            <th>Motivo</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($consultas as $c): ?>
        <tr>
            <td><?= esc($c['nome_paciente']) ?></td>
            <td><?= date('d/m/Y', strtotime($c['data_consulta'])) ?></td>
            <td><?= esc($c['hora_consulta']) ?></td>
            <td><?= esc($c['motivo']) ?></td>
            <td><?= esc($c['status']) ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php else: ?>
<p>Nenhuma consulta cadastrada ainda.</p>
<?php endif; ?>
=======
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/consultas.css') ?>">
    <title>Consultas</title>
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
</div>

<h1>Consultas</h1>
  <div class="container-main">
  <div class="placeholder-container"><span class="placeholder">Nenhuma consulta agendada</span></div>
    

  </div>
    
    
</body>
</html>
>>>>>>> 8b77ee2d72a2e04167a97232eb6ef5ed11b6d0b7
