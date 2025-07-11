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

    <div class="pac" >
        <label for="opcoes">Grupo de Pacientes</label> <br>

        <select id="group-pac" name="opcao">
        <option value="1">Valor 1</option>
        <option value="2">Valor 2</option>
        <option value="3">Valor 3</option>
        </select>
    </div>

    <div class="sexo" >
        <label for="opcoes">Sexo</label> <br>

        <select id="opcoes" name="opcao">
        <option value="1">Masculino</option>
        <option value="2">Feminino</option>
        <option value="3">Outros</option>
        </select>
    </div>

    <div class="arquivo" id="UploadForm" method="post" enctype="multipart/form-data">
        <label for="arquivo">Anexar Laudo:</label>
        <input type="file" name="arquivo">     
        <button type="submit" class="upload">Upload arquivo</button>
    </div>
   
<p id="mensagem"></p>
</form>

<br> <br>
    
    <button type="submit" id="button_salva">Salvar</button>
    
</body>
<style>

body {
    font-family: Arial, Helvetica, sans-serif;
    color: #57575f;
}

.arquivo {
    display: flex;
    justify-content: center;
    margin-bottom: 10px;
}

.date {
    color:  #57575f;;
}

#opcoes {
    font-size: 1rem;
    width: 10rem;
    height: 30px;
    text-align: center;
    margin-bottom: 25px;
}

.pac {
    display: flex;
    justify-content: center;
    text-align: center;
    margin: 10px;
}

#group-pac {
    font-size: 1rem;
    width: 10rem;
    height: 30px;
    text-align: center;
    
}

.cadastroP {
    background-color: rgb(255, 255, 255);
    min-width: 70vh;
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
    max-width: 100vh;
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
    border: none;
    border-bottom: 2px solid #ccc;
    width: 30vh;
    outline: none;
    margin: 10px
    
}

 input:focus {
    border-color: #007BFF;
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

<script>
  const form = document.getElementById('uploadForm');
  const msg = document.getElementById('mensagem');

  form.addEventListener('submit', async function(e) {
    e.preventDefault();

    const formData = new FormData(form);
    msg.textContent = "⏳ Enviando arquivo...";

    const resposta = await fetch('upload.php', {
      method: 'POST',
      body: formData
    });

    const texto = await resposta.text();
    msg.textContent = texto;
  });
</script>
</html>