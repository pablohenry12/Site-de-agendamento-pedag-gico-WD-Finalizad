<?php
session_start();

// Conexão com o banco de dados
$conn = new mysqli('localhost', 'root', '', 'sistema_agendamento');
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST["nome"]);
    $turma = trim($_POST["turma"]); 
    $descricao = trim($_POST["descricao"]);
    $data = trim($_POST["data"]);
    $hora = trim($_POST["hora"]);

    
    
    $stmt = $conn->prepare("INSERT INTO atendimento (nome, turma, descricao, data, hora) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nome, $turma, $descricao, $data, $hora);
    
    if ($stmt->execute()) {
        echo "<script>
                alert('Agendamento realizado com sucesso!');
                window.location.href = '../View/pag_aluno.php';
              </script>";
    } else {
        echo "<script>
                alert('Erro ao agendar. Tente novamente.');
                window.location.href = '../View/agendamento.php';
              </script>";
    }
    

    $stmt->close();
}

$conn->close();
?>
