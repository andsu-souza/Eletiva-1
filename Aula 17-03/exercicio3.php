<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Exercício 3</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container py-3">
    <h1>Exercício 3</h1>
    <form method="post">
      <div class="row mb-3 border-bottom pb-2">
        <div class="col-md-2"><label>Cód:</label>
        <input type="text" name="codigo[]" class="form-control" required></div>
        <div class="col-md-7"><label>Nome:</label>
        <input type="text" name="nome[]" class="form-control" required></div>
        <div class="col-md-3"><label>Preço:</label>
        <input type="number" name="preco[]" class="form-control" step="0.01" required></div>
      </div>

      <div class="row mb-3 border-bottom pb-2">
        <div class="col-md-2"><label>Cód:</label>
        <input type="text" name="codigo[]" class="form-control" required></div>
        <div class="col-md-7"><label>Nome:</label>
        <input type="text" name="nome[]" class="form-control" required></div>
        <div class="col-md-3"><label>Preço:</label>
        <input type="number" name="preco[]" class="form-control" step="0.01" required></div>
      </div>

      <div class="row mb-3 border-bottom pb-2">
        <div class="col-md-2"><label>Cód:</label>
        <input type="text" name="codigo[]" class="form-control" required></div>
        <div class="col-md-7"><label>Nome:</label>
        <input type="text" name="nome[]" class="form-control" required></div>
        <div class="col-md-3"><label>Preço:</label>
        <input type="number" name="preco[]" class="form-control" step="0.01" required></div>
      </div>

      <div class="row mb-3 border-bottom pb-2">
        <div class="col-md-2"><label>Cód:</label>
        <input type="text" name="codigo[]" class="form-control" required></div>
        <div class="col-md-7"><label>Nome:</label>
        <input type="text" name="nome[]" class="form-control" required></div>
        <div class="col-md-3"><label>Preço:</label>
        <input type="number" name="preco[]" class="form-control" step="0.01" required></div>
      </div>

      <div class="row mb-3 border-bottom pb-2">
        <div class="col-md-2"><label>Cód:</label>
        <input type="text" name="codigo[]" class="form-control" required></div>
        <div class="col-md-7"><label>Nome:</label>
        <input type="text" name="nome[]" class="form-control" required></div>
        <div class="col-md-3"><label>Preço:</label>
        <input type="number" name="preco[]" class="form-control" step="0.01" required></div>
      </div>

      <button type="submit" class="btn btn-primary">Processar Produtos</button>
    </form>

    <?php
      if($_SERVER['REQUEST_METHOD'] == "POST"){
        $codigos = $_POST['codigo'];
        $nomes   = $_POST['nome'];
        $precos  = $_POST['preco'];
          
        $produtos = [];

        // O count($codigos) agora vai valer 5
        for ($i = 0; $i < count($codigos); $i++) {
            $cod   = trim($codigos[$i]);
            $nome  = trim($nomes[$i]);
            $valor = (float)$precos[$i];

            // Desconto de 10% se for maior que 100
            if ($valor > 100) {
                $valor = $valor * 0.90;
            }

            // Guardando o mapa dentro do mapa
            $produtos[$cod] = [
                "nome"  => $nome,
                "preco" => $valor
            ];
        }

        // Ordenando pelo Nome (escondido no array interno)
        uasort($produtos, function($a, $b) {
            return strcmp($a['nome'], $b['nome']);
        });

        echo "<h3>Tabela de Produtos (Ordenada por Nome):</h3>";
        echo "<table class='table table-bordered'>";
        foreach ($produtos as $codigo => $info) {
            $precoFormatado = number_format($info['preco'], 2, ',', '.');
            echo "<tr>
                    <td><strong>Cód:</strong> $codigo</td>
                    <td><strong>Produto:</strong> {$info['nome']}</td>
                    <td><strong>Preço Final:</strong> R$ $precoFormatado</td>
                </tr>";
        }
        echo "</table>";
      }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
      crossorigin="anonymous"></script>
  </div>
</body>

</html>