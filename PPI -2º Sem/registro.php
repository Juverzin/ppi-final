<?php
include('protect.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Atraso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            height: 100vh;
            display: flex;
            flex-direction: column;
            margin: 0;
        }
        header, footer {
            background-color: #f8f9fa;
            padding: 10px 20px;
            min-height: 80px;
            text-align: center;
            font-size: 25px;
            
        }

        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #e9ecef;
        }
        .bg-primary {
            background-color: #ffc107 !important;
        }
        .btn-success {
            background-color: #ffc107 !important;
            border-color: #ffc107 !important;
        }
        .btn-success:hover {
            background-color: #e0a800 !important;
            border-color: #e0a800 !important;
        }
        .NotificAtraso{
            font-size:40px;
        }
    </style>
</head>
<body>

<header class="d-flex justify-content-between align-items-center">
<a href="painel.php"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5"/>
</svg></a>
    <span class ="NotificAtraso">NotificAtraso</span>
    <span><svg xmlns="http://www.w3.org/2000/svg"  width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg><?php echo $_SESSION['nome'];?></span>
</header>

<main>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white text-center">
                <h3>Registrar Atraso</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="registrar.php">
                    <div class="mb-3">
                        <label for="matricula" class="form-label">Matrícula:</label>
                        <input type="text" class="form-control" id="matricula" name="matricula" required>
                    </div>
                    <div class="mb-3">
                        <label for="nome_aluno" class="form-label">Nome do Aluno:</label>
                        <input type="text" class="form-control" id="nome_aluno" name="nome_aluno">
                    </div>
                    
                    <div class="mb-3">
                        <label for="data" class="form-label">Data:</label>
                        <input type="date" class="form-control" id="data" name="data" required>
                    </div>
                    <div class="mb-3">
                        <label for="hora" class="form-label">Hora:</label>
                        <input type="time" class="form-control" id="hora" name="hora" required>
                    </div>
                    <div class="mb-3">
                        <label for="motivo" class="form-label">Motivo do Atraso:</label>
                        <textarea class="form-control" id="motivo" name="motivo" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="nome_professor" class="form-label">Nome do Professor:</label>
                        <input type="text" class="form-control" id="nome_professor" name="nome_professor" required>
                    </div>
                    <div class="mb-3">
                        <label for="email_professor" class="form-label">E-mail do Professor:</label>
                        <input type="email" class="form-control" id="email_professor" name="email_professor" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</main>

<footer class="text-center">
    &copy; 2024 Instituto Federal Farroupilha
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
