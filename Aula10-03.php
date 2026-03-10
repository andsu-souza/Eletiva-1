<?php

    date_default_timezone_set("America/Sao_Paulo");
    $data = date("d/m/Y h:i:s");
    echo "<p>$data</p>";

    $valor = 1505.88888;
    $valor_arredondado = round($valor);
    echo "<p>Valor Arredondado: $valor_arredondado</p>";

    $valor_formatado = number_format($valor, 2, ",", ".");
    echo "<p>Valor sem Formatação: $valor</p>";
    echo "<p>Valor Formatado: $valor_formatado</p>";

    //exponenciação
    $exp = pow(3,4);
    //Raiz Quadrada
    $raiz = sqrt(16);
    //Números Aleatórios
    $aleatorio = rand(1, 100);

    if(isset($nome)){
        echo "<p>Nome Informado!</p>";
    } else{
        echo "<p>Nome não Informado</p>";
        die();
    }

    if (is_float($valor)){
        echo "<p>É um número flutuante!</p>";
    }