<?php
    require_once('cabecalho.php');
    require_once('conexao.php');
    $resultado = $pdo->query("SELECT * FROM horario ORDER BY data_hora ASC")->fetchAll();
?>

<h2>Agenda de Horários</h2>
<a href="novo_horario.php" class="btn btn-success mb-3">Novo Horário</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Data e Hora</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($resultado as $r): ?>
        <tr>
            <td><?= $r['id'] ?></td>
            <td><?= date('H:i', strtotime($r['data_hora'])) ?></td>
            <td>
                <a href="excluir_horario.php?id=<?= $r['id'] ?>" class="btn btn-sm btn-danger">Remover</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once('rodape.php'); ?>