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
      <div class="row mb-3 border-bottom pb-2">
        <div class="col-md-7"><label>Nome:</label>
        <input type="text" name="nome[]" class="form-control" required></div>
        <div class="col-md-3"><label>Preço:</label>
        <input type="number" name="preco[]" class="form-control" step="0.01" required></div>
      </div>

      <div class="row mb-3 border-bottom pb-2">
        <div class="col-md-7"><label>Nome:</label>
        <input type="text" name="nome[]" class="form-control" required></div>
        <div class="col-md-3"><label>Preço:</label>
        <input type="number" name="preco[]" class="form-control" step="0.01" required></div>
      </div>

      <div class="row mb-3 border-bottom pb-2">
        <div class="col-md-7"><label>Nome:</label>
        <input type="text" name="nome[]" class="form-control" required></div>
        <div class="col-md-3"><label>Preço:</label>
        <input type="number" name="preco[]" class="form-control" step="0.01" required></div>
      </div>

      <div class="row mb-3 border-bottom pb-2">
        <div class="col-md-7"><label>Nome:</label>
        <input type="text" name="nome[]" class="form-control" required></div>
        <div class="col-md-3"><label>Preço:</label>
        <input type="number" name="preco[]" class="form-control" step="0.01" required></div>
      </div>

      <div class="row mb-3 border-bottom pb-2">
        <div class="col-md-7"><label>Nome:</label>
        <input type="text" name="nome[]" class="form-control" required></div>
        <div class="col-md-3"><label>Preço:</label>
        <input type="number" name="preco[]" class="form-control" step="0.01" required></div>
      </div>

      <button type="submit" class="btn btn-primary">Processar Produtos</button>
    </form>

    <?php
      if($_SERVER['REQUEST_METHOD'] == "POST"){
        $nomes   = $_POST['nome'];
        $precos  = $_POST['preco'];
          
        $produtos = [];

        for ($i = 0; $i < count($nomes); $i++) {
            $nome  = trim($nomes[$i]);
            $valor = (float)$precos[$i];

            // Desconto de 10% se for maior que 100
            $precoI = $valor * 1.15;

            // Guardando o mapa dentro do mapa
            $produtos[$nome] = $precoI;
        }

        // Ordenando pelo preço
        asort($produtos);

        echo "<h3>Tabela de Produtos (Ordenada por preço):</h3>";
        echo "<ul class='list-group'>";
        foreach ($produtos as $item => $valorFinal) {
            $precoFormatado = number_format($valorFinal, 2, ',', '.');
            echo "<li class='list-group-item d-flex justify-content-between align-items-center'>";
            echo "$item";
            echo "<span class='badge bg-primary rounded-pill'>R$ $precoFormatado</span>";
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