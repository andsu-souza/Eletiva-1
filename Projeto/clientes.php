<?php
    require_once('cabecalho.php'); //
    require_once('conexao.php'); //
    try {
        $stmt = $pdo->query('SELECT * FROM cliente');
        $resultado = $stmt->fetchAll();
    } catch(Exception $e) {
        echo "Erro: " . $e->getMessage();
    }
?>

<h2>Gestão de Clientes</h2>
<a href="novo_cliente.php" class="btn btn-success mb-3">Novo Cliente</a>
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($resultado as $r): ?>
        <tr>
            <td><?= $r['id'] ?></td>
            <td><?= $r['nome'] ?></td>
            <td><?= $r['telefone'] ?></td>
            <td class="d-flex gap-2">
                <a href="alterar_cliente.php?id=<?= $r['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once('rodape.php'); ?>