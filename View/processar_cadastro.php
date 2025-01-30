<?php
session_start();

// Conexão com o banco de dados
$conn = new mysqli('localhost', 'root', '', 'sistema_agendamento');
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST["nome"]);
    $matricula = trim($_POST["matricula"]); 
    $telefone = trim($_POST["telefone"]);
    $senha = $_POST["senha"];
    $confirmar_senha = $_POST["confirmarSenha"];

    
    $verf = $conn->prepare("SELECT matricula FROM aluno WHERE matricula = ?");
    $verf->bind_param("s", $matricula); 
    $verf->execute();
    $verf->store_result();

    if ($verf->num_rows > 0) {
        echo "<script>alert('Matrícula já cadastrada!'); window.location.href='cadast_aluno.php';</script>";
        exit;
    }
    $verf->close();

    
    if ($senha !== $confirmar_senha) {
        echo "<script>alert('As senhas não coincidem!'); window.location.href='cadast_aluno.php';</script>";
        exit;
    }

    
    $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

   
    $verf = $conn->prepare("INSERT INTO aluno (matricula, nome, telefone, senha) VALUES (?, ?, ?, ?)");
    $verf->bind_param("ssss", $matricula, $nome, $telefone, $senhaCriptografada);

    if ($verf->execute()) {
        echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href='login_aluno.php';</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar. Tente novamente.'); window.location.href='cadast_aluno.php';</script>";
    }

    $verf->close();
}

$conn->close();
?>
