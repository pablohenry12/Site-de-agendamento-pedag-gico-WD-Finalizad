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
        <div class="mb-4 text-end">
            <a href="login_aluno.php" class="btn btn-secondary">Sair</a>
        </div>
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
                <label for="dia" class="form-label">Dia do Atendimento</label>
                <select class="form-select" id="dia" required>
                    <option value="">Selecione um dia</option>
                    <?php
                    $dias_disponiveis = [
                        "Segunda-feira", "Terça-feira", "Quarta-feira",
                        "Quinta-feira", "Sexta-feira"
                    ];

                    foreach ($dias_disponiveis as $dia) {
                        echo "<option value='$dia'>$dia</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="hora" class="form-label">Hora do Atendimento</label>
                <select class="form-select" id="hora" required>
                    <option value="">Selecione a hora</option>
                    <?php
                    $horarios_disponiveis = [
                        "14:00", "14:30", "15:00", "15:30",
                        "16:00", "16:30", "17:00"
                    ];

                    foreach ($horarios_disponiveis as $hora) {
                        echo "<option value='$hora'>$hora</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="descricao" class="form-label">Motivo da Consulta</label>
                <textarea class="form-control" id="descricao" rows="3" placeholder="Explique brevemente o motivo do atendimento..." required></textarea>
            </div>

            <button type="submit" class="btn btn-success w-100">Confirmar Agendamento</button> 
        </form>
        
        <button class="btn btn-success w-100 mt-2">
            <a href="pag_aluno.php" style="text-decoration: none; color: white;">Ver meus agendamentos</a>
        </button>
    </div>
    <footer class="footer text-center py-4">
        <div class="container">
            <p class="m-0">Agendamento Pedagógico &copy; 2024</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
