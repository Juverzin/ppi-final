<?php
include('protect.php');

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NotificAtraso</title>
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
            min-height: 100px;
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
        .btn-option {
            width: 200px;
            height: 60px;
            background-color: #ffc107;
            border: 2px solid #000;
            font-size: 18px;
        }
        .btn-option:hover {
            background-color: #e0a800;
        }

        .NotificAtraso{
            font-size:40px;
        }
    </style>
</head>
<body>

<header class="d-flex justify-content-between align-items-center">
<a href="logout.php"><span><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
</svg></span></a>
    <span class ="NotificAtraso">NotificAtraso</span>
    <span><svg xmlns="http://www.w3.org/2000/svg"  width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg><?php echo $_SESSION['nome'];?></span>
</header>

<main>
    <div class="text-center">
        <h1 class="mb-4 NotificAtraso">Selecione a opção</h1>
        <div class="d-flex justify-content-center gap-3">
            <a href="registro.php"> <button class="btn btn-option">Registrar atraso</button></a>
            <a href="#"> <button class="btn btn-option">Editar atraso</button></a>
            <a href="#"><button class="btn btn-option">Consultar histórico</button></a>
        </div>
    </div>
</main>

<footer class="text-center">
    &copy; 2024 Instituto Federal Farroupilha
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
