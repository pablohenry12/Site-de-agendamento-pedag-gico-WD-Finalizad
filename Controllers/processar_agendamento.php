<?php
session_start();

// Conexão com o banco de dados
$conn = new mysqli('localhost', 'root', '', 'sistema_agendamento');
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST["nome"] ?? '');
    $turma = trim($_POST["turma"] ?? '');
    $descricao = trim($_POST["descricao"] ?? '');
    $dia = trim($_POST["dia"] ?? '');
    $hora = trim($_POST["hora"] ?? '');

    // Verifica se todos os campos foram preenchidos
    if (empty($nome) || empty($turma) || empty($descricao) || empty($dia) || empty($hora)) {
        die("Erro: Todos os campos são obrigatórios!");
    }

    
    $stmt = $conn->prepare("INSERT INTO atendimento (nome, turma, descricao, dia, hora) VALUES (?, ?, ?, ?, ?)");
    if (!$stmt) {
        die("Erro ao preparar a consulta: " . $conn->error);
    }

    $stmt->bind_param("sssss", $nome, $turma, $descricao, $dia, $hora);

    if ($stmt->execute()) {
        echo "<script>
                alert('Agendamento realizado com sucesso!');
                window.location.href = '../View/pag_aluno.php';
              </script>";
    } else {
        echo "<script>
                alert('Erro ao agendar: " . $stmt->error . "');
                window.location.href = '../View/agendamento.php';
              </script>";
    }

    $stmt->close();
}

$conn->close();
?>
