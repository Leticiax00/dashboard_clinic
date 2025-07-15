<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Médicos Solicitantes</title>
  <link rel="stylesheet" href="<?= base_url('css/medico_solicitante.css') ?>" />
</head>

<body>
    <div class="header">
        <?= view('partials/header')?>
    </div>

    <div class="container">
        <div class="form-medico">
            <h1>Médico Solicitante</h1>
            <p>Médicos que solicitam o exame</p>
            <input type="text" placeholder="Ex.:Flávio Bezerra">
            
            <h2>Especialidade</h2>
            <input type="text" placeholder="Ex.:Gastroenterologista" />
            <br />
            <button type="submit">Salvar</button>
        </div>
    </div>
</body>

</html>
