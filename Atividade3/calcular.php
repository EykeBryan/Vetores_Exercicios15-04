<?php
 $fraseHomem = [
    "Você é forte e destemido!",
    "Acredite em si mesmo e tudo será possível.",
    "A vida é uma aventura, aproveite cada momento!",
    "Você tem o poder de mudar o mundo.",
    "A persistência é o caminho do êxito."
 ];

 $fraseMulher = [
    "Você é poderosa e inspiradora!",
    "Acredite em seus sonhos e lute por eles.",
    "A vida é cheia de oportunidades, agarre-as!",
    "Você é capaz de realizar coisas incríveis.",
    "Sua força interior é admirável."
 ];
$genero = $_POST['genero'];
 if ($genero === 'homem') {
 $sorte = $fraseHomem[array_rand($fraseHomem)];
 } else {
    $sorte = $fraseMulher[array_rand($fraseMulher)];
 }
 echo "sua sorte é: ". $sorte;
?>