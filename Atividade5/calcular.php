<?php 
$cores = [
    'Azul' => "A cor da tranquilidade e serenidade.",
    'Vermelho' => "A cor da paixão e da energia.",
    'Verde' => "A cor da natureza e do crescimento.",
    'Amarelo' => "A cor da alegria e da luz.",
    'Roxo' => "A cor da criatividade e da espiritualidade."
];

$corSorteada = array_rand($cores);
$frase = $cores[$corSorteada];
echo "A cor sorteada é: ". $corSorteada."<br>";
echo "Frase característica: " . $frase;
?>