<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo de Clientes</title>
</head>
<body>
    <?= view('partials/header') ?>
    <div class="container">
        <form id="cad_group">
            <h1>Cadastrar grupo de pacientes</h1>
            <input type="text" placeholder="Nome do Grupo"> <br> <br>
            <button type="submit">Salvar</button>
        </form>
    </div>

</body>
<style>

    body {
        font-family: Arial, Helvetica, sans-serif;
        color:  #57575f; ;
    }
    #cad_group {
        padding: 10px;
        max-width: 100vh;
        border-radius: 5%;
        box-shadow: 0 5px 20px;
        justify-content: center;
        align-items: center;
        
    }

    .container {
        justify-content: center;
        background-color: rgb(255, 255, 255);
        min-width: 40vh;
        box-shadow:  black;
        text-align: center;
        place-items: center;
    }

    input {
        border-left: none;
        border-right: none;
        border-top: none;
        font-size: 1em;
    }

    button {
        background-color: #007BFF;
        color: white;
        width: 10px;
        font-size: 15px;
        border:none;
        cursor: pointer;
        min-width: 20vh;
        height: 30px;
    }

    button:hover {
    background-color: #024d9d;
}

    .form {
        justify-content: center;
        align-items: center;
    }

     /*#openBtn {
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
        } */

        
</style>

</html>