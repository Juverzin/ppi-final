<?php
include 'conexao.php'; // Inclui o arquivo de conexão



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $matricula = $_POST['matricula'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $motivo = $_POST['motivo'];
    $email_professor = $_POST['email_professor'];

    if (!$conn) {
        die("Erro: Conexão com o banco de dados não foi estabelecida.");
    }

    // Buscar aluno pelo número de matrícula
    $queryAluno = "SELECT id_aluno FROM Alunos WHERE matricula = '$matricula'";
    $resultAluno = mysqli_query($conn, $queryAluno);
    $aluno = mysqli_fetch_assoc($resultAluno);

    if (!$aluno) {
        die("Aluno não encontrado.");
    }

    // Buscar professor pelo e-mail
    $queryProfessor = "SELECT id_professor FROM Professores WHERE email = '$email_professor'";
    $resultProfessor = mysqli_query($conn, $queryProfessor);
    $professor = mysqli_fetch_assoc($resultProfessor);

    if (!$professor) {
        die("Professor não encontrado.");
    }

    // ID do funcionário logado (recupere isso da sessão)
    session_start();
    $funcionario_id = $_SESSION['id_funcionario'];

    // Inserir o atraso
    $dataHora = "$data $hora";
    $queryAtraso = "INSERT INTO Atrasos (aluno_id, professor_id, funcionario_id, data_hora, motivo)
                    VALUES ('{$aluno['id_aluno']}', '{$professor['id_professor']}', '$funcionario_id', '$dataHora', '$motivo')";

    if (mysqli_query($conn, $queryAtraso)) {
        echo "Atraso registrado com sucesso!";
    } else {
        echo "Erro ao registrar atraso: " . mysqli_error($conn);
    }
}



?>
