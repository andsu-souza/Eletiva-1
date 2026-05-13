<?php require_once('cabecalho.php'); ?>

<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Bem-vindo, <?= $_SESSION['nome'] ?>!</h1>
        <p class="col-md-8 fs-4">Sistema de Gerenciamento de Ordens de Serviço. Utilize o menu acima para gerenciar clientes, técnicos e realizar novos agendamentos.</p>
        <hr class="my-4">
        <div class="d-flex gap-2">
            <a href="novo_agendamento.php" class="btn btn-primary btn-lg">Nova OS</a>
            <a href="agendamentos.php" class="btn btn-outline-secondary btn-lg">Ver Agenda</a>
        </div>
    </div>
</div>

<?php require_once('rodape.php'); ?>