<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>enviaform</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
<?php
// Dados de conexão com o banco de dados
$servername = "mysql://root:kf2HXPBC0ZDBfmUUgNz7@containers-us-west-132.railway.app:6913/railway";
$username = "root";     // Nome de usuário do banco de dados
$password = "kf2HXPBC0ZDBfmUUgNz7";        // Senha do banco de dados
$dbname = "railway";  // Nome do banco de dados

// Estabelecer a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Obter os dados do formulário
$email = $_POST['email'];

// Preparar e executar a consulta SQL para inserir os dados
$sql = "INSERT INTO beta(usuarios) VALUES ('$email')";

if ($conn->query($sql) === TRUE) {
    echo "E-mail salvo com sucesso!";
} else {
    echo "Erro ao salvar o e-mail: " . $conn->error;
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
</body>
