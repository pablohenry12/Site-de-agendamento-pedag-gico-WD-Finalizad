<?php
session_start();

try {
    $conn = new PDO("mysql:host=localhost;dbname=sistema_agendamento;charset=utf8", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST["nome"] ?? '');
    $turma = trim($_POST["turma"] ?? '');
    $descricao = trim($_POST["descricao"] ?? '');
    $dia = trim($_POST["dia"] ?? '');
    $hora = trim($_POST["hora"] ?? '');

    if (empty($nome) || empty($turma) || empty($descricao) || empty($dia) || empty($hora)) {
        echo "<script>
                alert('Erro: Todos os campos são obrigatórios!');
                window.location.href = '../View/form_agendar_atendimento.php';
              </script>";
        exit;
    }

    try {
        $stmt = $conn->prepare("INSERT INTO atendimento (nome, turma, descricao, dia, hora) VALUES (:nome, :turma, :descricao, :dia, :hora)");
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":turma", $turma);
        $stmt->bindParam(":descricao", $descricao);
        $stmt->bindParam(":dia", $dia);
        $stmt->bindParam(":hora", $hora);

        if ($stmt->execute()) {
            echo "<script>
                    alert('Agendamento realizado com sucesso!');
                    window.location.href = '../View/home_aluno.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Erro ao agendar. Tente novamente.');
                    window.location.href = '../View/form_agendar_atendimento.php';
                  </script>";
        }
    } catch (PDOException $e) {
        echo "<script>
                alert('Erro ao agendar: " . $e->getMessage() . "');
                window.location.href = '../View/form_agendar_atendimento.php';
              </script>";
    }
}
?>
