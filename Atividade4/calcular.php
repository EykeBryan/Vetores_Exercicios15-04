<?php
$frases = [
    'Palmeiras' => [
        "Avante, Palmeiras! A vitória é nossa!",
        "Palmeiras, o orgulho do Palestra!",
        "A força da nossa torcida é imbatível!",
        "Vamos, Verdão! Rumo à vitória!",
        "Palmeiras, sempre em busca da glória!"
    ],
    'Corinthians' => [
        "Vai, Corinthians! A vitória é nossa!",
        "Corinthians, o time do povo!",
        "A fiel torcida nunca abandona!",
        "Vamos, Timão! Rumo ao título!",
        "Corinthians, sempre lutando até o fim!"
    ],
    'São Paulo' => [
        "São Paulo, o gigante do Morumbi!",
        "Vamos, Tricolor! A vitória é nossa!",
        "A força do São Paulo é inigualável!",
        "São Paulo, sempre em busca da glória!",
        "Vamos, São Paulo! Rumo ao título!"
    ],
    'Santos' => [
        "Vamos, Santos! A vitória é nossa!",
        "Santos, o time da Vila!",
        "A magia do Santos é inconfundível!",
        "Vamos, Peixe! Rumo à vitória!",
        "Santos, sempre em busca da glória!"
    ]
];

$timeEscolhido = $_POST['time'];
$sorte = $frases[$timeEscolhido][array_rand($frases[$timeEscolhido])];
echo "sua sorte é: ". $sorte
?>