<?php
    require_once('cabecalho.php');
    require_once('conexao.php');

    // Busca dados para os Selects
    $clientes = $pdo->query("SELECT * FROM cliente")->fetchAll();
    $tecnicos = $pdo->query("SELECT * FROM tecnico")->fetchAll();
    $horarios = $pdo->query("SELECT * FROM horario")->fetchAll();

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $c_id = $_POST['cliente'];
        $t_id = $_POST['tecnico'];
        $h_id = $_POST['horario'];
        $desc = $_POST['descricao'];

        try {
            $sql = "INSERT INTO agendamento (cliente_id, tecnico_id, horario_id, descricao_servico) VALUES (?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            if($stmt->execute([$c_id, $t_id, $h_id, $desc])){
                echo "<div class='alert alert-success'>Agendamento realizado!</div>";
            }
        } catch(Exception $e){
            echo "Erro: " . $e->getMessage();
        }
    }
?>

<h2>Registrar Ordem de Serviço</h2>
<form method="post">
    <div class="mb-3">
        <label>Cliente</label>
        <select name="cliente" class="form-select" required>
            <?php foreach($clientes as $c): ?>
                <option value="<?= $c['id'] ?>"><?= $c['nome'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Técnico Responsável</label>
        <select name="tecnico" class="form-select" required>
            <?php foreach($tecnicos as $t): ?>
                <option value="<?= $t['id'] ?>"><?= $t['nome'] ?> (<?= $t['especialidade'] ?>)</option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Horário Disponível</label>
        <select name="horario" class="form-select" required>
            <?php foreach($horarios as $h): ?>
                <option value="<?= $h['id'] ?>"><?= date('H:i', strtotime($h['data_hora'])) ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Descrição do Problema</label>
        <textarea name="descricao" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Agendar OS</button>
</form>

<?php require_once('rodape.php'); ?>