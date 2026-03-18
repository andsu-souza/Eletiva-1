<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Exercício 15</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container py-3">
    <h1>Exercício 15</h1>
    <form method="post">
      <div class="mb-3">
        <label for="word1" class="form-label">Digite o e-mail:</label>
        <input type="text" id="word1" name="word1" class="form-control" required="">
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $word1 = $_POST['word1'];

                $partes = explode('@', $word1);

                $dominio = $partes[1];
                echo "O domínio é: $dominio";
            }
        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
      crossorigin="anonymous"></script>
  </div>
</body>

</html>