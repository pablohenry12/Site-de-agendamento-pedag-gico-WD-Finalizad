<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login para área administrativa">
    <meta name="author" content="Pablo Henrique">
    <title>Login - Área Administrativa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/faviconIFBA.png" />
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

        .btn-success:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <div class="back-button">
        <a href="index.php" class="btn btn-secondary">Voltar</a>
    <div class="container">
        <div class="form-container">
            <h3 class="text-center mb-4">Acesso Administrativo</h3>
            <form action="login_admin.php" method="POST">
    <div class="mb-3">
        <label for="username" class="form-label">Usuário</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Seu usuário" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Senha</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Sua senha" required>
    </div>
    <button type="submit" class="btn btn-success w-100">Entrar</button>
</form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
