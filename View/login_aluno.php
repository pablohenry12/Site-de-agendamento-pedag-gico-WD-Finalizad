<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Agendamento Pedagógico</title>
    <link rel="icon" type="image/x-icon" href="assets/Favicon Logo IFBA.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {          
            font-family: 'Raleway', sans-serif;
        }

        .form-container {
            max-width: 400px;
            margin: 5% auto;
            padding: 2rem;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-success {
            background-color: #28a745;
            border: none;
        }
    </style>
</head>

<body>
    <div class="back-button">
        <a href="index.php" class="btn btn-secondary">Voltar</a> 
    </div>
    <div class="container">
        <div class="form-container">
            <h3 class="text-center mb-4">Login Aluno</h3>
            <?php
                session_start();
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                 // Conexão com o banco de dados
                $conn = new mysqli('localhost', 'root', '', 'sistema_agendamento');

                if ($conn->connect_error) {
                die("Erro na conexão com o banco de dados: " . $conn->connect_error);
                     }

                $matricula = $_POST['matricula'];
                $senha = $_POST['password'];

                 // Consultar o banco de dados usando a matrícula
                $stmt = $conn->prepare("SELECT * FROM alunos WHERE matricula = ?");
                $stmt->bind_param("s", $matricula); // Mudança para matrícula
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
        
                // Verificar senha
                if (password_verify($senha, $user['senha'])) {
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['user_matricula'] = $user['matricula'];
                    header("Location: agendamento.php");
                    exit;
                } else {
                echo '<div class="alert alert-danger">Senha incorreta.</div>';
                }
                } else {
                echo '<div class="alert alert-danger">Matrícula não encontrada.</div>';
                }

                $stmt->close();
                $conn->close();
                }
            ?>
<form method="POST" action="">
    <div class="mb-3">
        <label for="matricula" class="form-label">Matrícula</label>
        <input type="number" class="form-control" id="matricula" name="matricula" placeholder="Digite sua matrícula" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Senha</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha" required>
    </div>
    <button type="submit" class="btn btn-success w-100">Entrar</button>
</form>
<div class="mt-3 text-center">
    <p class="small">Não possui conta? <a href="cadast_aluno.php">Cadastre-se</a></p>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
