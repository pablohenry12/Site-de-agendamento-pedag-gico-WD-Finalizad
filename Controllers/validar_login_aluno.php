<?php
            session_start();

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $conn = new mysqli('localhost', 'root', '', 'sistema_agendamento');
            
                if ($conn->connect_error) {
                    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
                }
            
                $matricula = trim($_POST['matricula']);
                $senha = trim($_POST['password']);
            
                $verf = $conn->prepare("SELECT * FROM aluno WHERE matricula = ?");
                $verf->bind_param("s", $matricula,);
                $verf->execute();
                $result = $verf->get_result();
            
                if ($result->num_rows > 0) {
                    $user = $result->fetch_assoc();
            
                    if ($senha === $user['senha']) {
                        $_SESSION['user_id'] = $user['matricula'];
                        $_SESSION['user_matricula'] = $user['matricula'];
            
                        header("Location: agendamento.php");
                        exit;
                    } else {
                        echo '<div class="alert alert-danger text-center">Senha incorreta.</div>';
                    }
                } else {
                    echo '<div class="alert alert-danger text-center">Matrícula não encontrada.</div>';
                }
            
                $verf->close();
                $conn->close();
            }
            
?>