<?php
    require_once('cabecalho.php');
    require_once('conexao.php');
    $mensagem = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        try {
            $sql = "INSERT INTO cliente (nome, telefone) VALUES (?, ?)";
            $stmt = $pdo->prepare($sql);
            if($stmt->execute([$nome, $telefone])){
                $mensagem = "<p class='alert alert-success'>Cliente cadastrado com sucesso!</p>";
            }
        } catch(Exception $e){
            $mensagem = "<p class='alert alert-danger'>Erro: ".$e->getMessage()."</p>";
        }
    }
?>

<h2>Cadastrar Cliente</h2>
<form method="post">
    <div class="mb-3">
        <label class="form-label">Nome do Cliente</label>
        <input type="text" name="nome" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Telefone</label>
        <input type="text" name="telefone" class="form-control" required placeholder="(18) 99999-9999">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
<?= $mensagem ?>

<?php require_once('rodape.php'); ?>