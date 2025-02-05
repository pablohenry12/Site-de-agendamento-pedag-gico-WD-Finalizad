<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = new mysqli('localhost', 'root', '', 'sistema_agendamento');

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    $matricula = trim($_POST['matricula']);
    $senha = trim($_POST['password']);

    if (!empty($matricula) && !empty($senha)) {
        $verf = $conn->prepare("SELECT matricula, senha FROM aluno WHERE matricula = ?");
        $verf->bind_param("s", $matricula);
        $verf->execute();
        $result = $verf->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            if ($senha == $user['senha']) { // Comparação direta sem criptografia
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
        $verf->close();
    } else {
        $erro = "Preencha todos os campos.";
    }
    $conn->close();
}
?>