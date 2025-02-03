<?php
include '../Models/conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $aluno = $_POST['aluno'];
    $matricula = $_POST['matricula'];
    $turma = $_POST['turma'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];

    $sql = "INSERT INTO Atendimento (data_atendimento, hora, aluno, matricula, turma, descricao, codigo_pedagoga)
            VALUES ('$data', '$hora', '$aluno', '$matricula', '$turma', 'Atendimento Agendado', '123456')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../View/admin.php");
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
