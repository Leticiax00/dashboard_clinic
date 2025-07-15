<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo de Clientes</title>
    <link rel="stylesheet" href="<?= base_url('css/group_pac.css') ?>">
</head>
<body>
    <div class="header">
        <?= view('partials/header') ?>
    </div>

    <div class="container">
        <form id="cad_group">
            <h1>Cadastrar grupo de pacientes</h1>
            <p> </p>
            <input type="text" placeholder="Ex.: Assú"> <br> <br></p>
            <button type="submit">Salvar</button>
        </form>
    </div>

</body>
</html>



