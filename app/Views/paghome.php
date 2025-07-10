<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <div class="card">
                <div class="container">
                    <h2>Pacientes</h3>
             <!-- Numero de pacientes -->
                </div>
</div>
    <header>
    <nav class="menu">
        
<a id="openBtn" href="<?= base_url('cadastro_pac')?>">☰ Novo Paciente</a>
<a id="groupBtn" href="<?= base_url('group_pac')?>">☰ Grupo de pacientes</a>

   </nav>    
    </header>

</body>

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

        .card { /* Container pai */
            display: flex;
            justify-content: center; /* centraliza horizontal */
            align-items: center;     /* centraliza vertical */
            min-height: 50vh;       /* ocupa tela toda */
        }

        .container {
            display: flex;
            min-height: 30vh;
            align-items: center;
            background-color: white;
            border-radius: 1rem; 
            box-shadow:  0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 2rem;  
            flex-direction: column;
            width: 100%;
            max-width: 30rem; /* Largura do card */
            margin: 0 auto; /* Posição */
             
        }
        header {
            display: flex;
            align-items: center;        
            color: white;
            position: fixed;
            top: 0;
            left: 0;
            max-width: 500%;
            display: flex
        }

        .menu {
            color: white;
            border-radius: 5px;
            margin-left: 110px;
            text-decoration: none;
            display: flex;
            
        }

        /* SideBar */
        #openBtn {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5%;
            cursor: pointer;
            margin: 10px;
            display: flex;
            text-decoration: none;
        }

        #groupBtn {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5%;
            cursor: pointer;
            margin: 10px;
            display: inline;
            text-decoration: none;
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

    #openBtn {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5%;
            cursor: pointer;
            margin: 10px;
            display: flex;
            
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

    /* SideBar */

</style>
<script>

        const openBtn = document.getElementById("openBtn");
        const groupBtn = document.getElementById("groupBtn");

        openBtn.onclick = () => {
        window.location.href = "<?= base_url('cadastro_pac') ?>";
    };

      groupBtn.onclick = () => {
        window.location.href = "<?= base_url('group_pac') ?>";
    };
</script>
</html>