<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes</title>
    <link rel="stylesheet" href="<?= base_url('css/cadastro_pac.css') ?>">
    <script src="<?= base_url('js/cadastro_pac.js') ?>"></script> 
</head>
<body>
    <div class="header">
    <?= view('partials/header') ?>
    <a href="<?= base_url('/')?>"> Home</a>
    <a href="<?= base_url('cadastro_pac')?>"> Novo Paciente</a>
    <button onclick="abrirModal()" class="botao_pac">Grupo de Pacientes</button>
    
    </div>
    
    <div class="cadastroP">
    <h1>Novo Paciente</h1>
    <br>
    <form class="formPaciente">
     <div class="form-group">
        <input type="text" name="nome" placeholder="Nome"><br> <br>
    </div>

    <div class="form-group">
        <input type="date" name="data_nasc" class="date"><br> <br>
    </div>

    <div class="form-group">
        <input type="text" name="endereco" placeholder="Endereço"><br> <br>
    </div>

    <div class="form-group">
        <input type="text" name="rg" placeholder="RG"><br> <br>
    </div>

    <div class="form-group">
        <input type="text" name="cpf" placeholder="CPF"><br> <br>
    </div>

    <div class="form-group">
        <input type="text" name="conv_med" placeholder="Convênio Médico"><br> <br>
    </div>

    <div class="pac" > <!-- Grupo de pacientes -->
        <label for="opcoes">Grupo de Pacientes</label> <br>

        <select id="group-pac" name="opcao">
        <option value="1">Valor 1</option>
        <option value="2">Valor 2</option>
        <option value="3">Valor 3</option>
        </select>
    </div>

    <div class="sexo" > <!-- Opções de sexo de paciente -->
        <label for="opcoes">Sexo</label> <br>

        <select id="opcoes" name="opcao">
        <option value="1">Masculino</option>
        <option value="2">Feminino</option>
        <option value="3">Outros</option>
        </select>
    </div>

    <div class="med_solicitante" > <!-- Opções médicos solicitantes -->
        <label for="opcoes">Médico Solicitante</label> <br>

        <select id="opcoes" name="opcao">
        <option value="1">valor 1</option>
        <option value="2">valor 2</option>
        <option value="3">vlor 3</option>
        </select>
    </div>

    <div class="arquivo" id="UploadForm" method="post" enctype="multipart/form-data">
        <label for="arquivo">Anexar Laudo:</label>
        <input type="file" name="arquivo" class="ficheiro">    
        <br> <br>
        <button type="submit" class="upload">Upload arquivo</button>
    </div>
    <p id="mensagem"></p>
</form>
<br> 
<button type="submit" id="button_salva">Salvar</button>
</body>



</html>