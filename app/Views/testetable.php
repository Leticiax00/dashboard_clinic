<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela HTML Completa</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
            padding: 20px;
            color: #333;
        }
        
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }
        
        table thead tr {
            background-color: #3498db;
            color: white;
            text-align: left;
        }
        
        table th,
        table td {
            padding: 12px 15px;
        }
        
        table tbody tr {
            border-bottom: 1px solid #dddddd;
        }
        
        table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }
        
        table tbody tr:last-of-type {
            border-bottom: 2px solid #3498db;
        }
        
        table tbody tr:hover {
            background-color: #e3f2fd;
            cursor: pointer;
        }
        
        @media (max-width: 768px) {
            table {
                display: block;
                overflow-x: auto;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tabela HTML Moderna</h1>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Cidade</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>João Silva</td>
                    <td>joao@exemplo.com</td>
                    <td>São Paulo</td>
                    <td>Ativo</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Maria Oliveira</td>
                    <td>maria@exemplo.com</td>
                    <td>Rio de Janeiro</td>
                    <td>Inativo</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Carlos Souza</td>
                    <td>carlos@exemplo.com</td>
                    <td>Belo Horizonte</td>
                    <td>Ativo</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Ana Pereira</td>
                    <td>ana@exemplo.com</td>
                    <td>Porto Alegre</td>
                    <td>Ativo</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Pedro Costa</td>
                    <td>pedro@exemplo.com</td>
                    <td>Salvador</td>
                    <td>Inativo</td>
                </tr>
            </tbody>
        </table>
        
       
        </div>
    </div>
</body>
</html>

