<?php
session_start();

// Conexão com o banco de dados
$conn = new mysqli('localhost', 'root', '', 'sistema_agendamento');

// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Verifica se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST["nome"]);
    $matricula = trim($_POST["matricula"]); // Matricula ao invés de email
    $telefone = trim($_POST["telefone"]);
    $senha = $_POST["senha"];
    $confirmarSenha = $_POST["confirmarSenha"];

    // Verifica se a matrícula já existe
    $stmt = $conn->prepare("SELECT matricula FROM Aluno WHERE matricula = ?");
    $stmt->bind_param("i", $matricula);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "<script>alert('Matrícula já cadastrada!'); window.location.href='cadast_aluno.php';</script>";
        exit;
    }
    $stmt->close();

    // Verifica se as senhas coincidem
    if ($senha !== $confirmarSenha) {
        echo "<script>alert('As senhas não coincidem!'); window.location.href='cadast_aluno.php';</script>";
        exit;
    }

    // Hash da senha antes de armazenar
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    // Inserção no banco de dados
    $stmt = $conn->prepare("INSERT INTO Aluno (matricula, nome, senha, telefone) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $matricula, $nome, $senhaHash, $telefone);

    if ($stmt->execute()) {
        echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href='login_aluno.php';</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar. Tente novamente.'); window.location.href='cadast_aluno.php';</script>";
    }

    $stmt->close();
}

$conn->close();
?>
