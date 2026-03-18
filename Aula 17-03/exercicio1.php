<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Exercício 1</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container py-3">
    <h1>Exercício 1</h1>
    <form method="post">
      <div class="row inline-row mb-3">
        <div class="col-md-6">
          <label for="nome[]" class="form-label">Digite o nome:</label>
          <input type="text" id="nome[]" name="nome[]" class="form-control" required="">
        </div>
        <div class="col-md-6">
          <label for="numero[]" class="form-label">Digite o número:</label>
          <input type="number" id="numero[]" name="numero[]" class="form-control" required="">
        </div>
      </div>
      <div class="row inline-row mb-3">
        <div class="col-md-6">
          <label for="nome[]" class="form-label">Digite o nome:</label>
          <input type="text" id="nome[]" name="nome[]" class="form-control" required="">
        </div>
        <div class="col-md-6">
          <label for="numero[]" class="form-label">Digite o número:</label>
          <input type="number" id="numero[]" name="numero[]" class="form-control" required="">
        </div>
      </div>
      <div class="row inline-row mb-3">
        <div class="col-md-6">
          <label for="nome[]" class="form-label">Digite o nome:</label>
          <input type="text" id="nome[]" name="nome[]" class="form-control" required="">
        </div>
        <div class="col-md-6">
          <label for="numero[]" class="form-label">Digite o número:</label>
          <input type="number" id="numero[]" name="numero[]" class="form-control" required="">
        </div>
      </div>
      <div class="row inline-row mb-3">
        <div class="col-md-6">
          <label for="nome[]" class="form-label">Digite o nome:</label>
          <input type="text" id="nome[]" name="nome[]" class="form-control" required="">
        </div>
        <div class="col-md-6">
          <label for="numero[]" class="form-label">Digite o número:</label>
          <input type="number" id="numero[]" name="numero[]" class="form-control" required="">
        </div>
      </div>
      <div class="row inline-row mb-3">
        <div class="col-md-6">
          <label for="nome[]" class="form-label">Digite o nome:</label>
          <input type="text" id="nome[]" name="nome[]" class="form-control" required="">
        </div>
        <div class="col-md-6">
          <label for="numero[]" class="form-label">Digite o número:</label>
          <input type="number" id="numero[]" name="numero[]" class="form-control" required="">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <?php
      if($_SERVER['REQUEST_METHOD'] == "POST"){
        $nomes = $_POST['nome'];
        $numeros  = $_POST['numero'];
        $agenda = [];

        for($i = 0; $i < count($nomes);$i++){
          $nome = trim($nomes[$i]);
          $tel = trim($numeros[$i]);
          
          //verificando chave
          if(array_key_exists($nome, $agenda)){
            echo "O nome $nome já foi inserido!";
          }
          //verificando valor
          elseif(in_array($tel, $agenda)){
            echo "O número $tel já existe na agenda!";
          }
          //adicionar ao mapa
          else{
            $agenda[$nome] = $tel;
          }
        }

        //ordenar mapa
        ksort($agenda);

        //exibir lista de contatos
        echo "<p><strong>Lista de Contatos:</strong></p>";
        foreach($agenda as $nome => $tel){
          echo "<p>$nome: $tel</p>";
        }
      }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
      crossorigin="anonymous"></script>
  </div>
</body>

</html>