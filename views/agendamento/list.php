<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamentos</title>
</head>
<body>
    <h1>Lista de Agendamentos</h1>
    <a href="?action=create">Novo Agendamento</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Turma</th>
                <th>Data</th>
                <th>Hora</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($agendamentos as $agendamento): ?>
                <tr>
                    <td><?= $agendamento['id'] ?></td>
                    <td><?= $agendamento['nome'] ?></td>
                    <td><?= $agendamento['turma'] ?></td>
                    <td><?= $agendamento['data'] ?></td>
                    <td><?= $agendamento['hora'] ?></td>
                    <td>
                        <a href="?action=edit&id=<?= $agendamento['id'] ?>">Editar</a>
                        <a href="?action=delete&id=<?= $agendamento['id'] ?>">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
