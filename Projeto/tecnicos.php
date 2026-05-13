<?php
    require_once('cabecalho.php');
    require_once('conexao.php');
    try{
        $stmt = $pdo->query('SELECT * FROM tecnico');
        $resultado = $stmt->fetchAll();
    } catch(Exception $e){
        echo "Erro: ".$e->getMessage();
    }
?>
<h2>Gestão de Técnicos</h2>
<a href="novo_tecnico.php" class="btn btn-success mb-3">Novo Técnico</a>
<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Especialidade</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($resultado as $r): ?>
        <tr>
            <td><?= $r['id'] ?></td>
            <td><?= $r['nome'] ?></td>
            <td><?= $r['especialidade'] ?></td>
            <td>
                <a href="alterar_tecnico.php?id=<?= $r['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
                <a href="excluir_tecnico.php?id=<?= $r['id'] ?>" class="btn btn-sm btn-danger">Excluir</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php require_once('rodape.php'); ?>