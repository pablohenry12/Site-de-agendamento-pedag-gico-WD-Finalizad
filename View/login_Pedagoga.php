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
    <link rel="icon" type="image/x-icon" href="assets/Favicon Logo IFBA.png" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/login_pedagoga.css">
    </head>

<body>
    <div class="back-button">
    <a href="http://localhost/Site%20de%20agendamento%20pedag%c3%b3gico-WD%20Finalizado/Site%20de%20agendamento%20pedag%c3%b3gico-WD/index_prj.php" class="btn btn-secondary">Voltar</a>

    <div class="container">
        <div class="form-container">
            <h3 class="text-center mb-4">Acesso Administrativo</h3>
            <form action="login_admin.php" method="POST">
    <div class="mb-3">
        <label for="username" class="form-label">Siape</label>
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
