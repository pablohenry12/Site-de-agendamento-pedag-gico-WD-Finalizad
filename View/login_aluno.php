<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Agendamento Pedagógico</title>
    <link rel="icon" type="image/x-icon" href="assets/faviconIFBA.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/login_aluno.css">
    </head>

<body>
<div class="back-button">
<a href="http://localhost/Site%20de%20agendamento%20pedag%c3%b3gico-WD%20Finalizado/Site%20de%20agendamento%20pedag%c3%b3gico-WD/index_prj.php" class="btn btn-secondary">Voltar</a>
 
</div>


    <div class="container">
        <div class="form-container">
            <h3 class="text-center mb-4">Login Aluno</h3>

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
