<?php
    require_once('cabecalho.php');
    require_once('conexao.php');

    $sql = "SELECT a.id, c.nome as cliente, t.nome as tecnico, h.data_hora, a.descricao_servico 
            FROM agendamento a
            INNER JOIN cliente c ON a.cliente_id = c.id
            INNER JOIN tecnico t ON a.tecnico_id = t.id
            INNER JOIN horario h ON a.horario_id = h.id
            ORDER BY h.data_hora DESC";
            
    $agendamentos = $pdo->query($sql)->fetchAll();
?>

<h2>Ordens de Serviço Agendadas</h2>
<a href="novo_agendamento.php" class="btn btn-primary mb-3">Novo Agendamento</a>

<div class="row">
    <?php foreach ($agendamentos as $os): ?>
    <div class="col-md-4 mb-3">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                OS #<?= $os['id'] ?> - <?= date('d/m/Y H:i', strtotime($os['data_hora'])) ?>
            </div>
            <div class="card-body">
                <p><strong>Cliente:</strong> <?= $os['cliente'] ?></p>
                <p><strong>Técnico:</strong> <?= $os['tecnico'] ?></p>
                <p class="card-text"><strong>Serviço:</strong> <?= $os['descricao_servico'] ?></p>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?php require_once('rodape.php'); ?>