<?php
session_start();

$host = "localhost";
$user = "root"; 
$pass = "";  
$db = "sistema_agendamento";

// Conectar ao banco de dados
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $siape = $_POST['username'];
    $senha = $_POST['password'];

    
    $stmt = $conn->prepare("SELECT senha FROM pedagoga WHERE siape = ?");
    $stmt->bind_param("i", $siape);
    $stmt->execute();
    $stmt->bind_result($senha_hash);
    $stmt->fetch();
    $stmt->close();

    // Verificar senha
    if ($senha_hash && password_verify($senha, $senha_hash)) {
        $_SESSION["admin"] = $siape;
        header("Location: View/admin.php");
        exit();
    } else {
        $erro = "Usuário ou senha inválidos!";
    }
}

$conn->close();
?>
