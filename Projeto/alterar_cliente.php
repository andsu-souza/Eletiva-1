<?php
    require_once('cabecalho.php');
    require_once('conexao.php');
    $mensagem = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $id = $_GET['id'];
        try{
          $sql = "UPDATE cliente SET nome = ?, telefone = ? WHERE id = ?";
          $stmt = $pdo->prepare($sql);
          if($stmt->execute([$nome, $telefone, $id])){
            $mensagem = "<div class='alert alert-success'>Dados atualizados!</div>";
          }
        } catch(Exception $e){
          $mensagem = "<div class='alert alert-danger'>Erro: ".$e->getMessage()."</div>";
        }
    }

    try{
        $stmt = $pdo->prepare("SELECT * from cliente WHERE id = ?");
        $stmt->execute([$_GET['id']]);
        $resultado = $stmt->fetch();
    } catch (Exception $e){
        die("Erro: ".$e->getMessage());
    }
?>

<h1>Editar Cliente</h1>
    <form method="post" action="alterar_cliente.php?id=<?= $resultado['id']?>">
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input value="<?= $resultado['nome']?>" type="text" name="nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Telefone</label>
            <input value="<?= $resultado['telefone']?>" type="text" name="telefone" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        <a href="clientes.php" class="btn btn-secondary">Voltar</a>
    </form>
    <div class="mt-3"><?= $mensagem ?></div>

<?php require_once('rodape.php'); ?>