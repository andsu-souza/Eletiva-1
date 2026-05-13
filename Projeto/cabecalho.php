<?php
    session_start();
    if (!isset($_SESSION['acesso']) || $_SESSION['acesso'] != true) {
        header('Location: index.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sistema de OS - Anderson Souza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="principal.php">SOS Purificadores</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">      
          <li class="nav-item"><a class="nav-link" href="principal.php">Início</a></li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdownCadastros" role="button" data-bs-toggle="dropdown">Cadastros</a>
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="clientes.php">Clientes</a></li>
                  <li><a class="dropdown-item" href="tecnicos.php">Técnicos</a></li>
                  <li><a class="dropdown-item" href="horarios.php">Horários</a></li>
              </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="novo_agendamento.php">Agendar OS</a></li>
          <li class="nav-item"><a class="nav-link" href="logout.php">Sair</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">