<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Exercício 5</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container py-3">
    <h1>Exercício 5</h1>
    <form method="post">
      <div class="row mb-3 border-bottom pb-2">
        <div class="col-md-7"><label>Título:</label>
        <input type="text" name="nome[]" class="form-control" required></div>
        <div class="col-md-3"><label>Quantidade:</label>
        <input type="number" name="qtd[]" class="form-control" step="0.01" required></div>
      </div>

      <div class="row mb-3 border-bottom pb-2">
        <div class="col-md-7"><label>Título:</label>
        <input type="text" name="nome[]" class="form-control" required></div>
        <div class="col-md-3"><label>Quantidade:</label>
        <input type="number" name="qtd[]" class="form-control" step="0.01" required></div>
      </div>

      <div class="row mb-3 border-bottom pb-2">
        <div class="col-md-7"><label>Título:</label>
        <input type="text" name="nome[]" class="form-control" required></div>
        <div class="col-md-3"><label>Quantidade:</label>
        <input type="number" name="qtd[]" class="form-control" step="0.01" required></div>
      </div>

      <div class="row mb-3 border-bottom pb-2">
        <div class="col-md-7"><label>Título:</label>
        <input type="text" name="nome[]" class="form-control" required></div>
        <div class="col-md-3"><label>Quantidade:</label>
        <input type="number" name="qtd[]" class="form-control" step="0.01" required></div>
      </div>

      <div class="row mb-3 border-bottom pb-2">
        <div class="col-md-7"><label>Título:</label>
        <input type="text" name="nome[]" class="form-control" required></div>
        <div class="col-md-3"><label>Quantidade:</label>
        <input type="number" name="qtd[]" class="form-control" step="0.01" required></div>
      </div>

      <button type="submit" class="btn btn-primary">Verificar Estoque</button>
    </form>

    <?php
      if($_SERVER['REQUEST_METHOD'] == "POST"){
        $titulos   = $_POST['nome'];
        $quantidades  = $_POST['qtd'];
          
        $estoque = [];

        for ($i = 0; $i < count($titulos); $i++) {
            $t  = trim($titulos[$i]);
            $q = (int)$quantidades[$i];

            // Guardando o mapa dentro do mapa
            $estoque[$t] = $q;
        }

        // Ordenando pelo preço
        ksort($estoque);

        echo "<h3>Lista de Livros:</h3>";
        echo "<ul class='list-group'>";
        foreach ($estoque as $livros => $qtd) {
            $classeAlerta = ($qtd < 5) ? "bg-danger text-white" : "";
            $textoAviso = ($qtd < 5) ? " - <strong>BAIXO ESTOQUE!</strong>" : "";

            echo "<li class='list-group-item $classeAlerta d-flex justify-content-between align-items-center'>";
            echo "<span>$livros $textoAviso</span>";
            echo "<span class='badge bg-secondary'>$qtd unidades</span>";
            echo "</li>";
        }
        echo "</ul>";
      }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
      crossorigin="anonymous"></script>
  </div>
</body>

</html>