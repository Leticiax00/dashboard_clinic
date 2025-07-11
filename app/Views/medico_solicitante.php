<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Médicos Solicitantes</title>
</head>

<body>
    <header>
        <?= view('partials/header')?>
        <h1>teste</h1>
    </header>

  <div class="container">
    <h1>Médico Solicitante</h1>
    <p>Médicos que solicitaram o exame a seguir</p>
    <input type="text" placeholder="Digite aqui" />
    <br />
    <button type="submit">Salvar</button>
  </div>
</body>

  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;    
      min-height: 100vh;      
      margin: 0;
      font-family: sans-serif;
    }

    .header {
    display: flex;
    gap: 20px;              /* espaço entre os links */
    margin: 30px 0 0 30px; 
    
  }

  .header a {
    color: #ffffff;
    text-decoration: none;
    padding: 8px 16px;
    border: none;
    border-radius: 4px;
    background-color: #007BFF;
  }

  .header a:hover {
    background-color: #024d9d;
    color: white;
  }


    .container {
      background: white;
      color: #57575f;
      padding: 40px;
      box-shadow: 0 5px 20px;
      border-radius: 20px;
      max-width: 400px;
      width: 100%;
      text-align: center;
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
      border-color: #007BFF;
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
