<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo de Clientes | Web Clinic</title>
    <link rel="stylesheet" href="<?= base_url('css/group_pac.css') ?>">
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

    <div class="container">
<<<<<<< HEAD
    <form id="cad_group" method="post" action="/grupos/salvar"> 
    <h1>Cadastrar grupo de pacientes</h1>
    <input type="text" name="nome_grupo" placeholder="Ex.: Pacientes Assú" required>
    
    <button type="submit">Salvar</button>
    
    </form>
    </div>

<style>
body {
    background: linear-gradient(135deg, rgb(2, 20, 99) 0%, rgb(28, 62, 176) 100%);
}

.area {
  width: 100%;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  z-index: -1;
  overflow: hidden;
  pointer-events: none; 
}

.circles {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
  pointer-events: none; 
}

.circles li {
  position: absolute;
  display: block;
  list-style: none;
  width: 20px;
  height: 20px;
  background: #007bff6b;
  animation: animate 25s linear infinite;
  bottom: -150px;
}

a {
    font-family: Arial, sans-serif;
    text-decoration: none;
}
.circles li:nth-child(1) { left: 25%; width: 80px; height: 80px; animation-delay: 0s; }
.circles li:nth-child(2) { left: 10%; width: 20px; height: 20px; animation-delay: 2s; animation-duration: 12s; }
.circles li:nth-child(3) { left: 70%; width: 20px; height: 20px; animation-delay: 4s; }
.circles li:nth-child(4) { left: 40%; width: 60px; height: 60px; animation-delay: 0s; animation-duration: 18s; }
.circles li:nth-child(5) { left: 65%; width: 20px; height: 20px; animation-delay: 0s; }
.circles li:nth-child(6) { left: 75%; width: 110px; height: 110px; animation-delay: 3s; }
.circles li:nth-child(7) { left: 35%; width: 150px; height: 150px; animation-delay: 7s; }
.circles li:nth-child(8) { left: 50%; width: 25px; height: 25px; animation-delay: 15s; animation-duration: 45s; }
.circles li:nth-child(9) { left: 20%; width: 15px; height: 15px; animation-delay: 2s; animation-duration: 35s; }
.circles li:nth-child(10) { left: 85%; width: 150px; height: 150px; animation-delay: 0s; animation-duration: 11s; }

@keyframes animate {
  0% { transform: translateY(0) rotate(0deg); opacity: 1; border-radius: 0; }
  100% { transform: translateY(-1000px) rotate(720deg); opacity: 0; border-radius: 50%; }
}

</style>

=======
        <form id="cad_group">
            <h1>Cadastrar grupo de pacientes</h1>
            <p> </p>
            <input type="text" placeholder="Ex.: Pacientes Assú"> <br> <br></p>
            <button type="submit">Salvar</button>
        </form>
    </div>

>>>>>>> 8b77ee2d72a2e04167a97232eb6ef5ed11b6d0b7
</body>
</html>



