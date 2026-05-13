<?php
    require_once('cabecalho.php');
    require_once('conexao.php');
    $mensagem = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome'];
        $especialidade = $_POST['especialidade'];
        try {
            $sql = "INSERT INTO tecnico (nome, especialidade) VALUES (?, ?)";
            $stmt = $pdo->prepare($sql);
            if($stmt->execute([$nome, $especialidade])){
                $mensagem = "<p class='alert alert-success'>Técnico cadastrado com sucesso!</p>";
            }
        } catch(Exception $e){
            $mensagem = "<p class='alert alert-danger'>Erro: ".$e->getMessage()."</p>";
        }
    }
?>

<h2>Cadastrar Técnico</h2>
<form method="post">
    <div class="mb-3">
        <label class="form-label">Nome do Técnico</label>
        <input type="text" name="nome" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Especialidade</label>
        <input type="text" name="especialidade" class="form-control" required placeholder="Ex: Purificadores, Elétrica, etc.">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="tecnicos.php" class="btn btn-secondary">Voltar</a>
</form>
<div class="mt-3"><?= $mensagem ?></div>

<?php require_once('rodape.php'); ?>