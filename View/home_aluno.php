<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Visualização, Edição e Exclusão de Agendamentos">
    <meta name="author" content="Pablo Henrique">
    <title>Meus Agendamentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/faviconIFBA.png">
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            font-family: 'Raleway', sans-serif;
        }
        .container {
            margin-top: 20px;
            color: aliceblue;
        }
        .table {
            margin-top: 30px;
            background-color: aliceblue;
        }
        .btn-success, .btn-danger {
            width: 100px;
        }
        .btn-warning {
            width: 100px;
        }
    </style>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a href="https://portal.ifba.edu.br/jacobina" target="_blank">
                <img class="logoifba" src="assets/img/logoIFBA.jpeg" alt="Logo IFBA" width="100">
            </a>
            <a class="navbar-brand" href="../index.php">Início</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="container">
        <h2 class="text-center mb-4">Meus Agendamentos</h2>

        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Turma</th>
                    <th scope="col">Data</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <th scope="row">1</th>
                    <td>João da Silva</td>
                    <td>1813</td>
                    <td>20/02/2024</td>
                    <td>14:00</td>
                    <td>
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editarModal">Editar</button>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmarExcluirModal">Excluir</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarModalLabel">Editar Agendamento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formEditar">
                        <div class="mb-3">
                            <label for="nomeEdit" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nomeEdit" value="João da Silva" required>
                        </div>
                        <div class="mb-3">
                            <label for="turmaEdit" class="form-label">Turma</label>
                            <input type="text" class="form-control" id="turmaEdit" value="1813" required>
                        </div>
                        <div class="mb-3">
                            <label for="dataEdit" class="form-label">Data</label>
                            <input type="date" class="form-control" id="dataEdit" value="2024-12-12" required>
                        </div>
                        <div class="mb-3">
                            <label for="horaEdit" class="form-label">Hora</label>
                            <select class="form-select" id="horaEdit" required>
                                <option value="14:00">14:00</option>
                                <option value="15:00">15:00</option>
                                <option value="16:00">16:00</option>
                                <option value="17:00">17:00</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Salvar Alterações</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirmarExcluirModal" tabindex="-1" aria-labelledby="confirmarExcluirModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmarExcluirModalLabel">Confirmar Exclusão</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Você tem certeza que deseja excluir este agendamento?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Excluir</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer text-center py-4">
        <div class="container">
            <p class="m-0">Agendamento Pedagógico &copy; 2024</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
