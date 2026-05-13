<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Sistema de OS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">
  <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
    <h3 class="text-center mb-4">Acesso ao Sistema</h3>

    <form method="post">
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input name="email" type="email" class="form-control" placeholder="seu@email.com" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Senha</label>
        <input name="senha" type="password" class="form-control" placeholder="Sua senha" required>
      </div>

      <button type="submit" class="btn btn-primary w-100">Entrar</button>
      <div class="mt-3 text-center">
        <a href="cadastro.php">Criar uma conta</a>
      </div>
    </form>

    <?php
      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        require_once('conexao.php');
        session_start();
        
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        try{
          $stmt = $pdo->prepare("SELECT * FROM usuario WHERE email = ?");
          $stmt->execute([$email]);
          $usuario = $stmt->fetch();

          if($usuario && password_verify($senha, $usuario['senha'])){
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['acesso'] = true; 
            header('Location: principal.php');
          } else {
            echo "<p class='text-danger mt-3 text-center'>E-mail ou senha incorretos!</p>";
          }
        } catch(Exception $e){
          echo "Erro: ". $e->getMessage();
        }
      }
    ?>
  </div>
</div>
</body>
</html>