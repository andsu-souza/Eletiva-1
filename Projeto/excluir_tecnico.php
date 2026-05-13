<?php
    require_once('cabecalho.php');
    require_once('conexao.php');

    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM tecnico WHERE id = ?");
    $stmt->execute([$id]);
    $tecnico = $stmt->fetch();

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        try {
            $sql = "DELETE FROM tecnico WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            if($stmt->execute([$id])){
                header('Location: tecnicos.php');
            }
        } catch(Exception $e) {
            echo "<div class='alert alert-danger'>Não é possível excluir: este técnico possui agendamentos vinculados.</div>";
        }
    }
?>

<h2>Excluir Técnico</h2>
<div class="alert alert-warning">
    Deseja realmente excluir o técnico <strong><?= $tecnico['nome'] ?></strong>?
</div>
<form method="post">
    <button type="submit" class="btn btn-danger">Confirmar Exclusão</button>
    <a href="tecnicos.php" class="btn btn-secondary">Cancelar</a>
</form>

<?php require_once('rodape.php'); ?>