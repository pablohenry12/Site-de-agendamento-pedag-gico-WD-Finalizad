<?php
session_start();
$host = "localhost";
$user = "root";  // Ajuste conforme sua configuração
$pass = "";  // Ajuste conforme necessário
$db = "sistema_agendamento";

// Conectar ao banco de dados
$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $siape = $_POST['username'];
    $senha = $_POST['password'];

    // Preparar a consulta para evitar SQL Injection
    $stmt = $conn->prepare("SELECT * FROM Pedagoga WHERE siape = ? AND senha = ?");
    $stmt->bind_param("is", $siape, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verifica se encontrou um usuário correspondente
    if ($result->num_rows > 0) {
        $_SESSION["admin"] = $siape;
        header("Location: admin.php"); // Redireciona para a área administrativa
        exit();
    } else {
        $erro = "Usuário ou senha inválidos!";
    }

    $stmt->close();
}

$conn->close();
?>
