<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Clinic</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        } 

        body {
            background-color: #ffffff;
            color: #333;
        }

        .container {
            display: flex;
            min-height: 40vh;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .sidebar {
            width: 250px;
            background-color: #0b7dc5;
            color: white;
            padding: 20px 0;
        }

        .logo {
            text-align: center;
            padding: 10px 0;
            border-bottom: 1px solid #3d5166;
            margin-bottom: 30px;
        }

        .logo h2 {
            font-size: 1.3rem;
        }

        .nav-menu {
            list-style: none;
        }

        .nav-menu li {
            padding: 15px 25px;
            transition: all 0.3s;
        }

        .nav-menu li:hover {
            background-color: #16528f;
            cursor: pointer;
            border: 2px solid #0257b2;
        }

        .nav-menu li i {
            margin-right: 10px;
        }

        .main-content {
            flex: 1;
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .search-bar {
            padding: 10px 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
            width: 300px;
        }

        .user-info {
            display: flex;          
            align-items: center;
            
        }

        .user-info img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 10px;
            
        }

        .cards-container {
            display: flex;
            gap: 50px;
        }

        .card {
            background: white;
            border-radius: 8px;
            padding: 20px;
            flex: 1;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .card h3 {
            color: #7f8c8d;
            margin-bottom: 10px;
            font-size: 1rem;
        }

        .card p {
            font-size: 1.8rem;
            font-weight: bold;
            color: #2c3e50;
        }

        #openBtn {
        padding: 10px 20px;
        background-color: #007BFF;
        color: white;
        border: none;
        border-radius: 5%;
        cursor: pointer;
        margin: 10px;
        display: flex;
        position: absolute;
        top: 20px;
    }

    #sidebar {
      height: 100%;
      width: 210px;
      position: fixed;
      top: 0;
      left: -250px; 
      background-color: #007BFF;
      color: white;
      padding: 20px;
      transition: left 0.3s ease;
      
    }
    a {
    color: inherit;       
    text-decoration: none;
    }

    #sidebar.active {
      left: 0;
    }

    #closeBtn {
      background-color: #007BFF;
      color: rgb(255, 255, 255);
      border: none;
      padding: 5px 10px;
      cursor: pointer;
      float: right;
    }

    #closeBtn:hover {
        background-color: #f5f7fa;
        color: black;
        border-radius: 5px;
        cursor: pointer;
    }

    #sidebar ul li {
      margin: 15px 0;
    }

    </style>
</head>
<body>
    <div class="container">
        <div class="main-content">

            <div class="cards-container">
                <div class="card">
                    <h3>Pacientes Hoje</h3>
                    <p></p> <!-- Numero de pacientes -->
                </div>
                <div class="card">
                    <h3>Consultas Pendentes</h3>
                    <p></p> <!-- Quantidade -->
                </div>
                <div class="card">
                    <h3>Lucro Diário</h3>
                    <p></p> <!-- Somatório -->
                </div>
                <div class="card">
                    <h3>Exames Solicitados</h3>
                    <p></p> <!-- Solicitação de exames -->
                </div>
            </div>
            
     <button id="openBtn">☰ Menu</button>
    <div>

  <div id="sidebar">
    <button id="closeBtn">✕</button>
    <h2>Menu</h2>
    <ul class="nav-menu">
        <li href="<?= base_url('paghome')?>"><a class="dashboard" id="dashboard"><i>👨‍👩‍👧</i>Pacientes</li>
                <li id="medicos-"class="medicos"><i>🏥</i>Médicos</li>
                <li class="configuracao"><i>⚙️</i> Config</li>
            </ul>
  </div>
</div>

  <script>
    // ocultar sidebar 
    const sidebar = document.getElementById("sidebar");
    const openBtn = document.getElementById("openBtn");
    const closeBtn = document.getElementById("closeBtn");
    const dashboard = document.getElementById("dashboard");

    openBtn.onclick = () => {
      sidebar.classList.add("active");
    };

    closeBtn.onclick = () => {
      sidebar.classList.remove("active");
    };
    // sidebar 

    dashboard.onclick = () => {
  window.location.href = "paghome"; // ação do clique do botão
};

  </script>
</body>
</html>
