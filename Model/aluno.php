<?php
session_start();

try {
    $conn = new PDO("mysql:host=localhost;dbname=sistema_agendamento;charset=utf8", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST["nome"]);
    $matricula = trim($_POST["matricula"]);
    $telefone = trim($_POST["telefone"]);
    $senha = trim($_POST["senha"]);
    $confirmar_senha = trim($_POST["confirmarSenha"]);

    $stmt = $conn->prepare("SELECT matricula FROM aluno WHERE matricula = :matricula");
    $stmt->bindParam(":matricula", $matricula);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo "<script>alert('Matrícula já cadastrada!'); window.location.href='form_cadastrar_aluno.php';</script>";
        exit;
    }

    if ($senha !== $confirmar_senha) {
        echo "<script>
                alert('As senhas não coincidem!'); 
                window.location.href = '../View/form_cadastrar_aluno.php';
              </script>";
        exit;
    }

    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO aluno (matricula, nome, telefone, senha) VALUES (:matricula, :nome, :telefone, :senha)");
    $stmt->bindParam(":matricula", $matricula);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":telefone", $telefone);
    $stmt->bindParam(":senha", $senha_hash);

    if ($stmt->execute()) {
        echo "<script>
                alert('Cadastro realizado com sucesso!');
                window.location.href = '../View/form_login_aluno.php';
              </script>";
    } else {
        echo "<script>
                alert('Erro ao cadastrar. Tente novamente.');
                window.location.href = '../View/form_cadastrar_aluno.php';
              </script>";
    }
}
?>
