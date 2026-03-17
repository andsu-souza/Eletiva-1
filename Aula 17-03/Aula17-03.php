<?php
    $mapa1 = array("João", "Maria", 3);
    print_r($mapa1); //posição e valor
    echo "<p></p>";
    var_dump($mapa1); //posição, tipo primario, quantidade de valores
    echo "<p>Valor da Posição 2 ".$mapa1[2]."</p>";

    $mapa2[1] = "Vanessa";
    $mapa2[2] = "José";
    $mapa2[3] = "Clara";
    print_r($mapa2);

    $contatos["Vanessa"] = "123456";
    $contatos["José"] = "654321";
    echo "<p></p>";
    print_r($contatos);

    foreach($contatos as $valor){
        echo "<p>Telefone: $valor </p>";
    }

    foreach($contatos as $chave => $valor){
        echo "<p>Telefone de $chave: $valor </p>";
    }

    unset($mapa1[2]); //apagar posição
    print_r($mapa1);

    //funções
    $quantidade = count($mapa2);
    echo "<p>Qtd. elementos mapa 2: $quantidade</p>";
    asort($contatos); //ordenar pelo valor
    ksort($contatos); //ordenar pela chave