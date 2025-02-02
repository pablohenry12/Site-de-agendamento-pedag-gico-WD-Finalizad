<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página de Agendamento para Alunos">
    <meta name="author" content="Pablo Henrique">
    <title>Agendamento de Atendimento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/faviconIFBA.png">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/cadastrar_aluno.css">
</head>
<body>

    <!-- Formulário de Agendamento -->
    <div class="form-container">
        <h2 class="text-center mb-4">Agendamento de Atendimento</h2>
        <form>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="nome" placeholder="Seu nome completo" required>
            </div>
            <div class="mb-3">
                <label for="turma" class="form-label">Número da Turma</label>
                <input type="text" class="form-control" id="turma" placeholder="Número da sua turma" required>
            </div>
            <div class="mb-3">
                <label for="data" class="form-label">Data do Atendimento</label>
                <input type="date" class="form-control" id="data" required>
            </div>

            <div class="mb-3">
                <label for="hora" class="form-label">Hora do Atendimento</label>
                <select class="form-select" id="hora" required>
                    <option value="">Selecione a hora</option>
                    <option value="14:00">14:00</option>
                    <option value="15:00">15:00</option>
                    <option value="16:00">16:00</option>
                    <option value="17:00">17:00</option>
                </select>
            </div>

            <!-- Botão Confirmar Agendamento -->
            <button type="submit" class="btn btn-success w-100">Confirmar Agendamento</button> 
        </form>
        <button type="submit" class="btn btn-success w-100"><a href="pag_aluno.php">Ver meus agendamentos</a></button>
    </div>

    <!-- Footer -->
    <footer class="footer text-center py-4">
        <div class="container">
            <p class="m-0">Agendamento Pedagógico &copy; 2024</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
