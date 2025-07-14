<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Médicos Solicitantes</title>
</head>

<body>
    <div class="header">
        <?= view('partials/header')?>
    </div>

  <div class="container">
    <h1>Médico Solicitante</h1>
    <p>Médicos que solicitam o exame</p>
    <input type="text" placeholder="Ex.:Flávio Bezerra">

    <h2>Especialidade</h2>
    <input type="text" placeholder="Ex.:Gastroenterologista" />
    <br />
    <button type="submit">Salvar</button>
  </div>
</body>

  <style>
    body {
      max-height: 300vh;
      max-width: 200vh;
      justify-content: center;
      align-items: center;
      
    }

    .header {
    gap: 100px;              
    margin: 0; 
    
  }

  .header a {
    color: #ffffff;
    text-decoration: none;
    border-radius: 4px;
    text-decoration: none;
    margin-left: 0;
  }

  .header a:hover {
    color: white;
  }


    .container {
      background: white;
      color: #57575f;
      padding: 5px 10px;
      box-shadow: 0 5px 20px;
      border-radius: 20px;
      max-width: 400px;
      width: 100%;
      text-align: center;
      justify-content: center;
      
    }

    .container input {
      border: none;
      border-bottom: 2px solid #ccc;
      font-size: 18px;
      width: 80%;
      padding: 10px;
      margin-bottom: 20px;
      outline: none;
    }

    .container input:focus { /* Quando está em foco, o usuário interagindo com ele */
      border-color: #007BFF; /* interação das linhas do imput */
    }

    button {
      color: white;
      background-color: #007BFF;
      border: none;
      padding: 10px 30px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }

    button:hover {
      background-color: #024d9d;
    }
  </style>


</html>
