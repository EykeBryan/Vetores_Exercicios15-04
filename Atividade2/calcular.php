<?php

    $numero = $_POST['numero'];
    $numeroAleotorio = rand(0,$numero);

    $aleatorio[] = $numeroAleotorio;
    echo "o numero é ". $aleatorio[0] . " parabens";
?>