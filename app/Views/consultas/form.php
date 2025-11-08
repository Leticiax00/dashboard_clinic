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

    <?= view('partials/header') ?>

<h2>Agendar Consulta — <?= esc($paciente['nome']) ?></h2>

<form action="<?= base_url('consultas/salvar') ?>" method="post">
    <input type="hidden" name="paciente_id" value="<?= esc($paciente['id']) ?>">
    <input type="hidden" name="data_consulta" value="<?= esc($dataSelecionada) ?>">

    <p><strong>Data selecionada:</strong> <?= date('d/m/Y', strtotime($dataSelecionada)) ?></p>

    <label>Hora:</label>
    <input type="time" name="hora_consulta" required><br><br>

    <label>Motivo:</label>
    <input type="text" name="motivo" placeholder="Motivo da consulta"><br><br>

    <label>Observações:</label>
    <textarea name="observacoes" rows="4"></textarea><br><br>

    <button type="submit">Salvar Consulta</button>
</form>



</body>
</html>

