<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Exercício 4</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container py-3">
    <h1>Exercício 4</h1>
    <form method="post">
      <div class="mb-3">
        <label for="word1" class="form-label">Digite o dia:</label>
        <input type="text" id="word1" name="word1" class="form-control" required="">
      </div>
      <div class="mb-3">
        <label for="word2" class="form-label">Digite o mês:</label>
        <input type="text" id="word2" name="word2" class="form-control" required="">
      </div>
      <div class="mb-3">
        <label for="word3" class="form-label">Digite o ano:</label>
        <input type="text" id="word3" name="word3" class="form-control" required="">
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $word1 = $_POST['word1'];
                $word2 = $_POST['word2'];
                $word3 = $_POST['word3'];

                if (checkdate($word2, $word1, $word3)){
                    echo "<p>A data $word1/$word2/$word3 é válida!</p>";
                } else {
                    echo "<p>A data informada é inválida!</p>";
                }
            }
        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
      crossorigin="anonymous"></script>
  </div>
</body>

</html>