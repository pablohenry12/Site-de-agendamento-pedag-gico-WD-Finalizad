<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Agendamento Pedagógico</title>
    <link rel="icon" type="image/x-icon" href="../View/assets/Favicon Logo IFBA.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/cadastrar_aluno.css">
</head>

<body>
    <div class="back-button">
        <a href="form_login_aluno.php" class="btn btn-secondary">Voltar</a>
    </div>

    <div class="container">
        <div class="form-container">
            <h3 class="text-center mb-4">Cadastro</h3>
            <form action="../Models/aluno.php" method="POST">


                <div class="mb-3">
                    <label for="matricula" class="form-label">Matrícula</label>
                    <input type="number" class="form-control" id="matricula" name="matricula" placeholder="Digite sua matrícula" required>
                </div>
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome completo" required>
                </div>
                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Digite seu telefone" required>
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Crie uma senha" required>
                </div>
                <div class="mb-3">
                    <label for="confirmarSenha" class="form-label">Confirmação de Senha</label>
                    <input type="password" class="form-control" id="confirmarSenha" name="confirmarSenha" placeholder="Confirme sua senha" required>
                </div>
                <button type="submit" class="btn btn-success w-100">Cadastrar</button>

                <div class="mt-3 text-center">
                    <p class="small">Já possui conta? <a href="form_login_aluno.php" class="text-success">Faça login</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
