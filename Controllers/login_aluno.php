<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db = "sistema_agendamento";

try {
    // Conexão com o banco de dados usando PDO
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $matricula = trim($_POST['matricula'] ?? '');
    $senha = trim($_POST['password'] ?? '');

    if (!empty($matricula) && !empty($senha)) {
        try {
            $stmt = $conn->prepare("SELECT matricula, senha FROM aluno WHERE matricula = :matricula");
            $stmt->bindParam(":matricula", $matricula);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                if ($senha === $user['senha']) { 
                    $_SESSION['user_id'] = $user['matricula'];
                    $_SESSION['user_matricula'] = $user['matricula'];
                    header("Location: ../View/form_agendar_atendimento.php");
                    exit;
                } else {
                    $erro = "Senha incorreta.";
                }
            } else {
                $erro = "Matrícula não encontrada.";
            }
        } catch (PDOException $e) {
            die("Erro ao consultar o banco de dados: " . $e->getMessage());
        }
    } else {
        $erro = "Preencha todos os campos.";
    }
}
?>