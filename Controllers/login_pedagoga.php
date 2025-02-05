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

    $stmt = $conn->prepare("SELECT * FROM pedagoga WHERE siape = ? AND senha = ?");
    $stmt->bind_param("ss", $siape, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION["admin"] = $siape;
        header("Location: ../View/home_pedagoga.php");
        exit();
    } else {
        header("Location: ../View/form_login_pedagoga.php?erro=1");
        exit();
    }
    

    $stmt->close();
}

$conn->close();
?>
