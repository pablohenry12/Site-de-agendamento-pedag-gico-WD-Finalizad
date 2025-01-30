<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Página inicial do sistema de agendamento pedagógico" />
    <meta name="keywords" content="agendamento, Pedagoga, IFBA, Jacobina" />
    <meta name="author" content="Pablo Henrique Freire de Jesus" />
    <title>Agendamento Pedagógico</title>
    <link rel="icon" type="image/x-icon" href="assets/Favicon Logo IFBA.png" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles02.css">
    <style>
        .tlt-index{
            color: white;
        }
        .bg-success{
            height: 100px;
        }
    </style>
    
</head>

<body>
    <!-- Cabeçalho -->
    <header class="bg-success py-5">
        <div class="container text-center text-white">
            <h1 class="tlt-index"><strong>Agendamento Pedagógico IFBA</strong></h1>
        </div>
        <div class="container">
            <a href="https://portal.ifba.edu.br/jacobina" target="_blank">
                <img class="logoifba" src="assets/img/logoIFBA.jpeg" alt="Logo IFBA">
            </a>
    </header>

    <!-- Navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="#opcoes">Opções</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
                    <li class="nav-item"><a class="nav-link" href="login_aluno.php"> Login Aluno</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php"> Login Pedagoga </a></li>
                </ul>
            </div>
    </nav>

    <!-- Carrossel de Imagens -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/Agendamento 01.jpeg" class="d-block w-100" alt="Imagem de alunos">
            </div>
            <div class="carousel-item">
                <img src="assets/img/Agendamento 03.jpeg" class="d-block w-100" alt="Imagem de sala de aula">
            </div>
            <div class="carousel-item">
                <img src="assets/img/Campus Jacobina.jpeg" class="d-block w-100" alt="Imagem do campus">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>

    <!-- Seção Sobre -->
    <section id="sobre" class="py-5">
        <div class="container text-center">
            <h2>Sobre o Sistema</h2>
            <p> O sistema web para o agendamento de atendimentos pedagógicos é motivada pela necessidade de melhorar a organização e eficiência na gestão de compromissos em ambientes escolares, centralizando as informações. Além disso, a implementação de um sistema de agendamento promove a inclusão digital ao garantir que todos os alunos possam acessá-lo e utilizá-lo de maneira eficiente, independentemente de suas condições socioeconômicas ou limitações tecnológicas.</p>
        </div>
    </section>

    <section class="page-section bg-light" id="sobre-equipe">
    <div class="container text-center">
        <h2 class="text-center">Sobre a Equipe Pedagógica</h2>
        <p class="mb-4">Conheça as profissionais responsáveis pela orientação e acompanhamento pedagógico no IFBA campus Jacobina.</p>
        
        <div class="row justify-content-center">
            <!-- Primeira pedagoga -->
            <div class="col-md-4">
                <img src="assets/img/pedagoga1.jpg" class="img-fluid rounded-circle mt-4" alt="Foto Pedagoga 1" />
                <h4 class="mt-3">Maria Clara</h4>
                <p>Formação: Licenciatura em Pedagogia</p>
                <p>Cargo: Coordenadora Pedagógica</p>
                <h4>Contato</h4>
                <p>WhatsApp: ...</p>
                <p>Email: ...</p>
            </div>

            <!-- Segunda pedagoga -->
            <div class="col-md-4">
                <img src="assets/img/pedagoga2.jpg" class="img-fluid rounded-circle mt-4" alt="Foto Pedagoga 2" />
                <h4 class="mt-3">Liu</h4>
                <p>Formação: Licenciatura em Letras</p>
                <p>Cargo: Professora de Língua Portuguesa</p>
                <h4>Contato</h4>
                <p>WhatsApp: ...</p>
                <p>Email: ...</p>
            </div>
        </div>
    </div>
</section>


    <!-- Opções de Navegação -->
    <section id="opcoes" class="bg-light py-5 text-center">
        <div class="container">
            <h2>Escolha uma das opções abaixo</h2>
            <a href="login_aluno.php" class="btn btn-primary btn-lg m-2">Agendamento de Aluno</a>
            <a href="login.php" class="btn btn-secondary btn-lg m-2">Área Administrativa</a>
        </div>
    </section>
    <div class='justify-center'>
      <hr>
    </div>
    <!-- Contato -->
    <section id="contato" class="bg-light py-5">
        <div class="container text-center">
            <h2>Entre em Contato</h2>
            <p><strong>Instituto Federal de Educação, Ciência e Tecnologia da Bahia - Campus Jacobina</strong></p>
            <p><strong>Telefone:</strong> 0800 074 7400</p>
            <p><strong>Email:</strong>  dg.jac@ifba.edu.br </p>
            <p><strong>Localização:</strong> Avenida Centenário, nº 500 - Bairro Nazaré</p>
        </div>
    </section>

    <!-- Seção Desenvolvedor -->
    <section class="py-5">
        <div class="container text-center">
            <h2>Desenvolvedores</h2>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <img src="assets/img/Pablo.jpg" class="img-fluid rounded-circle mt-4" alt="Foto de Pablo Henrique">
                    <h4 class="mt-3">Pablo Henrique</h4>
                    <p>Estudante do IFBA campus Jacobina, Pablo criou este sistema para melhorar a gestão pedagógica e aprimorar a comunicação no ambiente educacional.</p>
                </div>
                <div class="col-md-4">
                    <img src="assets/img/foto-kari.webp" class="img-fluid rounded-circle mt-4" alt="Foto de Kariely">
                    <h4 class="mt-3">Kariely Santos</h4>
                    <p>Estudante do IFBA campus Jacobina, Kariely criou este sistema para melhorar a gestão pedagógica e aprimorar a comunicação no ambiente educacional.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Rodapé -->
    <footer class="footer text-center py-4 bg-success text-white">
        <div class="container">
            <p class="m-0">Agendamento Pedagógico &copy; 2024 - Desenvolvido por Pablo Henrique e Kariely Santos</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
