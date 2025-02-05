<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Conexão com o banco de dados usando PDO
        $conn = new PDO("mysql:host=localhost;dbname=sistema_agendamento;charset=utf8", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $matricula = trim($_POST['matricula'] ?? '');
        $senha = trim($_POST['password'] ?? '');

        if (!empty($matricula) && !empty($senha)) {
            // Preparação da consulta para evitar SQL Injection
            $stmt = $conn->prepare("SELECT matricula, senha FROM aluno WHERE matricula = :matricula");
            $stmt->bindParam(":matricula", $matricula);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                if ($senha === $user['senha']) { // Comparação direta (considerar hash para mais segurança)
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
        } else {
            $erro = "Preencha todos os campos.";
        }
    } catch (PDOException $e) {
        die("Erro na conexão com o banco de dados: " . $e->getMessage());
    }
}
?>
