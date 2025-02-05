<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db = "sistema_agendamento";

try {
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $siape = trim($_POST['username'] ?? '');
    $senha = trim($_POST['password'] ?? '');

    if (!empty($siape) && !empty($senha)) {
        $stmt = $conn->prepare("SELECT senha FROM pedagoga WHERE siape = :siape");
        $stmt->bindParam(":siape", $siape);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && $senha === $user['senha']) { 
            $_SESSION["admin"] = $siape;
            header("Location: ../View/home_pedagoga.php");
            exit();
        } else {
            header("Location: ../View/form_login_pedagoga.php?erro=1");
            exit();
        }
    } else {
        header("Location: ../View/form_login_pedagoga.php?erro=1");
        exit();
    }
}
?>
