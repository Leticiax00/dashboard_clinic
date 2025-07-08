<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes</title>
</head>
<body>
    <div class="cadastroP">
    <h1>Novo Paciente</h1>
    <form class="formPaciente">
     <div class="form-group">
        <input type="text" name="nome" placeholder="Nome"><br> <br>
    </div>

    <div class="form-group">
        <input type="date" name="data_nasc" placeholder="Nascimento"><br> <br>
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

    <div class="arquivo">
    <label for="arquivo">Anexar Laudo:</label>
    <input type="file" name="arquivo" id="arquivo">
    </div>
</form>
<br> <br>
    <button type="submit" id="button_salva">Salvar</button>
    
</body>
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    color: #57575f;
}


.cadastroP {
    
    padding: 5%;
    background-color: rgb(255, 255, 255);
    min-width: 50vh;
    box-shadow:  black;
    text-align: center;
    place-items: center;
}

.form-group {
    flex-direction: column;
    text-align: center;
}

.formPaciente {
    padding: 20px;
    width: 70vh;
    border-radius: 5%;
    box-shadow: 0 5px 20px;
    justify-content: center;
    align-items: center;
}

form {
    
    display: grid; 
    grid-template-columns: 1fr 1fr;
    gap: 5px 10px;
   
}

input {
    font-size: 18px;
    border-left: none;
    border-top: none;
    border-right: none;
    width: 30vh;;
}

#button_salva {
    padding: 8px 30px;
    background-color: #007BFF;
    color: white;
    border: none;
    cursor: pointer;
    min-width: 40vh;
    height: 40px;
}

#button_salva:hover {
    background-color: #024d9d;
}
</style>
</html>