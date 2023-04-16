<?php
    $link = mysqli_connect("127.0.0.1", "root", "", "gerenciacar");
    if(!$link){
        echo "Erro: falha ao conectar ao MySQL." . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }   