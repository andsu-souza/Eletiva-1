<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Exercício 2</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container py-3">
    <h1>Exercício 2</h1>
    <form method="post">
    <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">Nome do Aluno 1:</label>
          <input type="text" name="nome[]" class="form-control" required>
        </div>
        <div class="col-md-2">
          <label class="form-label">Nota 1:</label>
          <input type="number" name="n1[]" class="form-control" step="0.1" required>
        </div>
        <div class="col-md-2">
          <label class="form-label">Nota 2:</label>
          <input type="number" name="n2[]" class="form-control" step="0.1" required>
        </div>
        <div class="col-md-2">
          <label class="form-label">Nota 3:</label>
          <input type="number" name="n3[]" class="form-control" step="0.1" required>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">Nome do Aluno 2:</label>
          <input type="text" name="nome[]" class="form-control" required>
        </div>
        <div class="col-md-2">
          <label class="form-label">Nota 1:</label>
          <input type="number" name="n1[]" class="form-control" step="0.1" required>
        </div>
        <div class="col-md-2">
          <label class="form-label">Nota 2:</label>
          <input type="number" name="n2[]" class="form-control" step="0.1" required>
        </div>
        <div class="col-md-2">
          <label class="form-label">Nota 3:</label>
          <input type="number" name="n3[]" class="form-control" step="0.1" required>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">Nome do Aluno 3:</label>
          <input type="text" name="nome[]" class="form-control" required>
        </div>
        <div class="col-md-2">
          <label class="form-label">Nota 1:</label>
          <input type="number" name="n1[]" class="form-control" step="0.1" required>
        </div>
        <div class="col-md-2">
          <label class="form-label">Nota 2:</label>
          <input type="number" name="n2[]" class="form-control" step="0.1" required>
        </div>
        <div class="col-md-2">
          <label class="form-label">Nota 3:</label>
          <input type="number" name="n3[]" class="form-control" step="0.1" required>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">Nome do Aluno 4:</label>
          <input type="text" name="nome[]" class="form-control" required>
        </div>
        <div class="col-md-2">
          <label class="form-label">Nota 1:</label>
          <input type="number" name="n1[]" class="form-control" step="0.1" required>
        </div>
        <div class="col-md-2">
          <label class="form-label">Nota 2:</label>
          <input type="number" name="n2[]" class="form-control" step="0.1" required>
        </div>
        <div class="col-md-2">
          <label class="form-label">Nota 3:</label>
          <input type="number" name="n3[]" class="form-control" step="0.1" required>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">Nome do Aluno 5:</label>
          <input type="text" name="nome[]" class="form-control" required>
        </div>
        <div class="col-md-2">
          <label class="form-label">Nota 1:</label>
          <input type="number" name="n1[]" class="form-control" step="0.1" required>
        </div>
        <div class="col-md-2">
          <label class="form-label">Nota 2:</label>
          <input type="number" name="n2[]" class="form-control" step="0.1" required>
        </div>
        <div class="col-md-2">
          <label class="form-label">Nota 3:</label>
          <input type="number" name="n3[]" class="form-control" step="0.1" required>
        </div>
      </div>

      <button type="submit" class="btn btn-primary">Calcular Ranking</button>
    </form>

    <?php
      if($_SERVER['REQUEST_METHOD'] == "POST"){
        $nomes = $_POST['nome'];
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $n3 = $_POST['n3'];
          
        $medias = [];

        // Processando os dados recebidos
        for ($i = 0; $i < count($nomes); $i++) {
            $aluno = trim($nomes[$i]);
              
            // Cálculo da média simples
            $mediaFinal = ($n1[$i] + $n2[$i] + $n3[$i]) / 3;
              
            // Criando o mapa (Chave: Nome -> Valor: Média)
            $medias[$aluno] = $mediaFinal;
        }

            // Ordenar pelas NOTAS (valores) do maior para o menor
        arsort($medias);

        echo "<h3>Ranking de Médias:</h3>";
        foreach ($medias as $nome => $nota) {
            // Exibindo formatado com 1 casa decimal
            $notaFormatada = number_format($nota, 1, ',', '.');
            echo "<p>$nome: <strong>$notaFormatada</strong></p>";
        }
      }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
      crossorigin="anonymous"></script>
  </div>
</body>

</html>