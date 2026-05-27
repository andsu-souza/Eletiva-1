<?php
    require_once('cabecalho.php');
    require_once('conexao.php');
    $mensagem = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $data_hora = $_POST['data_hora'];
        try {
            $sql = "INSERT INTO horario (data_hora) VALUES (?)";
            $stmt = $pdo->prepare($sql); //
            if($stmt->execute([$data_hora])){
                $mensagem = "<div class='alert alert-success'>Horário disponível cadastrado!</div>";
            }
        } catch(Exception $e){
            $mensagem = "<div class='alert alert-danger'>Erro: " . $e->getMessage() . "</div>";
        }
    }
?>

<h2>Novo Horário na Agenda</h2>
<form method="post">
    <div class="mb-3">
        <label class="form-label">Data e Hora</label>
        <input type="time" name="data_hora" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Salvar Horário</button>
    <a href="horarios.php" class="btn btn-secondary">Voltar</a>
</form>
<div class="mt-3"><?= $mensagem ?></div>

<?php require_once('rodape.php'); ?>