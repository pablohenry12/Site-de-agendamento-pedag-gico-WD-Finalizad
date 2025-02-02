<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Área Administrativa da Pedagoga">
    <meta name="author" content="Pablo Henrique">
    <title>Área Administrativa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/faviconIFBA.png" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/login_aluno.css">

</head>

<body>
    <div class="container">
        <h1 class="text-center mb-4">Área Administrativa</h1>
        <div class="mb-4 text-end">
            <a href="login.php" class="btn btn-secondary">Sair</a>
        </div>

        <h3>Agendamentos Disponíveis</h3>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Aluno</th>
                    <th>Turma</th>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dados dos agendamentos carregados dinamicamente -->
                <tr>
                    <td>João Silva</td>
                    <td>3º A</td>
                    <td>2025-01-25</td>
                    <td>14:00</td>
                    <td>
                        <button class="btn btn-edit btn-sm">Editar</button>
                        <button class="btn btn-delete btn-sm">Excluir</button>
                    </td>
                </tr>
                <tr>

                    <td>Maria Santos</td>
                    <td>2º B</td>
                    <td>2025-01-26</td>
                    <td>09:00</td>
                    <td>
                        <button class="btn btn-edit btn-sm">Editar</button>
                        <button class="btn btn-delete btn-sm">Excluir</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <h3 class="mt-5">Adicionar Horários Semanais</h3>
        <form action="add_weekly_schedule.php" method="POST">
            <div class="mb-3">
                <label for="days" class="form-label">Dias da Semana</label>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="monday" name="days[]" value="Segunda-feira">
                    <label class="form-check-label" for="monday">Segunda-feira</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="tuesday" name="days[]" value="Terça-feira">
                    <label class="form-check-label" for="tuesday">Terça-feira</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="wednesday" name="days[]" value="Quarta-feira">
                    <label class="form-check-label" for="wednesday">Quarta-feira</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="thursday" name="days[]" value="Quinta-feira">
                    <label class="form-check-label" for="thursday">Quinta-feira</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="friday" name="days[]" value="Sexta-feira">
                    <label class="form-check-label" for="friday">Sexta-feira</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="time_start" class="form-label">Horário de Início</label>
                <input type="time" id="time_start" name="time_start" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="time_end" class="form-label">Horário de Término</label>
                <input type="time" id="time_end" name="time_end" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Adicionar Horários Semanais</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
