<?php
$conn = new mysqli("127.0.0.1", "root", "bdbcUk32@qYLCvieT=K3zz", "clinica_db");

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
echo "Conectado com sucesso!";
